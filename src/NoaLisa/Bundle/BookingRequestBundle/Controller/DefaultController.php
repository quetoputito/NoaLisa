<?php

namespace NoaLisa\Bundle\BookingRequestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('NoaLisaBookingRequestBundle:Default:index.html.twig', array('name' => $name));
    }
}
