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


$route['file'] = 'user_controller/file';


//User_Controller
$route['login'] = 'user_controller/login';
$route['register'] = 'user_controller/register';
$route['logout'] = 'user_controller/logout';

$route['admin/add-user'] = 'user_controller/add';

$route['admin/edit-user']['GET'] = 'User_controller/edit';
$route['admin/edit-user']['POST'] = 'User_controller/edit';

$route['admin/delete-user/(:num)'] = 'user_controller/delete/$1';
$route['admin/view-users'] = 'user_controller/view';

//Admin_controller
$route['admin/login'] = 'Admin_controller/login';
$route['admin/logout'] = 'Admin_controller/logout';
$route['admin/home'] = 'Admin_controller';
$route['admin/deal'] = 'Deal_controller/view';
$route['admin/api/deal']['GET'] = 'Deal_controller/view_api';

//Room Controller
$route['admin/room']['GET'] = 'Room_controller/view';
$route['admin/getroom']['GET'] = 'Room_controller/getRoom';
$route['admin/get-room-type']['POST'] = 'Room_controller/getRoomType';
$route['admin/add-room']['POST'] = 'Room_controller/add';
$route['admin/delete-room']['GET'] = 'Room_controller/delete';
$route['admin/edit-room']['GET'] = 'Room_controller/edit';
$route['admin/edit-room']['POST'] = 'Room_controller/edit';
$route['search-room']['GET'] = 'Room_controller/search';
$route['deal']['GET'] = 'Room_controller/deal';
$route['deal']['POST'] = 'Deal_controller/add';

//RoomType Controller
$route['admin/room-type']['GET'] = 'RoomType_controller/view';
$route['admin/add-room-type']['POST'] = 'RoomType_controller/add';
$route['admin/delete-room-type']['GET'] = 'RoomType_controller/delete';
$route['admin/edit-room-type']['POST'] = 'RoomType_controller/edit';
$route['roomtype/getdata'] = 'RoomType_controller/getdata';




//Hotel Controller
$route['admin/add-hotel'] = 'Hotel_controller/add';
$route['admin/hotel'] = 'Hotel_controller/view';
$route['admin/view-hotel'] = 'Hotel_controller/view';
$route['admin/delete-hotel']['GET'] = 'Hotel_controller/delete';
$route['admin/edit-hotel']['GET'] = 'Hotel_controller/edit';
$route['admin/edit-hotel']['POST'] = 'Hotel_controller/edit';
$route['search-hotel']['GET'] = 'Hotel_controller/search';


//used ajax
//Address_controller
$route['address/thanhpho'] = 'Address_controller/thanhpho';
$route['address/quanhuyen'] = 'Address_controller/quanhuyen';
$route['address/xaphuong'] = 'Address_controller/xaphuong';


//Account
$route['user/history'] = 'User_controller/history';
$route['user/account'] = 'User_controller/account';

//Notify_controller
$route['admin/notify/user']['POST'] = 'Notify_controller/user';
$route['admin/notify/deal']['POST'] = 'Notify_controller/deal';
$route['admin/notify/deal']['GET'] = 'Notify_controller/deal';
$route['admin/notify/deal'] = 'Notify_controller/deal';

//Image_controller

$route['admin/image/setname']['POST'] = 'Image_controller/setName';
$route['admin/image/getname']['POST'] = 'Image_controller/getName';
$route['admin/image/delete']['POST'] = 'Image_controller/deleteImage';
$route['admin/image/upload']['POST'] = 'Image_controller/upload';

// Deal controller
$route['admin/delete-deal']['GET'] = 'Deal_controller/delete';
$route['admin/edit-deal']['GET'] = 'Deal_controller/edit';
$route['admin/edit-deal']['POST'] = 'Deal_controller/edit';
$route['edit-history']['GET'] = 'Deal_controller/edit_history';
$route['delete-history']['GET'] = 'Deal_controller/delete_history';

$route['email']= 'Email_controller/index';
$route['email/sendEmail']['POST']= 'Email_controller/sendEmail';







