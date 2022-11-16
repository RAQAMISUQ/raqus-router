<?php

namespace Raqus\Http\Middleware;

use Raqus\Http\Request;

interface IMiddleware
{
    /**
     * @param Request $request
     */
    public function handle(Request $request): void;

}