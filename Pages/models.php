<?php
    include '../parts/header.php';
    include __DIR__. '/../lib/functions.php';
?>
<title>Models</title>
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

    .networks{
        margin: auto;
        padding-left: 40%;
        margin-bottom: 5%;
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
<h1>Models</h1>
<section>
    <aside>
        <h2>Credits</h2>
        <img class="crepict" src="../Images/IdVis/IMG_0576.PNG" title="WAKANDA">
        <div class="networks">
            <h3>Follow Us On :</h3>
            <a href="https://www.facebook.com/wakandais/" class="facebook"><i class="fa fa-facebook" id="Fa"></i></a> 
            <a href="#" class="twitter"><i class="fa fa-twitter" id="Fa"></i></a> 
            <a href="#" class="google"><i class="fa fa-google" id="Fa"></i></a> 
            <a href="https://www.instagram.com/bognoua.wakanda/" class="instagram"><i class="fa fa-instagram" id="Fa"></i></a>
        </div>
    </aside>
    <article>
        <div class="ArticleP">
            
        </div>   
    </article>
</section>
<?php
    include '../parts/footer.php';
?>