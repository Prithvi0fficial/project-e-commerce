<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        form {
            width: 400px;
            background-color: rgba(99, 91, 91, 0.5);
            height: fit-content;
            margin-left: 40%;
            margin-top: 100px;
            padding: 60px;
            border-radius: 8px;
            background-image: url("/imgs/pic3.jpg");
            background-size: cover;
            font-weight: bold;
        }
        h1 {
            text-align: center;
        }
        input {
            border-radius: 8px;
            padding: 7px 15px;
            border: 1px solid white;
            font-family: sans-serif;
            width: 100%;
            margin-bottom: 10px;
        }
        button {
            display: block;
            margin: 10px auto;
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
        }
        a:hover {
            background-color: green;
        }
        body {
            background-color: rgb(184, 184, 184);
            background-image: url("imgs/pic3.jpg");
            background-size: cover;
        }
        a {
            text-decoration: none;
            padding: 4px;
            background-color: rgb(202, 230, 230);
            border-radius: 5px;
            color: #000;
            text-align: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
        }
    </style>
</head>
<body>
    <form action="register.php" method="POST">
        <h1>Sign up</h1>
        <div class="reg">
            <label for="username">First Name</label><br>
            <input type="text" id="username" name="username" placeholder="Name" required><br>

            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="123@email.com" required><br>

            <label for="password">Password</label><br>
            <input type="password" id="password" name="password" placeholder="Password" required><br>
        </div><br>

        <button type="submit">Submit</button>
        <input type="checkbox" id="" name="" placeholder="" required><br>
        <a href="./login.php">Login</a>
    </form>
</body>
</html>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "pdata";

   
    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

    $stmt = $conn->prepare("SELECT * FROM details WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $user, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "User already exists!";
    } else {
      
        $stmt = $conn->prepare("INSERT INTO details (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $user, $email, $pass);

      
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }


    // Close connections
    $stmt->close();
    $conn->close();
}
?>
