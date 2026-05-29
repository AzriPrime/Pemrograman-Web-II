<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;

// Root Route
Router::addRoute('GET', '/', 'IndexController', 'index');

// Member Routes
Router::addRoute('GET', '/member', 'MemberController', 'index');
Router::addRoute('GET', '/member/create', 'MemberController', 'create');
Router::addRoute('POST', '/member/store', 'MemberController', 'store');
Router::addRoute('GET', '/member/edit', 'MemberController', 'edit');
Router::addRoute('POST', '/member/update', 'MemberController', 'update');
Router::addRoute('GET', '/member/delete', 'MemberController', 'delete');

// Buku Routes
Router::addRoute('GET', '/buku', 'BukuController', 'index');
Router::addRoute('GET', '/buku/create', 'BukuController', 'create');
Router::addRoute('POST', '/buku/store', 'BukuController', 'store');
Router::addRoute('GET', '/buku/edit', 'BukuController', 'edit');
Router::addRoute('POST', '/buku/update', 'BukuController', 'update');
Router::addRoute('GET', '/buku/delete', 'BukuController', 'delete');

// Peminjaman Routes
Router::addRoute('GET', '/peminjaman', 'PeminjamanController', 'index');
Router::addRoute('GET', '/peminjaman/create', 'PeminjamanController', 'create');
Router::addRoute('POST', '/peminjaman/store', 'PeminjamanController', 'store');
Router::addRoute('GET', '/peminjaman/edit', 'PeminjamanController', 'edit');
Router::addRoute('POST', '/peminjaman/update', 'PeminjamanController', 'update');
Router::addRoute('GET', '/peminjaman/delete', 'PeminjamanController', 'delete');

Router::run();

?>