<?php

namespace ApiBundle\Model;

use AppBundle\Entity\FormItem;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 * @Serializer\AccessType("public_method")
 */
class FormItemResponseModel
{
    /** @var FormItem */
    protected $formItem;

    public function __construct(FormItem $formItem)
    {
        $this->formItem = $formItem;
    }

    /**
     * @return string
     * @Serializer\Type("string")
     * @Serializer\VirtualProperty
     */
    public function getTitle()
    {
        return $this->formItem->getLabel();
    }

    /**
     * @return string
     * @Serializer\Type("string")
     * @Serializer\VirtualProperty
     */
    public function getType()
    {
        return 'string';
    }
}
