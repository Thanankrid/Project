<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000"> <!-- เปลี่ยน 3000 เป็นค่าในมิลลิวินาทีที่คุณต้องการ -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block carousel-image" src="http://www.bo.ac.th/_files_school/14100460/slide/14100460_0_20240723-153602.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block carousel-image" src="http://www.bo.ac.th/_files_school/14100460/slide/14100460_0_20210309-145150.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block carousel-image" src="http://www.bo.ac.th/_files_school/14100460/slide/14100460_0_20240723-154426.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<style>
  .carousel-inner img {
    width: 65%;
    height: auto;
    margin: 0 auto;
  }

  .carousel-item {
    transition: transform 0.5s ease, opacity 0.5s ease;
    /* ปรับความเร็วการเปลี่ยนแปลง */
  }
</style>