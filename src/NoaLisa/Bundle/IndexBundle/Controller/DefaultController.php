<?php

namespace NoaLisa\Bundle\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('NoaLisaIndexBundle:Default:index.html.twig');
    }
}
