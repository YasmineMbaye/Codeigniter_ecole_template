<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ui-buttons', 'Home::uibuttons');
$routes->get('essai', 'Home::essai');


//$routes->get('about', 'About::index');
//$routes->get('products', 'Products::index');
