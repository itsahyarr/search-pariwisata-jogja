<?php 
    include 'connection.php';
    // include 'query.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Informasi Pariwisata Jogja</title>

</head>
<body>
    <header>
        <div class="logo">TravelX</div>
        <nav>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Alam</a></li>
                <li><a href="#">Buatan</a></li>
                <li><a href="#">Budaya & Sejarah</a></li>
                <li><a href="#">Pantai</a></li>
            </ul>
        </nav>
        <div class="menu-toggle"><i class="fa fa-bars"></i></div>
    </header>


    <div class="box">
        <h1>Informasi Pariwisata Kota Jogja</h1>
        <form action="result.php" method="get">
            <input type="text" name="cari" placeholder="Masukkan kata kunci...">
            <input type="submit" value="Cari">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.menu-toggle').click(function() {
                $('nav').toggleClass('active')
            })
        })
    </script>
</body>
</html>
