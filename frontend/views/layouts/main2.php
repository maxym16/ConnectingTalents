<?php

/**
 * OPEN 2.0
 * @package    lispa\amos\basic\template
 */

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en-US" class="no-js" xmlns="http://www.w3.org/1999/xhtml" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"><head>
        <meta charset="UTF-8">
        
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="http://www.connectingtalents.org/xmlrpc.php">
        <link rel="shortcut icon" href="http://www.connectingtalents.org/wp-content/uploads/2016/07/faviconconnect.png"/>        <title>Connecting Talents &#8211; To connect your own talents &#8230;</title>
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='dns-prefetch' href='//platform.vine.co' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Connecting Talents &raquo; Feed" href="http://www.connectingtalents.org/feed/" />
<link rel="alternate" type="application/rss+xml" title="Connecting Talents &raquo; Comments Feed" href="http://www.connectingtalents.org/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/www.connectingtalents.org\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.1"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b===c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<!--		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style> -->
<link rel='stylesheet' id='contact-form-7-css'  href='http://www.connectingtalents.org/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='cookie-bar-css-css'  href='http://www.connectingtalents.org/wp-content/plugins/cookie-bar/css/cookie-bar.css?ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='http://www.connectingtalents.org/wp-content/plugins/revslider/public/assets/css/settings.css?ver=5.2.6' type='text/css' media='all' />
<!--<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>-->
<link rel='stylesheet' id='wpsm_team_b-font-awesome-front-css'  href='http://www.connectingtalents.org/wp-content/plugins/team-builder/assets/css/font-awesome/css/font-awesome.min.css?ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='wpsm_team_b_bootstrap-front-css'  href='http://www.connectingtalents.org/wp-content/plugins/team-builder/assets/css/bootstrap-front.css?ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='wpsm_team_b_team1-css'  href='http://www.connectingtalents.org/wp-content/plugins/team-builder/assets/css/team1.css?ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='wpsm_team_b_team2-css'  href='http://www.connectingtalents.org/wp-content/plugins/team-builder/assets/css/team2.css?ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='team_front_style-css'  href='http://www.connectingtalents.org/wp-content/plugins/team/css/style.css?ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='single-team-member-css'  href='http://www.connectingtalents.org/wp-content/plugins/team/assets/front/css/single-team-member.css?ver=4.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/css/bootstrap.min.css?ver=3.3.5' type='text/css' media='all' />
<link rel='stylesheet' id='corpia-ut-base-css'  href='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/css/base.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='corpia-ut-core-css'  href='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/css/corpia-ut.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='corpia-ut-menu-css'  href='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/css/menu.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='corpia-ut-vc-elements-css'  href='http://www.connectingtalents.org/wp-content/plugins/corpia-ut-vc-add-on/vc-extend/assets/css/vc-elements.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://www.connectingtalents.org/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=4.12' type='text/css' media='all' />
<link rel='stylesheet' id='ionicons-css'  href='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/css/ionicons.min.css?ver=2.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/css/animate.css?ver=3.5.1' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-transitions-css'  href='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/css/owl.transitions.css?ver=1.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='corpia-ut-responsive-css'  href='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/css/responsive.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='prettyphoto-css'  href='http://www.connectingtalents.org/wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min.css?ver=4.12' type='text/css' media='all' />
<link rel='stylesheet' id='corpia-ut-style-css'  href='http://www.connectingtalents.org/wp-content/themes/corpia/style.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='twitterfeed-css'  href='http://www.connectingtalents.org/wp-content/plugins/wd-twitter-feed/assets/css/twitter-feed.min.css?ver=2.1.12' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='http://www.connectingtalents.org/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=4.12' type='text/css' media='all' />
<link rel='stylesheet' id='redux-google-fonts-ut_get_options-css'  href='http://fonts.googleapis.com/css?family=Libre+Baskerville%3A400%2C400italic%7CMontserrat%3A400&#038;ver=1488217773' type='text/css' media='all' />

<script type='text/javascript' src='http://www.connectingtalents.org/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/cookie-bar/js/cookie-bar.js?ver=1503945476'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/respondjs/js/respond.min.js?ver=1.4.2'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js?ver=5.2.6'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js?ver=5.2.6'></script>

