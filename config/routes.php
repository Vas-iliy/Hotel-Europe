<?php

use europa\Router;

Router::add('^reservation/(?P<alias>[a-z0-9-]+)/?$', ['controller' => 'reservation', 'action' => 'room']);

Router::add('^$', ['controller' => 'home', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)', ['action' => 'index']);