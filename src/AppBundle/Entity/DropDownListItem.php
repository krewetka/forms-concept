<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Table(name="dropdown_item")
 * @ORM\Entity
 */
class DropDownListItem extends BaseEntity
{
    /**
     * @ManyToOne(targetEntity="AppBundle\Entity\DropDownList", inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $dropDownList;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    protected $position;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    protected $isDefault = false;

    /**
     * @return bool
     */
    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @param bool $isDefault
     */
    public function setIsDefault(bool $isDefault)
    {
        $this->isDefault = $isDefault;
    }

    /**
     * @return mixed
     */
    public function getDropDownList()
    {
        return $this->dropDownList;
    }

    /**
     * @param mixed $dropDownList
     */
    public function setDropDownList($dropDownList)
    {
        $this->dropDownList = $dropDownList;
    }

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
        return $this->name;
    }
}