<script type='text/javascript'>
/* <![CDATA[ */
var team_ajax = {"team_ajaxurl":"http:\/\/www.connectingtalents.org\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/team/js/scripts.js?ver=4.8.1'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/team/js/masonry.pkgd.min.js?ver=4.8.1'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/js/html5.js?ver=3.6.0'></script>
<![endif]-->
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/js/smoothscroll.js?ver=0.9.9'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/js/theai-sticky-sidebar.js?ver=1.3.0'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/js/search.js?ver=1.0.2'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/js/scripts.js?ver=1.0.2'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/js/corpia-ut-script.js?ver=1.0.2'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/js/customjs.js?ver=4.8.1'></script>
<link rel='https://api.w.org/' href='http://www.connectingtalents.org/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.connectingtalents.org/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.connectingtalents.org/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.8.1" />
<link rel="canonical" href="http://www.connectingtalents.org/" />
<link rel='shortlink' href='http://www.connectingtalents.org/' />
<link rel="alternate" type="application/json+oembed" href="http://www.connectingtalents.org/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.connectingtalents.org%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://www.connectingtalents.org/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.connectingtalents.org%2F&#038;format=xml" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://www.connectingtalents.org/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="http://www.connectingtalents.org/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.2.6 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
        <style type="text/css" id="corpia-ut-inline-css">
        
@media (min-width: 960px) {
.corpia-ut-content > .container {
max-width: 1170px;
}}
.ut-svg-container {margin-top: 15px;margin-bottom: 10px;}            /* Core */
            /* Font family */
            /* Heading title font family */
            /* 1. Primary Color */
            /* 1.1. Color */
            /* 1.2. Border Color */
            /* 1.2.1. Border Color */
            /* 1.2.2. Border Top Color */
            /* 1.2.3. Border Right Color */
            /* 1.2.4. Border Bottom Color */
            /* 1.2.5. Border Left Color */
            /* 1.3. Background Color */
            /* 1.3.1. Background Color */
            /* 1.3.2. Background rgba Color */
            /* 1.3.2.1. Background rgba 0.8 */
            /* 2. Heading title color */
            /* 2.1. Color */
            /* 2.2. Background Color */
            /* 2.2.1. Background rgba 0.8 */
            /* 2.3. Background & Border Color */
            /* 3. SVG */
            /* 4. Widget */
            /* 5. Core Other */
                                
            /*---------- Core ----------*/
            body.header-large .corpia-ut-header-container,
            body.header-small .corpia-ut-header-container {
                height: 90px;
            }

                        body.header-large div.corpia-ut-header-container.logo-top-center {
                    height: 90px;
                }
        
                        body.header-small div.corpia-ut-header-container.logo-top-center {
                    height: 0px;
                }
        
            body.header-large div.corpia-ut-header-container.logo-top-center .ltc-height {
                height: 90px;
            }

            body.header-small div.corpia-ut-header-container.logo-top-center .ltc-height {
                height: 90px;
                margin-top: -90px;
            }

                        body.header-large div.corpia-ut-header-container.logo-top-center .ltc-menu-height,
                body.header-small div.corpia-ut-header-container.logo-top-center .ltc-menu-height {
                    height: 0px;
                }
        
                        body.fheader-none .corpia-ut-header-container,
                body.fheader-scrollup .corpia-ut-header-container.absolute {
                    position: relative;
                }
        
                        body.fheader-fixed #corpia-ut-main {
                    margin-top: -90px;
                }
        
            .corpia-ut-title {
                            height: 200px;
                        width: 100%;
                            padding-top: 0px;
                    }

            .corpia-ut-title {
                            background-repeat: no-repeat;
                                background-attachment: inherit;
                                background-position: center center;
                                background-size: cover;
                        border:0;
            }

            body.pt-light .corpia-ut-title {
                background-color: #f9f9f9;
            }

            body.pt-dark .corpia-ut-title {
                background-color: #2d3538;
            }

            body,
            .menu-elements-container > .menu > li > a,
            .corpia-ut-post-sharebox .facebook-share > a,
            .corpia-ut-post-sharebox .twitter-share > a,
            .corpia-ut-post-sharebox .googleplus-share > a,
            .contact-info-widget a {
                color: #808080;
            }

            body {
                font-family: Libre Baskerville, Helvetica, Arial, serif;
                font-size: 13px;
                font-style: normal;
                font-weight: 400;
                letter-spacing: -0.025em;
            }
            
            /*---------- Visual Composer Padding Options ----------*/
            /*---------- Top Padding ----------*/
            .corpia-ut-top-padding-0x {
                padding-top: 0px;
            }
            .corpia-ut-top-padding-1x {
                padding-top: 15px;
            }
            .corpia-ut-top-padding-2x {
                padding-top: 30px;
            }
            .corpia-ut-top-padding-3x {
                padding-top: 45px;
            }
            .corpia-ut-top-padding-4x {
                padding-top: 60px;
            }
            .corpia-ut-top-padding-5x {
                padding-top: 75px;
            }
            .corpia-ut-top-padding-6x {
                padding-top: 90px;
            }
            .corpia-ut-top-padding-7x {
                padding-top: 105px;
            }
            .corpia-ut-top-padding-8x {
                padding-top: 120px;
            }
            .corpia-ut-top-padding-9x {
                padding-top: 135px;
            }
            .corpia-ut-top-padding-10x {
                padding-top: 150px;
            }
            /*---------- Bottom Padding ----------*/
            .corpia-ut-bottom-padding-0x {
                padding-bottom: 0px;
            }
            .corpia-ut-bottom-padding-1x {
                padding-bottom: 15px;
            }
            .corpia-ut-bottom-padding-2x {
                padding-bottom: 30px;
            }
            .corpia-ut-bottom-padding-3x {
                padding-bottom: 45px;
            }
            .corpia-ut-bottom-padding-4x {
                padding-bottom: 60px;
            }
            .corpia-ut-bottom-padding-5x {
                padding-bottom: 75px;
            }
            .corpia-ut-bottom-padding-6x {
                padding-bottom: 90px;
            }
            .corpia-ut-bottom-padding-7x {
                padding-bottom: 105px;
            }
            .corpia-ut-bottom-padding-8x {
                padding-bottom: 120px;
            }
            .corpia-ut-bottom-padding-9x {
                padding-bottom: 135px;
            }
            .corpia-ut-bottom-padding-10x {
                padding-bottom: 150px;
            }
            
            @media (max-width: 991px) {
                .corpia-ut-top-padding-0x {
                    padding-top: 0px;
                }
                .corpia-ut-top-padding-1x {
                    padding-top: 7px;
                }
                .corpia-ut-top-padding-2x {
                    padding-top: 14px;
                }
                .corpia-ut-top-padding-3x {
                    padding-top: 21px;
                }
                .corpia-ut-top-padding-4x {
                    padding-top: 28px;
                }
                .corpia-ut-top-padding-5x {
                    padding-top: 35px;
                }
                .corpia-ut-top-padding-6x {
                    padding-top: 42px;
                }
                .corpia-ut-top-padding-7x {
                    padding-top: 49px;
                }
                .corpia-ut-top-padding-8x {
                    padding-top: 56px;
                }
                .corpia-ut-top-padding-9x {
                    padding-top: 63px;
                }
                .corpia-ut-top-padding-10x {
                    padding-top: 70px;
                }
                /*---------- Bottom Padding ----------*/
                .corpia-ut-bottom-padding-0x {
                padding-bottom: 0px;
                }
                .corpia-ut-bottom-padding-1x {
                    padding-bottom: 7px;
                }
                .corpia-ut-bottom-padding-2x {
                    padding-bottom: 14px;
                }
                .corpia-ut-bottom-padding-3x {
                    padding-bottom: 21px;
                }
                .corpia-ut-bottom-padding-4x {
                    padding-bottom: 28px;
                }
                .corpia-ut-bottom-padding-5x {
                    padding-bottom: 35px;
                }
                .corpia-ut-bottom-padding-6x {
                    padding-bottom: 42px;
                }
                .corpia-ut-bottom-padding-7x {
                    padding-bottom: 49px;
                }
                .corpia-ut-bottom-padding-8x {
                    padding-bottom: 56px;
                }
                .corpia-ut-bottom-padding-9x {
                    padding-bottom: 63px;
                }
                .corpia-ut-bottom-padding-10x {
                    padding-bottom: 70px;
                }
            }

            .entry-meta .author,
            .entry-meta .date,
            .entry-meta .categories-links,
            .post-share-text {
                font-family: Libre Baskerville;
                font-size: 11px;
                font-weight: 400;
                font-style: italic;
                color: #808080;
                letter-spacing: 0em;
            }

            /*---------- Font family ----------*/
            .btn,
            button,
            .ut-woo-button a,
            .wc-proceed-to-checkout a,
            input[type="submit"],
            .member-pos,
            blockquote,
            .corpia-ut-milestones-count,
            .milestones-title,
            .wpcf7-form-control.cancel-btn,
            .wpcf7-form-control.wpcf7-submit,
            .testimonial-main div p.testimonial-pos,
            input.wpcf7-form-control.wpcf7-text::-moz-placeholder,
            textarea.wpcf7-form-control.wpcf7-textarea::-moz-placeholder,
            .member-content .member-pos,
            .member-image .image-overlay .member-title .member-pos,
            .testimonial-main p.testimonial-pos,
            .testimonial-main div a.twitter-location,
            .image-overlay .column-blog-cat {
                font-family: Libre Baskerville;
            }

            .corpia-ut-header-container .sf-menu > li.menu-item > a {
                font-family: Montserrat;
                font-size: 12px;
                font-weight: 400;
                font-style: normal;
                letter-spacing: 0em;
                text-transform: uppercase;
                line-height: normal;
            }

            /*---------- Heading title font family ---------- TODO*/
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            .pricing-header .pricing-table-description,
            .comment-meta,
            .abs-meta .meta-date,
            .sticky-post,
            .image-overlay .column-blog-title,
            #comments .comments-title,
            comment-reply-title,
            .newsletter-form label,
            ul.sf-menu,
            .share-text,
            .header-widget-btn,
            #wp-calendar caption,
            .corpia-ut-mobile-menu-container ul,
            .testimonial-content > span,
            .corpia-ut-filters a,
            .corpia-ut-author .author-name > a,
            .corpia-ut-callout,
            .corpia-ut-progress .vc_single_bar .vc_label_units,
            .corpia-ut-progress.vc_progress_bar .vc_single_bar .vc_label,
            .testimonial-content .testimonial-title,
            .testimonial-main div p.testimonial-name,
            .comment-respond p.comment-reply-title,
            .site-copy,.corpia-ut-tooltip {
                font-family:     Montserrat, "Helvetica Neue", Helvetica, sans-serif;
                font-style:      normal;
                font-weight:     400;
                text-transform:  capitalize;
                line-height:     1.2em;
                letter-spacing:  -0.025em;
            }
                                    
            .corpia-ut-toggle .vc_toggle_title a.toggle-header,
            .corpia-ut-accordion.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header a,
            /* Circle Chart */
            .corpia-ut-circle-chart-inner,
            .meta-subtitle,
            .corpia-ut-tabs ul.wpb_tabs_nav li a,
            .testimonial-main p.testimonial-name,
            .testimonial-main div a.twitter-name,
            .btn{
                font-family: Montserrat, "Helvetica Neue", Helvetica, sans-serif;
            }

            h1 {
                font-size: 48px;
                font-weight: 400;
                font-style: normal;
                letter-spacing: -0.025em;
                text-transform: none;
            }

            h2 {
                font-size: 32px;
                font-weight: 400;
                font-style: normal;
                letter-spacing: -0.025em;
                text-transform: none;
            }

            h3 {
                font-size: 26px;
                font-weight: 400;
                font-style: normal;
                letter-spacing: -0.025em;
                text-transform: none;
            }

            h4 {
                font-size: 20px;
                font-weight: 400;
                font-style: normal;
                letter-spacing: -0.025em;
                text-transform: none;
            }

            h5 {
                font-size: 18px;
                font-weight: 400;
                font-style: normal;
                letter-spacing: -0.025em;
                text-transform: none;
            }

            h6 {
                font-size: 16px;
                font-weight: 400;
                font-style: normal;
                letter-spacing: -0.025em;
                text-transform: none;
            }

            /*---------- Color ----------*/
            /*---------- 1. Primary Color ----------*/
            /*---------- 1.1. Color ----------*/
            .btn,
            a:hover,
            .sf-mobile-menu li.btn:hover a,
            .header-dark a:hover,
            .row-dark a:hover,
            .row-dark h1 a:hover,
            .row-dark h2 a:hover,
            .row-dark h3 a:hover,
            .row-dark h4 a:hover,
            .row-dark h5 a:hover,
            .row-dark h6 a:hover,
            .member-content h6 a:hover,
            body.header-light .corpia-ut-header-container.header-normal .ut-header-icons i,
            body.header-light .corpia-ut-header-container.header-classic .ut-header-icons i,
            .corpia-ut-list li > i,
            .entry-title a:hover,
            .corpia-ut-milestones-icon i,
            .corpia-ut-blog .mejs-container .mejs-controls .mejs-time,
            ul.sf-menu > li:hover > a,
            .header-light .sf-menu li.btn-flat:hover > a,
            body.submenu-dark .sf-menu ul.corpia-ut-menu-children > li:hover,
            body.submenu-light .sf-menu ul.corpia-ut-menu-children > li:hover,
            body.submenu-dark .sf-menu ul.corpia-ut-menu-children > li:hover > a,
            body.submenu-light .sf-menu ul.corpia-ut-menu-children > li:hover > a,
            .corpia-ut-title.light .corpia-ut-breadcrumbs span > a:hover,
            .corpia-ut-title.dark .corpia-ut-breadcrumbs span > a:hover,
            body.submenu-light .mega-menu-items > li:hover,
            body.submenu-light .mega-menu-items > li:hover > a,
            body.submenu-dark .mega-menu-items > li:hover,
            body.submenu-dark .mega-menu-items > li:hover > a,
            .input i:hover,
            .corpia-ut-nav-selected .corpia-ut-nav-link,
            .corpia-ut-nav-selected .corpia-ut-nav-link:visited,
            .abs-meta .corpia-style:hover,
            .abs-meta .corpia-style:hover .date,
            .comment-content .comment-reply-link,
            .portfolio-single-content .portfolio-like-btn,
            .portfolio-single-content .portfolio-print-btn,
            .portfolio-single-content div.meta-text a,
            .portfolio-pagination .portfolio-previous:hover > a > i,
            .portfolio-pagination .portfolio-next:hover > a > i,
            .portfolio-pagination .portfolio-grid-icon > i:hover,
            aside.widget a:hover,
            .menu-elements-menu-container > .menu > li > a:hover,
            .menu-elements-menu-container > .menu > li.current-menu-item > a,
            .sf-menu li.current-menu-ancestor > a,
            .sf-menu li.current-menu-ancestor > a span,
            .sf-menu li.current-menu-item > a,
            body.submenu-dark .sf-menu ul.corpia-ut-menu-children li.current-menu-item > a,
            body.submenu-light .sf-menu ul.corpia-ut-menu-children li.current-menu-item > a,
            .sf-menu li.current-menu-ancestor ul.corpia-ut-menu-children li.current-menu-ancestor > a,
            .sf-menu ul.sub-menu li.current-menu-item,
            .sf-menu ul.sub-menu li.current-menu-item > a,
            .corpia-ut-bottom aside.contact_widget .contact-info-widget .contact-link:hover > i,
            .corpia-ut-bottom aside.contact_widget .contact-info-widget .contact-link:hover > div > a,
            .menu-elements-menu-container > ul.menu > li.change a,
            span.wpcf7-form-control-wrap .wpcf7-not-valid-tip,
            div.wpcf7-validation-errors,
            blockquote p::before,
            .corpia-ut-filters ul.filters li a:hover, .corpia-ut-filters ul.filters li a.selected,
            .corpia-ut-team .team-member:hover .member-title h4 a,
            article.portfolio:hover h2.portfolio-title a,
            .corpia-ut-infinite-scroll a.loading i,
            .testimonial-main p.testimonial-name,
            .testimonial-main div a.twitter-name,
            .sUp-btn-border #scrollUp,
            .corpia-ut-iconbox .corpia-iconbox-icon i,
            /* WooCommmerce */
            .woocommerce button:hover,
            .star-rating,
            .woocommerce button:hover,
            .woocommerce .ut-woo-button a:hover,
            .woocommerce .wc-proceed-to-checkout a:hover,
            .woocommerce input[type="submit"]:hover {
                color: #ffcb0f;
            }
                                        
            /*---------- 1.2. Border color ----------*/
            /*---------- 1.2.1. Border color ----------*/
            .btn.btn-border,
            .corpia-ut-tabs ul.wpb_tabs_nav li.ui-tabs-active.ui-state-active a,
            .corpia-ut-toggle.vc_toggle .vc_toggle_title.style-2:hover,
            .corpia-ut-toggle.vc_toggle.vc_toggle_active .vc_toggle_title.style-2,
            .corpia-ut-accordion.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header.style-2:hover,
            .corpia-ut-accordion.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header.ui-accordion-header-active.style-2,
            .comment-respond .comment-form input:focus,
            .comment-respond .comment-form textarea:focus,
            .corpia-ut-sidebar > aside.widget_tag_cloud > div > a:hover,
            .corpia-ut-post-tagbox a:hover,
            button,
            #scrollUp,
            .abs-meta .corpia-style:hover,
            .portfolio-single-content .portfolio-like-btn,
            .portfolio-single-content .portfolio-print-btn,
            .portfolio-pagination .portfolio-previous:hover,
            .portfolio-pagination .portfolio-next:hover,
            .searchform .input-container > input:focus,
            .wpcf7-form-control.wpcf7-submit,
            .wpcf7-form-control.cancel-btn,
            .wpcf7-form-control.wpcf7-text:focus,
            .wpcf7-form-control.wpcf7-textarea:focus,
            div.wpcf7-validation-errors,
            section.child-comments article.comment:before,
            section.child-comments article.comment:before,
            /* WooCommerce */
            .woocommerce button:hover,
            .ut-woo-product-ordering ul:hover > li > span i,
            .ut-woo-product-ordering > ul.product-sort a:hover,
            .woocommerce button:hover,
            .woocommerce .ut-woo-button a:hover,
            .woocommerce .wc-proceed-to-checkout a:hover,
            .woocommerce input[type="submit"]:hover {
                border-color: #ffcb0f;
            }
                                            
            /*---------- 1.2.2. Border Top color ----------*/
            .pricing-column.featured {
                border-top-color: #ffcb0f;
            }
            /*---------- 1.2.3. Border Right color ----------*/
            /*---------- 1.2.4. Border Bottom color ----------*/
            section.child-comments article.comment:before,
            .member-image.image-bottom-border img:hover,
            .sf-menu > li:hover,
            .sf-menu li.current-menu-item,
            .sf-menu li.current-menu-ancestor,
            .corpia-ut-toggle.vc_toggle .vc_toggle_title.style-1:hover,
            .corpia-ut-toggle.vc_toggle.vc_toggle_active .vc_toggle_title.style-1,
            .corpia-ut-accordion.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header.style-1:hover,
            .corpia-ut-accordion.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header.ui-accordion-header-active.style-1 {
                border-bottom-color: #ffcb0f;
            }
            /*---------- 1.2.5. Border Left color ----------*/
            section.child-comments article.comment:before {
                border-left-color: #ffcb0f;
            }
            /*---------- 1.3. Background color ----------*/
            /*---------- 1.3.1. Background Color ----------*/
            ::selection {
                background: #ffcb0f;
                color: #fff;
            }
            ::-moz-selection {
                background: #ffcb0f;
                color: #fff;
            }
            .menu-elements-menu-container > ul.menu > li.change::before,
            .menu-elements-menu-container > .menu > li.current-menu-item::before {
                background: #ffcb0f none repeat scroll 0% 0%;
            }

            /* WooCommerce */
            .woocommerce ul.products li .ut_woo_product_container .onsale,
            .woocommerce.single-product .onsale,
            .woocommerce button,
            .woocommerce .ut-woo-button a,
            .woocommerce .wc-proceed-to-checkout a,
            .woocommerce input[type="submit"],
            .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
            .widget_price_filter .ui-slider .ui-slider-range,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
            .widget_price_filter .ui-slider .ui-slider-handle {
                background: #ffcb0f;
            }

            body.header-dark .corpia-ut-header-container.header-normal .count-cart,
            body.header-dark .corpia-ut-header-container.header-classic .count-cart,
            body.header-light .corpia-ut-header-container.menu-minimal .count-cart,
            body.header-dark .corpia-ut-header-container.menu-minimal .count-cart,
            body.header-light .corpia-ut-header-container.logo-top-center .count-cart,
            body.header-dark .corpia-ut-header-container.logo-top-center .count-cart,
            .btn.btn-flat,
            .abs-meta,
            .corpia-ut-blog .mejs-controls .mejs-time-rail .mejs-time-current,
            .corpia-ut-blog .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current,
            .corpia-ut-toggle.vc_toggle .vc_toggle_title.style-2:hover,
            .corpia-ut-toggle.vc_toggle.vc_toggle_active .vc_toggle_title.style-2,
            .corpia-ut-accordion.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header.style-2:hover,
            .corpia-ut-accordion.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header.ui-accordion-header-active.style-2,
            button,
            .sUp-btn-flat #scrollUp,
            #bar,
            .header-widget-btn > a,
            .corpia-ut-nav-active>.corpia-ut-nav-link,
            .corpia-ut-nav-children .corpia-ut-nav-link:hover,
            .abs-meta .corpia-style:hover span,
            .portfolio-single-content .portfolio-like-btn:hover,
            .portfolio-single-content .portfolio-print-btn:hover,
            .wpcf7-form-control.wpcf7-submit,
            .wpcf7-form-control.cancel-btn,
            .corpia-ut-post-sharebox .facebook-share:hover,
            .corpia-ut-post-sharebox .twitter-share:hover,
            .corpia-ut-post-sharebox .googleplus-share:hover,
            .corpia-ut-sidebar > aside.widget_tag_cloud > div > a:hover,
            .corpia-ut-post-tagbox a:hover,
            .onepage-on .onepage-pagination .corpia-bullet:hover,
            .onepage-on .onepage-pagination .onepage-section.active .corpia-bullet,
            .owl-controls .owl-buttons div,
            .owl-theme .owl-controls .owl-page.active span,
            .owl-theme .owl-controls.clickable .owl-page:hover span,
            .corpia-ut-post-carousel .owl-theme .owl-controls .owl-page.active span,
            .corpia-ut-post-carousel .owl-theme .owl-controls.clickable .owl-page:hover span,
            .corpia-ut-iconbox.iconbox-style-2 .corpia-iconbox-box .corpia-iconbox-box-bottom-line,
            /* WooCommerce */
            .ut-woo-product-ordering ul:hover > li > span i,
            .ut-woo-product-ordering > ul.product-sort a:hover,
            .woocommerce-info {
                background-color: #ffcb0f;
            }
            /*---------- 1.3.2. Background rgba Color ----------*/
            /*---------- 1.3.2.1. Background rgba 0.3 ----------*/
            .owl-theme .owl-controls .owl-page span {
                background-color: rgba(255,203,15, 0.3);
            }

            /*---------- 2. Heading Title Color ----------*/
            /*---------- 2.1 Color ----------*/
            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            h1 a,
            h2 a,
            h3 a,
            h4 a,
            h5 a,
            h6 a,
            .meta-subtitle,
            .entry-title a,
            .corpia-ut-socials a,
            .corpia-ut-callout p,
            .corpia-ut-portfolio h2.portfolio-title a,
            .corpia-ut-portfolio .portfolio-content a,
            .corpia-ut-portfolio .portfolio-content span.portfolio-meta,
            .pricing-column .pricing-header h6,
            .pricing-column .pricing-top > span,
            .menu-elements-menu-container > .menu > li > a,
            .corpia-ut-author .author-name > a,
            div.comment-meta.post-meta > p a,
            .comment-meta,
            .corpia-ut-circle-chart h5,
            .corpia-ut-circle-chart-inner,
            h4.entry-title a,
            .entry-meta span a,
            .corpia-ut-milestones-count,
            .corpia-ut-post-sharebox .post-share-text,
            .corpia-ut-toggle .vc_toggle_title a.toggle-header,
            .corpia-ut-accordion.wpb_accordion .wpb_accordion_wrapper .wpb_accordion_header a,
            .corpia-ut-toggle.vc_toggle .vc_toggle_title a.toggle-header span.toggle-icon,
            .corpia-ut-accordion.wpb_accordion .wpb_accordion_wrapper .ui-state-default .ui-icon {
                color: #2d3538;
            }
            /*---------- 2.1. Background Color ----------*/
            /*---------- 2.1.1. Background Color 0.8 ----------*/
            .quote-format,
            .link-format,
            .corpia-ut-blog .mejs-controls .mejs-time-rail .mejs-time-loaded {
                background: rgba(45,53,56,0.8);
            }
                        .image-overlay {
                    background: rgba(45,53,56,0.80);
                }
                    /*---------- 2.1.2. Background Color 0.6 ----------*/
            .corpia-ut-iconbox.iconbox-style-2 .corpia-iconbox-box .iconbox-style-2-bg-image:before {
                background: rgba(45,53,56,0.6);
            }
            /*---------- 2.3 Background & border color ----------*/
            /* pagination */
            .page-numbers li a:hover,
            .page-numbers li span.current,
            .corpia-ut-isotope-container .page-numbers li span.current,
            .corpia-ut-isotope-container .page-numbers li a:hover {
                background-color: #2d3538;
                border-color: #2d3538;
            }
            /* 3. SVG Color */
            .pricing-header svg.pricing-table-shape path,
            .corpia-ut-shape path,
            .pricing-header svg.pricing-table-shape polygon,
            .corpia-ut-shape polygon{
        fill: #ffcb0f;                    }

            .dark.corpia-ut-element path,
            article.format-link path,
            article.format-quote path,
            .dark.corpia-ut-element polygon,
            article.format-link polygon,
            article.format-quote polygon {
        fill: #ffffff;                    }

            /* 4. Widget */
            .widget-title {
                font-family: Montserrat;
                font-size: 15px;
                font-weight: 400;
                font-style: normal;
                letter-spacing: -0.025em;
                text-transform: capitalize;
                line-height: normal;
                color: #2d3538;
            }

            .menu-elements-menu-container > ul.menu > li.change::before,
            .menu-elements-menu-container > .menu > li.current-menu-item::before {
                background: #ffcb0f none repeat scroll 0% 0%;
            }

            /* 5. Core Other */
            body.header-light.header-transparent .corpia-ut-header-container.header-normal,
            body.header-light.header-transparent .corpia-ut-header-container.header-classic,
            body.header-light.header-transparent .corpia-ut-header-container.menu-minimal,
            body.header-light.header-transparent .corpia-ut-header-container.logo-top-center {
                background: rgba(255,255,255,1);
            }

            body.header-light.header-transparent .corpia-ut-header-container.nav-down-with-adminbar,
            body.header-light.header-transparent .corpia-ut-header-container.nav-down {
                background-color: rgba(255,255,255,0.95);
            }

            body.header-light.header-transparent .corpia-ut-header-container div.left-side-menu {
                background-color: #ffffff;
            }

            body.header-dark.header-transparent .corpia-ut-header-container.header-normal,
            body.header-dark.header-transparent .corpia-ut-header-container.header-classic,
            body.header-dark.header-transparent .corpia-ut-header-container.menu-minimal,
            body.header-dark.header-transparent .corpia-ut-header-container.logo-top-center {
                background-color: rgba(45,53,56,1);
            }

            body.header-dark.header-transparent.parallax-on .corpia-ut-header-container.header-normal,
            body.header-dark.header-transparent.parallax-on .corpia-ut-header-container.header-classic,
            body.header-dark.header-transparent.parallax-on .corpia-ut-header-container.menu-minimal,
            body.header-dark.header-transparent.parallax-on .corpia-ut-header-container.logo-top-center {
                background: rgba(45,53,56,1);
            }

            body.header-dark.header-transparent .corpia-ut-header-container div.left-side-menu {
                background-color: #2d3538;
            }
                                            
            body.fixed-light-sb .fixed-sidebar {
                background-color: #ffffff;
            }
            body.fixed-dark-sb fixed-sidebar {
                background-color: #2d3538;
            }

            body.header-dark.header-transparent.parallax-on .corpia-ut-header-container.nav-down-with-adminbar,
            body.header-dark.header-transparent.parallax-off .corpia-ut-header-container.nav-down-with-adminbar,
            body.header-dark.header-transparent.parallax-on .corpia-ut-header-container.nav-down,
            body.header-dark.header-transparent.parallax-off .corpia-ut-header-container.nav-down {
                background-color: rgba(45,53,56,0.8);
            }

            body.header-light .sf-menu .corpia-ut-menu-children,
            body.header-light .sf-mega {
                background-color: #2d3538;
            }

            body.header-dark .sf-menu .corpia-ut-menu-children,
            body.header-dark .sf-mega {
                background-color: #ffffff;
            }

            body.header-light .sf-menu li.current-menu-ancestor ul.corpia-ut-menu-children li.current-menu-item,
            body.header-light .sf-menu li.current-menu-ancestor ul.sf-mega li.current-menu-ancestor ul.mega-menu-items li.current-menu-item,
            body.header-light .sf-menu .corpia-ut-menu-children li:hover,
            body.header-light ul.sf-mega li ul.mega-menu-items li:hover {
                background-color: #ffcb0f;
            }

            body.header-dark .sf-menu li.current-menu-ancestor ul.corpia-ut-menu-children li.current-menu-item,
            body.header-dark .sf-menu li.current-menu-ancestor ul.sf-mega li.current-menu-ancestor ul.mega-menu-items li.current-menu-item,
            body.header-dark .sf-menu .corpia-ut-menu-children li:hover,
            body.header-dark ul.sf-mega li ul.mega-menu-items li:hover {
                background-color: #f2f7fa;
            }

            body.footer-light .corpia-ut-bottom,
            body.footer-light .corpia-ut-footer {
                background: #f5f5f5;
            }

            body.footer-dark .corpia-ut-bottom {
                background: #2d3538;
            }

            body.footer-dark .corpia-ut-footer {
                background: #333c40;
            }

                </style>
        <style type="text/css" id="corpia-ut-custom-css">.inlinebl{
    display:inline-block;
    
}

.rights {
    
    float:right;
    
}

.your-email{
    color:#fff;
    float:right;
    
    
}

.html{overflow-x: hidden;
	overflow-y: auto;}

.border{
    
    border-radius: 15px 0 0 15px !important;
    
}

.corpia-ut-shape{
    display:none !important;
    
}

.wpcf7-mail-sent-ok{
    border:none !important;
    color: #fff !important;
    
}


.custom.tp-bullets {
    	left: calc(50% - 27.5px) !important;

}
.custom.tp-bullets:before {
	content:&quot; &quot;;
	position:absolute;
	width:100%;
	height:100%;
	background:transparent;
	padding:10px;
	margin-left:-15px;margin-top:-10px;
	box-sizing:content-box;
}
.custom .tp-bullet {
	width:15px;
	height:15px;
	position:absolute;
    background:transparent;
    
	cursor: pointer;
	box-sizing:content-box;
	content: url(/ct/wp-content/uploads/2016/07/navigation.png);

    
    
    
    
    
    
}

.lindaclick .custom{
    
    background-image:url(/ct/wp-content/uploads/2016/07/flaglinda.png);
    display:inline-block;
    width: 100px;
    height:20px;
    background-size:contain;
    background-repeat: no-repeat;
    
}


.darioclick .custom{
    
    background-image:url(/ct/wp-content/uploads/2016/07/darioflag.png);
    display:inline-block;
    width: 100px;
    height:20px;
    background-size:contain;
    background-repeat: no-repeat;
    
}

.femkeclick .custom{
    
    background-image:url(/ct/wp-content/uploads/2016/07/femkeflag.png);
    display:inline-block;
    width: 100px;
    height:20px;
    background-size:contain;
    background-repeat: no-repeat;
    
}

.ramonaclick .custom{
    
    background-image:url(/ct/wp-content/uploads/2016/07/ramonaflag.png);
    display:inline-block;
    width: 100px;
    height:20px;
    background-size:contain;
    background-repeat: no-repeat;
    
}

.jonclick .custom{
    
    background-image:url(/ct/wp-content/uploads/2016/07/jonflag.png);
    display:inline-block;
    width: 100px;
    height:20px;
    background-size:contain;
    background-repeat: no-repeat;
    
}

.nicoleclick .custom{
    
    background-image:url(/ct/wp-content/uploads/2016/07/nicoleflag.png);
    display:inline-block;
    width: 100px;
    height:20px;
    background-size:contain;
    background-repeat: no-repeat;
    
}

.stephenclick .custom{
    
    background-image:url(/ct/wp-content/uploads/2016/07/stephenflag.png);
    display:inline-block;
    width: 100px;
    height:20px;
    background-size:contain;
    background-repeat: no-repeat;
    
}

.custom .tp-bullet:hover,
.custom .tp-bullet.selected {
        background:transparent;

	content: url(/ct/wp-content/uploads/2016/07/navfull.png);
}
.custom .tp-bullet-image {
}
.custom .tp-bullet-title {
}


.roundbtn {
    
    border-radius: 20px;
    border: none;
    color: #fff;
    
}

.mailbtn {
    background-color: #95ACBD !important;
    border-radius: 0px 15px 15px 0px !important;
    border: none !important;
    font-size: 16px !important;
    
}

.mailbtn:hover{
    background-color:#fff !important;
    color: #95ACBD !important;
    
}

.show{bottom:0 !important;}

.slidercustom {
	max-height: 500px; /* approximate max height */


}

.moving{
    
    	overflow-y: hidden;
    	overflow-x: hidden;

    transition-property: all;
	transition-duration: .5s;
	transition-timing-function: cubic-bezier(0, 1, 0.5, 1);
}

.closeslider{

	max-height: 0px !important; /* approximate max height */


}

.modal-dialog{
    margin-top: 20%;
    
}

.bolder {
    font-weight:700 !important;
    
}

.corpia-iconbox-content{width:100%;}

.corpia-iconbox-box{height:100% !important;}


@media only screen and (max-width: 800px)  {
.rev_slider .tp-caption {
font-size: 20px !important;
}
.your-email{
    width:70% !important;
    
}
}</style><style type="text/css" title="dynamic-css" class="options-output">.site-header{margin-top:15px;margin-bottom:10px;}{font-family:"Libre Baskerville";letter-spacing:-0.025px;font-weight:400;font-style:normal;font-size:13px;}{font-family:Montserrat;text-transform:capitalize;line-height:1.2em;letter-spacing:-0.025em;font-weight:400;font-style:normal;}{font-family:Montserrat;text-transform:uppercase;letter-spacing:0px;font-weight:400;font-style:normal;font-size:12px;}{font-family:Montserrat;text-transform:capitalize;line-height:normalpx;letter-spacing:-0.025px;font-weight:400;font-style:normal;font-size:15px;}{font-family:"Libre Baskerville";letter-spacing:0px;font-weight:400;font-style:italic;color:#808080;font-size:11px;}{text-transform:none;letter-spacing:-0.025;font-weight:400;font-style:normal;font-size:48px;}{text-transform:none;letter-spacing:-0.025;font-weight:400;font-style:normal;font-size:32px;}{text-transform:none;letter-spacing:-0.025;font-weight:400;font-style:normal;font-size:26px;}{text-transform:none;letter-spacing:-0.025;font-weight:400;font-style:normal;font-size:20px;}{text-transform:none;letter-spacing:-0.025;font-weight:400;font-style:normal;font-size:18px;}{text-transform:none;letter-spacing:-0.025;font-weight:400;font-style:normal;font-size:16px;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1493816150191{margin-top: 10px !important;}.vc_custom_1468848262496{background-color: #95acbd !important;}.vc_custom_1499173127609{background-color: #95acbd !important;}.vc_custom_1468588085864{background-color: #f2f2f2 !important;}.vc_custom_1488217104261{border-top-width: 5px !important;border-right-width: 2.5px !important;border-bottom-width: 5px !important;border-left-width: 5px !important;border-left-color: #95acbd !important;border-left-style: solid !important;border-right-color: #95acbd !important;border-right-style: solid !important;border-top-color: #95acbd !important;border-top-style: solid !important;border-bottom-color: #95acbd !important;border-bottom-style: solid !important;}.vc_custom_1488217093876{border-top-width: 5px !important;border-right-width: 2.5px !important;border-bottom-width: 5px !important;border-left-width: 2.5px !important;border-left-color: #95acbd !important;border-left-style: solid !important;border-right-color: #95acbd !important;border-right-style: solid !important;border-top-color: #95acbd !important;border-top-style: solid !important;border-bottom-color: #95acbd !important;border-bottom-style: solid !important;}.vc_custom_1488217113135{border-top-width: 5px !important;border-right-width: 5px !important;border-bottom-width: 5px !important;border-left-width: 2.5px !important;border-left-color: #95acbd !important;border-left-style: solid !important;border-right-color: #95acbd !important;border-right-style: solid !important;border-top-color: #95acbd !important;border-top-style: solid !important;border-bottom-color: #95acbd !important;border-bottom-style: solid !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>    </head>
    <body class="home page-template-default page page-id-4203 header-normal fheader-none header-light pt-dark parallax-on fixed-light-sb footer-dark onepage-off sUp-btn-on sUp-btn-flat corpia-ut-full header-transparent header-large corpia-ut-composer wpb-js-composer js-comp-ver-4.12 vc_responsive">
        <div class="corpia-ut-mobile-menu">
    <div class="mobile-close corpia-ut-close">Close Form</div>
    <nav id="mobile-menu" class="corpia-ut-mobile-menu-container">
        <ul id="menu-connectingmenu" class="sf-mobile-menu clearfix"><li id="menu-item-4279" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4279"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/#about">Why connect with us</a></li>
<li id="menu-item-4280" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4280"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/#how">How It Works</a></li>
<li id="menu-item-4281" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4281"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/#blog">What we are up to</a></li>
<li id="menu-item-4282" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4282"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/#team">Team</a></li>
<li id="menu-item-4283" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4283"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/#feedback">Feedback</a></li>
<li id="menu-item-4325" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4325"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/our-purpose">Our Purpose</a></li>
</ul>        <div class="corpia-ut-shape menu-shape ut-svg-container fill-colored " style="width: 48px; "><svg version="1.1" viewBox="0 0 48 10"><path fill-rule="evenodd" clip-rule="evenodd" fill="#000000" d="M39.892,7.862c-4.181,2.859-7.749,2.859-11.931,0
                                        c-2.727-1.863-5.055-1.863-7.781,0c-4.143,2.831-7.521,2.831-11.663,0c-2.757-1.886-4.62-1.886-7.379,0L0,6.48
                                        c3.353-2.292,6.169-2.384,9.655,0c3.286,2.246,5.711,2.513,9.387,0c3.486-2.384,6.727-2.277,10.057,0
                                        c3.419,2.337,6.102,2.429,9.655,0c3.487-2.384,5.767-2.384,9.252,0l-1.138,1.382C44.066,5.946,42.696,5.946,39.892,7.862z
                                         M39.892,3.171c-4.181,2.858-7.749,2.858-11.931,0c-2.727-1.866-5.055-1.866-7.781,0c-4.143,2.831-7.521,2.831-11.663,0
                                        c-2.757-1.886-4.62-1.886-7.379,0L0,1.789c3.353-2.293,6.169-2.385,9.655,0c3.286,2.246,5.711,2.512,9.387,0
                                        c3.486-2.385,6.727-2.278,10.057,0c3.419,2.337,6.102,2.428,9.655,0c3.487-2.385,5.767-2.385,9.252,0l-1.138,1.382
                                        C44.066,1.253,42.696,1.253,39.892,3.171z"/></svg></div>        <p class="menu-minimal-widget">No Widget, Add the Widgets here.</p>    </nav>
</div>        <div id="theme-layout" class="container-fluid">
            <div class="row footer-padding">
            <div class="corpia-ut-header-container nav-down header-normal animate-search" >
        <div class="ut-full-height container">
        <div class="row ut-flex-align-center ut-full-height">
            <div class="col-md-3 col-xs-5 ut-full-height ut-flex-align-center">
                <a class="logo" href="http://www.connectingtalents.org/"><img class="logo-img" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/logo.png" alt="Connecting Talents" style="max-width: 275px;"/></a>            </div>
            <div class="col-md-9 col-xs-7 ut-full-height">
                <a href="#search" class="ut-header-icons ut-full-height"><i class="fa fa-search"></i></a><a href="#mobile" class="ut-header-icons mobile-menu-icon ut-full-height"><i class="fa fa-bars"></i></a>                <nav class="cd-nav ut-full-height pull-right"><ul id="menu-connectingmenu-1" class="sf-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4279"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/#about">Why connect with us</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4280"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/#how">How It Works</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4281"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/#blog">What we are up to</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4282"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/#team">Team</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4283"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/#feedback">Feedback</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4325"><a class="corpia-ut-menu-link" href="http://www.connectingtalents.org/our-purpose">Our Purpose</a></li>
</ul></nav>            </div>
        </div>
        <!-- Search Section -->
        
<div class="corpia-ut-search">
    <div class="relative-content container">
        <form method="get" class="searchform" action="http://www.connectingtalents.org/" >
                <input type="search" value="" name="s" autocomplete="off" placeholder="Search your Keywords..." />
            </form>        <div class="corpia-ut-close cd-text-replace">Close Form</div>
    </div>
</div>    </div>
</div>            <div id="slider" class="corpia-ut-pt-styles"><link href="http://fonts.googleapis.com/css?family=Libre+Baskerville%3A400" rel="stylesheet" property="stylesheet" type="text/css" media="all" />
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" style="background-color:transparent;padding:0px;">
<!-- START REVOLUTION SLIDER 5.2.6 fullscreen mode -->
	<div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.2.6">
<ul>	<!-- SLIDE  -->
	<li data-index="rs-1" data-transition="slideleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://www.connectingtalents.org/wp-content/uploads/2016/07/header1-100x50.png"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="http://www.connectingtalents.org/wp-content/plugins/revslider/admin/assets/images/dummy.png"  alt="" title="header1"  width="1280" height="605" data-lazyload="http://www.connectingtalents.org/wp-content/uploads/2016/07/header1.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-1-layer-5" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','3']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['7','7','7','-28']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"
 
			 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
			 data-transform_out="opacity:0;s:300;" 
			data-start="0" 
			data-splitin="none" 
			data-splitout="none" 
			data-responsive_offset="on" 

			
			style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 24px; font-weight: 400; color: rgba(255, 255, 255, 1.00);"><div style="font-size: 18/pt; text-align:center; z-index:100">Are you an innovator looking for </div><div style="font-size: 18pt; text-align:center; z-index:100">talents to realize your idea?</div> </div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-1-layer-7" 
			 data-x="['center','center','center','center']" data-hoffset="['2','2','2','2']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['87','87','87','87']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"
 
			 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
			 data-transform_out="opacity:0;s:300;" 
			data-start="500" 
			data-splitin="none" 
			data-splitout="none" 
			data-responsive_offset="on" 

			
			style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 35px; font-weight: 400; color: rgba(255, 255, 255, 1.00);"><div style="font-size: 24pt; text-align:center; z-index:100">Fortune happens when</div> <div style="font-size: 24pt; text-align:center; z-index:100">Talent meets Opportunity</div>
 </div>
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-11" data-transition="slideleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://www.connectingtalents.org/wp-content/uploads/2016/07/header2-100x50.png"  data-delay="7000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="http://www.connectingtalents.org/wp-content/plugins/revslider/admin/assets/images/dummy.png"  alt="" title="header2"  width="1280" height="605" data-lazyload="http://www.connectingtalents.org/wp-content/uploads/2016/07/header2.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption   tp-resizeme  mobilise2" 
			 id="slide-11-layer-4" 
			 data-x="['center','center','center','center']" data-hoffset="['0','1','1','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['90','86','86','70']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"
 
			 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
			 data-transform_out="opacity:0;s:300;" 
			data-start="500" 
			data-splitin="none" 
			data-splitout="none" 
			data-responsive_offset="on" 

			
			style="z-index: 5; white-space: nowrap; font-size: 40px; line-height: 35px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Libre Baskerville;"><div style="font-size: 24pt; text-align:center; z-index:100">Discover your unique talents </div><div style="font-size: 24pt; text-align:center; z-index:100">and realise your potential</div>
 </div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption   tp-resizeme  mobilise1" 
			 id="slide-11-layer-5" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','-12']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"
 
			 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
			 data-transform_out="opacity:0;s:300;" 
			data-start="500" 
			data-splitin="none" 
			data-splitout="none" 
			data-responsive_offset="on" 

			
			style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 28px; font-weight: 400; color: rgba(255, 255, 255, 1.00);"><div style="font-size: 18pt; text-align:center; z-index:100">Are you tired of having a professional </div><div style="font-size: 18pt; text-align:center; z-index:100">roadmap driven by coincidence?</div>
 </div>
	</li>
	<!-- SLIDE  -->
	<li data-index="rs-10" data-transition="slideleft" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="http://www.connectingtalents.org/wp-content/uploads/2016/07/header3-100x50.png"  data-delay="7000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
		<img src="http://www.connectingtalents.org/wp-content/plugins/revslider/admin/assets/images/dummy.png"  alt="" title="header3"  width="1280" height="605" data-lazyload="http://www.connectingtalents.org/wp-content/uploads/2016/07/header3.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		<!-- LAYER NR. 1 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-10-layer-4" 
			 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['60','60','60','60']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"
 
			 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
			 data-transform_out="opacity:0;s:300;" 
			data-start="500" 
			data-splitin="none" 
			data-splitout="none" 
			data-responsive_offset="on" 

			
			style="z-index: 5; white-space: nowrap; font-size: 40px; line-height: 35px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Libre Baskerville;"><div style="font-size: 24pt; text-align:center; z-index:100">Navigate the world of </div><div style="font-size: 24pt; text-align:center; z-index:100">Opportunities and invest </div><div style="font-size: 24pt; text-align:center; z-index:100">your talents in yourself</div>
 </div>

		<!-- LAYER NR. 2 -->
		<div class="tp-caption   tp-resizeme" 
			 id="slide-10-layer-5" 
			 data-x="['center','center','center','center']" data-hoffset="['6','6','6','12']" 
			 data-y="['middle','middle','middle','middle']" data-voffset="['-63','-63','-63','-47']" 
						data-width="none"
			data-height="none"
			data-whitespace="nowrap"
			data-transform_idle="o:1;"
 
			 data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" 
			 data-transform_out="opacity:0;s:300;" 
			data-start="500" 
			data-splitin="none" 
			data-splitout="none" 
			data-responsive_offset="on" 

			
			style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 28px; font-weight: 400; color: rgba(255, 255, 255, 1.00);"><div style="font-size: 18pt; text-align:center; z-index:100">Can you find your way</div><div style="font-size: 18pt; text-align:center; z-index:100">in the current chaos of the job market? </div>
 </div>
	</li>
</ul>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
						if(htmlDiv) {
							htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
						}else{
							var htmlDiv = document.createElement("div");
							htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
							document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
						}
					</script>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
				if(htmlDiv) {
					htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
				}else{
					var htmlDiv = document.createElement("div");
					htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
					document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
				}
			</script>
		<script type="text/javascript">
						/******************************************
				-	PREPARE PLACEHOLDER FOR SLIDER	-
			******************************************/

			var setREVStartSize=function(){
				try{var e=new Object,i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
					e.c = jQuery('#rev_slider_1_1');
					e.responsiveLevels = [1240,1024,778,480];
					e.gridwidth = [1240,1024,778,480];
					e.gridheight = [600,500,400,300];
							
					e.sliderLayout = "fullscreen";
					e.fullScreenAutoWidth='off';
					e.fullScreenAlignForce='off';
					e.fullScreenOffsetContainer= '';
					e.fullScreenOffset='';
					if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
					
				}catch(d){console.log("Failure at Presize of Slider:"+d)}
			};
			
			setREVStartSize();
			
						var tpj=jQuery;
			
			var revapi1;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_1_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_1_1");
				}else{
					revapi1 = tpj("#rev_slider_1_1").show().revolution({
						sliderType:"standard",
jsFileLocation:"//www.connectingtalents.org/wp-content/plugins/revslider/public/assets/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:5000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
							onHoverStop:"on",
							touch:{
								touchenabled:"on",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							bullets: {
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								style:"custom",
								hide_onleave:false,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:30,
								v_offset:50,
								space:5,
								tmp:''
							}
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[600,500,400,300],
						lazyType:"smart",
						parallax: {
							type:"mouse",
							origo:"slidercenter",
							speed:2000,
							levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
							type:"mouse",
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "",
						disableProgressBar:"on",
						hideThumbsOnMobile:"on",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		</script>
		<script>
					var htmlDivCss = unescape(".custom.tp-bullets%20%7B%0A%7D%0A.custom.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%20%7B%0A%09width%3A12px%3B%0A%09height%3A12px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%23aaa%3B%0A%20%20%20%20background%3Argba%28125%2C125%2C125%2C0.5%29%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%3Ahover%2C%0A.custom%20.tp-bullet.selected%20%7B%0A%09background%3Argb%28125%2C125%2C125%29%3B%0A%7D%0A.custom%20.tp-bullet-image%20%7B%0A%7D%0A.custom%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}
					else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				  </script>
				</div><!-- END REVOLUTION SLIDER -->            </div>            <main id="corpia-ut-main" class="corpia-ut-content">
                <div class="container"><div class="row"><div class="corpia-ut-main col-md-12"><div class="entry-content"><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-o-fade="on" data-vc-parallax-image="http://www.connectingtalents.org/wp-content/uploads/2016/07/fillrowpurple.png" class="vc_row wpb_row vc_row-fluid corpia-ut-top-padding-3x corpia-ut-bottom-padding-3x vc_custom_1493816150191 vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving-fade js-vc_parallax-o-fade"><div class="wpb_column vc_column_container vc_col-sm-10"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<h4 style="color: #ffffff;"><span style="color: #ffffff;">Connecting Talents and <a style="color: #ffcb0f;" href="http://www.gs4c.com/" target="_blank" rel="noopener">Go Sailing, for a change</a> are starting to use:</span><br />
<span style="color: #993300;"><span style="color: #ffffff;"><a style="color: #ffcb0f;" href="http://open2.0.regione.lombardia.it/site/" target="_blank" rel="noopener">Open 2.0</a> an open source collaborative platform</span><br />
</span></h4>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner "><div class="wpb_wrapper"><a href="http://www.openinnovation.regione.lombardia.it/notizia?titolo=gs4c_e_connecting_talents__al_via_la_piattaforma_collaborativa_nata_con_open_2_0&#038;id=1681&#038;from=regione" title="Learn More" target=" _blank" class="btn btn-flat btn-m" style="background-color:; border-color:; " >Learn More</a></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div id="about" class="vc_row wpb_row vc_row-fluid corpia-ut-top-padding-3x corpia-ut-bottom-padding-1x"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ut-align-center  corpia-ut-element corpia-ut-heading clearfix corpia-ut-top-padding-1x  corpia-ut-bottom-padding-1x "><h6 class="heading-title">Why connect with us</h6><div class="corpia-ut-divider type-shape"><div class="divider-line clearfix center" style="margin-top: 0px; margin-bottom: 0px;"><div class="corpia-ut-shape  fill-colored " style="width: 48px; "><svg version="1.1" viewBox="0 0 48 10"><path fill-rule="evenodd" clip-rule="evenodd" fill="#000000" d="M39.892,7.862c-4.181,2.859-7.749,2.859-11.931,0
                                        c-2.727-1.863-5.055-1.863-7.781,0c-4.143,2.831-7.521,2.831-11.663,0c-2.757-1.886-4.62-1.886-7.379,0L0,6.48
                                        c3.353-2.292,6.169-2.384,9.655,0c3.286,2.246,5.711,2.513,9.387,0c3.486-2.384,6.727-2.277,10.057,0
                                        c3.419,2.337,6.102,2.429,9.655,0c3.487-2.384,5.767-2.384,9.252,0l-1.138,1.382C44.066,5.946,42.696,5.946,39.892,7.862z
                                         M39.892,3.171c-4.181,2.858-7.749,2.858-11.931,0c-2.727-1.866-5.055-1.866-7.781,0c-4.143,2.831-7.521,2.831-11.663,0
                                        c-2.757-1.886-4.62-1.886-7.379,0L0,1.789c3.353-2.293,6.169-2.385,9.655,0c3.286,2.246,5.711,2.512,9.387,0
                                        c3.486-2.385,6.727-2.278,10.057,0c3.419,2.337,6.102,2.428,9.655,0c3.487-2.385,5.767-2.385,9.252,0l-1.138,1.382
                                        C44.066,1.253,42.696,1.253,39.892,3.171z"/></svg></div></div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid corpia-ut-top-padding-0x corpia-ut-bottom-padding-3x"><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1488217104261"><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="280" height="300" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/monetine1-280x300.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://www.connectingtalents.org/wp-content/uploads/2016/07/monetine1-280x300.png 280w, http://www.connectingtalents.org/wp-content/uploads/2016/07/monetine1.png 314w" sizes="(max-width: 280px) 100vw, 280px" /></div>
		</figure>
	</div>

	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<div style="max-width: 300px; margin-left: auto !important; margin-right: auto !important; text-align: justify;">
<h5><span style="color: #ca0c67;">Discover what makes you UNIQUE by understanding your Talents</span></h5>
<p id="box0">You are a Talent. But probably you don’t know it. Or you have difficulty to pinpoint and describe it to others concisely. You have heard people around you use and abuse the concept of Talent and, like most, you are now quite confused.<br />
What is Talent?</p>
<p id="box1" class="moving">Connecting Talents is developing its own definition of Talent, leveraging the most advanced research and experience of Talent in action.<br />
Our digital Talent coding system will allow each person to discover which are the dominant inner forces at work. Is your communication style rather explicit or are you inclined to use a more indirect way of sharing what you want, think, feel or do?<br />
You can increase your fortune by investing in your Unique Talent. Discover how.<br />
<img class="alignnone size-full wp-image-4384" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/sub1.png" width="504" height="254" /></p>
<p style="max-width: 300px; margin-left: auto !important; margin-right: auto !important; text-align: justify;"><button id="button2" class="roundbtn">Close</button></p>
</div>
<p style="max-width: 300px; margin-left: auto !important; margin-right: auto !important; text-align: justify;"><button id="button1" class="roundbtn">Learn More</button></p>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1488217093876"><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="280" height="300" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/monetine2-280x300.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://www.connectingtalents.org/wp-content/uploads/2016/07/monetine2-280x300.png 280w, http://www.connectingtalents.org/wp-content/uploads/2016/07/monetine2.png 314w" sizes="(max-width: 280px) 100vw, 280px" /></div>
		</figure>
	</div>

	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<div style="max-width: 300px; margin-left: auto !important; margin-right: auto !important; text-align: justify;">
<h5><span style="color: #ca0c67;">Find the right Opportunity to invest and grow your fortune</span></h5>
<p id="box0">You want to be in charge of your professional roadmap and you want to invest your Talents and your skills in something that you really like.</p>
<p id="box2" class="moving">Where to find the Opportunities to become an Entrepreneur of yourself? How can you connect to other Talents working togeher on the innovations that you like best?</p>
<p>There is a jungle of apparent job opportunities if you leave your profile registered&#8230;where do they lead to? In the maze of start-ups and collaboration opportunities how can you find the right one for you?. Don’t be driven by coincidence, take the lead of your future, define your own way.</p>
<p>Connecting Talents matches your Unique Talent Code with the Opportunities that fit you most.</p>
<p><img class="alignnone size-full wp-image-4384" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/sub2.png" width="504" height="254" /></p>
<p style="max-width: 300px; margin-left: auto !important; margin-right: auto !important; text-align: justify;"><button id="button4" class="roundbtn">Close</button></p>
</div>
<p style="max-width: 300px; margin-left: auto !important; margin-right: auto !important; text-align: justify;"><button id="button3" class="roundbtn">Learn More</button></p>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1488217113135"><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_center">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="280" height="300" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/monetine3-280x300.png" class="vc_single_image-img attachment-medium" alt="" srcset="http://www.connectingtalents.org/wp-content/uploads/2016/07/monetine3-280x300.png 280w, http://www.connectingtalents.org/wp-content/uploads/2016/07/monetine3.png 314w" sizes="(max-width: 280px) 100vw, 280px" /></div>
		</figure>
	</div>

	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<div style="max-width: 300px; margin-left: auto !important; margin-right: auto !important; text-align: justify;">
<h5><span style="color: #ca0c67;">Connect with other Talents that can help you grow your idea</span></h5>
<p id="box0">The new world is full of persons and teams working together like archipelagos in the vast ocean of Opportunities. Start-ups, entrepreneurs and small businesses are increasingly connecting and collaborating remotely with freelancers and independent professionals to grow business ideas.</p>
<p id="box3" class="moving">Digital and business archipelagos will prevail.<br />
These archipelagos share their resources and Talents for mutual success and more independence from the chaotic world of VC’s, business angels, consultants and private financing. Connecting Talents connects these archipelagos for mutual success.<br />
Are you an Innovator looking for passionate Talents to help nurture your ideas? Find your potential team members with the same goals and complementary Talents and skills that will invest and grow with you.<br />
<img class="alignnone size-full wp-image-4384" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/sub3.png" width="504" height="254" /></p>
<p style="max-width: 300px; margin-left: auto !important; margin-right: auto !important; text-align: justify;"><button id="button6" class="roundbtn">Close</button></p>
</div>
<p style="max-width: 300px; margin-left: auto !important; margin-right: auto !important; text-align: justify;"><button id="button5" class="roundbtn">Learn More</button></p>

		</div>
	</div>
</div></div></div></div><div id="how" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid corpia-ut-top-padding-3x corpia-ut-bottom-padding-3x vc_custom_1468848262496 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ut-align-center  corpia-ut-element corpia-ut-heading clearfix corpia-ut-top-padding-1x  corpia-ut-bottom-padding-1x "><h5 class="heading-title">How it works</h5><div class="corpia-ut-divider type-shape"><div class="divider-line clearfix center" style="margin-top: 0px; margin-bottom: 0px;"><div class="corpia-ut-shape  fill-colored " style="width: 48px; "><svg version="1.1" viewBox="0 0 48 10"><path fill-rule="evenodd" clip-rule="evenodd" fill="#000000" d="M39.892,7.862c-4.181,2.859-7.749,2.859-11.931,0
                                        c-2.727-1.863-5.055-1.863-7.781,0c-4.143,2.831-7.521,2.831-11.663,0c-2.757-1.886-4.62-1.886-7.379,0L0,6.48
                                        c3.353-2.292,6.169-2.384,9.655,0c3.286,2.246,5.711,2.513,9.387,0c3.486-2.384,6.727-2.277,10.057,0
                                        c3.419,2.337,6.102,2.429,9.655,0c3.487-2.384,5.767-2.384,9.252,0l-1.138,1.382C44.066,5.946,42.696,5.946,39.892,7.862z
                                         M39.892,3.171c-4.181,2.858-7.749,2.858-11.931,0c-2.727-1.866-5.055-1.866-7.781,0c-4.143,2.831-7.521,2.831-11.663,0
                                        c-2.757-1.886-4.62-1.886-7.379,0L0,1.789c3.353-2.293,6.169-2.385,9.655,0c3.286,2.246,5.711,2.512,9.387,0
                                        c3.486-2.385,6.727-2.278,10.057,0c3.419,2.337,6.102,2.428,9.655,0c3.487-2.385,5.767-2.385,9.252,0l-1.138,1.382
                                        C44.066,1.253,42.696,1.253,39.892,3.171z"/></svg></div></div></div></div><div class=" corpia-ut-iconbox-general element-column-3"><div class="vc_row"><div class=" corpia-ut-top-padding-1x  corpia-ut-bottom-padding-1x  vc_col-sm-4 vc_col-md-4  iconbox-style-4 corpia-ut-iconbox corpia-ut-element puntina"><div class="corpia-iconbox-box ut-align-left ut-flex-align-start"><div class="corpia-iconbox-icon  corpia-iconbox-icon-image" style=" color: #ffcb0f; "><h6 class="" style="  ">DISCOVER YOUR UNIQUENESS</h6></div><div class="corpia-iconbox-content clearfix"><p class="" style="  "><img style="margin-top: 15px;" src="./wp-content/uploads/2016/07/box1.png" /></p></div></div></div><div class=" corpia-ut-top-padding-1x  corpia-ut-bottom-padding-1x  vc_col-sm-4 vc_col-md-4  iconbox-style-4 corpia-ut-iconbox corpia-ut-element puntina"><div class="corpia-iconbox-box ut-align-left ut-flex-align-start"><div class="corpia-iconbox-icon  corpia-iconbox-icon-image" style=" color: #ffcb0f; "><h6 class="" style="  ">USE YOUR NATURAL POTENTIAL</h6></div><div class="corpia-iconbox-content clearfix"><p class="" style="  ">With our <span style="color: #ca0c67;">innovative coding system</span> you will find your inner sources of energy that determine your drivers, personality and strengths. And how you communicate these.</p>
<p><img style="width: 50%;" src="./wp-content/uploads/2016/07/box2.png" /></p></div></div></div><div class=" corpia-ut-top-padding-1x  corpia-ut-bottom-padding-1x  vc_col-sm-4 vc_col-md-4  iconbox-style-4 corpia-ut-iconbox corpia-ut-element puntina"><div class="corpia-iconbox-box ut-align-left ut-flex-align-start"><div class="corpia-iconbox-icon  corpia-iconbox-icon-image" style=" color: #ffcb0f; "><h6 class="" style="  ">CULTIVATE YOUR PASSIONS</h6></div><div class="corpia-iconbox-content clearfix"><p class="" style="  ">Focus on the passions that make you happy. Navigate your personal roadmap. Define your own way with our <span style="color: #ca0c67;">online coaching</span> to make the most of the Opportunities that fit your profile.</p>
<p><img style="width: 50%;" src="./wp-content/uploads/2016/07/box3.png" /></p></div></div></div><div class=" corpia-ut-top-padding-1x  corpia-ut-bottom-padding-1x  vc_col-sm-4 vc_col-md-4  iconbox-style-4 corpia-ut-iconbox corpia-ut-element customclassbianca"><div class="corpia-iconbox-box ut-align-left ut-flex-align-start"><div class="corpia-iconbox-icon  corpia-iconbox-icon-image" style=" color: #ffcb0f; "><h6 class="" style="  ">INVEST IN THE RIGHT SKILLS</h6></div><div class="corpia-iconbox-content clearfix"><p class="" style="  ">Technology is bringing disruptive changes to businesses and automation is provoking the need for a new wave of skills that only few can teach. When you discover your talent and connect with the right Opportunities<span style="color: #ca0c67;"> you will understand which are the specific skills you should invest in</span>. Continuous learning is not an option; now you can choose your focus.</p>
<p><img style="width: 50%;" src="./wp-content/uploads/2016/07/box4.png" /></p></div></div></div><div class=" corpia-ut-top-padding-1x  corpia-ut-bottom-padding-1x  vc_col-sm-4 vc_col-md-4  iconbox-style-4 corpia-ut-iconbox corpia-ut-element puntina"><div class="corpia-iconbox-box ut-align-left ut-flex-align-start"><div class="corpia-iconbox-icon  corpia-iconbox-icon-image" style=" color: #ffcb0f; "><h6 class="" style="  ">GROW YOUR OPPORTUNITIES</h6></div><div class="corpia-iconbox-content clearfix"><p class="" style="  ">Entrepreneurs and Innovators are thoroughly misunderstood by most financers, start-up partners and service provider&#8230;few share the spark that nurtures new Opportunity. We will support you in<span style="color: #ca0c67;"> presenting your Opportunity in a way you can attract those resources that you need to realise your potential</span>. Create your future</p>
<p><img style="width: 30%;" src="./wp-content/uploads/2016/07/arcipelago.png" /></p></div></div></div><div class=" corpia-ut-top-padding-1x  corpia-ut-bottom-padding-1x  vc_col-sm-4 vc_col-md-4  iconbox-style-4 corpia-ut-iconbox corpia-ut-element puntina"><div class="corpia-iconbox-box ut-align-left ut-flex-align-start"><div class="corpia-iconbox-icon  corpia-iconbox-icon-image" style=" color: #ffcb0f; "><h6 class="" style="  ">SHARE YOUR TALENTS</h6></div><div class="corpia-iconbox-content clearfix"><p class="" style="  ">The world is full of persons and teams working together like archipelagos in the vast ocean of Opportunities.<br />
We help you to<span style="color: #ca0c67;"> connect with those talents that are complementary to you and share your purpose and passion</span>.</p>
<p><img style="width: 70%;" src="./wp-content/uploads/2016/07/box5.png" /></p></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-o-fade="on" data-vc-parallax-image="http://www.connectingtalents.org/wp-content/uploads/2016/07/fillrowpurple.png" class="vc_row wpb_row vc_row-fluid corpia-ut-top-padding-3x corpia-ut-bottom-padding-3x vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving-fade js-vc_parallax-o-fade"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p style="color: #fff;"><span style="font-size: 18px;">Are you interested in exploring your Unique Talents?</span><br />
Leave your e-mail to be invited to our free demo:</p>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner "><div class="wpb_wrapper"><div role="form" class="wpcf7" id="wpcf7-f797-p4203-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/#wpcf7-f797-p4203-o1" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="797" />
<input type="hidden" name="_wpcf7_version" value="4.8.1" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f797-p4203-o1" />
<input type="hidden" name="_wpcf7_container_post" value="4203" />
<input type="hidden" name="_wpcf7_nonce" value="9f03fb4839" />
</div>
<p><button type="submit" class="btn btn-flat inlinebl mailbtn rights"><i class="fa fa-envelope-o" aria-hidden="true"></i><br />
</button><br />
<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email inlinebl rights border" aria-required="true" aria-invalid="false" placeholder="Email" /></span></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div id="blog" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid corpia-ut-top-padding-3x corpia-ut-bottom-padding-0x vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ut-align-center  corpia-ut-element corpia-ut-heading clearfix corpia-ut-top-padding-1x  corpia-ut-bottom-padding-3x "><h5 class="heading-title">What we are up to</h5><div class="corpia-ut-divider type-shape"><div class="divider-line clearfix center" style="margin-top: 0px; margin-bottom: 0px;"><div class="corpia-ut-shape  fill-colored " style="width: 48px; "><svg version="1.1" viewBox="0 0 48 10"><path fill-rule="evenodd" clip-rule="evenodd" fill="#000000" d="M39.892,7.862c-4.181,2.859-7.749,2.859-11.931,0
                                        c-2.727-1.863-5.055-1.863-7.781,0c-4.143,2.831-7.521,2.831-11.663,0c-2.757-1.886-4.62-1.886-7.379,0L0,6.48
                                        c3.353-2.292,6.169-2.384,9.655,0c3.286,2.246,5.711,2.513,9.387,0c3.486-2.384,6.727-2.277,10.057,0
                                        c3.419,2.337,6.102,2.429,9.655,0c3.487-2.384,5.767-2.384,9.252,0l-1.138,1.382C44.066,5.946,42.696,5.946,39.892,7.862z
                                         M39.892,3.171c-4.181,2.858-7.749,2.858-11.931,0c-2.727-1.866-5.055-1.866-7.781,0c-4.143,2.831-7.521,2.831-11.663,0
                                        c-2.757-1.886-4.62-1.886-7.379,0L0,1.789c3.353-2.293,6.169-2.385,9.655,0c3.286,2.246,5.711,2.512,9.387,0
                                        c3.486-2.385,6.727-2.278,10.057,0c3.419,2.337,6.102,2.428,9.655,0c3.487-2.385,5.767-2.385,9.252,0l-1.138,1.382
                                        C44.066,1.253,42.696,1.253,39.892,3.171z"/></svg></div></div></div></div>
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			
        <div class="wp-tiles-container">
        
            <div id="wp_tiles_1" class="wp-tiles-grid wp-tiles-byline-align-bottom">
                        
                <div class='wp-tiles-tile inspiration' id='tile-4601'>
                
                    <a href="http://www.connectingtalents.org/blog/2017/03/14/connect-with-the-future/" title="Connect with the future" target='_blank'>
                
                        <article class='wp-tiles-tile-with-image wp-tiles-tile-wrapper' itemscope itemtype="http://schema.org/CreativeWork">
                        
                            <div class='wp-tiles-tile-bg'>

                                <img src='http://www.connectingtalents.org/wp-content/uploads/2016/07/header3-300x142.png' class='wp-tiles-img' itemprop="image" />

                            </div>
                                                
                            <div class='wp-tiles-byline'>

                                <div class='wp-tiles-byline-wrapper'>
                                
                                    <h4 itemprop="name" class="wp-tiles-byline-title">Connect with the future</h4>
                                                                
                                    <div class='wp-tiles-byline-content' itemprop="description">
                                        Inspiration
                                    </div>
                                
                                </div>

                            </div>
                        
                        </article>
                
                    </a>
                
                </div>
            
                <div class='wp-tiles-tile testimonials' id='tile-4517'>
                
                    <a href="http://www.connectingtalents.org/blog/2017/02/28/go-sailing-4-a-change/" title="Go Sailing 4 a Change" target='_blank'>
                
                        <article class='wp-tiles-tile-with-image wp-tiles-tile-wrapper' itemscope itemtype="http://schema.org/CreativeWork">
                        
                            <div class='wp-tiles-tile-bg'>

                                <img src='http://www.connectingtalents.org/wp-content/uploads/2016/12/cristina_enrico-300x149.jpg' class='wp-tiles-img' itemprop="image" />

                            </div>
                                                
                            <div class='wp-tiles-byline'>

                                <div class='wp-tiles-byline-wrapper'>
                                
                                    <h4 itemprop="name" class="wp-tiles-byline-title">Go Sailing 4 a Change</h4>
                                                                
                                    <div class='wp-tiles-byline-content' itemprop="description">
                                        Testimonials
                                    </div>
                                
                                </div>

                            </div>
                        
                        </article>
                
                    </a>
                
                </div>
            
                <div class='wp-tiles-tile faq' id='tile-4658'>
                
                    <a href="http://www.connectingtalents.org/blog/2017/02/07/connect-with-your-talents-and-potential/" title="Connect with your potential" target='_blank'>
                
                        <article class='wp-tiles-tile-with-image wp-tiles-tile-wrapper' itemscope itemtype="http://schema.org/CreativeWork">
                        
                            <div class='wp-tiles-tile-bg'>

                                <img src='http://www.connectingtalents.org/wp-content/uploads/2016/07/thirdheader-1-300x142.png' class='wp-tiles-img' itemprop="image" />

                            </div>
                                                
                            <div class='wp-tiles-byline'>

                                <div class='wp-tiles-byline-wrapper'>
                                
                                    <h4 itemprop="name" class="wp-tiles-byline-title">Connect with your potential</h4>
                                                                
                                    <div class='wp-tiles-byline-content' itemprop="description">
                                        FAQ
                                    </div>
                                
                                </div>

                            </div>
                        
                        </article>
                
                    </a>
                
                </div>
            
                <div class='wp-tiles-tile inspiration' id='tile-4599'>
                
                    <a href="http://www.connectingtalents.org/blog/2016/12/14/connect-for-innovation/" title="Connect for innovation" target='_blank'>
                
                        <article class='wp-tiles-tile-with-image wp-tiles-tile-wrapper' itemscope itemtype="http://schema.org/CreativeWork">
                        
                            <div class='wp-tiles-tile-bg'>

                                <img src='http://www.connectingtalents.org/wp-content/uploads/2016/05/get-this-corpia-for-free-300x150.jpg' class='wp-tiles-img' itemprop="image" />

                            </div>
                                                
                            <div class='wp-tiles-byline'>

                                <div class='wp-tiles-byline-wrapper'>
                                
                                    <h4 itemprop="name" class="wp-tiles-byline-title">Connect for innovation</h4>
                                                                
                                    <div class='wp-tiles-byline-content' itemprop="description">
                                        Inspiration
                                    </div>
                                
                                </div>

                            </div>
                        
                        </article>
                
                    </a>
                
                </div>
            
                <div class='wp-tiles-tile inspiration' id='tile-4596'>
                
                    <a href="http://www.connectingtalents.org/blog/2016/11/14/connect-your-team/" title="Connect your team" target='_blank'>
                
                        <article class='wp-tiles-tile-with-image wp-tiles-tile-wrapper' itemscope itemtype="http://schema.org/CreativeWork">
                        
                            <div class='wp-tiles-tile-bg'>

                                <img src='http://www.connectingtalents.org/wp-content/uploads/2016/07/header1-300x142.png' class='wp-tiles-img' itemprop="image" />

                            </div>
                                                
                            <div class='wp-tiles-byline'>

                                <div class='wp-tiles-byline-wrapper'>
                                
                                    <h4 itemprop="name" class="wp-tiles-byline-title">Connect your team</h4>
                                                                
                                    <div class='wp-tiles-byline-content' itemprop="description">
                                        Inspiration
                                    </div>
                                
                                </div>

                            </div>
                        
                        </article>
                
                    </a>
                
                </div>
            
            </div>

        </div>
        

		</div>
	</div>
</div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid corpia-ut-top-padding-3x corpia-ut-bottom-padding-3x vc_custom_1499173127609 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_wp_text wpb_content_element"><div class="widget widget_text">			<div class="textwidget"></p>
<h5 style="text-align: center;"><span style="color: #ffffff;">Our team </span></h5>
<p>
</div>
		</div></div><div class="vc_wp_text wpb_content_element"><div class="widget widget_text">			<div class="textwidget"></p>
<p style="text-align: center;">	<!-- wpshopmart team builder wrapper --></p>
<div class="wpsm_team_2_b_row" id="wpsm_team_2_b_row_4727">
<div class="wpsm_row">
<style>
			#wpsm_team_2_b_row_4727 .wpsm_team_2_member_wrapper_inner h3{
				color:#000000 !important;
				font-size:18px !important;
				font-family:Open Sans !important;
			}</p>
<p>			#wpsm_team_2_b_row_4727 .wpsm_team_2_b_desig{
				color:#000000 !important;
				font-size:14px !important;
				font-family:Open Sans !important;
			}
			#wpsm_team_2_b_row_4727 .wpsm_team_2_b_desc{
				color:#000000 !important;
				font-size:14px !important;
				font-family:Open Sans !important;
			}
			#wpsm_team_2_b_row_4727 .wpsm_team_2_social_div a i{
				color:#4f4f4f !important;
				border-color:#4f4f4f !important;
			}
			#wpsm_team_2_b_row_4727 .wpsm_team_2_member_wrapper{
				background:#ffffff !important;
			}
						</style>
<div class="col-md-4 wpsm-col-div">
<div class="wpsm_team_2_member_wrapper">
							<img class="img-responsive wpsm_team_2_mem_img" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/LINDA_2.jpg" alt="Linda Van Andel"></p>
<div class="wpsm_team_2_member_wrapper_inner">
<h3>
									Linda Van Andel								</h3>
<p>								<span class="wpsm_team_2_b_desig"> Talent connector </span> 								</p>
<div class="wpsm_team_2_social_div">
																											<a href="http://it.linkedin.com/in/linda-van-andel-71821a" target="_blank" title="linkedin profile"><i class="fa fa-linkedin"></i></a>																	</div>
<p class="wpsm_team_2_b_desc"> Linda has a passion for connecting ideas and people, and she is really into personal growth. This mix of interests has fostered her curiosity for the new, for the different, for the unusual. Her European background has given her the wings to explore many different jobs in different places. She has acquired a broad base of experience and skills, some very business, but mostly related to the behaviour of people in teams. She is investing her talent in what makes her most happy. </p>
</p></div></div></div>
<div class="col-md-4 wpsm-col-div">
<div class="wpsm_team_2_member_wrapper">
							<img class="img-responsive wpsm_team_2_mem_img" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/dario_3.jpg" alt="Dario Montebugnoli"></p>
<div class="wpsm_team_2_member_wrapper_inner">
<h3>
									Dario Montebugnoli								</h3>
<p>								<span class="wpsm_team_2_b_desig"> Opportunity Talent </span> 								</p>
<div class="wpsm_team_2_social_div">
																											<a href="http://it.linkedin.com/in/dariomontebugnoli" target="_blank" title="linkedin profile"><i class="fa fa-linkedin"></i></a>																	</div>
<p class="wpsm_team_2_b_desc"> Dario is continuously expanding his horizons. Starting his professional roadmap with a passion in Chemistry, he progressively moved from the lab to the large corporation with a significant intermezzo at a large consulting firm. He uses his scientific skills and business acumen to invent new opportunities for his clients. He likes to be a catalyst for opportunities by mixing and matching his knowledge. He has a drive for learning and is passionate about technological innovation. </p>
</p></div></div></div>
<div class="col-md-4 wpsm-col-div">
<div class="wpsm_team_2_member_wrapper">
							<img class="img-responsive wpsm_team_2_mem_img" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/femke.jpg" alt="Femke"></p>
<div class="wpsm_team_2_member_wrapper_inner">
<h3>
									Femke								</h3>
<p>								<span class="wpsm_team_2_b_desig"> Ohm </span> 								</p>
<div class="wpsm_team_2_social_div">
																											<a href="http://nl.linkedin.com/in/femkeohm" target="_blank" title="linkedin profile"><i class="fa fa-linkedin"></i></a>																	</div>
<p class="wpsm_team_2_b_desc"> Femke’s biggest passions, as a social psychologist, are Talent development and group dynamics in teams. She has been working since 1999 as a trainer for different organizations and has identified the key factors for successful collaboration in teams. Guiding people to become self aware and grow their Talent is exactly what makes Femke happy. She is convinced that outstanding performance is the result of having fun while doing what you are good at. She is a certified coach trainer. </p>
</p></div></div></div></div>
<div class="wpsm_row">
<div class="col-md-4 wpsm-col-div">
<div class="wpsm_team_2_member_wrapper">
							<img class="img-responsive wpsm_team_2_mem_img" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/jonathan_2.jpg" alt="Jonathan Ambrogi"></p>
<div class="wpsm_team_2_member_wrapper_inner">
<h3>
									Jonathan Ambrogi								</h3>
<p>								<span class="wpsm_team_2_b_desig"> Multiculture talent </span> 								</p>
<div class="wpsm_team_2_social_div">
																											<a href="#" target="_blank" title="linkedin profile"><i class="fa fa-linkedin"></i></a>																	</div>
<p class="wpsm_team_2_b_desc"> Jonathan is interested in internationalization and multicultural Talent. A young and motivated University student, Jonathan has developed from an early age an interest in interculturalism: having a dual citizenship himself and being exposed to different languages and cultures from an early age, has made Jonathan passionate about personal Talent growth in a multinational context. Connecting Talents represents a chance for him to participate in the growth of a international project. </p>
</p></div></div></div>
<div class="col-md-4 wpsm-col-div">
<div class="wpsm_team_2_member_wrapper">
							<img class="img-responsive wpsm_team_2_mem_img" src="http://www.connectingtalents.org/wp-content/uploads/2016/07/stephen_2.jpg" alt="Stephen Welch"></p>
<div class="wpsm_team_2_member_wrapper_inner">
<h3>
									Stephen Welch								</h3>
<p>								<span class="wpsm_team_2_b_desig"> Communication talent </span> 								</p>
<div class="wpsm_team_2_social_div">
																											<a href="https://www.linkedin.com/in/stephenwelch11" target="_blank" title="linkedin profile"><i class="fa fa-linkedin"></i></a>																	</div>
<p class="wpsm_team_2_b_desc"> Stephen loves seeing people grow and develop new Talents they didn’t know they had, especially when they access new opportunities as a result.  He works in the liminal space between HR and Communications, helping individuals and companies get their message across in a compelling way.  He has a track record of seeking out new challenges and new experiences, and is not afraid to take a chance. Seneca is Connecting Talents’ mascot but of the Roman quotationists, Stephen prefers Cicero. </p>
</p></div></div></div></div></div>
<p>
</div>
		</div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-o-fade="on" data-vc-parallax-image="http://www.connectingtalents.org/wp-content/uploads/2016/07/fillrowpurple.png" class="vc_row wpb_row vc_row-fluid corpia-ut-top-padding-3x corpia-ut-bottom-padding-3x vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving-fade js-vc_parallax-o-fade"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p style="color: #fff;"><span style="font-size: 18px;">Do you want to know more about us and receive regular updates about our development and services?<br />
</span><br />
Leave your e-mail and we&#8217;ll keep you update</p>

		</div>
	</div>
</div></div></div><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner "><div class="wpb_wrapper"><div role="form" class="wpcf7" id="wpcf7-f797-p4203-o2" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/#wpcf7-f797-p4203-o2" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="797" />
<input type="hidden" name="_wpcf7_version" value="4.8.1" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f797-p4203-o2" />
<input type="hidden" name="_wpcf7_container_post" value="4203" />
<input type="hidden" name="_wpcf7_nonce" value="9f03fb4839" />
</div>
<p><button type="submit" class="btn btn-flat inlinebl mailbtn rights"><i class="fa fa-envelope-o" aria-hidden="true"></i><br />
</button><br />
<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email inlinebl rights border" aria-required="true" aria-invalid="false" placeholder="Email" /></span></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div id="feedback" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid corpia-ut-top-padding-3x corpia-ut-bottom-padding-3x vc_custom_1468588085864 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="ut-align-center  corpia-ut-element corpia-ut-heading clearfix corpia-ut-top-padding-1x  corpia-ut-bottom-padding-1x "><h5 class="heading-title">Give us some feedback</h5><div class="corpia-ut-divider type-shape"><div class="divider-line clearfix center" style="margin-top: 0px; margin-bottom: 0px;"><div class="corpia-ut-shape  fill-colored " style="width: 48px; "><svg version="1.1" viewBox="0 0 48 10"><path fill-rule="evenodd" clip-rule="evenodd" fill="#000000" d="M39.892,7.862c-4.181,2.859-7.749,2.859-11.931,0
                                        c-2.727-1.863-5.055-1.863-7.781,0c-4.143,2.831-7.521,2.831-11.663,0c-2.757-1.886-4.62-1.886-7.379,0L0,6.48
                                        c3.353-2.292,6.169-2.384,9.655,0c3.286,2.246,5.711,2.513,9.387,0c3.486-2.384,6.727-2.277,10.057,0
                                        c3.419,2.337,6.102,2.429,9.655,0c3.487-2.384,5.767-2.384,9.252,0l-1.138,1.382C44.066,5.946,42.696,5.946,39.892,7.862z
                                         M39.892,3.171c-4.181,2.858-7.749,2.858-11.931,0c-2.727-1.866-5.055-1.866-7.781,0c-4.143,2.831-7.521,2.831-11.663,0
                                        c-2.757-1.886-4.62-1.886-7.379,0L0,1.789c3.353-2.293,6.169-2.385,9.655,0c3.286,2.246,5.711,2.512,9.387,0
                                        c3.486-2.385,6.727-2.278,10.057,0c3.419,2.337,6.102,2.428,9.655,0c3.487-2.385,5.767-2.385,9.252,0l-1.138,1.382
                                        C44.066,1.253,42.696,1.253,39.892,3.171z"/></svg></div></div></div><p class="heading-description" style="">How do YOU feel about the future of work? Share your story with us...</p></div><div role="form" class="wpcf7" id="wpcf7-f26-p4203-o3" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<form action="/#wpcf7-f26-p4203-o3" method="post" class="wpcf7-form" novalidate="novalidate">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="26" />
<input type="hidden" name="_wpcf7_version" value="4.8.1" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f26-p4203-o3" />
<input type="hidden" name="_wpcf7_container_post" value="4203" />
<input type="hidden" name="_wpcf7_nonce" value="d1e1df2cf1" />
</div>
<p>Your Message<br />
    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></textarea></span> </p>
<p><input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit btn btn-flat inlinebl rights" /><span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email inlinebl rights" aria-required="true" aria-invalid="false" placeholder="Email" /></span></p>
<div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-parallax="1.5" data-vc-parallax-image="http://www.connectingtalents.org/wp-content/uploads/2016/07/footerbar.png" class="vc_row wpb_row vc_row-fluid corpia-ut-top-padding-3x corpia-ut-bottom-padding-3x vc_row-has-fill vc_general vc_parallax vc_parallax-content-moving"><div class="wpb_column vc_column_container vc_col-sm-4"><div class="vc_column-inner "><div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element ">
		<div class="wpb_wrapper">
			<p style="text-align: left;"><span style="color: #ffffff;">©2016, ALL RIGHTS RESERVED</span></p>
<p style="color: #ffffff; text-align: left;">Connecting Talents Ltd<br />
2nd Floor, Victory House<br />
99-101 Regent Street<br />
London, UK W1B 4EZ<br />
<a href="mailto:kerry@connectingtalents.org">kerry@connectingtalents.org</a><br />
VAT GB 235460910</p>

		</div>
	</div>
</div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>
</div>
<div id="comments" class="comments-area">

    
    
    
</div>
</div></div></div>
</main>
<!-- SEARCH ENABLED -->
<div class="content-cover-layer"></div>
<a id="scrollUp" href="#" title="Scroll to top"><i class="fa fa-chevron-up"></i></a><!-- Cookie Bar -->
<div id="eu-cookie-bar">This website is using cookies <button id="euCookieAcceptWP"  onclick="euAcceptCookiesWP();">I Understand</button></div>
<!-- End Cookie Bar -->
		<script type="text/javascript">
			function revslider_showDoubleJqueryError(sliderID) {
				var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
				errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
				errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
				errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
				errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
					jQuery(sliderID).show().html(errorMessage);
			}
		</script>
		<link rel='stylesheet' id='corpia-ut-animated-headline-css-css'  href='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/css/animated-headline.css?ver=1.0.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-tiles-css'  href='http://www.connectingtalents.org/wp-content/plugins/wp-tiles/assets/css/wp-tiles.css?ver=1.1.2' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/www.connectingtalents.org\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=4.8.1'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/wd-twitter-feed/assets/js/twitter-feed.min.js?ver=2.1.12'></script>
<script type='text/javascript' src='//platform.vine.co/static/scripts/embed.js'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-includes/js/wp-embed.min.js?ver=4.8.1'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=4.12'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.min.js?ver=4.12'></script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/themes/corpia/frontend/js/animated-headline.js?ver=1.0.2'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wptilesdata = {"wp_tiles_1":{"grids":{"news":["AABB.","AA.CC"]},"default_grid":"4363","small_screen_grid":["AABB.","AA.CC"],"breakpoint":800,"grid_selector_color":"#ffcb0f","colors":["rgba( 255,203,15,1 )","rgba( 29,115,115,1 )","rgba( 0,99,99,1 )","rgba( 51,204,204,1 )","rgba( 92,204,204,1 )"],"background_opacity":1,"padding":5,"byline_template":"%categories%","byline_template_textonly":false,"byline_opacity":0.7,"byline_color":"rgba( 0,0,0,0.7 )","byline_height":40,"byline_height_auto":false,"text_color":"","image_text_color":"#ffffff","link":"post","link_new_window":"1","text_only":false,"images_only":false,"hide_title":false,"animate_init":false,"animate_resize":false,"animate_template":true,"image_size":"medium","image_source":"featured_only","byline_effect":"none","byline_align":"bottom","image_effect":"none","pagination":"none","legacy_styles":"","extra_classes":[],"extra_classes_grid_selector":[],"full_width":false,"next_query":false,"id":"wp_tiles_1"}};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.connectingtalents.org/wp-content/plugins/wp-tiles/assets/js/wp-tiles.min.js?ver=1.1.2'></script>
</body>
</html>
