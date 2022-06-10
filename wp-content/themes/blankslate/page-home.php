<?php /* Template Name: Homepage Template */ ?>
<?php get_header(); ?>
<main id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">

</header>
<div class="entry-content" itemprop="mainContentOfPage">
    
    <div id="home-splash" class="section">
        <div class="container full-height">
            <h1>Shogun Ash</h1>
            <h2>I am a Content Creator...</h2>
            <p>...Twitch Stream Raider, Hot Wing Eater, Pokemon Sweeper, Gengar Jumper, Not Enough Sleeper...</p>
            <div class="social-links u-max-full-width"></div>
        </div>
    </div>
    <div class="section" id="content-types">
        <div class="container">
            <h2>Content Types</h2>
            <div class="row">
                <div class="four columns">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        <br>
                        Sponsored Content
                    </p>
                </div>
                <div class="four columns">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash"><line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line><line x1="10" y1="3" x2="8" y2="21"></line><line x1="16" y1="3" x2="14" y2="21"></line></svg>
                        <br>
                        Social Media Content
                    </p>
                </div>
                <div class="four columns">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                        <br>
                        Charity Content
                    </p>
                </div>
            </div>
            
        </div>
    </div>
    <div class="section" id="brands">
        <div class="container">
            <h2>Worked with:</h2>
            <div class="row">
                <div class="four columns">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Konami_4th_logo_2.svg/800px-Konami_4th_logo_2.svg.png" alt="Konami">
                    <p>Konami</p>
                </div>
                <div class="four columns">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/EA-Logo.svg/800px-EA-Logo.svg.png" alt="Electronic Arts / EA Games">
                    <p>Electronic Arts</p>
                </div>
                <div class="four columns">
                    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/43/Cancer_Research_UK.svg/800px-Cancer_Research_UK.svg.png" alt="Cancer Research UK">
                    <p>Cancer Research UK</p>
                </div>
                <div class="four columns">
                    <img src="https://images.jg-cdn.com/image/e0593373-1171-4d4a-846b-25701d301201.png" alt="CALM">
                    <p>CALM</p>
                </div>
                <div class="four columns">
                    <img src="https://cdn.freebiesupply.com/images/large/2x/gamespot-logo-transparent.png" alt="Gamespot">
                    <p>Gamespot</p>
                </div>
            </div>
            
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