<?php

namespace ApiBundle\ModelFactory;

use ApiBundle\Model\FormResponseModel;
use AppBundle\Entity\Form;
use Xsolve\ModelFactoryBundle\ModelFactory\ModelFactory;

class FormResponseModelFactory extends ModelFactory
{
    /**
     * {@inheritdoc}
     */
    public function supportsObject($object)
    {
        return $object instanceof Form;
    }

    /**
     * @param Form $form
     *
     * @return FormResponseModel
     */
    protected function instantiateModel($form): FormResponseModel
    {
        return new FormResponseModel($form);
    }
}
