<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(120deg, #89f7fe, #66a6ff);
            color: #333;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #fff;
            font-size: 2.5em;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        nav a {
            display: inline-block;
            padding: 12px 25px;
            text-decoration: none;
            color: white;
            background: linear-gradient(120deg, #007bff, #0056b3);
            border-radius: 50px;
            font-size: 1em;
            font-weight: bold;
            transition: transform 0.3s ease, background 0.3s ease;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        nav a:hover {
            background: linear-gradient(120deg, #0056b3, #00408a);
            transform: translateY(-5px);
        }

        nav a:active {
            transform: translateY(2px);
        }

        footer {
            margin-top: 40px;
            color: #fff;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Kursus Pesawat</h1>
    <nav>
        <a href="register_student.php">Pendaftaran Pelajar</a>
        <a href="register_teacher.php">Pendaftaran Pengajar</a>
        <a href="list_students.php">Daftar Pelajar</a>
        <a href="list_teachers.php">Daftar Pengajar</a>
    </nav>
    <footer>
        &copy; 2024 Kursus Pesawat. Tidak Dijamin Selamat.
    </footer>
</body>
</html>
