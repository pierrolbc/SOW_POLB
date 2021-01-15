<?php
echo '<!DOCTYPE html>';
echo '<html lang="'.$HTML_LANG.'" xmlns:og="http://ogp.me/ns#">';
echo '<head>';
echo '<title>OOPS!</title>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
//** Meta Name Robots and Spyder **//
echo '<meta name="robots" content="noodp" />';
//** Shortcut Icon Desktop **//
echo '<link rel="shortcut icon" href="'.$FILE_FAVICON.'" />';
echo '<link rel="icon" href="'.$FILE_FAVICON.'" />';
/* http-equiv="refresh" : 
* Pour revenir sur le la page du formulaire #contact !
* Toutes les informations sont perdues pour l'utilisteur !
*/
echo '<meta http-equiv="refresh" content="6;URL='.$URL_FORM_DEV.'">';
echo '<style>';
echo 'body {';
echo 'background: url("'.$FOLDER_IMAGES.'bg.jpg") no-repeat center center fixed;';
echo 'background-size: cover;';
echo 'color:#FFFFFF';
echo '}';
echo 'h1 {';
echo 'color:#FFF000';
echo '}';
echo '</style>';
echo '</head>';
/* HISTORY BACK : 
* Pour revenir sur le formulaire #contact sans effacer les informations saisies!
* Delai 3000 = 3 secondes
*/
echo '<body onload="window.setTimeout(\'history.back()\',3000);">';
echo '<body>';
echo '<center><br><br><br><br><br>';
echo "<H1>D&eacute;sol&eacute; il n&acute;y a rien à voir ici !</h1>";
echo "<H1>Sorry there is nothing to see here!</h1>";
echo '<img src="'.$FOLDER_IMAGES.'Oops.svg" width="400" height="400" alt="OOPS!" title="OOPS!" />';
echo '<H1>Bye Bye !</H1><br>';
echo '<p class="copyright">&copy; School Of Web.</p>';
echo '</center>';
echo '</body>';
echo '</html>';
?>