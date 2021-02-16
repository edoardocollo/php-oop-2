<?php foreach ($posts as $post) {?>
  <div class="post_card">
    <img src="<?php echo $post->img ?>" alt="">
    <h3><?php echo $post->titolo ?></h3>
    <p><?php echo $post->contenuto ?></p>
    <span>Autore: <?php echo $post->autore ?></span>
    <span>Data creazione: <?php echo $post->data_creazione ?></span>
  </div>
<?php } ?>
