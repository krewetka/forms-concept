<?php

namespace ApiBundle\Model;

use AppBundle\Entity\CheckListItem;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\ExclusionPolicy("all")
 * @Serializer\AccessType("public_method")
 */
class CheckListItemResponseModel
{
    /** @var CheckListItem */
    protected $checkListItem;

    public function __construct(CheckListItem $checkListItem)
    {
        $this->checkListItem = $checkListItem;
    }

    /**
     * @return string
     * @Serializer\Type("string")
     * @Serializer\VirtualProperty
     */
    public function getTitle()
    {
        return $this->checkListItem->getLabel();
    }

    /**
     * @return string
     * @Serializer\Type("string")
     * @Serializer\VirtualProperty
     */
    public function getType()
    {
        return 'boolean';
    }
}
