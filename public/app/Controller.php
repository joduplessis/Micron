<?php

  namespace App;

  use League\Plates\Engine as Plates;
  use Illuminate\Database\Capsule\Manager as Capsule;

  class Controller extends Database {

    /**
     * Initialise the connection to the database
     * Call the $function and pass the parameter to the function
     *
     * @param array $variables
     * @param string $function
     * @return void
     */
    public function init($variables, $function) {

      // Set up the DB connection in Database
      self::connect();

      // $this is the new controller child object that gets created
      // It gets created from the Routes calss
      // And then we call the specific function (also called from the Routes)
      $this->$function($variables);

    }

    /**
     * Render the view and pass the variables to the template
     *
     * @param array $variables
     * @param string $view
     * @return void
     */
    public function render($view, $variables) {

      // Get the tempplate path
      $templates = new Plates('views');

      // Echo out the template and pass it the variables
      echo $templates->render($view, $variables);

    }

  }

?>
