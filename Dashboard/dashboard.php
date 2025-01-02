<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin | BiblioSchool </title>
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="../Assest/Images/icon-book.png" type="image/x-icon">
     <link rel="stylesheet" href="../Assest/src/css/dashboard.css">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i><img src="../Assest/Images/icon-book.png" alt=""></i>
      <span class="logo_name">BiblioSchool</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <!-- <li>
          <a href="#">
            <i class='bx bx-box' ></i>
            <span class="links_name">Product</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Order list</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-coin-stack' ></i>
            <span class="links_name">Stock</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Total order</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-user' ></i>
            <span class="links_name">Team</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-message' ></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-heart' ></i>
            <span class="links_name">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li> -->
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <i><img src="../Assest/Images/icon-book2.png" alt=""></i>
        <span class="admin_name"><?php echo "Abdelhakim Baalla"?></span>
      </div>
    </nav>

    <div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Ajouter Un livre</div>
          <div class="sales-details">
          <form action="#" class="form">
        <div class="input-box">
          <label>Titre</label>
          <input type="text" placeholder="Titre de livre" required />
        </div>
        <div class="input-box">
          <label>Auteur</label>
          <input type="text" placeholder="Auteur de livre" required />
        </div>
        <div class="input-box">
            <label>Date de Creation</label>
            <input type="date" placeholder="Date de creation de livre" required />
          </div>
        <div class="column">
          <div class="input-box">
            <label>Prix</label>
            <input type="number" placeholder="Prix de livre" required />
          </div>
          <div class="input-box">
            <label>Quantité</label>
            <input type="number" placeholder="La quantité dans le stock" required />
          </div>
        </div>
        <div class="input-box">
            <label>Serial</label>
            <input type="text" placeholder="Serial" required />
          </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div style="display:flex !important; justify-content:space-between; padding:0 15px 0 0; align-items:center">
            <input type="text" placeholder="Tags" style="height:50px; width: 500px; border: 1px solid #707070; border-radius: 10px; padding:5px 16px">
            <div style="cursor:pointer; border:1px solid #707070; height:50px; width: 50px; display:flex; align-items:center; justify-content:center; border-radius:100%">+</div>
          </div>
        </div>
        <div class="input-box address">
          <label>Categorie</label>
          <div class="column">
            <div class="select-box">
              <select>
                <option></option>
                <option>Sience</option>
                <option>Philosophie</option>
                <option>Action et aventure</option>
                <option>Fantaisie</option>
                <option>Romance</option>
              </select>
            </div>
          </div>
        </div>
        <button>Submit</button>
      </form>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Les Utilisateur</div>
          
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>