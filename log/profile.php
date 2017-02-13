
<?php
   include('session.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome-4.6.3/css/font-awesome.css">
    <title>Covoiturage.tn</title>
</head>
<body>
<div id="container">
    <?php include("../includes/profile_header.php"); ?>
    <?php include("../includes/profile_navbar.php"); ?>
    <div id="content">


        <!--DEBUT Code PHP pour fair la gestion des url-->
        <?php
        if(isset($_GET['page'])) {$p=$_GET['page'];

            switch($p){
                case ($p == 1 || $p >8):        
                if(isset($_GET['page']) && isset($_GET['id']) && isset($_GET['h'])) {
                    $h=$_GET['h'];
                    $id=$_GET['id'];
                    $p=$_GET['page'];
                    if($h=='supp'){include("delete.php");}
                    else if($h=='mod'){include("modifier.php");}                    
                }else{include("../pages/profile_acceuil.php");}
                    break;
                    
                case ($p == 2):include("publier.php");
                    break;
                case ($p == 3):include("../pages/profile_cherche.php");
                    break;
                case ($p == 4):include("../pages/logout.php");
                    break;
                case ($p == 5):include("../pages/profile_contact.php");
                    break;
                case ($p == 6):include("../pages/mes_reservations.php");
                    break;
                case (($p == 6) && ($_GET[''])):include("../pages/mes_reservations.php");
                    break;
                case ($p == 7):include("../pages/reserver.php");
                    break;
                case ($p == 8):include("../pages/delete_res.php");
                    break;
                default:include("../pages/profile_acceuil.php");
                    break;
            }




        }else{include("../pages/profile_acceuil.php");}
        ?>
        <!--FIN Code PHP pour fair la gestion des url-->
    </div>
    <?php include("../includes/profile_footer.php"); ?>
</div>


<script src='js/jquery-3.1.0.min.js'></script>
<script src="js/annimation_car.js"></script>
</body>
</html>