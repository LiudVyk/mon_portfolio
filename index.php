<?php

//Commencer par l'appel du controller
//require(controllers/...)

define("PAGE_TITLE", "Accueil");
?>

<?php include("./assets/inc/front/head.php"); ?>
<?php include("./assets/inc/front/header.php");?>
<main>

<div class="conteiner">
  <div class="d-flex justify-content-around">

    <div class="left">
      <div class="my-5">
        <div class="d-flex justify-content-end">
        <div class="square6 m-0 d-flex align-items-center "> </div>
      </div>
        <div class="square2 ms-5"><a href="/portfolio/competences.php" > <p class="skills">Skills </p></div>
        <div class="square7 m-"> </div>
      </div>
      <div class="d-flex justify-content-evenly">
        
        <div class="square13"></div>
        <div class="square3">  <a href=""   ><p class="contact"> Contact </p> </a></div>
        <div class="square12"> </div>

      </div>
    </div>
    <div class="d-flex align-items-center ">
      <div class="square1"> <p id="center">Frontend Developer</p></div>
    </div>

    <div class="right">
      <div class="my-5 d-flex flex-column align-items-center">
      
        <div class="square10 m-2 "></div>
        <div class="square4 m-2"><p class="about">About </p></div>
        <div class="square11"></div>
      </div>

      <div class="d-flex align-items-end mb-5" >
        
        <div class="square8"></div>
        <div class="square5"><p class="project">Project</p></div>
        <div class="square9"></div>
      </div>
    </div>

  
  </div>
</div>
</main>

<?php include("./assets/inc/front/footer.php");?>