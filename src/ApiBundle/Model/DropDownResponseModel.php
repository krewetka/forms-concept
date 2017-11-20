<?php

namespace ApiBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class DropDownResponseModel extends FormItemResponseModel
{
    /**
     * @return string[]
     * @Serializer\Type("array<string>")
     * @Serializer\VirtualProperty
     */
    public function getEnum()
    {
        return $this->formItem->getItems();
    }

    /**
     * @return string
     * @Serializer\Type("string")
     * @Serializer\VirtualProperty
     */
    public function getDefault()
    {
        foreach ($this->formItem->getItems() as $item) {
            if ($item->isDefault()) {
                return $item;
            }
        }

        return null;
    }
}
