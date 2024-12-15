<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Pelajar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(120deg, #e3fdfd, #cbf1f5);
            padding: 20px;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 2em;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-size: 1em;
            margin-bottom: 5px;
            color: #555;
            align-self: flex-start;
        }

        input {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            width: 100%;
        }

        button {
            background: linear-gradient(120deg, #28a745, #218838);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 50px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s ease, background 0.3s ease;
            align-self: center;
        }

        button:hover {
            background: linear-gradient(120deg, #218838, #1e7e34);
            transform: translateY(-3px);
        }

        button:active {
            transform: translateY(1px);
        }

        nav {
            margin-top: 20px;
            text-align: center;
        }

        nav a {
            color: #007bff;
            text-decoration: none;
            font-size: 0.9em;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #0056b3;
        }

        .message {
            text-align: center;
            font-size: 1em;
            margin-top: 15px;
        }

        .message.success {
            color: green;
        }

        .message.error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Pendaftaran Pelajar</h1>
    <form method="POST" action="register_student.php">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Daftar</button>
    </form>
    <nav>
        <a href="index.php">&#8592; Kembali ke Halaman Utama</a>
    </nav>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Query untuk memasukkan data ke database
        $query = "INSERT INTO students (name, email) VALUES ('$name', '$email')";

        if ($conn->query($query) === TRUE) {
            echo "<p class='message success'>Pendaftaran berhasil.</p>";
        } else {
            echo "<p class='message error'>Error: " . $conn->error . "</p>";
        }
    }
    ?>
</body>
</html>
