<?php
namespace Interop\Lenient\Web\Router\Annotation;

/**
 * @Annotation
 * @Target({ TYPE,METHOD })
 */
interface RequestMapping
{
    /*
     * @var string Uri path
     *
    public $value;

    **
     * @var string Method
     *
    public $method;

    **
     * @var array<$name=$value> Header name and value.
     *
    public $headers;

    **
     * @var array<string> Middleware name
     *
    public $middlewares;

    **
     * @var map<string> Middleware option arguments
     *
    public $options;

    **
     * @var string View name
     *
    public $view;

    **
     * @var string Namespace
     *
    public $ns;

    **
     * @var array<string> parameters in url
     *
    public $parameters;

    **
     * @var string route name
     *
    public $name;

    */
}