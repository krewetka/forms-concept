<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="form")
 * @ORM\Entity
 */
class Form extends BaseEntity
{
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var FormItem[]
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\FormItem", mappedBy="form")
     */
    protected $items;

    /**
     * @var Collection | CheckList[]
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\CheckList")
     */
    protected $checkLists;

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
     * @return FormItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param FormItem[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return Collection | CheckList[]
     */
    public function getCheckLists(): Collection
    {
        return $this->checkLists;
    }

    /**
     * @param  Collection | CheckList[]
     */
    public function setCheckLists($checkLists)
    {
        $this->checkLists = $checkLists;
    }

    public function __toString()
    {
        return $this->name;
    }
}
