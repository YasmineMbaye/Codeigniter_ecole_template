<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ecole', 'Home::liste_eleve');
$routes->post('ajout_eleve', 'Home::ajout_eleve');
//$routes->get('supprimer_eleve', 'Home::supprimer_eleve');
$routes->get('supprimer_eleve/(:num)', 'Home::supprimer_eleve/$1');
$routes->post('modifier_eleve', 'Home::modifier_eleve');




