<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                
                <li><a href="halamanpiket.php?page=absen">Absen</a></li>
                <li><a href="halamanpiket.php?page=dataabsen">Data Absen</a></li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Welcome to the Halaman Piket</h1>
        
        <?php 
       
            $page = @$_GET['page'];
 
            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'dataabsen':
                    include "dataabsen.php";
                    break;
                case 'absen':
                    include "tambahabsen.php";
                    break;
                case 'editabsen':
                        include "editabsen.php";
                        break;    
                }
                ?>
       
    </main>
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </footer>
</body>
</html>
