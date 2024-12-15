<?php
include 'config.php';
$teachers = $conn->query("SELECT * FROM teachers");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pengajar</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(120deg, #d4fc79, #96e6a1);
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        table th, table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background: linear-gradient(120deg, #28a745, #218838);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        table tr:last-child td {
            border-bottom: none;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            color: #28a745;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
            color: #218838;
        }

        button {
            background: linear-gradient(120deg, #28a745, #218838);
            color: white;
            padding: 8px 12px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: transform 0.3s ease, background 0.3s ease;
        }

        button:hover {
            background: linear-gradient(120deg, #218838, #1e7e34);
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
            color: #28a745;
            text-decoration: none;
            font-size: 1em;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #218838;
        }
    </style>
</head>
<body>
    <h1>Daftar Pengajar</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Keahlian</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($teacher = $teachers->fetch_assoc()): ?>
            <tr>
                <td><?php echo $teacher['id']; ?></td>
                <td><?php echo $teacher['name']; ?></td>
                <td><?php echo $teacher['expertise']; ?></td>
                <td>
                    <a href="edit_teacher.php?id=<?php echo $teacher['id']; ?>">Edit</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <nav>
        <a href="index.php">&#8592; Kembali ke Halaman Utama</a>
    </nav>
</body>
</html>