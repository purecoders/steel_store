<?php
/**
 * Created by PhpStorm.
 * User: Mohsen
 * Date: 1/21/2019
 * Time: 3:10 PM
 */

namespace App\Http\Controllers;


class SystemHelper {

  public static function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }

}