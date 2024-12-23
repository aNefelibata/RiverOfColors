
<?php
$title = "River Of Colors";
include "templates/header.php";
?>

<!-- Hero Section -->
<section class="hero bg-dark text-white text-center" style="height: 100vh; background-image: url('your-image.jpg'); background-size: cover; background-position: center;">
    <div class="d-flex justify-content-center align-items-center h-100">
        <div class="container">
            <h1 class="display-3">River of Colors</h1>
        </div>
    </div>
</section>

<!-- Main Content Sections -->
<section id="about" class="container py-5">
    <h2>How we can help</h2>
    
    <div class="card-group">
      <div class="card">
        <img class="card-img-top" src="../images/coaching.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Coaching</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer mt-auto">
          <a type="button" class="btn btn-light" href="coaching.html">Learn More</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="../images/consulting.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Consulting</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
         <div class="card-footer mt-auto">
          <a href="consulting.html" type="button" class="btn btn-light" >Learn More</a>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="../images/Parenting.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Parenting</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer mt-auto">
          <a href="parenting.html" type="button" class="btn btn-light" >Learn More</a>
        </div>
      </div>
    </div>
    
</section>

<section class="container py-5 about" >
  <div>
   <h2> <a href="about.html" class="aboutLink">About US</a></h2>
  </div>
  <p>Details about the services you offer can go here.</p>
   
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
