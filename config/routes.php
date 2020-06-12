<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\Router;

Router::plugin(
    'AssetLibrary',
    ['path' => '/asset-library'],
    function ($routes) {
        $routes->get('/assets', ['controller' => 'Assets']);
        $routes->post('/upload', ['controller' => 'Assets', 'action' => 'upload']);
    }
);
