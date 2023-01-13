<?php

function user_signup($conn, $name, $surname, $username, $dob, $password) {

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, surname, username, dob, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $surname, $username, $dob, $hashed_password);

    if($stmt->execute()) {
        return "User successfully registered!";
    } else {
        return "Error: " . $stmt->error;
    }
}



function login($conn, $username, $password) {

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 0) {
        return "Invalid username or password";
    }
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {

        session_start();
        $_SESSION['user_id'] = $user['id'];
        return "Logged in successfully!";
    } else {
        return "Invalid username or password";
    }
}


function addPackage($conn, $name, $price, $start_time, $end_time) {
    
    $sql = "INSERT INTO package (name, price, start_time, end_time) VALUES ('$name', '$price', '$start_time', '$end_time')";
    if ($conn->query($sql) === TRUE) {
        echo "Package added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}


function deletePackage($conn, $id) {

    $sql = "DELETE FROM packages WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Package deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>  


