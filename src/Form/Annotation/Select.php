<?php
namespace Interop\Lenient\Web\Form\Annotation;

/**
 * @Annotation
 * @Target({ FIELD })
 */
interface Select
{
	/*
	 * @Enum({"select","radio","checkbox"})
	 *
    public $type = 'select';

     * 
     * Write down the options directly.
     *     usage: value="label"
     * ex. options={red="Red",green="Green",blue="Blue"}
     *
    public $options;

     *
     * Mapping options to the entities
     * ex.
     *   In annotation:
     *   mappedOption="categories"
     *   In controller code:
     *   $form->categories = $categoryManager->findAll();
     *

     *
     * field name of the collection *
     *
    public $mappedOptions;

     *
     * the value field name in the collection *
     *
    public $mappedValue;

     *
     * the label field name in the collection *
     *
    public $mappedLabel;

    */
}