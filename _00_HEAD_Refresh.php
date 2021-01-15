<?php
//** En-tete de la page HTML5 **//
echo '<!DOCTYPE html>';
//** Langue du site / caractère utilisés / titre du site **//
echo '<html lang="'.$HTML_LANG.'" xmlns:og="http://ogp.me/ns#">';
echo '<head>';
echo '<meta charset="utf-8" />';
echo '<title>'.$TITLE_index.'</title>'; // 70c max
//** Meta http-equiv **//
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" />';
echo '<meta http-equiv="refresh" content="6;URL='.$URL_FORM_DEV.'">';
//** Meta Name Mobile Specifics Android and Other system **//
echo '<meta name="viewport" content="width=device-width, maximum-scale=2.0, initial-scale=1.0, user-scalable=yes" />';
echo '<!--[if IEMobile]><meta http-equiv="cleartype" content="on"><![endif]-->';
echo '<meta name="HandheldFriendly" content="True" />';
echo '<meta name="MobileOptimized" content="320" />';
echo '<meta name="mobile-web-app-capable" content="yes" />';
echo '<meta name="format-detection" content="telephone=yes" />'; // Convertir les numéros de téléphone en liens pour mobiles Yes ou No
echo '<meta name="mobile-agent" content="format=html5; url=index.php" />';
//** Meta Name Mobile Specifics APPLE **//
echo '<meta name="apple-mobile-web-app-capable" content="yes" />';
echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />';
echo '<meta name="apple-touch-fullscreen" content="yes" />';
//** Meta Name Robots and Spyder **//
echo '<meta name="robots" content="noodp" />';
//** Shortcut Icon Desktop **//
echo '<link rel="shortcut icon" href="'.$FILE_FAVICON.'" />';
echo '<link rel="icon" href="'.$FILE_FAVICON.'" />';
//** Shortcut Icon APPLE (mettre les images à la racine du site !) **//
echo '<link rel="apple-touch-icon" sizes="58x58" href="touch-icon-iphone.png" />';
echo '<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png" />';
echo '<link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png" />';
echo '<link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png" />';
// echo '<link rel="apple-touch-startup-image" href="startup.png" />';
//** Shortcut Icon Miscosoft **//
echo '<meta name="msapplication-TileColor" content="#ffffff" />';
echo '<meta name="msapplication-TileImage" content="images/largetitle.png" />';
echo '<meta name="msapplication-TileImage" content="images/widetitle.png" />';
echo '<meta name="msapplication-TileImage" content="images/mediumtitle.png" />';
echo '<meta name="msapplication-TileImage" content="images/smalltitle.png" />';
echo '<meta name="theme-color" content="#294464" />';
//** Optimised SEO pour Google **//
echo '<meta name="description" content="'.$TITLE_description.'" />';  // 200c max
echo '<meta name="author" content="'.$TITLE_author.'" />';
echo '<meta name="designer" content="'.$TITLE_author.'" />';
echo '<meta name="web_author" content="'.$TITLE_author.'" />';
echo '<meta name="keywords" content="'.$TITLE_news_keywords.'" />'; // Supporter par les moteurs de recherche, SAUF GOOGLE !
echo '<meta name="news_keywords" content="'.$TITLE_news_keywords.'" />'; // GOOGLE UNIQUEMENT !
echo '<link type="text/plain" rel="author" href="'.$WEB_humans.'" />';
echo '<link rel="canonical" href="'.$WEB_canonical.'" />';
echo '<link rel="shortlink" href="'.$WEB_canonical.'" />';
//** Open Graph pour Facebook **//
echo '<meta property="og:locale" content="fr_FR" />';
echo '<meta property="og:type" content="" />';
echo '<meta property="og:title" content="'.$TITLE_index.'" />';
echo '<meta property="og:description" content="'.$TITLE_description.'" />';
echo '<meta property="og:url" content="'.$WEB_canonical.'" />';
echo '<meta property="og:site_name" content="'.$TITLE_index.'" />';
echo '<meta property="og:image" content="'.$FILE_OG_400x400.'" />';
echo '<meta property="og:image:width" content="400" />';
echo '<meta property="og:image:height" content="400" />';
//** Stylesheets **//
echo '<link rel="stylesheet" href="'.$TFEASR_css_main.'" />';
echo '<noscript><link rel="stylesheet" type="text/css" href="'.$TFEASR_css_noscript.'"></noscript>';
echo '</head>';
?>