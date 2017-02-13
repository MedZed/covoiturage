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
            <input list="region" required type="text"  placeholder="de" name="de"><br>
            <input list="region" required type="text"  placeholder="a" name="a"><br>
            <input type="number" required placeholder="places" name="places" min="1" max="7"><br>
            <input type="number" required placeholder="num-tel" name="num_tel" min="11111111" max="99999999"><br>
            <input type="email" required placeholder="email" name="email" ><br>
            <input type="number" required placeholder="prix" name="prix" min="1" max="300"><br>
            <input type="date" required name="date"><br><br>
            <textarea rows="4" required cols="33" maxlength="150" name="info"></textarea><br>
            <input type="submit" name="submit" value="Publiez">
            <input type="reset" name="reset" value="Annuler">
            </form>
</div>


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


    $sql = "INSERT INTO pub (username,dep,arr,date_p,prix,places,img,info,email,num_tel)
    VALUES ('$user','$de', '$a','$date','$prix' ,'$places','$img','$info','$email','$num_tel')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='text-align:center; color:green; font-size:18px;'><i class='fa fa-check'></i> Publication fait avec succeé <i class='fa fa-check'></i></p>";
        header( "refresh:3;url=profile.php?page=2" );
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
   


}

?>