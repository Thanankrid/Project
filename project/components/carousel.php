<!-- Carousel รูปภาพ -->
<div id="schoolCarousel" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-interval="4000">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-bs-target="#schoolCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#schoolCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#schoolCarousel" data-bs-slide-to="2"></li>
        <!-- เพิ่มจุดสำหรับรูปที่เหลือ -->
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="http://www.bo.ac.th/_files_school/14100460/intro/14100460_0_20240917-101612.jpg" class="d-block w-70" alt="รูปภาพ 1">
        </div>
        <div class="carousel-item">
            <img src="http://www.bo.ac.th/_files_school/14100460/intro/14100460_0_20240731-215638.jpg" class="d-block w-70" alt="รูปภาพ 2">
        </div>
        <div class="carousel-item">
            <img src="http://www.bo.ac.th/_files_school/14100460/intro/14100460_0_20240723-102936.jpg" class="d-block w-70" alt="รูปภาพ 3">
        </div>
        <!-- เพิ่มรูปที่เหลือ -->
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#schoolCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#schoolCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<style>
    .carousel-inner img {
        width: 70%; 
        height: auto; 
        margin: 0 auto; 
    }
</style>
