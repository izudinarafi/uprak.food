<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Halaman Depan | D'Artagnan</title>

        <style>
            body {
                background-image: url("https://thumb.viva.co.id/media/frontend/thumbs3/2019/11/21/5dd64a2d921ea-5-makanan-penyebab-stroke-yang-jarang-diketahui_665_374.jpg");
            }     
        </style>
    </head>

    <body>
        <div class="container-logout" style="background: linear-gradient(90deg, #545B77, #374259);">
            <form action="" method="POST" class="login-email">
                <?php echo "<h1>Restoran D'Artagnan</h1>"; ?>

                <br>

                <?php echo '<h2>Selamat Datang,</h2>'; ?>
                <?php echo '<h2 style="text-decoration: underline;">' . $_SESSION['username'] ."!". "</h2>"; ?>

                <br>

                <?php echo '<h3>Menu</h3>'; ?>
 
                <div class="input-group">
                    <a href="form-daftar.php" class="btn" style="text-decoration: none;">Daftar Menu Makanan Baru</a>
                    <a href="list-makanan.php" class="btn" style="text-decoration: none;">Data Menu Makanan</a>
                    <a href="logout.php" class="btn" style="text-decoration: none;">Logout</a>
                </div>
            </form>
        </div>
    </body>
</html>