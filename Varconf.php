<?php
require 'Confphp.php'; 
// En-tete de la page HTML5
echo '<!DOCTYPE html>';
// Langue du site / caractère utilisés / titre du site
echo '<html lang="en-US" prefix="og: http://ogp.me/ns#">';
echo '<head>';
echo '<meta charset="utf-8" />';
echo '<title>Pierrolbc</title>';
echo '<link rel="shortcut icon" href="'.$FILEFAVICON.'">';
echo '<link rel="stylesheet" type="text/css" href="'.$FILE_CSS_FAW.'">';
?>
<style>
.img_valign_mid { vertical-align: middle; }
title1 { font-weight: bold; font-variant: small-caps; background-color: black; color: yellow;}
tmark { background-color: yellow; color: black;}
mark { background-color: yellow; color: red; }
</style>
<?php 
echo '</head><body>';
echo '<center><h1><title1>Fichier de configuration des variables PHP</title1></h1></center>';
echo '<center>= Numero de ligne dans le fichier <b>'.$TFEASR_namefile.'</b></center><br>';
echo'<div>';
echo '<title1>|-- Nom de ce fichier de configuration PHP --|</title1><br>';
echo '|<b>$TFEASR_namefile</b> | <FONT color="red">'.$TFEASR_namefile.'</font><br>';
echo '<FONT color="green">|-- --|</font><br>';

echo '<title1>|-- Informations : WWW Name Site And WEB --|</title1><br>'; 
echo '|<b>$WEB_canonical</b> | <FONT color="red"><a href="'.$WEB_canonical.'" onclick="window.open(this.href);return false">'.$WEB_canonical.'</a></font><br>';
echo '|<b>$TITLE_index</b> | <FONT color="red">'.$TITLE_index.'</font><br>'; 


echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Autres Informations : WWW Name Site And WEB --|</title1><br>'; 
echo '|<b>$URLWEBRADIO</b> | <FONT color="red">'.$URLWEBRADIO.'</font><br>'; // MODIFIABLE Nom de l'url du site (sans le / a la fin)
echo '|<b>$WEB_canonical_Short</b> | <FONT color="red">'.$WEB_canonical_Short.'</font><br>'; // MODIFIABLE Nom de l'url du site (complet avec / a la fin)
echo '|<b>$WEB_Shop</b> | <FONT color="red">'.$WEB_Shop.'</font><br>'; // MODIFIABLE Nom de l'url du site (complet avec / a la fin sans http)
echo '|<b>$WEB_Shop_Short</b> | <FONT color="red">'.$WEB_Shop_Short.'</font><br>'; // MODIFIABLE Nom de l'url de la boutique Spreadshirt (complet avec / a la fin)
echo '|<b>$URL_FORM_DEV</b> | <FONT color="red">'.$URL_FORM_DEV.'</font><br>'; // MODIFIABLE Nom de la boutique Spreadshirt
echo '|<b>$TITLE_index</b> | <FONT color="red">'.$TITLE_index.'</font><br>'; // A utiliser pour le developpement. A remplacer aavec la variable URLWEBRADION
echo '|<b>$TITLE_description</b> | <FONT color="red">'.$TITLE_description.'</font><br>'; // MODIFIABLE Nom de la page d'index
echo '|<b>$TITLE_author</b> | <FONT color="red">'.$TITLE_author.'</font><br>';// MODIFIABLE Indique le nom ou la société créatrice du site et du CODE !
echo '|<b>$TITLE_news_keywords</b> | <FONT color="red">'.$TITLE_news_keywords.'</font><br>'; // MODIFIABLE Pour google uniquement. Max 10 expression séparer par VIRGULE
echo '|<b>$WEB_humans</b> | <FONT color="red">'.$WEB_humans.'</font><br>'; // AUTOMATIQUE indique toutes les personnes qui ont colaboré et fabriqué le site
echo '|<b>$LANG2</b> | <FONT color="red">'.$LANG2.'</font><br>'; // AUTOMATIQUE Langue = fr (2 caractères)
echo '|<b>$LANG3</b> | <FONT color="red">'.$LANG3.'</font><br>'; // AUTOMATIQUE Langue = fr-FR (5 caractères)
echo '|<b>$Client_Web</b> | <FONT color="red">'.$Client_Web.'</font><br>';

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- $BROWSE_LANG_tmp = fr --|</title1><br>'; 
echo '|<b>$BROWSE_LANG_tmp</b> | <FONT color="red">'.$BROWSE_LANG_tmp.'</font><br>';
echo '|<b>$FILE_LG</b> | <FONT color="red">'.$FILE_LG .'</font><br>';

