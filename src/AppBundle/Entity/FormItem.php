<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Table(name="form_item")
 * @ORM\Entity
 */
class FormItem extends BaseEntity
{
    /**
     * @var Form
     * @ManyToOne(targetEntity="AppBundle\Entity\Form", inversedBy="items")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $form;

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
     * @var string
     * @ORM\Column(type="string")
     */
    protected $type = 'string';

    /**
     * @var DropDownList
     * @ManyToOne(targetEntity="AppBundle\Entity\DropDownList", inversedBy="formItems")
     * @ORM\JoinColumn(nullable=true)
     */
    protected $dropDownList;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    protected $isRequired = false;

    /**
     * @return Form
     */
    public function getForm(): ?Form
    {
        return $this->form;
    }

    /**
     * @param Form $form
     */
    public function setForm(Form $form)
    {
        $this->form = $form;
    }

    /**
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    /**
     * @return int
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition(int $position)
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return DropDownList
     */
    public function getDropDownList(): ?DropDownList
    {
        return $this->dropDownList;
    }

    /**
     * @param DropDownList $dropDownList
     */
    public function setDropDownList(DropDownList $dropDownList)
    {
        $this->dropDownList = $dropDownList;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->isRequired;
    }

    /**
     * @param bool $isRequired
     */
    public function setIsRequired(bool $isRequired)
    {
        $this->isRequired = $isRequired;
    }

    public function __toString()
    {
        return $this->label;
    }
}
