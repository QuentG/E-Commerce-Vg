<?php include('./header.php');?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <?php

    include('./head.php');
    ?>

    <title> GamingKeys </title>

</head>

<body>
<!--Liste des jeux-->

<div id="resp_1" class="row">

    <div class="col-sm-3">
        <img class="img-responsive image" src="../img/xboxOne/sport/303.jpg" alt="image du jeux Fast & furious sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/291.jpg" alt="image du jeux F1 2016 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/305.jpg" alt="image du jeux Fifa 18 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/306.jpg" alt="image du jeux Fifa 16 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image" src="../img/xboxOne/sport/314.jpg" alt="image du jeux HandBall 16 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/300.jpg" alt="image du jeux Horse Racing 2016 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/304.jpg" alt="image du jeux Kinect Sports Rivals sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/312.jpg" alt="image du jeux Le tour de France sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image" src="../img/xboxOne/sport/307.jpg" alt="image du jeux Madden 18 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/292.jpg" alt="image du jeux NBA Live 18 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/294.jpg" alt="image du jeux NBA 2K18 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/310.jpg" alt="image du jeux NBA 2K16 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image" src="../img/xboxOne/sport/308.jpg" alt="image du jeux pes 2018 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/296.jpg" alt="image du jeux Rory Mcilroy sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/297.jpg" alt="image du jeux Rugby18 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/293.jpg" alt="image du jeux Rugby Challenge 3 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image" src="../img/xboxOne/sport/309.jpg" alt="image du jeux ShapeUp sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/298.jpg" alt="image du jeux Steep sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/299.jpg" alt="image du jeux the crew sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/302.jpg" alt="image du jeux The Golf Club sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image1" src="../img/xboxOne/sport/311.jpg" alt="image du jeux Tony Hawk's pro skater 5 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image2" src="../img/xboxOne/sport/295.jpg" alt="image du jeux UFC Ultimate fighting championship sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image2" src="../img/xboxOne/sport/301.jpg" alt="image du jeux UFC 2 sur Xbox ONE"/>
    </div>
    <div class="col-sm-3">
        <img class="img-responsive image2" src="../img/xboxOne/sport/313.jpg" alt="image du jeux W2K18 sur Xbox ONE"/>
    </div>

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

