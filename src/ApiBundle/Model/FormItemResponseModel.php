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
        return $this->formItem->getType();
    }

    /**
     * @return string[]
     * @Serializer\Type("array<string>")
     * @Serializer\VirtualProperty
     */
    public function getEnum()
    {
        if ($this->formItem->getDropDownList()) {
            return $this->formItem->getDropDownList()->getItems();
        }

        return null;
    }

    /**
     * @return string
     * @Serializer\Type("string")
     * @Serializer\VirtualProperty
     */
    public function getDefault()
    {
        if (!$this->formItem->getDropDownList()) {
            return null;
        }
        foreach ($this->formItem->getDropDownList()->getItems() as $item) {
            if ($item->isDefault()) {
                return $item;
            }
        }

        return null;
    }
}
