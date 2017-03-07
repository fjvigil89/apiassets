<?php

namespace integralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	
    public function indexAction()
    {
    	$arrayEntity= [
    		"EmpleadosGrals",
    		"Cargos",
    		"CategoriasDocenteInvest",
    		"CategoriasOcupacionales",
    		"EmpleadosCentroCosto",
    		"GradosCientificos",
    		"Municipios",
    		"NivelesEscolaridad",
			"NivelesEscolaridadClasif",
			"Profesiones",
			"ProfesionesGeneral",
			"Provincias",
			"CentroCostos",			
			"ActivoFijos",
			"SubclasificacionActivofijo",
			"ClasificacionActivofijos",
			"ActivoFijoTipos",
			"EspecificacionActivofijos",
			"EspecificacionesActivofijos",			
			"Empleados",		
			"AreasResponsabilidads",
			"ActivoFijoEstados",
			"Clientes",
			"BajaActivofijos",	
			"ActivoFijoParametros",
			"CnmbActivofijo"
			
			];
	$routers= [
			"/empleados_gras",
			"/rh_cargos",
			"/rh_categorias_docente_invests",
			"/rh_categorias_ocupacionales",
			"/rh_empleados_centro_costos",
			"/rh_grados_cientificos",
			"/rh_municipios",
			"/rh_niveles_escolaridads",
			"/rh_niveles_escolaridad_clasifs",
			"/rh_profesiones",
			"/rh_profesiones_generals",
			"/rh_provincias",
			"/centro_costos",
			"/activo_fijos",
			"/subclasificacion_activofijos",
			"/clasificacion_activofijos",
			"/activo_fijo_tipos",
			"/especificacion_activofijos",
			"/especificaciones_activofijos",
			"/empleados",
			"/areas_responsabilidads",
			"/activo_fijo_estados",
			"/clientes",
			"/baja_activofijos",
			"/activo_fijo_parametros",
			"/cnmb_activofijos",
		
		];
        return $this->render('integralBundle:Default:index.html.twig', array('name' => "API Assets",
            'entitys'=>$arrayEntity,
            'routers'=>$routers
            ));
    }
}