echo '<FONT color="green">|-- --|</font><br>';
echo '<FONT color="green">|-- ! FONCTION Gestion des Langues ! --|</font><br>';
echo '|<b>$FOLDER_bdd_language</b> | <FONT color="red">'.$FOLDER_bdd_language.'</font><br>'; // Dossier Parent _BDD-BIOGRAPHIE_, with the leading "/"
echo '|<b>$FILE_language_en</b> | <FONT color="red">'.$FILE_language_en.'</font><br>'; // Fichier de langue ANGLAIS du SITE.
echo '|<b>$FILE_language_fr</b> | <FONT color="red">'.$FILE_language_fr.'</font><br>'; // Fichier de langue FRANCAIS du SITE.

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Menu de navigation dans les modals   --|</title1><br>'; 
echo '|<b>$Nav_Mod</b> | <FONT color="red">'.$Nav_Mod.'</font><br>';

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Variables pour Fontawesome 5.0.1 (Pictos) ** description de chaque bloc pour les modales et pour la page index.  --|</title1><br>'; 
echo '|<b>$fa5_master</b> | <FONT color="red">'.$fa5_master .'</font><br>'; // = ./css.fontawesome.5.0.1.web-fonts/
echo '|<b>$fa5_css</b> | <FONT color="red">'.$fa5_css.'</font><br>'; //  = css
echo '|<b>$fa5_js</b> | <FONT color="red">'.$fa5_js.'</font><br>'; //  = js
echo '|<b>$fa5_less</b> | <FONT color="red">'.$fa5_less.'</font><br>'; //  = scss
echo '|<b>$fa5_webfonts</b> | <FONT color="red">'.$fa5_webfonts.'</font><br>'; //  = webfonts
echo '|<b>$fa5_master_css</b> | <FONT color="red">'.$fa5_master_css.'</font><br>';  // = ./css.fontawesome.5.0.1.web-fonts/css/
echo '|<b>$fa5_master_js</b> | <FONT color="red">'.$fa5_master_js .'</font><br>'; // = ./css.fontawesome.5.0.1.web-fonts/js/
echo '|<b>$fa5_master_less</b> | <FONT color="red">'.$fa5_master_less.'</font><br>'; // = ./css.fontawesome.5.0.1.web-fonts/less/
echo '|<b>$fa5_master_scss</b> | <FONT color="red">'.$fa5_master_scss.'</font><br>'; // = ./css.fontawesome.5.0.1.web-fonts/scss/
echo '|<b>$fa5_master_webfonts</b> | <FONT color="red">'.$fa5_master_webfonts.'</font><br>'; // = ./css.fontawesome.5.0.1.web-fonts/webfonts/

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|--  Pictos Fontawesome 5.0.1 pour le site --|</title1><br>'; 
echo '|<b>$picto_album</b> | <FONT color="red">'.$picto_album.'</font><br>';
echo '|<b$picto_album_white></b> | <FONT color="red">'.$picto_album_white.'</font><br>';
echo '|<b>$picto_album_master</b> | <FONT color="red">'.$picto_album_master.'</font><br>';
echo '|<b>$picto_artist</b> | <FONT color="red">'.$picto_artist.'</font><br>';
echo '|<b>$picto_artist_white</b> | <FONT color="red">'.$picto_artist_white.'</font><br>';
echo '|<b>$picto_song</b> | <FONT color="red">'.$picto_song.'</font><br>';
echo '|<b>$picto_discography</b> | <FONT color="red">'.$picto_discography.'</font><br>';
echo '|<b>$picto_award</b> | <FONT color="red">'.$picto_award.'</font><br>';
echo '|<b>$picto_award</b> | <FONT color="red">'.$picto_award.'</font><br>';
/* $picto_pictos = '<font color="CORNSILK"><i class="fas fa-globe fa-spin fa-1x fa-fw"></i></font>';
$picto_history = '<font color="LIGHTSALMON"><i class="fas fa-history"></i></font>';
$picto_player = '<font color="INDIANRED"><i class="far fa-play-circle"></i></font>';
$picto_clock = '<font color="CRIMSON"><i class="far fa-clock"></i></font>';
$picto_comment_dots = '<font color="CRIMSON"><i class="far fa-comment-dots"></i></font>';
$picto_eclair = '<font color="DEEPPINK"><i class="fas fa-bolt"></i></font>';
$picto_key = '<i class="fas fa-key"></i>';
$picto_genre = '<font color="SILVER"><i class="fas fa-transgender-alt"></i></font>';
$picto_copyright = '<font color="LIME"><i class="far fa-copyright"></i></font>';
$picto_copyright_white = '<i class="far fa-copyright"></i>';
$picto_infos_circle_white = '<i class="fas fa-info-circle"></i>';
$picto_trademark_white = '<i class="fas fa-trademark fa-xs"></i>';
$picto_label = '<font color="KHAKI"><i class="fas fa-tags"></i></font>';
$picto_tracklisting = '<i class="fas fa-outdent"></i>';
$picto_track = '<i class="far fa-file-audio"></i>';
$picto_credit = '<i class="fas fa-dollar-sign"></i>';
$picto_note = '<i class="far fa-sticky-note"></i>';
$picto_label_other = '<i class="far fa-object-group"></i>';
$picto_calandar_lime = '<font color="LIME"><i class="far fa-calendar-check"></i></font>';
$picto_calandar_format = '<font color="CRIMSON"><i class="far fa-calendar-plus"></i></font>';
$picto_basket = '<i class="fas fa-shopping-basket"></i>';
$picto_basket_cart = '<i class="fas fa-shopping-cart"></i>';
$picto_basket_cart_orange = '<font color="ORANGE"><i class="fas fa-shopping-cart"></i></font>';
$picto_spinner = '<i class="fas fa-spinner fa-pulse"></i>';
$picto_sitmap = '<font color="LIME"><i class="fas fa-sitemap"></i></i></font>'*/

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Pictos pour le titre (Page INDEX Haut) --|</title1><br>';

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Pictos pour le pied de page (Page INDEX BAS) --|</title1><br>';
/*$picto_html5 = '<font color="ORANGE"><i class="fab fa-html5"></i></font>';
$picto_css3 = '<i class="fab fa-css3-alt"></i>';
$picto_awesome = '<i class="fab fa-fort-awesome-alt"></i>';
$picto_safari = '<i class="far fa-compass"></i>';
$picto_chrome = '<font color="#01EF78"><i class="fab fa-chrome"></i></font>';
$picto_edge = '<font color="CORNFLOWERBLUE"><i class="fab fa-edge"></i></font>';
$picto_firefox = '<i class="fab fa-firefox"></i>';
$picto_android = '<font color="LIME"><i class="fab fa-android"></i></font>';*/

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Pictos pour les barres modale  --|</title1><br>';
/*$picto_amazon_orange = '<font color="ORANGE"><i class="fab fa-amazon"></i></font>';
$picto_amazon_white = '<i class="fab fa-amazon"></i>';
$picto_apple_silver = '<font color="SILVER"><i class="fab fa-apple"></i></font>';
$picto_apple_white = '<i class="fab fa-apple"></i>';
$picto_Billboard = '<i class="fas fa-bold"></i>';
$picto_deezer = '<font color="ORANGE"><i class="fas fa-align-left" data-fa-transform="rotate-270"></i></font>';
$picto_ebay = '<font color="YELLOW"><i class="fas fa-shopping-bag"></i></font>';
$picto_ebay_red = '<font color="TOMATO"><i class="fas fa-shopping-bag"></i></font>';
$picto_facebook = '<font color="#4267B2"><i class="fab fa-facebook-square"></i></font>';
$picto_google_play = '<font color="#01EF78"><i class="fab fa-google-play"></i></font>';
$picto_google_play_white = '<font color="WHITE"><i class="fab fa-google-play"></i></font>';
$picto_google_plus = '<i class="fab fa-google-plus-square"></i>';
$picto_instagram = '<i class="fab fa-instagram"></i>';
$picto_myspace = '<i class="fas fa-users fa-fw" data-fa-transform="shrink-3.5 down-1.6 right-1.25" data-fa-mask="fas fa-circle"></i>';
$picto_napster = '<i class="fab fa-napster"></i>';
$picto_soundcloud_orange = '<font color="ORANGE"><i class="fab fa-soundcloud"></i></font>';
$picto_soundcloud_white = '<i class="fab fa-soundcloud"></i>';
$picto_spotify = '<i class="fab fa-spotify"></i>';
$picto_twitter = '<font color="#1DA1F2"><i class="fab fa-twitter-square"></i></font>';
$picto_vevo = '<i class="fab fa-vuejs"></i>';
$picto_website = '<font color="LIME"><i class="fas fa-external-link-alt"></i></font>';
$picto_website_white = '<i class="fas fa-external-link-alt"></i>';
$picto_wikipedia = '<i class="fab fa-wikipedia-w"></i>';
$picto_youtube_red = '<font color="TOMATO"><i class="fab fa-youtube"></i></font>';
$picto_youtube_whith = '<font color="WHITE"><i class="fab fa-youtube"></i></font>';*/

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Pictos divers --|</title1><br>';
/*$picto_Discography_white = '<span class="fa-layers fa-fw" style="background:MistyRose"><i class="fas fa-certificate"></i><span class="fa-layers-text fa-inverse" data-fa-transform="shrink-11.5 rotate--30" style="font-weight:900">Dis</span></span>';
$picto_headphones_white = '<i class="fas fa-headphones"></i>';
$picto_play_white = '<i class="fas fa-play"></i>';
$picto_Volume_off_white = '<i class="fas fa-volume-off"></i>';
$picto_Volume_Down_white = '<i class="fas fa-volume-down"></i>';
$picto_Volume_Up_white = '<i class="fas fa-volume-up"></i>';
$picto_caret_Up_white = '<i class="far fa-caret-square-up"></i>';
$picto_caret_Down_white = '<i class="far fa-caret-square-down"></i>';*/

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Variables des dossiers --|</title1><br>';
echo '|<b>$assets_folder</b> | <FONT color="red">'.$assets_folder.'</font><br>'; // Dossier Parent Theme du site et resources, with the leading "/"
echo '|<b>assets_folder_css</b> | <FONT color="red">'.$assets_folder_css.'</font><br>'; // Dossier enfant CSS du site, with the leading "/"
echo '|<b>$assets_folder_fonts</b> | <FONT color="red">'.$assets_folder_fonts.'</font><br>'; // Dossier enfant FONTS du site, with the leading "/"
echo '|<b>$assets_folder_js</b> | <FONT color="red">'.$assets_folder_js.'</font><br>'; // Dossier enfant JS du site, with the leading "/"
echo '|<b>$assets_folder_sass</b> | <FONT color="red">'.$assets_folder_sass.'</font><br>';  // Dossier enfant SASS du site, with the leading "/"

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Fichier CSS pour le fonctionnement TFEASR --|</title1><br>';
echo '|<b>$file_css_main</b> | <FONT color="red">'.$file_css_main.'</font><br>';
echo '|<b>$TFEASR_css_main</b> | <FONT color="red">'.$TFEASR_css_main.'</font><br>';
echo '|<b>$file_css_ie9</b> | <FONT color="red">'.$file_css_ie9.'</font><br>';
echo '|<b>$TFEASR_css_ie9</b> | <FONT color="red">'.$TFEASR_css_ie9.'</font><br>';
echo '|<b>$file_css_noscript</b> | <FONT color="red">'.$file_css_noscript.'</font><br>';
echo '|<b>$TFEASR_css_noscript</b> | <FONT color="red">'.$TFEASR_css_noscript.'</font><br>';

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Fichiers JS pour le fonctionnement TFEASR--|</title1><br>';
echo '|<b>$file_js_jquery</b> | <FONT color="red">'.$file_js_jquery.'</font><br>';
echo '|<b>$TFEASR_js_jquery</b> | <FONT color="red">'.$TFEASR_js_jquery.'</font><br>';
echo '|<b>$file_js_skel</b> | <FONT color="red">'.$file_js_skel.'</font><br>';
echo '|<b>$TFEASR_js_skel</b> | <FONT color="red">'.$TFEASR_js_skel.'</font><br>';
echo '|<b>$file_js_util</b> | <FONT color="red">'.$file_js_util.'</font><br>';
echo '|<b>$TFEASR_js_util</b> | <FONT color="red">'.$TFEASR_js_util.'</font><br>';
echo '|<b>$file_js_main</b> | <FONT color="red">'.$file_js_main.'</font><br>';
echo '|<b>$TFEASR_js_main</b> | <FONT color="red">'.$TFEASR_js_main.'</font><br>';
echo '|<b>$file_js_oXHR </b> | <FONT color="red">'.$file_js_oXHR.'</font><br>';
echo '|<b>$TFEASR_js_oXHR</b> | <FONT color="red">'.$TFEASR_js_oXHR.'</font><br>';

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Variables des Dossiers de BASE utilises par le site --|</title1><br>';
echo '|<b>$FOLDER_BDD</b> | <FONT color="red">'.$FOLDER_BDD.'</font><br>'; 
echo '|<b>$FOLDER_bdd</b> | <FONT color="red">'.$FOLDER_bdd.'</font><br>';
echo '|<b>$FOLDER_CSS</b> | <FONT color="red">'.$FOLDER_CSS.'</font><br>'; // Dossier Parent css, with the leading "/"
echo '|<b>$FOLDER_FONTS</b> | <FONT color="red">'.$FOLDER_FONTS.'</font><br>'; // Dossier Parent fonts, with the leading "/"
echo '|<b>$FOLDER_ICECAST</b> | <FONT color="red">'.$FOLDER_ICECAST.'</font><br>'; // Dossier Parent icecast, with the leading "/"
echo '|<b>$FOLDER_IMG</b> | <FONT color="red">'.$FOLDER_IMG.'</font><br>'; // Dossier Parent img, with the leading "/"
echo '|<b>$FOLDER_IMAGES</b> | <FONT color="red">'.$FOLDER_IMAGES.'</font><br>'; // Dossier Parent img, with the leading "/"
echo '|<b>$FOLDER_SVGFLAGS</b> | <FONT color="red">'.$FOLDER_SVGFLAGS.'</font><br>'; // Dossier Parent img, with the leading "/"
echo '|<b>$FOLDER_JS</b> | <FONT color="red">'.$FOLDER_JS.'</font><br>'; // Dossier Parent js, with the leading "/"
echo '|<b>$FOLDER_LESS</b> | <FONT color="red">'.$FOLDER_LESS.'</font><br>'; // Dossier Parent less, with the leading "/"
echo '|<b>$FOLDER_SCSS</b> | <FONT color="red">'.$FOLDER_SCSS.'</font><br>'; // Dossier Parent scss, with the leading "/"

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Variables des Fichiers utilises par le site --|</title1><br>';
echo '|<b>$FILELOGOSSVG</b> | <FONT color="red">'.$FILELOGOSSVG .'</font><br>'; // AUTOMATIQUE plus le nom de l'image du FAVICON
echo '|<b>$FILEFAVICON</b> | <FONT color="red">'.$FILEFAVICON.'</font><br>'; // AUTOMATIQUE plus le nom de l'image du FAVICON
echo '|<b>$FILE_FAVICON</b> | <FONT color="red">'.$FILE_FAVICON.'</font><br>'; // AUTOMATIQUE plus le nom de l'image du FAVICON
echo '|<b>$FILE_CSS_FAW</b> | <FONT color="red">'.$FILE_CSS_FAW.'</font><br>'; // AUTOMATIQUE Fichier CSS pour FONT Awesome icons
echo '|<b>$FILE_CSS_audioplayer </b> | <FONT color="red">'.$FILE_CSS_audioplayer.'</font><br>'; // AUTOMATIQUE Fichier CSS pour FONT Awesome icons
echo '|<b>$FILE_JS_JQUERY</b> | <FONT color="red">'.$FILE_JS_JQUERY.'</font><br>'; // AUTOMATIQUE Fichier JS pour JQUERY

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Variables Gestion des Heures et des Dates --|</title1><br>';
echo '|<b>$hours</b> | <FONT color="red">'.$hours.'</font><br>'; // Hour 24
echo '|<b>$hour</b> | <FONT color="red">'.$hour.'</font><br>';  // Hour 12 Only
echo '|<b>$minutes</b> | <FONT color="red">'.$minutes.'</font><br>'; // Minute Only
echo '|<b>$seconds</b> | <FONT color="red">'.$seconds.'</font><br>'; // Seconde only
echo '|<b>$separat</b> | <FONT color="red">'.$separat.'</font><br>'; // Separator : for Hour
echo '|<b>$allhm</b> | <FONT color="red">'.$allhm.'</font><br>'; // Hour Minute without separator
echo '|<b>$allhms</b> | <FONT color="red">'.$allhms.'</font><br>'; // Hour Minute Second without separator
echo '|<b>$allhmss</b> | <FONT color="red">'.$allhmss.'</font><br>'; // Hour Minute Second  with separator

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- $today = date("d-m-Y") --|</title1><br>';
echo '|<b>$today</b> | <FONT color="red">'.$today.'</font><br>';
echo '|<b>$Day</b> | <FONT color="red">'.$Day.'</font><br>';
echo '|<b>$Month</b> | <FONT color="red">'.$Month.'</font><br>';
echo '|<b>$Year</b> | <FONT color="red">'.$Year.'</font><br>';

