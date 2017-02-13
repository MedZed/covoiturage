
<div id="search_form">
    <form action="profile.php?page=3" method="post">
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
        <input type="text" required list="region"  placeholder="De" name="de">
        <input type="text" required list="region"  placeholder="A" name="a">
        <button><i class="fa fa-calendar"></i><input type="date" required name="date" ></button>
        <?php

        ?>
        <input type="submit" name="submit" value="Rechercher">
    </form>
</div>
<br><div id="big_text"><em><i class="fa fa-search"></i> Chercher votre trajet ! </em></div>
<div id="home_img"><br>
    <?php include("../includes/Profile_Resultat_recherche.php");?>
</div>

