<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Simplex\StringResponseListener;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$routes = include __DIR__.'/src/app.php';
$container = include __DIR__.'/src/container.php';

$container->register('listener.string_response', StringResponseListener::class);
$container->getDefinition('dispatcher')
    ->addMethodCall('addSubscriber', [new Reference('listener.string_response')])
;

$container->setParameter('charset', 'UTF-8');
//$container->setParameter('routes', include __DIR__.'/src/app.php');
$response = $container->get('framework')->handle($request)->send();
