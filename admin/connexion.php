<?php
session_start();
define("PAGE_TITLE", "Connexion");
require_once("../controllers/accountController.php");
$controller = new AccountController;


//перевірити чи заповнений і надісланий форсуляр для зєднаня
if(isset($_POST["submit"]) && isset($_POST["email"]) && isset($_POST["password"]))
{
  //var_dump($_POST);
$result = $controller->login($_POST["email"], $_POST["password"]);
  //var_dump($result);
}


//$result = $controller->create("lyudmula.mydra@gmail.com", "Milana19@");
//var_dump(($result));

?>
<?php include("../assets/inc/back/head.php"); ?>

<?php include("../assets/inc/back/header.php");?>

<main>
<div class="container m-2 p-2">
  <?php  if(isset($result)) {?>
  <div class="alert danger">
    <?=$result["message"] ?>
  </div>
  <?php }?>
<form class ="admin" action="#" method="POST">

  <div class="mb-3">
    <label for="email" > Email</label>
    <input  class="admin" type="email" name="email" id="email" required>
  </div>
  <div class="mb-3 ">
    <label for="password"> Password</label>
    <input class="admin" type="password" name="password" id="password" required>
  </div>
  
  <div class="button">
        <button type="submit" name="submit">Envoyer</button>
</div>
  
  </div>
</form>
</main>


<?php include("../assets/inc/back/footer.php"); ?>



