<?php

use App\Calendar\Controller\LeapYearController;
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add(
    'hello',
    new Routing\Route(
        '/hello/{name}',
        [
            'name' => 'World',
            '_controller' => static function ($request) {
                $request->attributes->set('foo', 'bar');

                $response = render_template($request);

                // change some header
                $response->headers->set('Content-Type', 'text/plain');

                return $response;
            }
        ]
    )
);
$routes->add('bye', new Routing\Route('/bye'));
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', [
    'year' => null,
    '_controller' => LeapYearController::class . "::index",
]));

return $routes;
