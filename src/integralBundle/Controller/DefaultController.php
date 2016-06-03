<?php

namespace integralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('integralBundle:Default:index.html.twig', array('name' =>"Integral"));
    }
}
