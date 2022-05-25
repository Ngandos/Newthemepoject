<?php
    include '../parts/header.php';
    include __DIR__. '/../lib/functions.php';
?>
<title>Contacts</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../headstyle.css">
<style>
    h2 {
        text-align: center;
            }

    h3 {
        font-weight: bold;
            }

    section {
        width: 98%;
        margin: auto;
        display: flex;
        flex-direction: row;
            }

    .crepict{
        margin-left: 25%;
        width: 50%;
            }

    aside, article {
        width: 50%;
        color: black;
        background-color: whitesmoke;
        opacity: 0.7;
        border: black solid 1px;
            }

    article {
        padding: auto;
        padding-top: 5%;
        text-align: center;
            }
    .ArticleP {
        width: 90%;
        padding-top: 1%;
        margin: auto;
        font-size: x-large;
            }

    #Fa {
        width: 10%;
        height: 10%;
            }

    .sce {
        font-weight: bold;
    }
</style>
<?php
    getPart('menu');
?>
<h1>Contacts</h1>
<section>
    <aside>
        <h2>Contact</h2>
        <img class="crepict" src="../Images/IdVis/IMG_0576.PNG" title="WAKANDA">
    </aside>
    <article>
        <div class="ArticleP">
            <span class="sce">WAKANDA-DEVELOPPEMENT</span><br>
            <span class="sce">Contact :</span> <span>Mr ABDOULAYE Bognoua - Roland</span><br>
            <span class="sce">Address:</span> <span> 12 Rue des étangs <strong>(Les Saules)</strong></span><br>
            <span>62870 ROUSSENT</span><br>
            <span class="sce">Téléphone : </span> <span>+33.7.82.19.68.44</span><br>
            <span class="sce">Courriel :</span> <span> Contact@wakanda.fr</span><br>
        </div>
        <div class="networks">
            <h3>Follow Us on :</h3>
            <a href="https://www.facebook.com/wakandais/" class="facebook"><i class="fa fa-facebook" id="Fa"></i></a> 
            <a href="#" class="twitter"><i class="fa fa-twitter" id="Fa"></i></a> 
            <a href="#" class="google"><i class="fa fa-google" id="Fa"></i></a> 
            <a href="https://www.instagram.com/bognoua.wakanda/" class="instagram"><i class="fa fa-instagram" id="Fa"></i></a>
        </div>
    </article>
</section>
<?php
    include '../parts/footer.php';
?>