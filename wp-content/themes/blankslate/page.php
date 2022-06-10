<?php get_header(); ?>
<main id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">

</header>
<div class="entry-content" itemprop="mainContentOfPage">
    
<?php if ( has_post_thumbnail() ): ?>
    <div class="section hero" style="background-image: url('<?php the_post_thumbnail_url( 'full', array( 'itemprop' => 'image' ) ); ?> ');">  
<?php else: ?>
    <div class="section hero" >  
<?php endif?>
    <div class="container half-height">
        <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
        <h2><?php the_field( 'subtitle' ); ?></h2>
    </div>
</div>
<div class="section">
    <div class="container">
        <?php the_content(); ?>
    </div>
</div>

<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>