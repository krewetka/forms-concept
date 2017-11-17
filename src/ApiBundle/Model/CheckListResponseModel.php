<?php

namespace ApiBundle\Model;

use AppBundle\Entity\CheckList;
use AppBundle\Entity\CheckListItem;
use JMS\Serializer\Annotation as Serializer;
use Xsolve\ModelFactoryBundle\ModelFactoryCollection\ModelFactoryCollectionAwareModelInterface;
use Xsolve\ModelFactoryBundle\ModelFactoryCollection\ModelFactoryCollectionAwareModelTrait;

/**
 * @Serializer\ExclusionPolicy("all")
 * @Serializer\AccessType("public_method")
 */
class CheckListResponseModel implements ModelFactoryCollectionAwareModelInterface
{
    use ModelFactoryCollectionAwareModelTrait;

    /** @var CheckList */
    protected $form;

    public function __construct(CheckList $form)
    {
        $this->form = $form;
    }

    /**
     * @return string
     * @Serializer\Type("string")
     * @Serializer\VirtualProperty
     */
    public function getTitle()
    {
        return $this->form->getName();
    }

    /**
     * @Serializer\Type("array<string,ApiBundle\Model\CheckListItemResponseModel>")
     * @Serializer\VirtualProperty
     */
    public function getProperties()
    {
        $items = [];
        foreach ($this->form->getItems() as $item) {
            $items[$item->getLabel()] = $this->getModelFactoryCollection()->createModel($item);
        }

        return $items;
    }

    /**
     * @return string
     * @Serializer\Type("string")
     * @Serializer\VirtualProperty
     */
    public function getType()
    {
        return 'object';
    }
}
