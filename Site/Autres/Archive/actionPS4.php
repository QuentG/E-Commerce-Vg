<?php
include('./header.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <?php

    include ('./head.php');

    ?>

</head>

<body>
    <!--Liste des jeux-->
    <div id="resp_1" class="row">
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/action/126.jpg" alt="image du jeux Ark: Survival Evolved sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/122.jpg" alt="image du jeux Assassin's Creed Origins sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/138.jpg" alt="image du jeux Battlefront 2 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/132.jpg" alt="image du jeux Call of duty  WW II sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/action/133.jpg" alt="image du jeux Dark Souls III sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/120.jpg" alt="image du jeux Dark Souls II sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/131.jpg" alt="image du jeux destiny 2  sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/134.jpg" alt="image du jeux dishonored 2 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/action/135.jpg" alt="image du jeux far cry 5 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/141.jpg" alt="image du jeux final fantasy 12 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/121.jpg" alt="image du jeux Fortnite sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/128.jpg" alt="image du jeux Ghost Recon Wildlands sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/action/136.jpg" alt="image du jeux GTA 5 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/139.jpg" alt="image du jeux hellblade sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/125.jpg" alt="image du jeux Horizon Zero Dawn sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/140.jpg" alt="image du jeux la terre du milieu l'ombre de la guerre sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image" src="../img/ps4/action/137.jpg" alt="image du jeux Metal Gear Survive sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/123.jpg" alt="image du jeux Nier: Automata sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/119.jpg" alt="image du jeux overwatch sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/130.jpg" alt="image du jeux Rainbow Six: Siege sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image1" src="../img/ps4/action/118.jpg" alt="image du jeux Uncharted 4 sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/action/129.jpg" alt="image du jeux Uncharted: The Lost Legacy sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/action/124.jpg" alt="image du jeux Watch Dogs sur PS4"/>
        </div>
        <div class="col-sm-3">
            <img class="img-responsive image2" src="../img/ps4/action/127.jpg" alt="image du jeux Wolfenstein II: The New Colossus sur PS4"/>
        </div>
    </div>

    <?php include('footer.php'); ?>


</body>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">
    /*début de la nav bar*/
    $(function() {
        // Affichage du sous menu en douceur
        jQuery('ul.nav li.dropdown').hover(function() {
            jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
        }, function() {
            jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
        });

    });
    /*fin de la nav bar*/
    /*début slider*/
    $(function(){
        setInterval(function(){
            $(".slideshow ul").animate({marginLeft:-350},800,function(){
                $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
            })
        }, 3500);
    });


</script>

</html>

