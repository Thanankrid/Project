<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ติดต่อเรา - โรงเรียนบางปะอิน</title>

    <!-- Google Fonts - ฟอนต์ Prompt -->
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #99FFCC;
            color: #333;
            min-height: 100vh;
        }

        .contact-header {
            text-align: center;
            margin: 40px 0;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            margin-top: 20px;
            text-align: center;
        }

        .back-link {
            text-align: center;
            margin: 40px 0;
            font-size: 24px;
            font-weight: bold;
        }

        .back-link a {
            color: #007bff;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <div class="contact-header">
            <h1>ติดต่อเรา</h1>
            <p>หากคุณมีคำถามหรือข้อสงสัย สามารถติดต่อเราผ่านแบบฟอร์มด้านล่างนี้</p>
        </div>

        <div class="back-link">
            <strong><a href="http://localhost:3000/project/index.php">กลับไปหน้าแรก</a></strong>
        </div>

        <div class="contact-form">
            <form id="contactForm">
                <div class="mb-3">
                    <label for="name" class="form-label">ชื่อ-นามสกุล</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">อีเมล</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">ติดต่อเรื่อง</label>
                    <input type="text" class="form-control" id="subject" required>
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">รายละเอียด</label>
                    <textarea class="form-control" id="details" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">ข้อความ</label>
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="captcha" class="form-label">กรุณาใส่ตัวอักษรจากรูปด้านล่าง</label>
                    <img id="captchaImage" src="http://www.bo.ac.th/captcha/vasplusCaptcha.php?rand=<?= rand() ?>" alt="CAPTCHA" class="img-fluid mb-2">
                    <input type="text" class="form-control" id="captcha" required>
                    <button type="button" class="btn btn-link" id="refreshCaptcha">รีเฟรชภาพ</button>
                </div>
                <button type="submit" class="btn btn-primary">ส่งข้อความ</button>
            </form>
        </div>

        <div class="contact-info">
            <h5>ข้อมูลติดต่อ</h5>
            <p>โรงเรียนบางปะอิน</p>
            <p>121 หมู่ 3 ถนนพระจอมเกล้า ตำบลบ้านเลน อำเภอบางปะอิน จังหวัดพระนครศรีอยุธยา 13160</p>
            <p>เบอร์โทรศัพท์: 035 270 400</p>
            <p>เบอร์โทรสาร: 035 270 400</p>
            <p>Email: <a href="mailto:bangpains@gmail.com">bangpains@gmail.com</a></p>
            <p>Facebook: <a href="https://www.facebook.com/boschool" target="_blank">โรงเรียนบางปะอิน</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('refreshCaptcha').addEventListener('click', function() {
            document.getElementById('captchaImage').src = 'http://www.bo.ac.th/captcha/vasplusCaptcha.php?rand=' + Math.random();
        });

        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('ส่งข้อความเรียบร้อย!');
        });
    </script>
</body>

</html>