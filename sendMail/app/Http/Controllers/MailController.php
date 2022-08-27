<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {

    public function sendMail(Request $request){
        $send_to = $request->post('txtSendTo');
        $subject = $request->post('txtSubject');
        $text = $request->post('txtMessage');

        Mail::send('mail.example',
            ['msg' => $text],
            function($message) use ($send_to, $subject) {
                $message->to(array($send_to))
                ->subject($subject);
            }
        );



        echo "Simple mail sent, check your inbox.";

    }
   
}
