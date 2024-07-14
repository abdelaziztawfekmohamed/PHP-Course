<?php
include "../assets/include/header.php";
?>
<h3>home page</h3>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img
          src="../assets/img/Emerald Lake - Credit Suran Gaw, Adobe Stock-2.jpg"
          class="d-block w-100"
          alt="img1"
          style="height : 485px ; object-fit : cover"
      >
    </div>
    <div class="carousel-item">
      <img 
          src="../assets/img/img1.jpg" 
          class="d-block w-100" 
          alt="img2" 
          style="height : 485px ; object-fit : cover"
      >
    </div>
    <div class="carousel-item">
      <img 
          src="../assets/img/img2.png" 
          class="d-block w-100" 
          alt="img3"
          style="height : 485px ; object-fit : cover"
      >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<?php
include "../assets/include/footer.php";
?>
