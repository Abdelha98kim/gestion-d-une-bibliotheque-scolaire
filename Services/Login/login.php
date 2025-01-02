<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Login & Registration | BiblioSchool </title>
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Assest/Images/icon-book.png" type="image/x-icon">
    <link rel="stylesheet" href="../../Assest/src/css/login-signup.css">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <img src="../../Assest/Images/Books.jpg" alt="">
        <div class="text">
          <span class="text-1">Tant de livres<br> si peu de temps.</span>
          <i><span class="text-2">Frank Zappa</span></i>
        </div>
      </div>
      <div class="back">
        <img class="backImg" src="../../Assest/Images/Books2.jpg" alt="">
        <div class="text">
          <span class="text-1">De bons amis, de bons livres et une conscience tranquille<br> telle est la vie idéale.</span>
          <i><span class="text-2">Mark Twain</span></i>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Se connecter</div>
          <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Entrer Votre email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Entrer Votre password" required>
              </div>
              <div class="text"><a href="#">Mot de passe oublié ?</a></div>
              <div class="button input-box">
                <input type="submit" value="Inscrivez">
              </div>
              <div class="text sign-up-text">Vous n'avez pas de compte ? <label for="flip">Inscrivez-vous maintenant</label></div>
            </div>
        </form>
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="#">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Entrer Votre nom" required>
              </div>
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Entrer Votre Prenom" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Entrer Votre email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Entrer Votre password" required>
              </div>
              <div class="button input-box">
                <input type="submit" value="Connectez">
              </div>
              <div class="text sign-up-text">Vous avez déjà un compte ?<label for="flip">Connectez-vous maintenant</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
</body>
</html>