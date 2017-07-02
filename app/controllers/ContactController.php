<?php

/**
 * Created by PhpStorm.
 * User: boros
 * Date: 2017. 05. 14.
 * Time: 22:47
 */
class ContactController extends BaseController
{
    public function index()
    {
        return View::make("contact.contact");
    }

    public function sendMail()
    {
        $to = "kecskerezonancia@gmail.com";
        $name = Input::get("userName");
        $email = Input::get("userEmail");
        $subject = "Biorezonancia érdeklődés";
        $text = Input::get("message");
        Mail::send
        (
            $text,
            array(
                'name' => $name,
                'emailAddress'  =>  $email,
                'subject'       =>  $subject,
            ),
            function($message) use ($name,$email,$subject,$to)
            {
                $message->from($email, $name);
                $message->to($to)->subject($subject);
            }
        );
    }
}