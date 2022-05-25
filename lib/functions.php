<?php
    function getContent(){
        if(!isset($_GET['page'])){
            include __DIR__.'/../Pages/home.php';
            }
        else {
            switch($_GET['page']){
                case "home" :
                    include __DIR__.'/../Pages/home.php';
                break;
                case "book" :
                    include __DIR__. '/../Pages/book.php';
                break;
                case "models" :
                    include __DIR__. '/../Pages/models.php';
                break;
                case "credits" :
                    include __DIR__. '/../Apropos/credits.php';
                break;
                case "contacts" :
                    include __DIR__. '/../Apropos/contacts.php';
                break;
                case "contacts" :
                    include __DIR__. '/../contacts.php';
                break;
                        }
                }
        }
    function getPart($name){
        include __DIR__. '/../parts/' .$name. '.php';
            }