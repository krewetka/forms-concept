<?php

namespace ApiBundle\ModelFactory;

use ApiBundle\Model\SimpleInputResponseModel;
use AppBundle\Entity\SimpleInput;
use Xsolve\ModelFactoryBundle\ModelFactory\ModelFactory;

class SimpleInputResponseModelFactory extends ModelFactory
{
    /**
     * {@inheritdoc}
     */
    public function supportsObject($object)
    {
        return $object instanceof SimpleInput;
    }

    /**
     * {@inheritdoc}
     */
    protected function instantiateModel($object)
    {
        return new SimpleInputResponseModel($object);
    }
}
