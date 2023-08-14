<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../application/extra/src/App.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


    <link href="../application/extra/css/wrapper.css" rel="stylesheet"/>
    <link href="../application/extra/css/header.css" rel="stylesheet"/>
    <link href="../application/extra/css/content.css" rel="stylesheet"/>
    <link href="../application/extra/css/thumbnails.css" rel="stylesheet"/>
    <link href="../application/extra/css/sidebar.css" rel="stylesheet"/>

    <link href="../application/extra/css/reset.css" rel="stylesheet"/>
    <link href="../application/extra/css/colors.css" rel="stylesheet"/>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="text/css" >
    <link rel="stylesheet" href="../application/css/custom.css">
    <title>Landing Page - Coca-Cola</title>
</head>
<body>
<div class ="wrapper"   id="wrap">
    <?php include 'navbar.php';?>
    <section class="content">
        <!--  maintext -->
        <div class="container">
    <div class="row">

        <!-- First Row -->
        <div class="col-md-4 col-sm-12">
            <div class="card">
                <div class="card-header">
                More Than Just a Beverage
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Coca-Cola is not just a drink; it's an experience. Every sip narrates a story of culture, innovation, and global unity. The signature contour bottle, the unmistakable fizz, and the timeless taste all come together to spark joy in every corner of the world.</p>
                        <footer class="blockquote-footer">More Than Just a Beverage  <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                A Global Footprint with Local Soul 
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>While the Coke recipe remains a treasured secret, the magic formula for its success is evident: a harmonious blend of global vision and local relevance. From hosting music events in Brazil to supporting clean water initiatives in Africa, Coca-Cola's commitment extends beyond quenching thirst.</p>
                        <footer class="blockquote-footer"> A Global Footprint with Local Soul  <cite title="Source Title"></cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="col-md-4">
        <div class="card">
                <div class="card-header">
                Sustainability at Heart 
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Aware of its global influence, Coca-Cola has consistently strived to leave a positive impact on our planet. With innovative recycling programs, reducing carbon footprint, and fostering sustainable agriculture, the company is at the forefront of eco-conscious endeavors.</p>
                        <footer class="blockquote-footer">  Sustainability at Heart  <cite title="Source Title"></cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <!-- Second Row -->
        <div class="col-md-4">
        <div class="card">
                <div class="card-header">
                Celebrate Every Moment with Us!
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Dive into the world of Coca-Cola, where every bubble tells a story, every campaign touches hearts, and every bottle fosters connection. Join us in celebrating the rich tapestry of experiences, innovations, and memories that Coke has crafted over the years.</p>
                        <footer class="blockquote-footer">  Celebrate Every Moment with Us!<cite title="Source Title"></cite></footer>
                    </blockquote>
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
                <a href='mailto:Sa948@sussex.ac.uk'>
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
                <p style="color: black">Email: Sa948@sussex.ac.uk</p>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
<!-- JavaScript to swap for SPA and restyle -->
<script src="../application/js/swap_restyle.js"></script>
</body>
</html>