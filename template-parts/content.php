<?php
?>
<div class="container blog-container">
  <div class="blog-thumbnail">
      <?php the_post_thumbnail('medium', array('class' => 'lesson-post-thumnail')); ?>
      <p class="post-date"><?php the_date() ?></p>
</div>
<div class="blog-content">
    <article>
    <h2> <a  class="blog-post-title" href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h2>
    <p> <?php the_content();?></p>
</article>
</div>
</div>

