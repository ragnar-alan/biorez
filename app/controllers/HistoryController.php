<?php

/**
 * Created by PhpStorm.
 * User: boros
 * Date: 2017. 02. 18.
 * Time: 22:07
 */
class HistoryController extends BaseController {

    public function index()
    {
        return View::make("history.history");
    }
}