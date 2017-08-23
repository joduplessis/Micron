<?php

namespace App;

class Auth {

  /**
   * Strip out the URL prefix and convert the URL into an array
   *
   * @return array
   */
  private static function getUri() {

    // Get the current URL
    $urlString = $_SERVER['REQUEST_URI'];

    // Remove the site portion of it - so it's only the relevant parts
    $editedUrlString = str_replace(SITE_ROOT."/", '', $urlString);
    if (substr($editedUrlString, -1)=="/") {
      $editedUrlString = substr_replace($editedUrlString, "", -1);
    }

    // Break it apart
    $urlArray = explode("/", $editedUrlString);

    // Return it
    return $urlArray;

  }

  /**
   * Send back the approprate headers based on the URi parameter
   * Really just a redirect based on the URL
   *
   * @param array $uri
   * @return void
   */
  static public function filter($uri) {

    $firstSlug = self::getUri()[0];
    $bounce = false;

    // We see if this is one of the URLs we filter
    foreach ($uri as $suri) {
      if ($suri==$firstSlug) {
        $bounce = true;
        break;
      }
    }

    // If it is, the do this:
    if ($bounce) {
      if (isset($_COOKIE["Micron"])) {
        if ($_COOKIE["Micron"]=="") {
          header("Location: ".SITE_ROOT."/login");
        } else {
          // Do nothing
        }
      } else {
        header("Location: ".SITE_ROOT."/login");
      }
    }

  }

  /**
   * Set the Micron cookie
   *
   * @param int $id
   * @return void
   */
  static public function add($id) {
    setcookie("Micron", $id, time()+(3600*72), SITE_ROOT);
    header("Location: ".SITE_ROOT."/page/index");
  }

  /**
   * Delete the Micron cookie
   *
   * @param int $id
   * @return void
   */
  static public function delete() {
    setcookie("Micron", "", time()+(3600*72), SITE_ROOT);
    header("Location: ".SITE_ROOT."/login");
  }

}
?>
