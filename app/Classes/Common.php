<?php

namespace App\Classes;

class Common
{
    /*public static function mandarEmailNotification($destinatario, $notification, $idContact = 0)
    {
    $mensaje = NULL;
    return Mail::send(['html' => 'emails.notification'], ["notification" => $notification, "idContact" => $idContact], function($mensaje) use($notification, $destinatario){
    $mensaje->to($destinatario);
    $mensaje->from(env('MAIL_USERNAME', 'quality@estelarconstruction.com'),"Quality Control Estelar");
    $mensaje->subject($notification->ProjectScope->Project->name);
    foreach ($notification->Imagenes as $imagen) {
    $mensaje->attach('images/notification_send/'.$imagen->name, ['as' => $imagen->name, 'mime' => $imagen->mime]);
    }
    });
    }

    public static function mandarEmailCotizacion($destinatarios, $quotation, $contenido)
    {
    $backup = Mail::getSwiftMailer();

    // Setup your gmail mailer
    $transport = new Swift_SmtpTransport(env('MAIL_HOST', 'smtp-mail.outlook.com'), env('MAIL_PORT', 587), env('MAIL_ENCRYPTION', 'tls'));
    $transport->setUsername(env('MAIL_SALES'));
    $transport->setPassword(env('PASSWORD_SALES'));
    // Any other mailer configuration stuff needed...

    $mailObject = new Swift_Mailer($transport);
    Mail::setSwiftMailer($mailObject);

    $mensaje = null;
    return Mail::send(['html' => 'emails.cotizacion'], ["quotation" => $quotation, "contenido" => $contenido], function($mensaje) use($quotation, $destinatarios){
    $mensaje->to($destinatarios);
    $mensaje->from(env('MAIL_SALES'),"Estelar Construction");
    $mensaje->subject("Qutotation #".$quotation->quoting_number);
    $pdf = PDF::loadView('pdf.quotation', ["quotation" => $quotation]);
    $mensaje->attachData($pdf->output(), "quotation-".$quotation->quoting_number.".pdf");
    });
    Mail::setSwiftMailer($backup);
    }

    public static function mandarEmailInvoice($destinatarios, $invoice, $contenido)
    {
    $backup = Mail::getSwiftMailer();

    // Setup your gmail mailer
    $transport = new Swift_SmtpTransport(env('MAIL_HOST', 'smtp-mail.outlook.com'), env('MAIL_PORT', 587), env('MAIL_ENCRYPTION', 'tls'));
    $transport->setUsername(env('MAIL_ACCOUNTS'));
    $transport->setPassword(env('PASSWORD_ACCOUNTS'));
    // Any other mailer configuration stuff needed...

    $mailObject = new Swift_Mailer($transport);
    Mail::setSwiftMailer($mailObject);

    $mensaje = null;
    return Mail::send(['html' => 'emails.invoice'], ["invoice" => $invoice, "contenido" => $contenido], function($mensaje) use($invoice, $destinatarios){
    $mensaje->to($destinatarios);
    $mensaje->from(env('MAIL_ACCOUNTS'), "Estelar Construction");
    $mensaje->subject("Invoice #".$invoice->id);
    $pdf = PDF::loadView('pdf.invoice', ["invoice" => $invoice]);
    $mensaje->attachData($pdf->output(), "invoice-".$invoice->id.".pdf");
    });
    Mail::setSwiftMailer($backup);
    }*/

    public static function get_random_string($length = 6)
    {
        $cons = array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l',
            'm', 'n', 'p', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z');
        $voca = array('a', 'e', 'i', 'o', 'u');

        srand((double) microtime() * 1000000);

        $max = $length / 2;
        $password = '';
        for ($i = 1; $i <= $max; $i++) {
            $password .= $cons[rand(0, count($cons) - 1)];
            $password .= $voca[rand(0, count($voca) - 1)];
        }

        if (($length % 2) == 1) {
            $password .= $cons[rand(0, count($cons) - 1)];
        }

        return $password;
    }

    /*public static function crearConfirmacion($notification)
{
$cadena = $contactos = "";
$cadena .= $notification->id."|";
foreach($notification->ProjectScope->Contacts as $contact)
{
$contactos .= $contact->Contact->id."_";
}
$cadena .= $contactos;
return encrypt($cadena);
}*/
}
