<?php

namespace ApiBundle\Controller;

use AppBundle\Entity\Form;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;

class FormController extends FOSRestController
{
    /**
     * @Rest\Get("/{id}")
     * @ParamConverter("form")
     *
     * @param Form $form
     *
     * @return View
     */
    public function indexAction(Form $form)
    {
        $model = $this->get('api_bundle.model_factory_collection.response')->createModel($form);

        return $this->view($model, Response::HTTP_OK);

    }
}
