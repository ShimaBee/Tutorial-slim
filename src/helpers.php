<?php
/**
 * Created by PhpStorm.
 * User: shimabukuroyuuta
 * Date: 2018/03/07
 * Time: 20:21
 */

if (!function_exists('e')) {
    function e(string $s): string {
        return htmlspecialchars($s, ENT_QUOTES, 'UTF-8', false);
    }
}