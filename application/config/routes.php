<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $route['index'] = 'index';

//Product Routes
$route['product-category'] = 'ProductController/productCategory';
$route['product-category/(:num)'] = 'ProductController/productCategory/$1';
// $route['product-detail'] = 'ProductController/productDetail';
$route['product-detail/(:num)'] = 'ProductController/productDetail/$1';

//Service Route
$route['service-category'] = 'ServiceCategory';
// $route['service-details'] = 'ServiceDetail';
$route['service-details/(:num)'] = 'ServiceDetail/index/$1';
$route['contact'] = 'Contact';
$route['about-us'] = 'Aboutus';

//Blog Routes
$route['blog'] = 'BlogController/blog';
$route['blog-details/(:num)'] = 'BlogController/blogDetail/$1';

// $route['blog-detail'] = 'BlogController/blogDetail';

//admin blog routes
$route['admin/blog'] = 'admin/BlogController/index';
$route['admin/blog/create'] = 'admin/BlogController/create';
$route['admin/blog/edit/(:any)'] = 'admin/BlogController/edit/$1';
$route['admin/blog/delete/(:any)'] = 'admin/BlogController/delete/$1';
$route['admin/Sub_category'] = 'admin/Sub_category';

//Admin Faq routes
$route['faq'] = 'admin/faq/index';
$route['faq/create'] = 'admin/faq/create';
$route['faq/edit/(:num)'] = 'admin/faq/edit/$1';
$route['faq/delete/(:num)'] = 'admin/faq/delete/$1';

//Admin Choose us Routes
$route['admin/chooseus'] = 'admin/ChooseUs/index';
$route['admin/chooseus/create'] = 'admin/ChooseUs/create';
$route['admin/chooseus/edit/(:num)'] = 'admin/ChooseUs/edit/$1';
$route['admin/chooseus/delete/(:num)'] = 'admin/ChooseUs/delete/$1';

//Admin Expertise and Achievement Routes
$route['admin/expertise'] = 'admin/expertise/index';
$route['admin/expertise/create'] = 'admin/expertise/create';
$route['admin/expertise/edit/(:num)'] = 'admin/expertise/edit/$1';
$route['admin/expertise/delete/(:num)'] = 'admin/expertise/delete/$1';

//Admin History Sections Routes
$route['admin/history'] = 'admin/history/index'; // List all history records
$route['admin/history/create'] = 'admin/history/create'; // Show form to create a new record
$route['admin/history/edit/(:num)'] = 'admin/history/edit/$1'; // Edit a record by ID
$route['admin/history/delete/(:num)'] = 'admin/history/delete/$1'; // Delete a record by ID

//Admin History Section Routes
$route['admin/customer_feedback'] = 'admin/CustomerFeedback/index'; // List all feedback
$route['admin/customer_feedback/index'] = 'admin/CustomerFeedback/index'; // List all feedback
$route['admin/customer_feedback/create'] = 'admin/CustomerFeedback/create'; // Create new feedback
$route['admin/customer_feedback/edit/(:num)'] = 'admin/CustomerFeedback/edit/$1'; // Edit feedback by ID
$route['admin/customer_feedback/delete/(:num)'] = 'admin/CustomerFeedback/delete/$1'; // Delete feedback by ID

//Admin Meet Our Experts Section Routes
$route['admin/expert'] = 'admin/ExpertController/index';
$route['admin/expert/create'] = 'admin/ExpertController/create';
$route['admin/expert/store'] = 'admin/ExpertController/store';
$route['admin/expert/edit/(:num)'] = 'admin/ExpertController/edit/$1';
$route['admin/expert/update/(:num)'] = 'admin/ExpertController/update/$1';
$route['admin/expert/delete/(:num)'] = 'admin/ExpertController/delete/$1';

//Admin Service Features Routes
$route['admin/service_features'] = 'admin/service_features/index';
$route['admin/service_features/create'] = 'admin/service_features/create';
$route['admin/service_features/edit/(:num)'] = 'admin/service_features/edit/$1';
$route['admin/service_features/delete/(:num)'] = 'admin/service_features/delete/$1';

// Admin Specialization section Routes
$route['admin/specialization'] = 'admin/SpecializationController/index';
$route['admin/specialization/edit/(:num)'] = 'admin/SpecializationController/edit/$1';

//Admin About US Routes
$route['admin/about_us'] = 'admin/about_us/index';
$route['admin/about_us/create'] = 'admin/about_us/create';
$route['admin/about_us/edit/(:any)'] = 'admin/about_us/edit/$1';

//Admin Service routes
$route['admin/service'] = 'admin/ServiceController/index';
$route['admin/service/create'] = 'admin/ServiceController/create';
$route['admin/service/edit/(:num)'] = 'admin/ServiceController/edit/$1';
$route['admin/service/delete/(:num)'] = 'admin/ServiceController/delete/$1';