echo '<FONT color="green">|-- --|</font><br>';
echo '<title1>|-- Variables Gestion des Fichiers pour les playlists  --|</title1><br>';
echo '|<b>$dir</b> | <FONT color="red">'.$dir.'</font><br>'; // Emplacement du dossier pour lister les fichiers TXT
echo '|<b>$dir_old</b> | <FONT color="red">'.$dir_old.'</font><br>';// Emplacement du dossier pour lister les fichiers archive TXT
echo '|<b>$filelog </b> | <FONT color="red">'.$filelog.'</font><br>'; // Enter the name of the daily programming file (.txt) //
echo '|<b>$filelogtmp</b> | <FONT color="red">'.$filelogtmp.'</font><br>';  // Enter the name of the daily programming file (.txt) //
echo '|<b>$txttype</b> | <FONT color="red">'.$txttype.'</font><br>';
echo '|<b>$filetype</b> | <FONT color="red">'.$filetype.'</font><br>';
echo '|<b>$folderfiletype</b> | <FONT color="red">'.$folderfiletype.'</font><br>';
echo '|<b>$fileday</b> | <FONT color="red">'.$fileday.'</font><br>';// Way Day titles distributed file
echo '|<b>$filedaytmp</b> | <FONT color="red">'.$filedaytmp.'</font><br>'; // Way Day titles distributed file
echo '|<b>$nocurrent</b> | <FONT color="red">'.$nocurrent.'</font><br>'; // If no stream available, handle the error
echo '|<b>$chr13</b> | <FONT color="red">'.$chr13.'</font><br>';
echo '|<b>$firstsingle</b> | <FONT color="red">'.$firstsingle.'</font><br>';
echo '|<b>$newday</b> | <FONT color="red">'.$newday.'</font><br>';


echo '</div>';