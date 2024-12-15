<?php
include 'config.php';
$id = $_GET['id'];
$student = $conn->query("SELECT * FROM students WHERE id = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE students SET name='$name', email='$email' WHERE id = $id");
    echo "<p style='color: green; text-align: center;'>Data berhasil diupdate.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelajar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(120deg, #c9d6ff, #e2e2e2);
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
            max-width: 500px;
            margin: 0 auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        button {
            width: 100%;
            background: linear-gradient(120deg, #007bff, #0056b3);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 1em;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background: linear-gradient(120deg, #0056b3, #003e7e);
            transform: translateY(-2px);
        }

        button:active {
            transform: translateY(1px);
        }

        nav {
            text-align: center;
            margin-top: 20px;
        }

        nav a {
            color: #007bff;
            text-decoration: none;
            font-size: 1em;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #0056b3;
        }

        p {
            text-align: center;
            font-size: 1em;
            margin-top: 15px;
        }

        p.success {
            color: green;
        }

        p.error {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Edit Data Pelajar</h1>
    <form method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="<?php echo $student['name']; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $student['email']; ?>" required>

        <button type="submit">Update</button>
    </form>
    <nav>
        <a href="list_students.php">&#8592; Kembali ke Daftar Pelajar</a>
    </nav>
</body>
</html>
