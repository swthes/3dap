<!Doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../application/css/bootstrap.min.css">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">

    <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">



    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="../application/extra/src/App.js" defer></script>
    <script src="../application/js/getJsonData.js" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="../application/js//bootstrap.min.js"></script>
    <link href="../application/extra/css/wrapper.css" rel="stylesheet"/>

    <link href="../application/extra/css/header.css" rel="stylesheet"/>
    <link href="../application/extra/css/content.css" rel="stylesheet"/>
    <link href="../application/extra/css/thumbnails.css" rel="stylesheet"/>
    <link href="../application/extra/css/sidebar.css" rel="stylesheet"/>

    <link href="../application/extra/css/reset.css" rel="stylesheet"/>
    <link href="../application/extra/css/colors.css" rel="stylesheet"/>
   
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="text/css" >
    <link rel="stylesheet" href="../application/css/custom.css">

    <title>3D Models</title>

</head>
<body id="bodyColor">
  
<div class ="wrapper" id="wrap">


  <?php 
  require_once 'navbar.php';
  ?>
    <section class="content">
       
            <h2> 3D models </h2>
      
        
     
            
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
    <div id="box" type="hidden"></div>

    <div class="container-fluid">
    <div class="main_contents">
        <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
        <div class="row">
            <!-- X3D Model -->
            <div class="col-sm-8">
                <div class="card text-left">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <!-- X3D Models -->
                        <div>
                            <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                           <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                           <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

                           <button type="button" class="btn btn-success btn-responsive" onMouseUP=" fantaScene();
                           fantaDescription();">Fanta Can</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUp="dietScene(); ">DietCoke</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene();
                            pepperDescription();">Pepper</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUP="gcokeScene(); cokeDescription();">Coke bottle</button>
                            <button type="button" class="btn btn-success btn-responsive" onMouseUP="spriteScene(); spriteDescription();">sprite bottle</button>
                           

                            <!-- Place the X3D code here -->
                            <div class="model3D">
                                <x3d id="wire">
                                    <scene>
                                   
                                        <Switch whichChoice="0" id='SceneSwitch'>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/fanta.x3d" > </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/dietcoke.x3d"> </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/dr_pepper.x3d"> </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/plate.x3d"> </inline>
                                            </transform>
                                            <transform>
                                                <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/sprite.x3d"> </inline>
                                            </transform>
                                        </Switch>
                                    </scene>
                                </x3d>
                            </div>
                            <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- 3D image gallery -->
            <div class="col-sm-4">
                <div class="card text-left">
                   <div class="card-header gallery-header">
                       <ul class="nav nav-tabs card-header-tabs">
                          <li class="nav-item">
                              <a class="nav-link active" href="#">Gallery</a>
                           </li>
                </div

                    <div style="border: solid 1px saddlebrown;width: 100%">
                        <div class="">
                            <div class="card text-left">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <!-- Dropdown nav-tab -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#box" onclick="cameraFront();">Front</a>
                                                <a class="dropdown-item" href="#box" onclick="cameraBack();">Back</a>
                                                <a class="dropdown-item" href="#box" onclick="cameraLeft();">Left</a>
                                                <a class="dropdown-item" href="#box" onclick="cameraRight();">Right</a>
                                                <a class="dropdown-item" href="#box" onclick="cameraTop();">Top</a>
                                                <a class="dropdown-item" href="#box" onclick="cameraBottom();">Bottom</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="card-Title x3dCamera_Subtitle drinksText">
                                        <h3>Camera Views</h3>
                                    </div>
                                    <a href="#box" class="btn btn-success btn-responsive" onclick="cameraFront();">Default</a>
                                    <a href="#box" class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</a>
                                    <a href="#box" class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</a>
                                    <a href="#box" class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</a>
                                    <a href="#box" class="btn btn-outline-dark disabled btn-responsive">Off</a>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="card text-left">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">Animation</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="card-Title x3dAnimationSubtitle drinksText">
                                        <h3>Animation Options</h3>
                                    </div>
                                    <a href="#box" class="btn btn-outline-light btn-responsive" onclick="spin();">RotX</a>
                                    <a href="#box" class="btn btn-outline-light btn-responsive">RotY</a>
                                    <a href="#box" class="btn btn-outline-light btn-responsive">RotZ</a>
                                    <a href="#box" class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="card text-center">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs">
                                        <!-- Render Dropdown nav-tab -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link active dropdown-toggle" href="#" id="navbardrop-render" data-toggle="dropdown">Render</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#box">Polygon</a>
                                                <a class="dropdown-item" href="#box" onclick="wireFrame();">Wireframe</a>
                                                <a class="dropdown-item" href="#box">Vertex</a>
                                            </div>
                                        </li>
                                        
                                        <!-- Lights Dropdown nav-tab -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop-lights" data-toggle="dropdown">Lights</a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#box" onclick="headLight();">Default</a>
                                                <a class="dropdown-item" href="#box" onclick="omniLight();">Onmi On/Off</a>
                                                <a class="dropdown-item" href="#box" onclick="targetLight();">Target On/Off</a>
                                                <a class="dropdown-item" href="#box" onclick="headLight();">Headlight On/Off</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="card-Title x3dRendersubtitle drinksText">
                                        <h3>Render and Lighting Options</h3>
                                    </div>
                                    <a href="#box" class="btn btn-success btn-responsive">Poly</a>
                                    <a href="#box" class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</a>
                                    <a href="#box" class="btn btn-success btn-responsive" onclick="headLight();">Headlight</a>
                                    <a href="#box" class="btn btn-outline-dark btn-responsive">Default</a>
                                </div>
                        </div>

                        </div>

                    </div>
                </div> <!-- End gallery card -->
            </div> <!-- End gallery column -->
        </div> <!-- End row for X3D Model and Gallery -->
    </div>
