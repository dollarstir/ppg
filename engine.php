<?php

require 'loader/autoloader.php';


$router = new Router([


    // SIDE BAR ROUTTES ******************************************************
  
    new Route(
        '/',
        function ($context) {
           
            return Viewer::view('app/view/index.php', $context);
        }
    ),


    new Route(
        '/home',
        function ($context) {
           
            return Viewer::view('app/view/index.php', $context);
        }
    ),

    new Route(
        '/about',
        function ($context) {
           
            return Viewer::view('app/view/about.php', $context);
        }
    ),

    new Route(
        '/causes',
        function ($context) {
           
            return Viewer::view('app/view/causes-grid.php', $context);
        }

    ),

    new Route(
        '/volunteer',
        function ($context) {
           
            return Viewer::view('app/view/volunteer-style-one.php', $context);
        }
    ),  


    new Route(
        '/gallery',
        function ($context) {
           
            return Viewer::view('app/view/gallery-style-one.php', $context);
        }
    ),


    new Route(
        '/contactus',
        function ($context) {
           
            return Viewer::view('app/view/contact.php', $context);
        }
    ),

    new Route(
        '/events',
        function ($context) {
           
            return Viewer::view('app/view/events-grid.php', $context);
        }
    ),



     // SIDE BAR ROUTTES ******************************************************


    //  authorization routes *************************************************

    new Route(
        '/login',
        function ($context) {
           
            return Viewer::view('app/view/loginauthenticate.php', $context);
        }
    ),

    new Route(
        '/register',
        function ($context) {
           
            return Viewer::view('app/view/registerauth.php', $context);
        }
    ),

    new Route(
        '/verify-email',
        function ($context) {
           
            return Viewer::view('app/view/verify_email.php', $context);
        }
    ),


    new Route(
        '/verify-phone',
        function ($context) {
           
            return Viewer::view('app/view/verify_phone.php', $context);
        }
    ),

    new Route(
        '/otp',
        function ($context) {
           
            return Viewer::view('app/view/enterotp.php', $context);
        }
    ),

    new Route(
        '/email-verified',
        function ($context) {
           
            return Viewer::view('app/view/email_verified.php', $context);
        }
    ),


    new Route(
        '/worker',
        function ($context) {
           
            return Viewer::view('app/view/processor.php', $context);
        }
    ),




]);

$router->launch();
