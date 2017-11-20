<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * @ORM\Table(name="dropdown")
 * @ORM\Entity
 */
class DropDownList extends FormItem
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
}
