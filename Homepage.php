<?php 
	
/*
	Template Name: Homepage
*/
get_header(); ?>



<div class="container">

<main role="main">
    <article class="article-featured">
        <h2 class="article-title"></h2>
        <img src="" alt="" class="article-image">
        <p class="article-info"></p>
        <p class="article-body"></p>
        <a href="#" class="article-read-more"></a>
    </article>
    <article class="article-recent">
        <?php
        query_posts('showposts=3');
        $ids = array();
     while (have_posts()) : the_post();
        $ids = get_the_ID();
        get_template_part('template-parts/content', get_post_format()); 
    endwhile;
        ?>

    </article>
    <article class="article-recent" >

    </article>
    <article class="article-recent" >

    </article>
</main>
<aside class="sidebar">
    <div class="sidebar-widget">

</div>
<div class="sidebar-widget">


</div>

</aside>
</div>

<?php get_footer() ?>

