<?php
/**
 * Created by PhpStorm.
 * User: boros
 * Date: 2016. 12. 27.
 * Time: 17:29
 */
class Helper {
    static function asset() {

    }
}

function t($id, $lang_file = 'global', $parameters = array(), $choice = false )
{
    $lang_file = strtolower($lang_file);

    $prefix = $lang_file . '.';
    $id = $prefix . $id;

    //A nyelvi sajátosságok
    if ($choice) {
        return Lang::choice($id, $parameters['count'], []);
    }

    $result = app('translator')->trans($id, $parameters);

    if (substr($result, 0, strlen($prefix)) == $prefix) {
        $result = substr($result, strlen($prefix));
    }

    return $result;
}