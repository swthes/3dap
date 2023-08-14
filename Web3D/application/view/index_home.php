<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
 
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="../application/extra/src/App.js" defer></script>
  <script src="../application/js/getJsonData.js" defer></script>


  <link href="../application/extra/css/wrapper.css" rel="stylesheet"/>
  <link href="../application/extra/css/header.css" rel="stylesheet"/>
  <link href="../application/extra/css/content.css" rel="stylesheet"/>
  <link href="../application/extra/css/thumbnails.css" rel="stylesheet"/>
  <link href="../application/extra/css/sidebar.css" rel="stylesheet"/>
  <link href="../application/extra/css/reset.css" rel="stylesheet"/>
  <link href="../application/extra/css/colors.css" rel="stylesheet"/>

  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="text/css" >
  <link rel="stylesheet" href="../application/css/custom.css">
  


    <title>Landing Page - Coca-Cola</title>
</head>
<body>
  <div class ="wrapper"  id="wrap">
    <?php
     require_once 'navbar.php';
    ?>
    <section class="content">
      <div class="textBox">
        <h2>Evolving Since 1886<br/></h2>
        <p>Step into the effervescent world of Coca-Cola – a brand that has been at the heart of cherished memories and shared moments for over a century. From its humble beginnings in an Atlanta pharmacy to its rise as a global icon, Coke has journeyed through eras, transcending time and borders.</p>
        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn">Read More</a>
      </div>
       <div class="imageBox">
        <img src="../application/extra/assets/coke001.png" alt="Classic Coca-Cola can" class="coke"/>
      </div> 

      <div style="margin-top:20px;">
          <div class="row" >
              <div class="col-sm-12">
              <div class="card mb-3 img-narrow" style="max-width: 540px;">
              <div class="row g-0">
                <!-- Image Section -->
                <div class="col-md-4">
                    <img id="image1" src="#" alt="Drink Image" class="card-img-top img-fluid rounded-start">
                </div>

                <!-- Content Section -->
                <div class="col-md-8">
                    <div class="card-body">
                        <!-- Title -->
                        <h5 class="card-title drinksText" id="title1">Drink Name</h5>

                        <!-- Description -->
                        <p class="card-text drinksText" id="content1">Drink Description</p>

                        <!-- Additional Info -->
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>

                        <!-- Action Button -->
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>
                    </div>
                </div>
            </div>
            </div>
              </div>
        </div>
        <!-- Card 2 -->
        <div class="col-sm-12">
            <div class="card mb-3 img-narrow" style="max-width: 540px;">
                <div class="row g-0">
                    <!-- Image Section -->
                    <div class="col-md-4">
                        <img id="image2" src="#" alt="Drink Image 2" class="card-img-top img-fluid rounded-start">
                    </div>

                    <!-- Content Section -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- Title -->
                            <h5 class="card-title drinksText" id="title2">Drink Name 2</h5>

                            <!-- Description -->
                            <p class="card-text drinksText" id="content2">Drink Description 2</p>

                            <!-- Additional Info -->
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>

                            <!-- Action Button -->
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-sm-12">
            <div class="card mb-3 img-narrow" style="max-width: 540px;">
                <div class="row g-0">
                    <!-- Image Section -->
                    <div class="col-md-4">
                        <img id="image3" src="#" alt="Drink Image 3" class="card-img-top img-fluid rounded-start">
                    </div>

                    <!-- Content Section -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- Title -->
                            <h5 class="card-title drinksText" id="title3">Drink Name 3</h5>

                            <!-- Description -->
                            <p class="card-text drinksText" id="content3">Drink Description 3</p>

                            <!-- Additional Info -->
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>

                            <!-- Action Button -->
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    


   
    <nav class= "sidebar">
      <ul class="socialMedia">
      <li>
            <button onclick="askToChangeLook()"  type="button" class="btn">Change Page Look</button>

        </li>
        <li>
          <a href='mailto:sa948@sussex.ac.uk'>
            <img src="../application/extra/assets/mail.svg" alt="Mail me now">
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black">3D App Contact Details</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p style="color: black">Akim Abdullah</p>
                  <p style="color: black">Email: Sa948@usssex.ac.uk</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<!--                  <button type="button" class="btn btn-primary">Save changes</button>-->
              </div>
          </div>
      </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <!-- JavaScript to swap for SPA and restyle -->
<script src="../application/js/swap_restyle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>