<?php

  namespace Controllers;

  use App\Controller as Controller;
  use Models\Page as Page;

  class PageController extends Controller {

    /**
     * Returns a list of all pages in the database and then send the data
     * back to the Plates template (render)
     *
     * @param array $variables
     * @return void
     */
    public function index($variables) {

      // Testing it out Eloquent (without Capsule)
      $pages = Page::all();
      $pagesData = [];

      // Get the list of pages
      foreach ($pages as $page) {
        // Process images
        $image = ($page->image=="") ? "no_image.jpg" : $page->image;

        // Create the array
        $pageData = [
          'id'=> $page->id,
          'title'=> $page->title,
          'content'=> substr(strip_tags($page->content), 0, 300),
          'image'=> $image
        ];

        // Add it to the master array
        array_push($pagesData, $pageData);
      }

      // Render the template
      $this->render("PageIndexView", ['pages'=>$pagesData]);

    }

    /**
     * Render the new page view
     *
     * @param array $variables
     * @return void
     */
    public function add($variables) {

      $this->render("PageAddView", []);

    }

    /**
     * Add the new page data to the database and redirect the user
     * back to the main page index view
     *
     * @param array $variables
     * @return void
     */
    public function addAction($variables) {

      $page = new Page;
      $page->title = $variables['post']['title'];
      $page->content = $variables['post']['content'];
      $page->image = "no_image.jpg";

      // Process the main image if it's there
      if ($variables['files']['image']['name']!="") {
        $target_file = "assets/".basename($variables['files']["image"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if (move_uploaded_file($variables['files']['image']["tmp_name"], $target_file)) {
          $page->image = basename($variables['files']["image"]["name"]);
        }
      }

      // Save
      $page->save();

      // Redirect
      header("Location: ".SITE_ROOT."/page/index");

    }

    /**
     * Get the main page details from the database and render the page
     *
     * @param array $variables
     * @return void
     */
    public function detail($variables) {

      // Edit an existing one
      $page = Page::where('id', $variables['id'])->get()->first();
      $pageData = [
          'id'=> $page->id,
          'title'=> $page->title,
          'content'=> $page->content,
          'image'=> $page->image
      ];

      // Render the template
      $this->render("PageDetailView", ["page"=>$pageData]);

    }

    /**
     * Update the page details and redirect the user back to the list page view
     *
     * @param array $variables
     * @return void
     */
    public function update($variables) {

      $page = Page::where('id', $variables['id'])->get()->first();

      $page->title = $variables['post']['title'];
      $page->content = $variables['post']['content'];
      $page->image = "no_image.jpg";

      // Process the main image if it's there
      if ($variables['files']['image']['name']!="") {
        $target_file = "assets/".basename($variables['files']["image"]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if (move_uploaded_file($variables['files']['image']["tmp_name"], $target_file)) {
          $page->image = basename($variables['files']["image"]["name"]);
        }
      }

      // Save
      $page->save();

      // Redirect
      header("Location: ".SITE_ROOT."/page/index");

    }

    /**
     * Delete the page and redirect the user
     *
     * @param array $variables
     * @return void
     */
    public function delete($variables) {

      $page = Page::where('id', $variables['id'])->delete();

      // Redirect
      header("Location: ".SITE_ROOT."/page/index");

    }

  }

?>
