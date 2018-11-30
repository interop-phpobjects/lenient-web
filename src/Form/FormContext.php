<?php
namespace Interop\Lenient\Web\Form;

interface FormContext
{
    /**
    * @param array $data
    * @return FormContext
    */
    public function setRequestToData(array $data);

    /**
    * @return boolean
    */
    public function isValid();

    /**
    * @param string $name
    * @param Any    $value
    * @return FormContext
    */
    public function setAttribute($name,$value);
 
    /**
    * @param array|ArrayAccess $violation
    * @return FormContext
    */
    public function setErrors($violation);

    /**
    * @return FormElement
    */
    public function getForm();
}