<?php
//require serve a caricare un file all'interno di un altro file
//e poi dobbiamo inserire il percorso al file in cui ci troviamo
//__DIR__ =>restituisce il percorso alla cartella che contiene questo file 
// ../ => torna su nella cartella di un livello(se ci troviamo in src, va fuori dalla cartella,
//ovver dove si trovano src e vendor)
require __DIR__ . '/../vendor/autoload.php'; //questo serve per poter caricare le librerie, nel nostro caso serve per le mail
                 //il file l'ho creata nella cartella src
                //draning slash


// per comprendere questo percorso apri il file
//vendor/phpmailer/phpmaile/src/phpmailer.php
//analizza il namespace: è phpmailer/phpmailer
//l'ultima ripetizione(phpmailer) è il nome della classe, che si trova
//per l'appnto all'interno del namespace
use PHPMailer\PHPMailer\{ Exception, PHPMailer, SMTP };

$mail = new PHPMailer(true);// creo l'oggetto

$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.mailgun.org';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'postmaster@sandboxcf0c4e03d49e4a97a12bdc3c4299b864.mailgun.org';                     //SMTP username
    $mail->Password   = 'e18820eb8fe9aa12e26a4d1869bdaddc-1b237f8b-6b4d288d';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    $mail->setFrom($_POST["from"]);
    $mail->addAddress($_POST["to"]);
    $mail->Subject = 'Here is the subject';
    $mail->Body = $_POST["messaggio"];

    try{   //
        $mail->send();//metodo

    }catch(Exception $e){ //messaggio di errore
        var_dump($e);
    }


?>                