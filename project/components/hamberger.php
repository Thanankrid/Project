<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Navbar Example</title>
    <style>
        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            width: 50px;
            /* ปรับขนาดโลโก้ให้ใหญ่ขึ้น */
            height: 50px;
            /* ปรับความสูงให้เท่ากับความกว้าง */
            border-radius: 50%;
            /* ทำให้รูปเป็นวงกลม */
            margin-right: 8px;
            /* ระยะห่างระหว่างโลโก้และชื่อ */
        }

        .navbar-brand span {
            font-size: 1.5rem;
            /* ปรับขนาดตัวอักษรของชื่อโรงเรียน */
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003366;">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZnj3wsD6ujzWcVsIImKKdyGKca7gnPkRq2g&s" alt="Logo">
                <span>โรงเรียนบางปะอิน</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">คณะผู้บริหาร</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ข่าวประชาสัมพันธ์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ภาพกิจกรรม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ถามตอบ Q&A</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">สมุดเยี่ยม</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost:3000/project/contact.php">ติดต่อเรา</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Additional Menu Sections -->
    <section class="mb-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuSection1"
                aria-controls="menuSection1" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse" id="menuSection1">
                <div class="bg-body-tertiary shadow-3 p-4">
                    <button class="btn btn-link btn-block border-bottom m-0">Link 1</button>
                    <button class="btn btn-link btn-block border-bottom m-0">Link 2</button>
                    <button class="btn btn-link btn-block m-0">Link 3</button>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>