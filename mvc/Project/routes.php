<?php
    $routes = [
      [
          'url' => '/products/{field}/{order}',
          'params' => [
              'order' => ['type' => 'asc|desc', 'mandatory' => false, 'default' => 'asc'],
              'field' => ['type' => '[\w-]+', 'mandatory' => false, 'default' => 'name'],
          ],
          'controller' => 'product',
          'action' => 'all',
      ],
        [
            'url' => '/product/{slug}/',
            'params' => [
              'slug' => '[\w-]+',
            ],
            'controller' => 'product',
            'action' => 'one',
        ],
    ];
