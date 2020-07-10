<!DOCTYPE html>
<html>
  <head>
    <title>mini-site-routing</title>
   <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php"> <?php $_GET?> </a>
  </head>
  <body>
    <nav>
    <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1">Accueil </a>
    <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=2">Page 2 </a>
    <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=3">Page 3 </a>
    <a href= "http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=connexion">Connexion </a>
    </nav>

    <?php
    if ($_GET["page"] == "1"){
    echo "<h1> Accueil </h1>";
    }
    elseif ($_GET["page"] == "2"){
    echo "<h1> Page 2 </h1>";
    }
    elseif ($_GET["page"] == "3"){
    echo "<h1> Page 3 </h1>";
    }

    elseif ($_GET["page"] == "connexion"){
      echo "<h1> Connexion </h1>";
      include('connexion.php');
      }
    ?>
    <?php
    if(isset($_SESSION['id'])){
      echo "Login :" . $_SESSION['id'];
    }
    else{
      if(isset($_COOKIE['id'])){
        $_SESSION['id']= $_COOKIE['id'];
        }
      }

    else{
      header('location:http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/connexion');
    }
      ?>
  </body>
  </html>