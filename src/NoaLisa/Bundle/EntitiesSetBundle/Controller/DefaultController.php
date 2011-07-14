<?php

namespace NoaLisa\Bundle\EntitiesSetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoaLisa\Bundle\EntitiesSetBundle\Form\EntitiesSetType;
use NoaLisa\Bundle\EntitiesSetBundle\Document\EntitiesSet;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $entities_set = new EntitiesSet;
        $form = $this->createForm(new EntitiesSetType(), $entities_set);
        
        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                // perform some action, such as save the object to the database
                return $this->redirect($this->generateUrl('store_product_success'));
            }  
        }
        

        return $this->render('NoaLisaEntitiesSetBundle:Default:index.html.twig', array('form' => $form->createView()));
    }
}