// Admin contact Routes
$route['admin/contacts'] = 'admin/contacts/index'; // List contacts
$route['admin/contacts/create'] = 'admin/contacts/create'; // Show create contact form
$route['admin/contacts/edit/(:num)'] = 'admin/contacts/edit/$1'; // Show edit form for a specific contact
$route['admin/contacts/update/(:num)'] = 'admin/contacts/update/$1'; // Handle form submission to update a contact
$route['admin/contacts/delete/(:num)'] = 'admin/contacts/delete/$1'; // Delete a specific contact

//Admin parteners route
$route['admin/partners'] = 'admin/partners/index';         // Route for listing partners
$route['admin/partners/create'] = 'admin/partners/create'; // Route for creating a new partner
$route['admin/partners/edit/(:num)'] = 'admin/partners/edit/$1'; // Route for editing a partner by ID
$route['admin/partners/delete/(:num)'] = 'admin/partners/delete/$1'; // Optional: Route for deleting a partner by ID

// About Routes
$route['about'] = 'AboutController/About';


//
$route['partners'] = 'Partners/index';
// Career Routes
$route['career'] = 'CareerController/Career';
$route['job-detail/(:any)'] = 'CareerController/Job/$1';

// Error Routes
$route['error'] = 'ErrorController/Error';

//Gallery Routes
$route['gallery/(:any)'] = 'Gallery/index/$1';
$route['gallery-category'] = 'Gallery/GalleryCategory';

//Admin Gallery Routes

$route['admin/gallery'] = 'admin/Gallery/index';
$route['admin/gallery/create'] = 'admin/Gallery/create';
$route['admin/gallery/edit/(:any)'] = 'admin/Gallery/edit/$1';
$route['admin/gallery/delete/(:any)'] = 'admin/Gallery/delete/$1';


// Admin Gallery Images 

$route['admin/gallery-image'] = 'admin/GalleryImageController/index';
$route['admin/gallery-image/edit/(:any)'] = 'admin/Gallery/edit/$1';
$route['admin/gallery-image/create'] = 'admin/Gallery/create';
$route['admin/gallery-image/edit/(:any)'] = 'admin/Gallery/edit/$1';
$route['admin/gallery-image/delete/(:any)/(:any)'] = 'admin/Gallery/delete/$1/$2';

// ADmin Gallery specific category images

// /admin/galleryimages
$route['admin/galleryimages/(:any)'] = 'admin/GalleryImageController/imageById/$1';


// Thank You Page
$route['thankyou'] = 'ThankController/Thank';

$route['admin'] = 'admin/index';

// Banner
// $route['(:any)'] = 'banner/index/$1';



// Carrier Routes CMS 
$route['admin/career'] = 'admin/C_CMS/index';



$route['admin/team-qualities/add'] = 'admin/TeamQualities/add';
$route['admin/team-qualities/edit/(:num)'] = 'admin/TeamQualities/edit/$1';

// Job-Details Routes CMS
$route['job-detail/(:any)'] = 'CareerController/Job/$1';

//Admin Banner Routes
$route['admin/banner'] = 'admin/Banner/index'; // Route for listing banners
$route['admin/banner/create'] = 'admin/Banner/create'; // Route for creating a new banner
$route['admin/banner/edit/(:num)'] = 'admin/Banner/edit/$1'; // Route for editing a banner
$route['admin/banner/delete/(:num)'] = 'admin/Banner/delete/$1'; // Route for deleting a banner

// Routes for Technovalue controller
$route['admin/technovalue'] = 'admin/technovalue/index'; // List all updates
$route['admin/technovalue/create'] = 'admin/technovalue/create'; // Show form to create a new update
$route['admin/technovalue/edit/(:num)'] = 'admin/technovalue/edit/$1'; // Show form to edit an existing update
$route['admin/technovalue/delete/(:num)'] = 'admin/technovalue/delete/$1'; // Delete an update

// Routes for whatsnew section in homepage
$route['admin/whatsnew'] = 'admin/WhatsNew/index'; // View all items
$route['admin/whatsnew/create'] = 'admin/WhatsNew/create'; // Create a new item
$route['admin/whatsnew/edit/(:num)'] = 'admin/WhatsNew/edit/$1'; // Edit an existing item
$route['admin/whatsnew/delete/(:num)'] = 'admin/WhatsNew/delete/$1'; // Delete an item

// Routes for Technovalue updates section in homepage
$route['admin/technovalueupdates'] = 'admin/TechnovalueUpdates/index';
$route['admin/technovalueupdates/create'] = 'admin/TechnovalueUpdates/create';
$route['admin/technovalueupdates/edit/(:num)'] = 'admin/TechnovalueUpdates/edit/$1';
$route['admin/technovalueupdates/delete/(:num)'] = 'admin/TechnovalueUpdates/delete/$1';
