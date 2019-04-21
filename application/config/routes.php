<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    /*
    | -------------------------------------------------------------------------
    | URI ROUTING
    | -------------------------------------------------------------------------
    | This file lets you re-map URI requests to specific controller functions.
    |
    | Typically there is a one-to-one relationship between a URL string
    | and its corresponding controller class/method. The segments in a
    | URL normally follow this pattern:
    |
    |	example.com/class/method/id/
    |
    | In some instances, however, you may want to remap this relationship
    | so that a different class/function is called than the one
    | corresponding to the URL.
    |
    | Please see the user guide for complete details:
    |
    |	https://codeigniter.com/user_guide/general/routing.html
    |
    | -------------------------------------------------------------------------
    | RESERVED ROUTES
    | -------------------------------------------------------------------------
    |
    | There are three reserved routes:
    |
    |	$route['default_controller'] = 'welcome';
    |
    | This route indicates which controller class should be loaded if the
    | URI contains no data. In the above example, the "welcome" class
    | would be loaded.
    |
    |	$route['404_override'] = 'errors/page_missing';
    |
    | This route will tell the Router which controller/method to use if those
    | provided in the URL cannot be matched to a valid route.
    |
    |	$route['translate_uri_dashes'] = FALSE;
    |
    | This is not exactly a route, but allows you to automatically route
    | controller and method names that contain dashes. '-' isn't a valid
    | class or method name character, so it requires translation.
    | When you set this option to TRUE, it will replace ALL dashes in the
    | controller and method URI segments.
    |
    | Examples:	my-controller/index	-> my_controller/index
    |		my-controller/my-method	-> my_controller/my_method
    */
    $route['default_controller'] = 'Welcome';
    $route['home'] = 'Welcome';
    $route['404_override'] = '';
    $route['translate_uri_dashes'] = FALSE;

    //User_Controller
    $route['login'] = 'user_controller/login';
    $route['register'] = 'user_controller/register';
    $route['logout'] = 'user_controller/logout';
    $route['add-user'] = 'user_controller/add';
    $route['edit-user']['GET'] = 'User_controller/edit';
    $route['edit-user']['POST'] = 'User_controller/edit';

    $route['delete-user/(:num)'] = 'user_controller/delete/$1';
    $route['view-users'] = 'user_controller/view';
    $route['admin/view-users'] = 'user_controller/view';

    //Admin_controller
    $route['admin'] = 'Admin_controller';
    $route['admin/login'] = 'Admin_controller/login';
    $route['admin/logout'] = 'Admin_controller/logout';
    $route['admin/home'] = 'Admin_controller';
    //Room Controller
    $route['admin/room'] = 'Room_controller/view';

    //used ajax
    //Address_controller
    $route['address/quanhuyen'] = 'Address_controller/quanhuyen';
    $route['address/xaphuong'] = 'Address_controller/xaphuong';

    //Hotel Controller
    $route['admin/add-hotel'] = 'Hotel_controller/add';
    $route['admin/hotel'] = 'Hotel_controller/view';
    $route['admin/view-hotel'] = 'Hotel_controller/view';
    $route['admin/delete-hotel']['GET'] = 'Hotel_controller/delete';



