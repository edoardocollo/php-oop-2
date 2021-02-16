<?php foreach ($profili as $profilo) { ?>

  <div class="user_card">
    <img src="<?php echo $profilo->img ; ?>" alt="">
    <h2><?php echo $profilo->id_utente ; ?></h2>
    <span>Nome: <?php echo $profilo->nome ; ?></span>
    <span>Cognome: <?php echo $profilo->cognome ; ?></span>
    <span>Paese: <?php echo $profilo->paese ; ?></span>
    <span>Citta': <?php echo $profilo->citta ; ?></span>
    <span>Mail: <?php echo $profilo->mail ; ?></span>
    <span>Skills: <?php echo $profilo->skills ; ?></span>
  </div>

<?php  } ?>
