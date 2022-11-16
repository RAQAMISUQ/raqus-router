<?php

namespace Raqus\RaqusRouter\Handlers;

use Exception;
use Raqus\Http\Request;

interface IExceptionHandler
{
    /**
     * @param Request $request
     * @param Exception $error
     */
    public function handleError(Request $request, Exception $error): void;

}