</div>

    <div class="card-body">
<!--        <div class="card-title title_gallery drinksText"></div>-->
        <div class="gallery" id="gallery" style="display: flex;justify-content: space-around;align-items: center;"></div>
        <div class="card-text description_gallery drinksText"></div>
    </div>
    <div id="fantaDescription" class="row"">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_fanta" class="card-title drinksText"></div>
                    <div id="subTitle_fanta" class="card-subtitle drinksText"></div>
                    <div id="description_fanta" class="card-text drinksText"></div>
                    <a href="https://www.fanta.com" class="btn btn-primary btn-responsive">Visit Coke</a>
                </div>
            </div>
        </div>
    </div> 
    <!-- Row to hold one card to hold the coke descriptive text, etc.-->
    <div id="cokeDescription" class="row"">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_coke" class="card-title drinksText"></div>
                    <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                    <div id="description_coke" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>
                </div>
            </div>
        </div>
    </div> <!-- End coke description contents -->

    <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
    <div id="spriteDescription" class="row"">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_sprite" class="card-title drinksText"></div>
                    <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                    <div id="description_sprite" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>
                </div>
            </div>
        </div>
    </div> <!-- End sprite description contents -->

    <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
    <div id="pepperDescription" class="row"">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div id="title_pepper" class="card-title drinksText"></div>
                    <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                    <div id="description_pepper" class="card-text drinksText"></div>
                    <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>
                </div>
            </div>
        </div>
    </div> <!-- End pepper description contents -->

</div> <!-- End 3D App SPA Contents -->



<!-- My 3D App modals -->
<!-- Contact modal -->
<!-- The Modal -->

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
            </div>
        </div>
    </div>
</div>
<!-- JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
<script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
<!-- <script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script> -->
<!-- <script src="../application/js/fontawesome-all.min.js"></script> -->
<!-- Custom JavaScript code for your 3d App -->
<script src="../application/js/custom.js" crossorigin="anonymous"></script>
<!-- JavaScript to swap for SPA and restyle -->
<script src="../application/js/swap_restyle.js"></script>
<!-- Include the x3dom JavaScript -->
<script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
<!-- JavaScript and PHP based Gallery generator  -->
<script type="text/javascript" src="../application/js/gallery_generator.js"></script>
<!-- JQuery code to get content data from a backend JSON file -->
<script src="../application/js/getJsonData.js"></script>
<!-- JavaScript model interactions -->
<script src="../application/js/modelInteractions.js"></script>
<!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
<script src="../application/js/jquery.fancybox.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>