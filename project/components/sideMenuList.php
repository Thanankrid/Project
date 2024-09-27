<?php
$sideMenuItems = [
    "ประวัติโรงเรียน",
    "สัญลักษณ์โรงเรียน",
    "วิสัยทัศน์ / ปรัชญา",
    "พันธกิจ / เป้าหมาย",
    "หลักสูตรที่เปิดสอน",
    "คณะกรรมการสถานศึกษา",
    "คณะกรรมการนักเรียน",
    "โครงสร้างการบริหาร",
    "ข้อมูลนักเรียน",
    "ระเบียบโรงเรียน",
    "ฝ่ายบริหารและบุคลากร"
];

$links = [
    "http://www.bo.ac.th/images/banner/04-moe.gif" => "https://www.moe.go.th/",
    "http://www.bo.ac.th/images/banner/17-dltv.jpg" => "#",
    "http://www.bo.ac.th/images/banner/03-onesqa.gif" => "#",
    "http://www.bo.ac.th/images/banner/05-ksp.gif" => "#",
    "http://www.bo.ac.th/images/banner/thaijob.jpg" => "#",
    "http://www.bo.ac.th/banner/thaischool.jpg" => "#",
    // รูปภาพใหม่ที่เพิ่ม
    "http://www.bo.ac.th/_files_share/images/ico_ita.png" => "#",
    "http://www.bo.ac.th/_files_share/images/t-portfolio-eng.jpg" => "#",
    "http://www.bo.ac.th/_files_share/images/s-portfolio-eng.jpg" => "#",
    "http://www.bo.ac.th/_files_share/images/download-eng.jpg" => "#",
    "http://www.bo.ac.th/_files_share/images/ico_complain.png" => "#"
];
?>

<ul class="side-menu">
    <?php foreach ($sideMenuItems as $item): ?>
        <li><a href="#" class="no-underline"><?= $item ?></a></li>
    <?php endforeach; ?>

    <!-- ลิ้งค์ที่น่าสนใจ -->
    <li style="margin-top: 20px;">
        <h4 style="font-family: inherit;">ลิ้งค์ที่น่าสนใจ</h4>
        <?php foreach ($links as $img => $url): ?>
            <a href="<?= $url ?>" target="_blank" style="display: block;">
                <img src="<?= $img ?>" alt="Link Image" style="width: 100%; height: auto; margin-bottom: 10px; border-radius: 0;">
            </a>
        <?php endforeach; ?>
    </li>

    <!-- เว้นระยะห่างสำหรับปฏิทิน -->
    <li style="margin-top: 20px;">
        <!-- ปฏิทิน -->
        <div class="calendar">
            <iframe src="https://calendar.google.com/calendar/embed?src=YOUR_CALENDAR_ID&ctz=Asia/Bangkok&hl=th" 
            style="border: 0" width="100%" height="400" frameborder="0" scrolling="no"></iframe>
        </div>
    </li>
</ul>
