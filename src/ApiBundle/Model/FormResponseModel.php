<?php

namespace ApiBundle\Model;

use AppBundle\Entity\Form;
use JMS\Serializer\Annotation as Serializer;
use Xsolve\ModelFactoryBundle\ModelFactoryCollection\ModelFactoryCollectionAwareModelInterface;
use Xsolve\ModelFactoryBundle\ModelFactoryCollection\ModelFactoryCollectionAwareModelTrait;

/**
 * @Serializer\ExclusionPolicy("all")
 * @Serializer\AccessType("public_method")
 */
class FormResponseModel implements ModelFactoryCollectionAwareModelInterface
{
    use ModelFactoryCollectionAwareModelTrait;

    /** @var Form */
    protected $form;

    public function __construct(Form $form)
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
     * @return string[]
     * @Serializer\Type("array<string>")
     * @Serializer\VirtualProperty
     */
    public function getRequired()
    {
        $required = [];
        foreach ($this->form->getItems() as $item) {
            if ($item->isRequired()) {
                $required[] = $item->getLabel();
            }
        }

        return $required;
    }

    /**
     * @Serializer\Type("array")
     * @Serializer\VirtualProperty
     */
    public function getProperties()
    {
        return array_merge($this->getFormItems(), $this->getCheckLists());
    }

    private function getFormItems()
    {
        $items = [];
        foreach ($this->form->getItems() as $item) {
            $items[$item->getLabel()] = $this->getModelFactoryCollection()->createModel($item);
        }

        return $items;
    }

    private function getCheckLists()
    {
        $items = [];
        foreach ($this->form->getCheckLists() as $item) {
            $items[$item->getName()] = $this->getModelFactoryCollection()->createModel($item);
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
