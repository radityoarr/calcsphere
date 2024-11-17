<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc-Sphere Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .dashboard {
            width: 90%;
            max-width: 600px;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .logo img {
            width: 50px;
            height: 50px;
        }
        .logo h1 {
            font-size: 1.8em;
            color: #4CAF50;
            margin: 0;
        }
        .year-section {
            margin: 20px 0;
        }
        .year-section h2 {
            font-size: 1.2em;
            color: #555;
        }
        .session-links a {
            display: block;
            padding: 8px;
            margin: 5px 0;
            background-color: #e0f7fa;
            color: #00796b;
            text-decoration: none;
            border-radius: 4px;
        }
        .session-links a:hover {
            background-color: #b2dfdb;
        }
        .logout-btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <!-- Logo and Website Name -->
        <div class="logo">
            <img src="img/LOGO_ WHITE BG.png" alt="Calc-Sphere Logo">
            <h1>Calc-Sphere</h1>
        </div>

        <!-- Logout Button -->
        <div class="logout-btn">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>

        <!-- Content Sections (example) -->
        <div class="year-section">
            <h2>Pembahasan Soal Tahun 2023</h2>
            <div class="session-links">
                <a href="2023_sesi_1.php">Sesi 1</a>
                <a href="2023_sesi_2.php">Sesi 2</a>
                <a href="2023_sesi_3.php">Sesi 3</a>
                <a href="2023_sesi_4.php">Sesi 4</a>
                <a href="2023_sesi_5.php">Sesi 5</a>
                <a href="2023_sesi_6.php">Sesi 6</a>
                <a href="2023_sesi_7.php">Sesi 7</a>
                <a href="2023_sesi_8.php">Sesi 8</a>
                <a href="2023_sesi_9.php">Sesi 9</a>
                <a href="2023_sesi_10.php">Sesi 10</a>
            </div>
        </div> 
    </div>
</body>
</html>
