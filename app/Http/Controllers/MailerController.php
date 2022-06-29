<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
use PHPMailer\PHPMailer\Exception;
use League\OAuth2\Client\Provider\Google;

class MailerController extends Controller
{
    public function sendMail(Request $request)
    {
        if ($request->isMethod('POST')) {
            require base_path('vendor/autoload.php');

            $mail = new PHPMailer(true);

            $nama = $request->input('nama');
            $email = $request->input('email');
            $subjek = $request->input('subjek');
            $pesan = $request->input('pesan');

            try {
                $mail->isSMTP();
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->SMTPAuth = true;
                $mail->AuthType = 'XOAUTH2';

                $email_send = 'tesssany@gmail.com';
                $clientId = '734549949759-ld6k8mhde7aueo5b86o8fbg9ceftvs3n.apps.googleusercontent.com';
                $clientSecret = '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';
                $refreshToken = '1//0gor-6-ZV4uncCgYIARAAGBASNwF-L9IrKo-2L4r_seC59u7J_-iqwpoim7XVr_3tXy5wxwyl1bM2HZXpMqTdSG-uWe2EIes5tks';

                $provider = new Google(['clientId' => $clientId, 'clientSecret' => $clientSecret]);
                $mail->setOAuth(new OAuth(['provider' => $provider, 'clientId' => $clientId, 'clientSecret' => $clientSecret, 'refreshToken' => $refreshToken, 'userName' => $email_send,]));

                //change from this
                $mail->setFrom($email_send, $nama);
                $mail->addAddress('mekarlaserc@gmail.com');
                $mail->addReplyTo($email, $nama);
                $mail->Subject = 'Pesan dari ' . $nama;

                $mail->isHTML(true);
                $mail->Body =
                    '<div style="margin: auto; border-radius: 25px; border: 2px solid #80aaff; padding: 20px; width: auto; height: max-content;">
                    <p style="font-family: Arial, Helvetica, sans-serif; color: #262626;">Email: ' . $email . '</p>
                    <p style="font-family: Arial, Helvetica, sans-serif; color: #262626;">Nama : ' . $nama . '</p>
                    <p style="font-family: Arial, Helvetica, sans-serif;color: #262626;">Subjek : ' . $subjek . '</p>
                    <p style="font-family: Arial, Helvetica, sans-serif; color: #262626;">Pesan : ' . $pesan . '</p>
                </div>';
                $mail->AltBody = $pesan;

                if ($mail->send()) {
                    return back()->with('berhasil', 'Email berhasil dikirim');
                } else {
                    return back()->with('gagal', 'Email gagal dikirim')->withErrors($mail->ErrorInfo);
                }

            } catch (Exception $e) {
                return back()->with('error', $mail->ErrorInfo);
            }
        }
    }
}
