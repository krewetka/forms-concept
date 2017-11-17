<?php

namespace ApiBundle\ModelFactory;

use ApiBundle\Model\CheckListResponseModel;
use AppBundle\Entity\CheckList;
use Xsolve\ModelFactoryBundle\ModelFactory\ModelFactory;

class CheckListResponseModelFactory extends ModelFactory
{
    /**
     * {@inheritdoc}
     */
    public function supportsObject($object)
    {
        return $object instanceof CheckList;
    }

    /**
     * @param CheckList $checklist
     *
     * @return CheckListResponseModel
     */
    protected function instantiateModel($checklist): CheckListResponseModel
    {
        return new CheckListResponseModel($checklist);
    }
}
