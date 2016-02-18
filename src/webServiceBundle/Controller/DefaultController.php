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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        
        return $this->render('webServiceBundle:Default:index.html.twig', array('name' => "Api Assets"));
    }

    public function empleadosAction()
    {

		$em = $this->getDoctrine()->getManager();
        //return new Response($extractedDoc);

    	$empleados= $this->get('assets.empleadosgral.collection_operation.get');
    	return new Response(count($empleados));
        //return $this->render('webServiceBundle:Default:empleados.html.twig', array('empleados' => $empleados));
    	 
    }
}
