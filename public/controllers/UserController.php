<?php

  namespace Controllers;

  use App\Controller as Controller;
  use Models\User as User;

  class UserController extends Controller {

    /**
     * Returns a list of all users in the database and then send the data
     * back to the Plates template (render)
     *
     * @param array $variables
     * @return void
     */
    public function index($variables) {

      // Eloquent (without Capsule)
      $users = User::all();
      $usersData = [];

      // Get the list of pages
      foreach ($users as $user) {
        // Create the array
        $userData = [
          'id'=> $user->id,
          'username'=> $user->username,
          'password'=> $user->password
        ];
        // Add it to the master array
        array_push($usersData, $userData);
      }

      // Render the template
      $this->render("UserIndexView", ["users"=>$usersData]);

    }

    /**
     * Render the new user view
     *
     * @param array $variables
     * @return void
     */
    public function add($variables) {

      // Render the view
      $this->render("UserAddView", []);

    }

    /**
     * Add the new user data to the database and redirect the user
     * back to the main user index view
     *
     * @param array $variables
     * @return void
     */
    public function addAction($variables) {

      $user = new User;

      $user->username = $variables['post']['username'];
      $user->password = $variables['post']['password'];

      $user->save();

      // Redirect
      header("Location: ".SITE_ROOT."/user/index");

    }

    /**
     * Get the main user details from the database and render the page
     *
     * @param array $variables
     * @return void
     */
    public function detail($variables) {

      // Eloquent (without Capsule)
      $user = User::where('id', $variables['id'])->get()->first();

      $userData = [
        'id'=> $user->id,
        'username'=> $user->username,
        'password'=> $user->password
      ];

      // Render the view
      $this->render("UserDetailView", ["user"=>$userData]);

    }

    /**
     * Update the user details and redirect the user back to the list user view
     *
     * @param array $variables
     * @return void
     */
    public function update($variables) {

      $user = User::where('id', $variables['id'])->get()->first();

      $user->username = $variables['post']['username'];
      $user->password = $variables['post']['password'];

      $user->save();

      // Redirect
      header("Location: ".SITE_ROOT."/user/index");

    }

    /**
     * Delete the user and redirect the user
     *
     * @param array $variables
     * @return void
     */
    public function delete($variables) {

      $user = User::where('id', $variables['id'])->delete();

      // Redirect
      header("Location: ".SITE_ROOT."/user/index");

    }

  }

?>
