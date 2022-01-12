<?php

use europa\Router;

Router::add('^product/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'products', 'action' => 'product']);
Router::add('^category/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'Category', 'action' => 'category']);

Router::add('^$', ['controller' => 'home', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)', ['action' => 'index']);