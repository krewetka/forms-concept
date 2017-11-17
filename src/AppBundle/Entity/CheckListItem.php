<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Table(name="checklist_item")
 * @ORM\Entity
 */
class CheckListItem extends BaseEntity
{
    /**
     * @ManyToOne(targetEntity="AppBundle\Entity\CheckList", inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $checkList;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $label;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $position;

    /**
     * @return mixed
     */
    public function getCheckList()
    {
        return $this->checkList;
    }

    /**
     * @param mixed $checkList
     */
    public function setCheckList($checkList)
    {
        $this->checkList = $checkList;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function __toString()
    {
        return $this->label;
    }
}
