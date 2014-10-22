<?php

$index = $app['controllers_factory'];

$index->match('/', function (Silex\Application $app) { 
    
    return "<h1>It's working...</h1> ";         
});
$index->match('/test', function () { 
    return "<h1>Test</h1> ";         
});

return $index;

