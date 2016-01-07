<?php


/**
 * @return mixed
 */
function getLang() {

    return LaravelLocalization::getCurrentLocale();
}

/**
 * @param null $url
 * @return mixed
 */
function langURL($url = null) {

    return getLang() . $url;
}

/**
 * @param $route
 * @return mixed
 */
function langRoute($route, $parameters = array()) {

    return URL::route(getLang() . "." . $route, $parameters);
}

/**
 * @param $route
 * @return mixed
 */
function langRedirectRoute($route) {

    return Redirect::route(getLang() . "." . $route);
}