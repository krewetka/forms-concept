<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SimpleInput extends FormItem
{
    /**
     * @var int|null
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $minLength;

    /**
     * @return int|null
     */
    public function getMinLength(): ?int
    {
        return $this->minLength;
    }

    /**
     * @param int $minLength
     *
     * @return SimpleInput
     */
    public function setMinLength(int $minLength): SimpleInput
    {
        $this->minLength = $minLength;

        return $this;
    }
}
