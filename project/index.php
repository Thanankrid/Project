<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โรงเรียนบางปะอิน</title>

    <!-- Google Fonts - ฟอนต์ Prompt -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles/sideMenuList.css">
    <link rel="stylesheet" href="styles/carouselStyle.css">
    <link rel="stylesheet" href="styles/footerStyle.css">
    <link rel="stylesheet" href="styles/main.css">


    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #99FFCC;
            color: #333;
            min-height: 100vh;
        }

        /* จัด navbar */
        .navbar {
            background-color: #003366;
            /* เปลี่ยนเป็นสีน้ำเงินเข้ม */
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
            font-size: 1.5rem;
            margin-right: auto;
            font-family: 'Prompt', sans-serif;
        }

        .navbar-nav {
            display: flex;
            justify-content: center;
            width: 100%;
            font-family: 'Prompt', sans-serif;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: 500;
            font-size: 1rem;
            font-family: 'Prompt', sans-serif;
        }

        .section-left {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .section-left img {
            width: 100%;
            max-width: 150px;
            height: auto;
            border-radius: 50%;
            display: block;
            margin: 0 auto;
        }

        h1,
        h2,
        h3 {
            color: #004080;
            font-family: 'Prompt', sans-serif;
        }

        footer {
            background-color: #004080;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            font-family: 'Prompt', sans-serif;
        }
    </style>

</head>

<body>

    <!-- Navbar -->
    <?php include('components/hamberger.php') ?>


    <!-- Layout 2 ส่วน -->
    <div class="container-fluid mt-4">
        <div class="row">

            <!-- ส่วนซ้าย (20%) -->
            <div class="col-lg-2 col-md-3 section-left">
                <img src="http://www.bo.ac.th/_files_school/14100460/person/thumb/14100460_0_20240127-214156.jpg" alt="ผู้บริหาร">
                <h4 class="director-name">นางกนกรัตน์ เงินเหรียญ</h4>
                <p class="director-title">ผู้อำนวยการสถานศึกษา</p>

                <?php include('components/sideMenuList.php') ?>
            </div>

            <!-- ส่วนกลาง (80%) -->
            <div class="col-lg-10 col-md-9">

                <!-- แบนเนอร์ -->
                <style>
                    .banner {
                        width: 100%;
                        height: auto;
                        /* ทำให้ความสูงปรับตามอัตราส่วน */
                        max-height: 360px;
                        /* กำหนดความสูงสูงสุด */
                        object-fit: cover;
                        /* ให้รูปไม่เบี้ยว */
                        margin: 0 auto;
                        display: block;
                    }
                </style>
                <img src="images\SchoolBanner3.jpg" class="img-fluid banner" alt="แบนเนอร์">


                <!-- Alert ประกาศ -->
                <div class="container mt-4">
                    <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                        <strong>ประกาศสำคัญ!</strong> โรงเรียนบางปะอิน เปิดรับนักศึกษาใหม่ 2568 !!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>

                <!-- ข้อความเลื่อน -->
                <marquee class="my-4" direction="left" scrollamount=6" style="font-size: 24px; font-family: 'Prompt', sans-serif; font-weight: bold;">
                    ติดตามข่าวสารและกิจกรรมล่าสุดของโรงเรียนได้ที่เว็บไซต์ของเรา! โรงเรียนบางปะอินมีความภูมิใจในการนำเสนอโปรแกรมการเรียนการสอนที่ทันสมัย พร้อมทั้งโครงการเรียนออนไลน์เพื่อให้นักเรียนได้รับการศึกษาที่ดีที่สุด!
                </marquee>

                <!-- Carousel รูปภาพ -->
                <?php include("components/carouselBootstrap.php") ?>

                <!-- youtube -->

                <?php include("components/youtubeVideo.php") ?>

                <!-- Grid -->
                <?php include("components/grid.php") ?>



            </div>
        </div>
    </div>
    <?php include("components/section-footer.php") ?>
</body>

</html>