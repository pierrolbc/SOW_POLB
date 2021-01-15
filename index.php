<?php

/*<!--
 *	Astral by HTML5 UP
 *	html5up.net | @ajlkn
 *	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->*/

ob_start ("ob_gzhandler");
require('Confphp.php');
//** En-tete de la page HTML5 **//
echo '<!DOCTYPE html>';
//** Langue du site / caractère utilisés / titre du site **//
echo '<html lang="'.$HTML_LANG.'" xmlns:og="http://ogp.me/ns#">';
echo '<head>';
echo '<meta charset="utf-8" />';
echo '<title>'.$TITLE_index.'</title>'; // 70c max
//** Meta http-equiv **//
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge" />';
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
echo '<link rel="apple-touch-icon" sizes="58x58" href="touch-icon-iphone.png"/>';
echo '<link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png"/>';
echo '<link rel="apple-touch-icon" sizes="167x167" href="touch-icon-iphone-retina.png"/>';
echo '<link rel="apple-touch-icon" sizes="180x180" href="touch-icon-ipad-retina.png"/>';
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
// echo '<meta property="og:type" content="" />';
echo '<meta property="og:title" content="'.$TITLE_index.'" />';
echo '<meta property="og:description" content="'.$TITLE_description.'" />';
echo '<meta property="og:url" content="'.$WEB_canonical.'" />';
echo '<meta property="og:site_name" content="'.$TITLE_index.'" />';
echo '<meta property="og:image" content="'.$FILE_OG_400x400.'" />';
echo '<meta property="og:image:width" content="400" />';
echo '<meta property="og:image:height" content="400" />';
//** Stylesheets **//
echo '<link rel="stylesheet" href="assets/css/main.css" />';
echo '<noscript><link rel="stylesheet" type="text/css" href="assets/css/noscript.css"></noscript>';
echo '<script src="js/jquery-1.4.3.min.js"></script>';
echo '<script src="js/jquery-ui-1.8.5.min.js"></script>';
echo '</head>';
//** DEBUT du corps HTML5
echo '<body class="is-preload">';

//       	<!-- Wrapper-->
echo		'<div id="wrapper">';

//			<!-- Nav -->
echo		'<nav id="nav">';
include ''.$Mod_Nav_txt.'';
echo		'</nav>';

//			<!-- Main -->
echo		'<div id="main">';

//			<!-- Me -->
echo		'<article id="home" class="panel intro">';
include  ''.$Mod_Home_txt.'';
echo		'</article>';

//			<!-- Skill -->
echo		'<article id="skill" class="panel">';
include ''.$Mod_Skill_txt.'';
echo		'</article>';

//			<!-- Work -->
echo		'<article id="work" class="panel">';
include ''.$Mod_Work_txt.'';

echo		'</article>';



//			<!-- Copyright -->
echo		'<article id="copyright"  class="panel">';
include  ''.$Mod_Copyright_txt.'';
echo		'</article>';
//		<!-- Contact -->
//<!-- Contact -->
echo '<article id="contact" class="panel">';



echo '<form method="POST" action="_Sendmail.php">';
echo '<input id="Sendmail" name="Sendmail" type="hidden" value="Sendmail">';
//** DEBUT du DIV de l'ensemble des champs du formulaire
echo     '<div>';
echo    '<div class="row">';
echo     '<div class="col-6 col-12-medium">';
echo       '<label for="civility">'.$Form_00_Civility.'</label>'; //déroulant
echo        '<div class="select-wrapper">';
echo       '<select name="civility" id="civility">';
echo        '<option value="1">'.$Civ_01_Txt.'</option>';
echo        '<option value="2">'.$Civ_02_Txt.'</option>';
echo        '</select>';
echo'</div>';
echo     '</div>';
echo      '<div class="col-6 col-12-medium">';
echo         '<label for="'.$Form_01_Name.'">'.$Form_01_Name.'</label>';
echo          '<input type="text" name="name" id="name" placeholder="'.$PH_01_Name.'" required="required"/>';
echo         '</div>';
echo         '<div class="col-6 col-12-medium" >';
echo         '<label for="firstname">'.$Form_02_First_Name.'</label>';
echo         '<input type="text" name="firstname" id="firstname" placeholder="'.$PH_02_First_Name.'" required="required">';
echo        '</div>';
echo        '<div class="col-6 col-12-medium">';
echo         '<label for="email">'.$Form_03_Email.'</label>';
echo            '<input type="text" name="email" placeholder="'.$PH_03_Email.'" required="required" />';
echo        '</div>';
echo        '<div class="col-6 col-12-medium">';
echo         '<label for="phone">'.$Form_04_Phone.'</label>';
echo            '<input type="text" name="phone" placeholder="'.$PH_04_Phone.'"/>';
echo        '</div>';
echo        '<div class="col-6 col-12-medium">';
echo        '<label for="compagny">'.$Form_05_Compagny.'</label>';
echo            '<input type="text" name="compagny" placeholder="'.$PH_05_Compagny.'">';
echo        '</div>';
echo        '<div class="col-6 col-12-medium">';
echo        '<label for="category">'.$Form_06_Category.'</label>';
echo        '<div class="select-wrapper">';
echo        '<select name="category" id="category" required="required">';
echo        '<option value="">'.$Cat_00_Txt.'</option>';
echo        '<option value="1">'.$Cat_01_Txt.'</option>';
echo        '<option value="2">'.$Cat_02_Txt.'</option>';
echo        '<option value="3">'.$Cat_03_Txt.'</option>';
echo        '</select>';
echo        '</div>';
echo        '</div>';
echo        '<div class="col-12">';
echo        '<label for="message"></label>';
echo        '<textarea name="message" id="message" placeholder="'.$PH_06_Message.'" rows="4" maxlength="500" required="required"></textarea>';
echo        '<p id="compteur"> 500 </p>';
echo        '</div>';
echo        '<div class="col-12">';
echo        '<label for="captcha">'.$Form_07_Captcha.'</label>';
echo        '<img src="_Captcha.php">';
echo        '<input type="text" name="captcha" id="captcha" maxlength="6" required="required"/>';

echo        '</div>';
//** FIN du DIV de l'ensemble des champs du formulaire
echo        '<div class="col-6 col-12-medium">';
echo        '<input type="submit" value="'.$Form_08_Button_Send.'" />';
echo        '</div>';
echo        '<div class="col-6 col-12-medium">';
echo        '<input type="reset" value="'.$Form_09_Button_Reset.'" >';
echo        '</div>';
echo        '</div>';
echo        '</div>';
echo        '</form>';

echo		'</article>';


echo		'</div>';


echo		'</div>';

//	<!-- Footer -->
echo	   '<div id="footer">';
echo ' <a href="https://t.me/Pierrolb">&copy; Pierre-Olivier LB.</a> <a href="#copyright" class="icon solid fa-copyright"><span> '.$M_06_CV.' </span></a>&nbsp;&nbsp;&nbsp;';
include ''.$Nav_Mod.'';
echo	    '</div>';

//	<!-- Scripts -->
echo		'<script src="assets/js/jquery.min.js"></script>';
echo		'<script src="assets/js/browser.min.js"></script>';
echo		'<script src="assets/js/breakpoints.min.js"></script>';
echo		'<script src="assets/js/util.js"></script>';
echo		'<script src="assets/js/main.js"></script>';
echo        '<script src="assets/js/compteur.js"></script>';
echo	    '</body>';

echo        '</html>';
?>