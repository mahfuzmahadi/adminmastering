<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<style>
    .carousel-item {
    height: 100vh;
    min-height: 350px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }
  
  .carousel-item:first-of-type {
    background-image: url('https://via.placeholder.com/1920x1080');
  }
  
  .carousel-item:nth-of-type(2) {
    background-image: url('https://via.placeholder.com/1920x1080');
  }
  
  .carousel-item:last-of-type {
    background-image: url('https://via.placeholder.com/1920x1080');
  }
  
</style>
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <!-- Add more indicators as needed -->
        </ol>
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- Slide content goes here -->
          </div>
          <div class="carousel-item">
            <!-- Slide content goes here -->
          </div>
          <div class="carousel-item">
            <!-- Slide content goes here -->
          </div>
          <!-- Add more slides as needed -->
        </div>
      
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  
</div>
  <!-- Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  