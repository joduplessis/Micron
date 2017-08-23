<?php

  namespace Controllers;

  use App\Controller as Controller;
  use App\Auth as Auth;
  use Models\User as User;

  class LoginController extends Controller {

    /**
     * Render the login view
     *
     * @param array $variables
     * @return void
     */
    public function login($variables) {
        $this->render("LoginView", []);
    }

    /**
     * Check to see if the user is in the database
     * If they are, then authorize the cookie
     * Otherwise redirect them
     *
     * @param array $variables
     * @return void
     */
    public function loginAction($variables) {

      $username = $variables['post']['username'];
      $password = $variables['post']['password'];

      // Query the DB
      $userCount = User::where('username', $username)->where('password', $password)->count();

      // If there are no users
      if ($userCount>0) {
        $user = User::where('username', $username)->where('password', $password)->get()->first();
        Auth::add($user->id);
      } else {
        header("Location: ".SITE_ROOT."/login");
      }

    }

    /**
     * Destroy the session
     *
     * @param array $variables
     * @return void
     */
    public function logout($variables) {
      Auth::delete();
    }

  }

?>
