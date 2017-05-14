<?php

/**
 * Created by PhpStorm.
 * User: boros
 * Date: 2017. 02. 18.
 * Time: 22:11
 */
class AboutController extends BaseController {

    public function index()
    {
        return View::make("about.about");
    }
}