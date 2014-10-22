<?php

require_once 'bootstrap.php';

$loader = require_once root_path . 'vendor/autoload.php';

$app = new Silex\Application();

//init components
$app['c']  = new \PComponents\Core\Container\DiContainer();
$app['cm'] = new \PComponents\Core\Manager($app['c']);

//init routes
$routesPath = root_path . 'src/routes/';
foreach (new DirectoryIterator($routesPath) as $fileInfo) {
    if ($fileInfo->isDot()) {
      continue;    
    } else {          
      $app->mount('/' . ($fileInfo->getBasename('.php') === 'index' ? '' : $fileInfo->getBasename('.php')), include $routesPath . $fileInfo->getFilename());        
    }    
}

$app->error(function (\Exception $e, $request, $code) use ($app) {    
     if ($code == 404) {
        return 'Page not found!';
     }
});

$app->run();