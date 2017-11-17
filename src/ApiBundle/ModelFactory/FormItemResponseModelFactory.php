<?php

namespace ApiBundle\ModelFactory;

use ApiBundle\Model\FormItemResponseModel;
use AppBundle\Entity\FormItem;
use Xsolve\ModelFactoryBundle\ModelFactory\ModelFactory;

class FormItemResponseModelFactory extends ModelFactory
{
    /**
     * {@inheritdoc}
     */
    public function supportsObject($object)
    {
        return $object instanceof FormItem;
    }

    /**
     * @param FormItem $formItem
     *
     * @return FormItemResponseModel
     */
    protected function instantiateModel($formItem): FormItemResponseModel
    {
        return new FormItemResponseModel($formItem);
    }
}
