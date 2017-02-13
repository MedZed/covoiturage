<div id="search_form">
    <form action="index.php?page=3" method="post">
        <input type="text" required   placeholder="De" name="de">
        <input type="text" required placeholder="A" name="a">
        <button><i class="fa fa-calendar"></i><input type="date" required name="date" ></button>
        <?php

        ?>
        <input type="submit" name="submit" value="Rechercher">
    </form>
</div>
<br><div id="big_text"><em><i class="fa fa-search"></i> Chercher votre trajet. </em></div>
<div id="home_img"><br>
    <?php include("includes/Resultat_recherche.php");?>
</div>

