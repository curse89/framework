<?php

namespace App\Simplex;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolverInterface;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;

class Framework extends HttpKernel
{
    /*public function __construct(
        private EventDispatcher $eventDispatcher,
        private UrlMatcherInterface $matcher,
        private ControllerResolverInterface $controllerResolver,
        private ArgumentResolverInterface $argumentResolver
    ) {
    }*/

    /*public function handle(
        Request $request,
        $type = HttpKernelInterface::MAIN_REQUEST,
        $catch = true
    ): Response {
        $this->matcher->getContext()->fromRequest($request);

        try {
            $request->attributes->add($this->matcher->match($request->getPathInfo()));

            $controller = $this->controllerResolver->getController($request);
            $arguments = $this->argumentResolver->getArguments($request, $controller);

            $response = call_user_func_array($controller, $arguments);
        } catch (ResourceNotFoundException $exception) {
            return new Response('Not Found', 404);
        } catch (\Exception $exception) {
            return new Response('An error occurred', 500);
        }

        $this->eventDispatcher->dispatch(new ResponseEvent($response, $request), 'response');

        return $response;
    }*/
}