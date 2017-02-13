<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "profile";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pub where username='$login_session' ORDER BY id DESC LIMIT 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) { ?>


<div class="cart" >

<div class="supp"><a title="supprimer" href="profile.php?page=1&h=supp&id=<?php echo $row['id'];?>"><i class="fa fa-times"></i></a></div>

    <div id="thumb"><img src="../<?php echo $row['img'];?>" alt=""></div>

    <div class="prix">
        <p><?php echo $row["prix"];?> DT</p>
    </div>
    <div class="voyageur">
        <p><?php echo $row["username"];?></p>
    </div>
    <div class="discription">
        <p style="text-align: left;" > <?php echo "Email : ".$row["email"]."<br>Num-tel : ".$row["num_tel"]."<br>Info : ".$row["info"];?></p>
    </div>
    <div class="places">
        <p> <?php echo $row["places"];?> Places | <?php echo $row["date_p"];?> | <?php echo $row["dep"];?> <i class="fa fa-arrow-right"></i> <?php echo $row["arr"];?></p>
        <button style="background-color:#34495e ;" ><a style="text-decoration: none; color:#ffffff;" href="profile.php?page=1&h=mod&id=<?php echo $row['id'];?>">Modifier</a></button>
    </div>
</div>


     <?php
    
     }
} else {
     echo "<p style='text-align:center;'>0 publications</p>";
}

$conn->close();




?>

















