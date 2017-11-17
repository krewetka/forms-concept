<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * @ORM\Table(name="checklist")
 * @ORM\Entity
 */
class CheckList extends BaseEntity
{
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var CheckListItem[]
     * @OneToMany(targetEntity="AppBundle\Entity\CheckListItem", mappedBy="checkList")
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
     * @return CheckListItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param CheckListItem[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    public function __toString()
    {
        return $this->name;
    }
}
