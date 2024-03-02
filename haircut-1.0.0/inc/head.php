<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title><?php echo "$sayfa";?></title>
    <meta name="description"
        content="CNC fason plastik enjeksiyon kalıp tasarımı hizmeti sunan bir firmayız. Sahibimizin adı mbmakineplastik'dir.">
    <meta name="keywords" content="CNC, fason, plastik, enjeksiyon, kalıp tasarımı, Melikcan Yiğitce">
    <meta name="author" content="Melikcan Yiğitce">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Oswald:wght@600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <img src="img\logo1.png" alt="MakinePlastik Logo" class="logo-img">
            <h1 class="mb-0 text-primary text-uppercase">Makine<span style="color:#6C7293 ;">Plastik</span></h1>
            <style>
            .navbar-brand {
                display: flex;
                align-items: center;
            }

            .logo-img {
                width: 100px;
                /* Logonun genişliği */
                height: auto;
                /* Otomatik yükseklik ayarı */
                margin-right: 10px;
                /* Yazı ile logo arasındaki boşluk */
            }
            </style>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link ">Anasayfa</a>
                <a href="about.php" class="nav-item nav-link">Hakkımızda</a>
                <a href="service.php" class="nav-item nav-link">Hizmetler</a>

                <a href="contact.php" class="nav-item nav-link">İletişim</a>
                <a id="teklifAl" class="nav-item nav-link" style="color: orangered;" href="#">Teklif Al</a>
            </div>

        </div>
    </nav>
    <!-- Navbar End -->

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var link = document.getElementById('teklifAl');

        // Eğer mobil cihazdan giriş yapılırsa
        if (/Mobi|Android/i.test(navigator.userAgent)) {
            link.setAttribute('href', 'whatsapp://send?phone=+905538235514');
        }
        // Eğer masaüstü cihazdan giriş yapılırsa
        else {
            link.setAttribute('href', 'https://api.whatsapp.com/send?phone=905538235514');
        }
    });
    </script>