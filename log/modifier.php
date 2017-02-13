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

$sql = "SELECT * FROM pub where id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) { ?>


<div id="publier">
            <form  method="post">
            <h1>Publiez</h1>
            <datalist id="region">
                <option value="Ariana">
                <option value="Béja">
                <option value="Gabès">
                <option value="Gafsa">
                <option value="Jendouba">
                <option value="Sousse">
                <option value="Tataouin">
                <option value="Tozeur">
                <option value="Gafsa">
                <option value="Tunis">
                <option value="Zagouan">
            </datalist>
            <input list="region" type="text" required placeholder="de" name="de" value="<?php echo $row['dep'];?>"><br>
            <input list="region" type="text" required placeholder="a" name="a" value="<?php echo $row['arr'];?>"><br>
            <input type="number" required placeholder="places" name="places" min="1" max="7" value="<?php echo $row['places'];?>"><br>
            <input type="number" required placeholder="num-tel" name="num_tel" min="11111111" max="99999999"
            value="<?php echo $row['num_tel'];?>" ><br>
            <input type="email" required placeholder="email" name="email" value="<?php echo $row['email'];?>"><br>
            <input type="number" required  placeholder="prix" name="prix" min="1" max="300" value="<?php echo $row['prix'];?>"><br>
            <input type="date" required name="date" value="<?php echo $row['date'];?>"><br><br>
            <textarea rows="4" required cols="33" maxlength="150" name="info" ><?php echo $row['info'];?></textarea><br>
            <input type="submit" name="submit" value="Modifier">
            <input type="reset" name="reset" value="Annuler">
            </form>
</div>

<?php  }}  ?>



<?php

if(isset($_POST["submit"])){
    $de=$_POST["de"];
    $a=$_POST["a"];
    $places=$_POST["places"];
    $prix=$_POST["prix"];
    $info=mysql_real_escape_string($_POST["info"]);
    $date=$_POST["date"];
    $email=$_POST["email"];
    $num_tel=$_POST["num_tel"];
    $user=$login_session; 

 
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


    $sql = "SELECT  img FROM login WHERE username='$user'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $img=$row["img"];
            
        }
    } else {
        echo "Erreur de selectioner image de profile";
    }


    $sql = " UPDATE pub set username='$user',dep='$de',arr='$a',date_p='$date',prix='$prix',places='$places',info='$info',email='$email',num_tel='$num_tel'
    WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {

        header( "refresh:0;url=profile.php?page=1" );
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
   


}

?>