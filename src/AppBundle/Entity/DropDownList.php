<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * @ORM\Table(name="dropdown")
 * @ORM\Entity
 */
class DropDownList extends BaseEntity
{
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var DropDownListItem[]
     * @OneToMany(targetEntity="AppBundle\Entity\DropDownListItem", mappedBy="dropDownList")
     */
    protected $items;

    /**
     * @var FormItem[]
     * @OneToMany(targetEntity="AppBundle\Entity\FormItem", mappedBy="dropDownList")
     */
    protected $formItems;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return DropDownListItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param DropDownListItem[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return FormItem[]
     */
    public function getFormItems()
    {
        return $this->formItems;
    }

    /**
     * @param FormItem[] $formItems
     */
    public function setFormItems($formItems)
    {
        $this->formItems = $formItems;
    }

    public function __toString()
    {
        return $this->name;
    }
}
