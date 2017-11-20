<?php

namespace ApiBundle\Model;

use AppBundle\Entity\SimpleInput;
use JMS\Serializer\Annotation as Serializer;

class SimpleInputResponseModel extends FormItemResponseModel
{
    /**
     * @param SimpleInput $formItem
     */
    public function __construct(SimpleInput $formItem)
    {
        parent::__construct($formItem);
    }

    /**
     * @return int|null
     * @Serializer\Type("integer")
     * @Serializer\VirtualProperty
     */
    public function getMinLength(): ?int
    {
        return $this->formItem->getMinLength();
    }
}
