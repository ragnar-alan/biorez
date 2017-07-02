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

    }
}