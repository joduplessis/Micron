# Micron MVC

## Welcome

Micron is a simple and straightforward MVC framework that uses 3rd party libraries (Plates, Laravel's Eloquent, etc.). It's dead easy to implement. It was built to use for small web applications at <a href="http://www.mrphome.com">MRP Home</a> & is also a lightweight CMS our of the box.

- Variables get stored in the **$variables** parameter in each controller
- Routes are all created by **Routes::set** in the **index.php** file
- Public directory is **public**

The format was heavily inspired by Laravel. Because Micron MVC uses Eloquent, be careful to set up new tables with **created_at** and **update_at** fields.

## Usage

- Import *dump.sql* into MySQL image
- Bower install
- Composer install
- Configure *public/index.php*

## Here be dragons!

Whilst it's a nimble little guy, it is also not supported anymore - so feel free to dissect and turn into flesh eating zombie kittens if you want.
