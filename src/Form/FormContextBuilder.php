<?php
namespace Interop\Lenient\Web\Form;

interface FormContextBuilder
{
	/**
    * @param  String|Object $classname
    * @return FormContext
	*/
    public function build($className);
}
