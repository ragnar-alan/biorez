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
        $to = "boros.tamas456@gmail.com";
        $name = Input::get("userName");
        $email = Input::get("userEmail");
        $subject = "Biorezonancia érdeklődés";
        $text = Input::get("message");
        Mail::send
        (
            "emails.info.infoemail",
            array(
                'name' => $name,
                'emailAddress'  =>  $email,
                'subject'       =>  $subject,
                'text'  => $text
            ),
            function($message) use ($name,$email,$subject,$to)
            {
                $message->from($email, $name);
                $message->to($to)->subject($subject);
            }
        );
        return View::make('contact.thanks', array("name"=>$name));
    }
}