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
    <div class="content">
        <div class="wrapper-grid">
        <?php 
            $search = $_GET['cari'];
            $records = mysqli_query($conn, "SELECT * FROM list_wisata_alam WHERE deskripsi LIKE '%$search%'");
            while($data = mysqli_fetch_array($records)) {
        ?>
                <div class="container">
                    <div class="card-image">
                        <img src="<?php echo $data['gambar']; ?>" alt="">
                    </div>
                    <h3><?php echo $data['wisata']; ?></h3>
                    <p><?php echo $data['kategori']; ?></p>
                    <p><?php echo $data['deskripsi']; ?></p>
                </div>
        <?php } ?>
        </div>
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
