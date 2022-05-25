<?php
    include '../parts/header.php';
    include __DIR__. '/../lib/functions.php';
?>
<title>Credits</title>
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="../headstyle.css">
<style>
    h2 {
        text-align: center;
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
        margin: auto;
            }

    #Fa {
        width: 10%;
        height: 10%;
            }
</style>
<?php
    getPart('menu');
?>
<br>
<h1>New Theme Project</h1><br>
<section>
    <aside>
        <h2>Credits</h2>
        <img class="crepict" src="../Images/IdVis/IMG_0576.PNG" title="WAKANDA">
    </aside>
    <article>
        <div class="ArticleP">
            <p>This interface developped by WAKANDA is our second interface model</p>
            <p>As we explained before our tasks spinning around web interface conception.</p>
            <p>As a C.M.S software we propose numbers basic interface who allowed us to let yo get a comlete project for reasoneable costs.</p>
            <p>Wakanda Developpement is a cooperative of many developpers runnig the same project allow poeple to have a profesional event personal web interface.</p>
            <p>this interface is our first witness interface, going trought the time we want to improve the number of basics interfaces proposals</p>
            <p>Adapted to all configuration systems also to all activities.</p>
        </div>
        <div class="networks">
            <h3>Follow Us On :</h3>
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