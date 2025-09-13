<!-- =============================================================
ZWEITE DATEI: email.php (im Webroot neben dieser HTML speichern)
=============================================================== -->
<!--
<?php
// email.php – minimaler Mail-Handler
// Zieladresse:
$to = 'kontakt@mb-reinigung-bamberg.de';


// Nur POST akzeptieren
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
http_response_code(405); // Method Not Allowed
exit('Nur POST erlaubt');
}


// Felder einsammeln & rudimentär bereinigen
$name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS));
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone = trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS));
$size = trim(filter_input(INPUT_POST, 'size', FILTER_SANITIZE_SPECIAL_CHARS));
$message = trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS));


if (!$name || !$email || !$message) {
http_response_code(400);
exit('Bitte Pflichtfelder ausfüllen.');
}


$subject = 'Neue Anfrage über das Kontaktformular';
$body = "Name: $name\n";
$body .= "E-Mail: $email\n";
$body .= "Telefon: $phone\n";
$body .= "Objektgröße: $size\n\n";
$body .= "Nachricht:\n$message\n";


$headers = [];
$headers[] = 'From: MB Reinigung <no-reply@' . $_SERVER['HTTP_HOST'] . '>';
$headers[] = 'Reply-To: ' . $email;
$headers[] = 'Content-Type: text/plain; charset=UTF-8';


if (mail($to, $subject, $body, implode("\r\n", $headers))) {
http_response_code(200);
echo 'OK';
} else {
http_response_code(500);
echo 'Mailversand fehlgeschlagen.';
}
?>
-->