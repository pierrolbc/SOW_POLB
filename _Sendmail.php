<?php 
ob_start ("ob_gzhandler");
require('Confphp.php');
//** Importez les classes PHPMailer dans l'espace de noms global 
//** Celles-ci doivent être en haut de votre script, pas à l'intérieur d'une fonction
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '_PHPMailer/src/Exception.php';
require '_PHPMailer/src/PHPMailer.php';
require '_PHPMailer/src/SMTP.php';

//** PROTECTION contre l'affichage de la page _Sendmail sans qu'elle soit appellée par le formulaire *//
//** Test si la variable Sendmail à été envoyée par le formulaire.
if(isset($_POST['Sendmail'])){

//** Si la variable est présente, traitement par la conformité du captcha.
session_start();
if(isset($_POST['captcha'])){

//** Si le captcha est valide, affichage des informations pour l'utilisateur et retour à la page INDEX **//
if($_POST['captcha']==$_SESSION['captcha']){

//** Variables reçus du formulaire
//** convertion des chiffres de la Civilité pour afficher le résultat en correspondance
$civilite = $_POST['civility'];
if ($civilite === '1') 
{ 
$Civ_Cat = $Civ_01_Txt;
$Civ = $Civ_00_Txt;
} 
else 
{
$Civ_Cat = $Civ_02_Txt;
$Civ = $Civ_03_Txt;
}
//** Réception du POST de l'url du formulaire
$nom = $_POST['name'];
//$nom = utf8_encode($nom);
//** 
$prenom = $_POST['firstname'];
//$prenom = utf8_encode($prenom);
//**
$email = $_POST['email'];
//$email = utf8_encode($email);
//**
$telephone = $_POST['phone'];
$telephone = utf8_encode($telephone);
/* Test si le champs "société" est renseigné car il n'est pas obligatoire
* Permet de donner 2 choix de variables 
*/
$TheSoc = $_POST['compagny'];
if (empty($TheSoc)) {
$societe = $Post_02_Soc;
} else {
$societe = $Post_01_Soc . $TheSoc;
}
//** convertion des chiffres de la CATEGORIE pour afficher le résultat en correspondance
$categorie = $_POST['category'];
if ($categorie === '1') 
{ 
$cat = $Cat_01_Txt;
} 
elseif ($categorie === '2') 
{
$cat = $Cat_02_Txt;
$AddAttac = "images/CV.pdf";
}
elseif ($categorie === '3') 
{
$cat = $Cat_03_Txt;
}

$Subject = utf8_encode($cat);
//**
$message = stripslashes($_POST['message']);
$message = str_replace("\n","<br />",$message);
$message = utf8_encode($message);


$mail = new PHPMailer(true);                              // Passer `true` active les exceptions
try {
    // Paramètres du serveur
    $mail->SMTPDebug = 0;                                 // Activer la sortie de débogage détaillé Mettre à 0 en prod Mettre à 2 en dev
    $mail->isSMTP();                                      // Configurez mailer pour utiliser SMTP
    $mail->Host = 'smtp.gmail.com';  					  // Spécifiez les serveurs SMTP principaux et de sauvegarde
    $mail->SMTPAuth = true;                               // Activer l'authentification SMTP
    $mail->Username = 'polb.dev@gmail.com';    // Nom d'utilisateur SMTP
    $mail->Password = 'SNLRp3K4DhzcukA';             // Mot de passe SMTP
    $mail->SMTPSecure = 'ssl';                            // Activer le cryptage TLS, `ssl` a également accepté
    $mail->Port = 465;                                    // Port TCP auquel se connecter
	$mail->CharSet = "utf-8";

    // Destinataires
    $mail->setFrom('polb.dev@gmail.com', 'Web CV Pierre-Olivier Le Bellec');
    $mail->addAddress(''.$email.'', ''.$Civ_Cat.' '.$prenom.' '.$nom.'');     // Ajouter un destinataire
    // $mail->addAddress('ellen@example.com');               // Le nom est facultatif
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');						// Copie carbonne
    $mail->addBCC('polb.dev@gmail.com');					// Copie carbonne cachée

    // Pièces jointes
	if (isset($AddAttac)){
    $mail->addAttachment($AddAttac);
	} else {
	// Rien à afficher !
	}
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Ajouter des pièces jointes avec le chemin complet avec un nom (Nom facultatif)

    // Contenu
    $mail->isHTML(true);                                  // Définissez le format de l'e-mail sur HTML
    $mail->Subject = $Subject;
    $mail->Body    = ''.$Msg_00_Msgto.''.$Civ_Cat.' '.$prenom.' '.$nom.'<br>'.$societe.'<br>'.$Post_Phone.''.$telephone.'<br>'.$Post_EMail.''.$email.'<br><br>'.$Msg_01_Your_Msg.'<br>'.$message.'<br><br>'.$Civ.''.$Civ_Cat.' '.$prenom.' '.$nom.'<br>'.$Msg_00_Good.'<br>'.$Msg_01_Good.'<br>'.$Msg_02_Good.'<br>'.$WEB_canonical.'';
    // $mail->AltBody = 'Ceci est le corps en texte brut pour les clients de messagerie non HTML';

    $mail->send();
//** Création du message en html que l'internaut recevra et verra après l'envoie du mail
include '_00_HEAD_Refresh.php';
echo '<body class="is-preload">';
echo '<div class="table-wrapper">';
echo '<header id="header">';
echo '</header>';
echo '<div id="main">';
//** Modal Contact
echo '<article id="contact">';
//echo '<h2 class="major"><span title="'.$M_04_AT.'">'.$picto_comment_dots.''.$M_04_AT.'</span></h2>';
// echo '<span class="image main"><img src="'.$FOLDER_IMAGES_02.'pic04.jpg" alt="'.$M_04_AT.'" title="'.$M_04_AT.'" /></span>';
echo '<table>';
echo '<tbody>';
echo '<tr>';
echo '<td>'.$Msg_Hello.'<b>'.$Civ_Cat.' '.$prenom.' '.$nom.'</b><br><b>'.$societe.'</b><br>'.$Post_EMail.'<b>'.$email.'</b><br>'.$Post_Phone.'<b>'.$telephone.'</b></td>';
echo '</tr>';
echo '<tr>';
echo '<td>'.$Post_Subjet_Msg.'<b>'.$cat.'</b><br><br>'.$message.'<br><br></td>';
echo '</tr>';
echo '<tr>';
echo '<td><b>'.$Civ_Cat.' '.$prenom.' '.$nom.'</b><br>'.$Msg_Send_Ok.'<br><br>'.$Msg_00_Good.'<br>'.$Msg_01_Good.'<br>'.$Msg_02_Good.'</td>';
echo '</tr>';
echo '</tbody>';
echo '</table>';
echo '<center><p class="copyright">&copy; Pierre-Olivier LB.</p></center>';
echo '</article>';
include '_00_02_HTML_HEADER_DOWN.php';

} catch (Exception $e) {

//** Création du message en html en cas d'erreur SMTP
include '_00_HEAD_Refresh.php';
echo '<body class="is-preload">';
echo '<div class="table-wrapper">';
echo '<header id="header">';
echo '</header>';
echo '<div id="main">';
//** Modal Contact
echo '<article id="contact">';
//echo '<h2 class="major"><span title="'.$M_04_AT.'">'.$picto_comment_dots.''.$M_04_AT.'</span></h2>';
// echo '<span class="image main"><img src="'.$FOLDER_IMAGES_02.'pic04.jpg" alt="'.$M_04_AT.'" title="'.$M_04_AT.'" /></span>';
echo '<table>';
echo '<tbody>';
echo '<tr>';
echo '<td>'.$Msg_00_Bad.'</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Mailer Error: '.$mail->ErrorInfo.'</td>';
echo '</tr>';
echo '</tbody>';
echo '</table>';
echo '<center><p class="copyright">&copy; Pierre-Olivier LB.</p></center>';
echo '</article>';
include '_00_02_HTML_HEADER_DOWN.php';
}


//** Si le captcha n'est pas valide, affichage de l'érreur et retour à la page précédente **//
} else {
//** Construction de la page pas de captcha **//
include '_00_02_No_Captcha.php';
}

}
//** Si la variable "Sendmail" n'est présente, retour automatique à la page INDEX du site (Anti-Relou !).
} else {
include '_00_02_No_Sendmail.php';

}
?>