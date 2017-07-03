<?php

/**
 * Created by PhpStorm.
 * User: boros
 * Date: 2017. 07. 03.
 * Time: 1:00
 */
class AboutBiorezonancyController extends BaseController
{
    public function index()
    {
        return View::make("about.aboutBioRezonancy");
    }
}