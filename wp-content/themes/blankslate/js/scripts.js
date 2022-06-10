$(document).ready(function(){

    var link = document.querySelector("link[rel~='icon']");
    if (!link) {
        link = document.createElement('link');
        link.rel = 'icon';
        document.getElementsByTagName('head')[0].appendChild(link);
    }
    link.href = '/assets/images/red-shogun-logo.png';
    // do jQuery
    $('.social-links').append('<a target="_blank" href="https://www.twitter.com/ShogunAsh"><p class="twiter-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg> /ShogunAsh</p></a>');
    $('.social-links').append('<a target="_blank" href="https://www.twitch.tv/ShogunAshLive"><p class="twitch-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitch"><path d="M21 2H3v16h5v4l4-4h5l4-4V2zm-10 9V7m5 4V7"></path></svg> /ShogunAshLive</p></a>');
    $('#contact-cta').append('<div class="container"><h2>Have a word!</h2><p>Keen to get in touch and discuss content?</p><p><a class="button" href="/contact">Contact Shogun Ash</a></p></div>');
    $("p:contains('@mention')").html(function(_, html) {
        return html.replace(/(@mention)/g, '<a target="_blank" href="https://twitter.com/intent/tweet?text=Hey%20%40ShogunAsh!">@mention</a>');
    });
    $("p:contains('[email-button]')").html(function(_, html) {
        return html.replace(/(\[email-button\])/g, '<a class="button" target="_blank" href="mailto:shogunthegamer@gmail.com">Send me an email</a>');
    });
    $("p:contains('send me an email')").html(function(_, html) {
        return html.replace(/(send me an email)/g, '<a class="button" target="_blank" href="mailto:shogun@shogunash.com">Send me an email</a>');
    });
    $("p:contains('DM request')").html(function(_, html) {
        return html.replace(/(DM request)/g, '<a target="_blank" href="https://twitter.com/messages/compose?recipient_id=214826770&text=Hello%20Shogun" data-screen-name="@ShogunAsh">DM Request</a>');
    });

    
    $('.menu-toggle').click(function(){
        $('#menu').toggle();
    });
 });