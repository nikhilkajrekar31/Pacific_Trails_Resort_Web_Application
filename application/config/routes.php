<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['cart'] = 'pages/cart';
$route['placeyourorder'] = 'pages/placeyourorder';
$route['orderdemo'] = 'pages/orderdemo';
$route['reservations'] = 'pages/reservation';
$route['myreservations'] = 'pages/myreservation';
$route['yurts'] = 'pages/viewpkgs';
$route['reservations'] = 'pages/reservation';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
