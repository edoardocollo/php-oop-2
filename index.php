<?php

// INCLUDO CLASSE UTENTE
include 'assets/php/utente.php';
// INCLUDO CLASSE PROFILO
include 'assets/php/profilo.php';
// INCLUDO CLASSE POST
include 'assets/php/post.php';
// GENERO 10 UTENTI RANDOM
include 'assets/php/randomUsers.php';
include 'assets/php/randomPosts.php';


// var_dump($posts);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <div class="main_wrap">
      <h2>utenti:</h2>
      <?php
        include 'assets/php/print_users.php';
       ?>
       <h2>posts:</h2>
       <?php

        include 'assets/php/print_posts.php';

        ?>
    </div>


  </body>
</html>
