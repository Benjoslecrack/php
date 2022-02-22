<?php

require "../repository/UserRepository.php";
$usersRepository = new UserRepository();
$usersRepository->chargementUsers();
print_r($usersRepository->getUsers());

ob_start();

if (isset($_POST) && !empty($_POST)) {
    if(isset($_POST["Email"]) && !empty($_POST["Email"]) && isset($_POST["Password"]) && !empty($_POST["Password"])){
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        foreach($usersRepository->getUsers() as $user){
            if($user->getEmail_user() == $email && $user->getPwd_user() == $password){
                session_start();
                $_SESSION["Email"] = $email;
                $_SESSION["Password"] = $password;
            }
        }
    }
}

print_r($_SESSION);
echo "<br>".$email."<br>";
echo $password."<br>";

?>

<form action="connexion.php" method="POST">
  <fieldset>
    <legend>Formulaire de connexion</legend>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" id="Email" name="Email" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
    </div>
    <fieldset class="form-group">
      <legend class="mt-4">Nouvel utilisateur ?</legend>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
        <label class="form-check-label" for="flexCheckChecked">
          Checked checkbox
        </label>
      </div>
    </fieldset>
    <div>
        <input type="submit" value="Envoyer mes salutations"></button>
    </div>
</form>

<?php

$content = ob_get_clean();
$titre = "connexion";
require "template.php";
?>