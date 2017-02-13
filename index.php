<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.css">
    <title>Covoiturage.tn</title>
</head>
<body>
<div id="container">
    <?php include("includes/header.php"); ?>
    <?php include("includes/navbar.php"); ?>
    <div id="content">

        <!--DEBUT Code PHP pour fair la gestion des url-->
        <?php
        if(isset($_GET['page'])) {$p=$_GET['page'];
            switch($p){
                case ($p == 1 || $p >6):include("pages/acceuil.php");
                    break;
                case ($p == 2):include("pages/login.php");
                    break;
                case ($p == 3):include("pages/recherche.php");
                    break;
                case ($p == 4):include("pages/inscription.php");
                    break;
                case ($p == 5):include("pages/contact.php");
                    break;
                case ($p == 6):include("pages/upload.php");
                    break;
                default:include("pages/acceuil.php");
                    break;
            }
               if(isset($_SESSION['login_user'])){
                    include("pages/profile.php");
                }

        /*    if($p == 1 || $p >5){include("pages/acceuil.php");}
            if($p == 2){include("pages/login.php");}
            if($p == 3){include("pages/recherche.php");}
            if($p == 4){include("pages/inscription.php");}
            if($p == 5){include("pages/contact.php");}*/
        }else{include("pages/acceuil.php");}
        ?>
        <!--FIN Code PHP pour fair la gestion des url-->
    </div>
    <?php include("includes/footer.php"); ?>
</div>


<script src='js/jquery-3.1.0.min.js'></script>
<script src="js/annimation_car.js"></script>
</body>
</html>