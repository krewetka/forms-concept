<?php

namespace ApiBundle\ModelFactory;

use ApiBundle\Model\CheckListItemResponseModel;
use AppBundle\Entity\CheckListItem;
use Xsolve\ModelFactoryBundle\ModelFactory\ModelFactory;

class CheckListItemResponseModelFactory extends ModelFactory
{
    /**
     * {@inheritdoc}
     */
    public function supportsObject($object)
    {
        return $object instanceof CheckListItem;
    }

    /**
     * @param CheckListItem $checklistItem
     *
     * @return CheckListItemResponseModel
     */
    protected function instantiateModel($checklistItem): CheckListItemResponseModel
    {
        return new CheckListItemResponseModel($checklistItem);
    }
}
