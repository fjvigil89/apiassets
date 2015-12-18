<?php

namespace webServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Nelmio\ApiDocBundle\Formatter\RequestAwareSwaggerFormatter;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('webServiceBundle:Default:index.html.twig', array('name' => $name));
    }

    public function empleadosAction()
    {

		$em = $this->getDoctrine()->getManager();
    	$extractedDoc = $this->get('assets.EmpleadosGral')->findAll(000001,$em);

        return new Response($extractedDoc->getNombre());

    	//$empleados= $this->get('assets.EmpleadosGral');
    	//return new Response("peticiones para api assets");
    	 
    }
}
