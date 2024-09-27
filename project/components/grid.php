<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid Page</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:wght@100;400&family=Prompt:wght@400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'K2D', sans-serif;
        }

        .card-title,
        .card-text {
            font-family: 'Prompt', sans-serif;
        }

        /* ให้รูปภาพขยายขนาดเมื่อเลื่อนเมาส์ไปที่ภาพ */
        .card-img-top {
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .card-img-top:hover {
            transform: scale(1.2);
        }

        .modal-img {
            width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <div class="container my-4 text-center">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="http://fth0.com/uppic/14100460/activity/14100460_0_20240814-111442.jpg" class="card-img-top" alt="Image 1" data-bs-toggle="modal" data-bs-target="#imageModal1">
                    <div class="card-body">
                        <h5 class="card-title">กิจกรรม แข่งหมากฮ็อต</h5>
                        <p class="card-text">เมื่อวันที่ [18 กันยายน 2567] โรงเรียนบางปะอินได้จัดกิจกรรมแข่งหมากฮอตที่เต็มไปด้วยความสนุกสนานและการมีส่วนร่วมจากนักเรียนทุกระดับชั้น...</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card">
                    <img src="http://fth0.com/uppic/14100460/activity/14100460_0_20240814-114218.jpg" class="card-img-top" alt="Image 2" data-bs-toggle="modal" data-bs-target="#imageModal2">
                    <div class="card-body">
                        <h5 class="card-title">กิจกรรม ตอบปัญหา วันอาเซียน</h5>
                        <p class="card-text">เมื่อวันที่ [28 กันยายน 2567] โรงเรียนบางปะอินได้จัดกิจกรรมตอบปัญหาเกี่ยวกับอาเซียน เพื่อเฉลิมฉลองวันอาเซียน...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image 1 -->
    <div class="modal fade" id="imageModal1" tabindex="-1" aria-labelledby="imageModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel1">กิจกรรม แข่งหมากฮ็อต</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="http://fth0.com/uppic/14100460/activity/14100460_0_20240814-111442.jpg" class="modal-img" alt="Image 1">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image 2 -->
    <div class="modal fade" id="imageModal2" tabindex="-1" aria-labelledby="imageModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel2">กิจกรรม ตอบปัญหา วันอาเซียน</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="http://fth0.com/uppic/14100460/activity/14100460_0_20240814-114218.jpg" class="modal-img" alt="Image 2">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
