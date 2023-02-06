<?php
require_once("../models/accountModel.php");
require_once("../conf/conf.php");


//Ce controller nous servira à créer de nouveau comptes, à nous 
class AccountController{
public function create(string $email, string $password){

// Verification de l'email
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      return [
        "success" => false,
        "message" =>"Email incorrect"
      ] ;
}
if (strlen($password) < 8 ) {
      return [
        "success" => false,
        "message" => "Mot de passe est tres court"
      ];
}

//Verification 
if(!preg_match(" ~^\S*(?=\S*[a-zA-Z])(?=\S*[0-9])(?=\S*[\W])\S*$~ ", $password)){
      return [
        "success" => false,
        "message" => " Le mot de passe doit contenir au moins un lettre et chiffre speciale"
      ];
    }
    


    global $pdo;

    $sql = "INSERT INTO account
    (email, password)
    VALUES
    (:email, :password)";


    $statement = $pdo->prepare($sql);
    //Hachage mot de passe avant 
    $password = password_hash($password, PASSWORD_DEFAULT);

    $statement->bindParam(":email", $email);
    $statement->bindParam(":password", $password);

    $statement->execute();

    return [
      "success" => true,
      "message" => "Compte utilisateur crée"
    ];

}
  public function login(string $email, string $password)
  {

    global $pdo;
    //Prem
    $sql = " SELECT id_account, email, password
    FROM account
    WHERE email = :email

  ";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":email", $email);
    $statement->execute();
    if ($statement->rowCount() > 0) {
      $statement->setFetchMode(PDO::FETCH_CLASS, "AccountModel");
      $account = $statement->fetch();
    } else {
      return [
        "success" => false,
        "message" => "Email incorrect"
      ];
    }



    // Le mot de passe à vérifier
    //$password = 'password';

    // Le hachage stocké dans la base de données
    // $hashedPassword = '$2y$10$lIzvV7o83jKxMeV7gL3q4uK7eGbsE39uVgRw13nT2VtjKPtCxw1Q2';

    // Vérification du mot de passe
    if (password_verify($password, $account->password)) {

      echo 'Le mot de passe est valide !';
      $_SESSION["email"] = $email;
      header("Location: /portfolio/admin/admin.php");

    } else {
      echo 'Le mot de passe est incorrect.';
    }
  }
  public function isLogged()
  {

    if (isset($_SESSION["email"])) {
// La personne est connnecte
      return true;

    }
else{
      header("Location: /admin/connextion.php");
      return false;
}


  }
}