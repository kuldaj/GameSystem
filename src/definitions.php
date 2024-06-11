<?php

require __DIR__ . '/config.php';
require __DIR__ . '/db.php';

use function DI\create;

return [    
    'db' => create(DB::class)
];