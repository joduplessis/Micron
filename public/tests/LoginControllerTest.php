<?php

  // App utillities
  require "app/Database.php";
  require "app/Controller.php";
  require "app/Auth.php";
  require "controllers/LoginController.php";

  class LoginControllerTest extends \PHPUnit_Framework_TestCase {

      /**
       * Test the login function - needs to return void/nothing
       *
       * @return void
       */
      function testLogin() {
        $loginController = new Controllers\LoginController;
        $result = $loginController->login([]);
        $this->assertEquals(void, $result);
      }

      /**
       * Test the logout function - needs to return void/nothing
       *
       * @return void
       */
      function testLogout() {
        $loginController = new Controllers\LoginController;
        $result = $loginController->logout([]);
        $this->assertEquals(void, $result);
      }

      /**
       * Test the login action function - needs to return void/nothing
       * TODO Flesh out this test
       *
       * @return void
       */
      function testLoginAction() {
        $loginController = new Controllers\LoginController;
        $result = $loginController->loginAction([]);
        $this->assertEquals(void, $result);
      }

  }

?>
