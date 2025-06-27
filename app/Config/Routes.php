<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('produk', 'Produk::index');
$routes->get('produk/create', 'Produk::create');
$routes->post('produk/store', 'Produk::store');

$routes->get('keranjang', 'Keranjang::index');
$routes->get('keranjang/tambah/(:num)', 'Keranjang::tambah/$1');
$routes->get('keranjang/hapus/(:num)', 'Keranjang::hapus/$1');
$routes->get('keranjang/kosongkan', 'Keranjang::kosongkan');
$routes->get('keranjang/cetak_invoice', 'Keranjang::cetak_invoice');
$routes->get('produk/kosongkan', 'Produk::kosongkan');
$routes->get('produk/edit/(:num)', 'Produk::edit/$1');
$routes->post('produk/update/(:num)', 'Produk::update/$1');
$routes->get('produk/hapus/(:num)', 'Produk::hapus/$1');
