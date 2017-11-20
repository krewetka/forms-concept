<?php

namespace ApiBundle\ModelFactory;

use ApiBundle\Model\DropDownResponseModel;
use AppBundle\Entity\DropDownList;
use Xsolve\ModelFactoryBundle\ModelFactory\ModelFactory;

class DropDownResponseModelFactory extends ModelFactory
{

    /**
     * {@inheritdoc}
     */
    public function supportsObject($object)
    {
        return $object instanceof DropDownList;
    }

    /**
     * {@inheritdoc}
     */
    protected function instantiateModel($object)
    {
        return new DropDownResponseModel($object);
    }
}
