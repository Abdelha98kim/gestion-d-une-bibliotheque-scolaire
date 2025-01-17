<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BiblioSchool</title>
    <!-- Google Fonts Links For Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="shortcut icon" href="../Assest/Images/icon-book.png" type="image/x-icon">
    <link rel="stylesheet" href="Assest/src/css/index.css">

  </head>
  <body>
    <header>
      <nav class="navbar">
        <a class="logo" href="#"><span>B</span>iblioSchool</a>
        <ul class="menu-links">
          <span id="close-menu-btn" class="material-symbols-outlined">close</span>
          <li><a href="#">Acceuil</a></li>
          <li><a href="#">Produits</a></li>
          <li><a href="#">À propos de nous</a></li>
          <li><a href="#">Contactez-nous</a></li>
          
        </ul>

        <span id="hamburger-btn" class="material-symbols-outlined">menu</span>
      </nav>
    </header>

    <section class="hero-section">
      <div class="content">
        <h2>Découvrez toutes les nouveautés dans le monde du livre</h2>
        <p>
            Aujourd'hui lecteur, demain leader.
        </p>
        <a href="Services/Login/login.php"><button>Commandez maintenant</button></a>
      </div>
    </section>

    <script>
      const header = document.querySelector("header");
      const hamburgerBtn = document.querySelector("#hamburger-btn");
      const closeMenuBtn = document.querySelector("#close-menu-btn");

      // Toggle mobile menu on hamburger button click
      hamburgerBtn.addEventListener("click", () => header.classList.toggle("show-mobile-menu"));

      // Close mobile menu on close button click
      closeMenuBtn.addEventListener("click", () => hamburgerBtn.click());
    </script>
  </body>
</html>