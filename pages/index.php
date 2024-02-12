<!DOCTYPE html>
<html lang="fr">
<?php require_once("../config.php");?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/styles.css">
  <title>Connexion - RetailCoop</title>
</head>

<body>
  <div class="container">
    <div class="logo-container">
      <img src="..\img\RretailCoop logo avec baseline.png" alt="Logo RetailCoop">
      
    </div>

    <div class="login-container">
        <div class="login-header">
            <h2>Connexion</h2>
        </div>

        <div class="login-form">
        <form method="post" id="loginForm" action="../action/login.php">
          <div class="input-group">
            <label for="email">Login</label>
            <input type="text" id="email" name="email" placeholder="Mon login">
          </div>

          <div class="input-group">
            <label for="language">Version</label>
            <select id="language" name="language">
              <option value="fr">Français</option>
              <option value="en">English</option>
            </select>
          </div>

          <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe">
          </div>

          <div class="password-reset">
          <?php
          if(isset($_SESSION["error"])) {
                echo "<div class='left red-text'>" . $_SESSION["error"] . "</div>";
                unset($_SESSION["error"]);
          }
            ?>
            <a href="https://myklee3d.com/home/?menu=forgot_pass" target="_blank">Mot de passe oublié?</a>
          </div>

          <div class="form-footer">
            <button type="button" id="cancelButton">Annuler</button>
            <button type="submit" id="submitButton">Oui</button>
          </div>
        </form>
      </div>


    </div>


  </div>
</body>

</html>
