<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhParametros
 *
 * @ORM\Table(name="RH_Parametros")
 * @ORM\Entity
 */
class RhParametros
{
    /**
     * @var string
     *
     * @ORM\Column(name="Logo", type="text", length=16, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Empresa", type="string", length=100, nullable=false)
     */
    private $nombreEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="Titulo", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="SubTitulo", type="string", length=100, nullable=false)
     */
    private $subtitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClaveSabado", type="string", length=5, nullable=false)
     */
    private $idClavesabado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClaveInterrupc100", type="string", length=5, nullable=false)
     */
    private $idClaveinterrupc100;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cant_Niveles", type="smallint", nullable=false)
     */
    private $cantNiveles;

    /**
     * @var string
     *
     * @ORM\Column(name="Nivel1", type="string", length=25, nullable=false)
     */
    private $nivel1;

    /**
     * @var string
     *
     * @ORM\Column(name="Nivel2", type="string", length=25, nullable=false)
     */
    private $nivel2;

    /**
     * @var string
     *
     * @ORM\Column(name="Nivel3", type="string", length=25, nullable=false)
     */
    private $nivel3;

    /**
     * @var string
     *
     * @ORM\Column(name="Nivel4", type="string", length=25, nullable=false)
     */
    private $nivel4;

    /**
     * @var string
     *
     * @ORM\Column(name="Nivel5", type="string", length=25, nullable=false)
     */
    private $nivel5;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomina_HechoPor", type="string", length=50, nullable=false)
     */
    private $nominaHechopor;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomina_AprobPor", type="string", length=50, nullable=false)
     */
    private $nominaAprobpor;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomina_RevPor", type="string", length=50, nullable=false)
     */
    private $nominaRevpor;

    /**
     * @var string
     *
     * @ORM\Column(name="Nomina_ContabPor", type="string", length=50, nullable=false)
     */
    private $nominaContabpor;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreContratador", type="string", length=50, nullable=false)
     */
    private $nombrecontratador;

    /**
     * @var string
     *
     * @ORM\Column(name="CargoContratador", type="string", length=50, nullable=false)
     */
    private $cargocontratador;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tallas_Ropa", type="boolean", nullable=false)
     */
    private $tallasRopa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Docencia_Investig", type="boolean", nullable=false)
     */
    private $docenciaInvestig;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Defensa", type="boolean", nullable=false)
     */
    private $defensa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Organizaciones", type="boolean", nullable=false)
     */
    private $organizaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Idiomas", type="boolean", nullable=false)
     */
    private $idiomas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Antiguedad", type="boolean", nullable=false)
     */
    private $antiguedad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Divisa", type="boolean", nullable=false)
     */
    private $pagoDivisa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Estimulo_Salarial", type="boolean", nullable=false)
     */
    private $estimuloSalarial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PagoIdoneidad", type="boolean", nullable=false)
     */
    private $pagoidoneidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Porc_Estimulacion_Salarial", type="boolean", nullable=false)
     */
    private $porcEstimulacionSalarial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Otros_Pagos", type="boolean", nullable=false)
     */
    private $otrosPagos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="GeneraAutomNoExped", type="boolean", nullable=false)
     */
    private $generaautomnoexped;

    /**
     * @var integer
     *
     * @ORM\Column(name="MaxLongAutomNoExped", type="smallint", nullable=false)
     */
    private $maxlongautomnoexped;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AjustarCentavos", type="boolean", nullable=false)
     */
    private $ajustarcentavos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CalculosAutomaticos", type="boolean", nullable=false)
     */
    private $calculosautomaticos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="HorasExtrasconReporte", type="boolean", nullable=false)
     */
    private $horasextrasconreporte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CLAconReporte", type="boolean", nullable=false)
     */
    private $claconreporte;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ReportarEstimulacion", type="boolean", nullable=false)
     */
    private $reportarestimulacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PerfeccionamientoSubsidio", type="boolean", nullable=false)
     */
    private $perfeccionamientosubsidio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PerfeccionamientoconVacaciones", type="boolean", nullable=false)
     */
    private $perfeccionamientoconvacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSAntigTipoPago", type="smallint", nullable=false)
     */
    private $msantigtipopago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IdoneidadconAusentismo", type="boolean", nullable=false)
     */
    private $idoneidadconausentismo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ContratoPerfeccionamiento", type="boolean", nullable=false)
     */
    private $contratoperfeccionamiento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NominaInterrupto", type="boolean", nullable=false)
     */
    private $nominainterrupto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DescuentoContravalor", type="boolean", nullable=false)
     */
    private $descuentocontravalor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ControlSalario", type="boolean", nullable=false)
     */
    private $controlsalario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ControlPlazas", type="boolean", nullable=false)
     */
    private $controlplazas;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoPerfeccionamiento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoperfeccionamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoInterrupcion", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientointerrupcion;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoTiempoTasadoaPagar", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientotiempotasadoapagar;

    /**
     * @var integer
     *
     * @ORM\Column(name="TarifaPagoVinculacion", type="integer", nullable=false)
     */
    private $tarifapagovinculacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasVenceReintegros", type="smallint", nullable=false)
     */
    private $diasvencereintegros;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSSalarioEscalaBaseCalculo", type="boolean", nullable=false)
     */
    private $mssalarioescalabasecalculo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSPlus", type="boolean", nullable=false)
     */
    private $msplus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSAntiguedad", type="boolean", nullable=false)
     */
    private $msantiguedad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSOtros", type="boolean", nullable=false)
     */
    private $msotros;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSSalarioporCargo", type="boolean", nullable=false)
     */
    private $mssalarioporcargo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSAlbergamiento", type="boolean", nullable=false)
     */
    private $msalbergamiento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSHorarioIrregular", type="boolean", nullable=false)
     */
    private $mshorarioirregular;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSCondiciones", type="boolean", nullable=false)
     */
    private $mscondiciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSIETerritorial", type="boolean", nullable=false)
     */
    private $msieterritorial;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSETSector", type="boolean", nullable=false)
     */
    private $msetsector;

    /**
     * @var string
     *
     * @ORM\Column(name="Agrupacion", type="string", length=5, nullable=false)
     */
    private $agrupacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AjustarCentavosVacaciones", type="boolean", nullable=false)
     */
    private $ajustarcentavosvacaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoReloj", type="smallint", nullable=false)
     */
    private $tiporeloj;

    /**
     * @var string
     *
     * @ORM\Column(name="ClaveImpunt", type="string", length=5, nullable=false)
     */
    private $claveimpunt;

    /**
     * @var string
     *
     * @ORM\Column(name="Titulo2doFormatoNominaSalario", type="string", length=100, nullable=false)
     */
    private $titulo2doformatonominasalario;

    /**
     * @var string
     *
     * @ORM\Column(name="Titulo2doFormatoNominaVacaciones", type="string", length=100, nullable=false)
     */
    private $titulo2doformatonominavacaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Titulo2doFormatoNominaSubsidios", type="string", length=100, nullable=false)
     */
    private $titulo2doformatonominasubsidios;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Agencia_Empleadora", type="boolean", nullable=false)
     */
    private $agenciaEmpleadora;

    /**
     * @var integer
     *
     * @ORM\Column(name="CoeficienteHorasExtras", type="integer", nullable=false)
     */
    private $coeficientehorasextras;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen_Factura", type="string", length=5, nullable=false)
     */
    private $idAlmacenFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasifactura_Salario", type="string", length=10, nullable=false)
     */
    private $idClasifacturaSalario;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasifactura_Indemnizacion", type="string", length=10, nullable=false)
     */
    private $idClasifacturaIndemnizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda_Factura", type="string", length=5, nullable=false)
     */
    private $monedaFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Deduccion_PagoIndebido", type="string", length=5, nullable=false)
     */
    private $idDeduccionPagoindebido;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClaveReloj", type="string", length=5, nullable=false)
     */
    private $idClavereloj;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Horario_Almuerzo", type="boolean", nullable=false)
     */
    private $horarioAlmuerzo;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSSalarioPagoActual", type="smallint", nullable=false)
     */
    private $mssalariopagoactual;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClaveDecreto_Ley_91", type="string", length=5, nullable=false)
     */
    private $idClavedecretoLey91;

    /**
     * @var boolean
     *
     * @ORM\Column(name="PerfeccionamientoSoloDevengado", type="boolean", nullable=false)
     */
    private $perfeccionamientosolodevengado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSIdoneidadFijo", type="boolean", nullable=false)
     */
    private $msidoneidadfijo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSIdoneidadMovil", type="boolean", nullable=false)
     */
    private $msidoneidadmovil;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Afecta_Estimulacion_Ausencias", type="boolean", nullable=false)
     */
    private $afectaEstimulacionAusencias;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Interrup_Tarifa_Diaria", type="boolean", nullable=false)
     */
    private $pagoInterrupTarifaDiaria;

    /**
     * @var integer
     *
     * @ORM\Column(name="Puerto_Serie", type="smallint", nullable=false)
     */
    private $puertoSerie;

    /**
     * @var integer
     *
     * @ORM\Column(name="Total_Nodos", type="smallint", nullable=false)
     */
    private $totalNodos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tiempo_Espera", type="integer", nullable=false)
     */
    private $tiempoEspera;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MS_Pago_Nominillas", type="boolean", nullable=false)
     */
    private $msPagoNominillas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Tarifa_Hrs_Extras_Salario_Basico", type="boolean", nullable=false)
     */
    private $tarifaHrsExtrasSalarioBasico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSSalarioEscalaBaseCalculo1", type="boolean", nullable=false)
     */
    private $mssalarioescalabasecalculo1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSPlus1", type="boolean", nullable=false)
     */
    private $msplus1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSAntiguedad1", type="boolean", nullable=false)
     */
    private $msantiguedad1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSOtros1", type="boolean", nullable=false)
     */
    private $msotros1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSSalarioporCargo1", type="boolean", nullable=false)
     */
    private $mssalarioporcargo1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSAlbergamiento1", type="boolean", nullable=false)
     */
    private $msalbergamiento1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSHorarioIrregular1", type="boolean", nullable=false)
     */
    private $mshorarioirregular1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSCondiciones1", type="boolean", nullable=false)
     */
    private $mscondiciones1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSIETerritorial1", type="boolean", nullable=false)
     */
    private $msieterritorial1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSETSector1", type="boolean", nullable=false)
     */
    private $msetsector1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSIdoneidadFijo1", type="boolean", nullable=false)
     */
    private $msidoneidadfijo1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSIdoneidadMovil1", type="boolean", nullable=false)
     */
    private $msidoneidadmovil1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SNC_EA_PR_Prom_Subs", type="boolean", nullable=false)
     */
    private $sncEaPrPromSubs;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSAno", type="smallint", nullable=false)
     */
    private $msano;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSMes", type="smallint", nullable=false)
     */
    private $msmes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Hrs_Extras_Reloj", type="smallint", nullable=false)
     */
    private $tipoHrsExtrasReloj;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cant_Min_Hrs_Extras_Reloj", type="smallint", nullable=false)
     */
    private $cantMinHrsExtrasReloj;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSCoeficienteconDevengado", type="boolean", nullable=false)
     */
    private $mscoeficientecondevengado;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSCoeficienteTipoPago", type="smallint", nullable=false)
     */
    private $mscoeficientetipopago;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSCoeficientePorciento", type="smallint", nullable=false)
     */
    private $mscoeficienteporciento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Estimulacion_Puntos", type="boolean", nullable=false)
     */
    private $estimulacionPuntos;

    /**
     * @var integer
     *
     * @ORM\Column(name="ShopConvertIndex", type="integer", nullable=false)
     */
    private $shopconvertindex;

    /**
     * @var integer
     *
     * @ORM\Column(name="CUCPromIndex", type="integer", nullable=false)
     */
    private $cucpromindex;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulacion_Puntos_Salario_Max", type="integer", nullable=false)
     */
    private $estimulacionPuntosSalarioMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estimulacion_Puntos_Cuantia_Min", type="integer", nullable=false)
     */
    private $estimulacionPuntosCuantiaMin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Feriados_Salario_Promedio", type="boolean", nullable=false)
     */
    private $pagoFeriadosSalarioPromedio;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Aplicar_Retenciones_VacacAdelant_PagoMensual", type="boolean", nullable=false)
     */
    private $aplicarRetencionesVacacadelantPagomensual;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Adicional", type="boolean", nullable=false)
     */
    private $pagoAdicional;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Comedor_Desglose", type="boolean", nullable=false)
     */
    private $pagoComedorDesglose;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Pago_Comedor_Banco", type="boolean", nullable=false)
     */
    private $pagoComedorBanco;

    /**
     * @var integer
     *
     * @ORM\Column(name="TC_People", type="integer", nullable=false)
     */
    private $tcPeople;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoSeguroSocialPlazoLargo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientosegurosocialplazolargo;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoSeguroSocialPlazoCorto", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientosegurosocialplazocorto;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoUtilizaFuerzaTrabajo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoutilizafuerzatrabajo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="OtrosPagosconReporte", type="boolean", nullable=false)
     */
    private $otrospagosconreporte;

    /**
     * @var string
     *
     * @ORM\Column(name="Path_Envio", type="string", length=200, nullable=false)
     */
    private $pathEnvio;

    /**
     * @var string
     *
     * @ORM\Column(name="Path_Recibo", type="string", length=200, nullable=false)
     */
    private $pathRecibo;

    /**
     * @var string
     *
     * @ORM\Column(name="Suc_Bancaria", type="string", length=3, nullable=false)
     */
    private $sucBancaria;

    /**
     * @var string
     *
     * @ORM\Column(name="Centro_Pago_BPA", type="string", length=8, nullable=false)
     */
    private $centroPagoBpa;



    /**
     * Set logo
     *
     * @param string $logo
     * @return RhParametros
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set nombreEmpresa
     *
     * @param string $nombreEmpresa
     * @return RhParametros
     */
    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;

        return $this;
    }

    /**
     * Get nombreEmpresa
     *
     * @return string 
     */
    public function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set subtitulo
     *
     * @param string $subtitulo
     * @return RhParametros
     */
    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    /**
     * Get subtitulo
     *
     * @return string 
     */
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    /**
     * Set idClavesabado
     *
     * @param string $idClavesabado
     * @return RhParametros
     */
    public function setIdClavesabado($idClavesabado)
    {
        $this->idClavesabado = $idClavesabado;

        return $this;
    }

    /**
     * Get idClavesabado
     *
     * @return string 
     */
    public function getIdClavesabado()
    {
        return $this->idClavesabado;
    }

    /**
     * Set idClaveinterrupc100
     *
     * @param string $idClaveinterrupc100
     * @return RhParametros
     */
    public function setIdClaveinterrupc100($idClaveinterrupc100)
    {
        $this->idClaveinterrupc100 = $idClaveinterrupc100;

        return $this;
    }

    /**
     * Get idClaveinterrupc100
     *
     * @return string 
     */
    public function getIdClaveinterrupc100()
    {
        return $this->idClaveinterrupc100;
    }

    /**
     * Set cantNiveles
     *
     * @param integer $cantNiveles
     * @return RhParametros
     */
    public function setCantNiveles($cantNiveles)
    {
        $this->cantNiveles = $cantNiveles;

        return $this;
    }

    /**
     * Get cantNiveles
     *
     * @return integer 
     */
    public function getCantNiveles()
    {
        return $this->cantNiveles;
    }

    /**
     * Set nivel1
     *
     * @param string $nivel1
     * @return RhParametros
     */
    public function setNivel1($nivel1)
    {
        $this->nivel1 = $nivel1;

        return $this;
    }

    /**
     * Get nivel1
     *
     * @return string 
     */
    public function getNivel1()
    {
        return $this->nivel1;
    }

    /**
     * Set nivel2
     *
     * @param string $nivel2
     * @return RhParametros
     */
    public function setNivel2($nivel2)
    {
        $this->nivel2 = $nivel2;

        return $this;
    }

    /**
     * Get nivel2
     *
     * @return string 
     */
    public function getNivel2()
    {
        return $this->nivel2;
    }

    /**
     * Set nivel3
     *
     * @param string $nivel3
     * @return RhParametros
     */
    public function setNivel3($nivel3)
    {
        $this->nivel3 = $nivel3;

        return $this;
    }

    /**
     * Get nivel3
     *
     * @return string 
     */
    public function getNivel3()
    {
        return $this->nivel3;
    }

    /**
     * Set nivel4
     *
     * @param string $nivel4
     * @return RhParametros
     */
    public function setNivel4($nivel4)
    {
        $this->nivel4 = $nivel4;

        return $this;
    }

    /**
     * Get nivel4
     *
     * @return string 
     */
    public function getNivel4()
    {
        return $this->nivel4;
    }

    /**
     * Set nivel5
     *
     * @param string $nivel5
     * @return RhParametros
     */
    public function setNivel5($nivel5)
    {
        $this->nivel5 = $nivel5;

        return $this;
    }

    /**
     * Get nivel5
     *
     * @return string 
     */
    public function getNivel5()
    {
        return $this->nivel5;
    }

    /**
     * Set nominaHechopor
     *
     * @param string $nominaHechopor
     * @return RhParametros
     */
    public function setNominaHechopor($nominaHechopor)
    {
        $this->nominaHechopor = $nominaHechopor;

        return $this;
    }

    /**
     * Get nominaHechopor
     *
     * @return string 
     */
    public function getNominaHechopor()
    {
        return $this->nominaHechopor;
    }

    /**
     * Set nominaAprobpor
     *
     * @param string $nominaAprobpor
     * @return RhParametros
     */
    public function setNominaAprobpor($nominaAprobpor)
    {
        $this->nominaAprobpor = $nominaAprobpor;

        return $this;
    }

    /**
     * Get nominaAprobpor
     *
     * @return string 
     */
    public function getNominaAprobpor()
    {
        return $this->nominaAprobpor;
    }

    /**
     * Set nominaRevpor
     *
     * @param string $nominaRevpor
     * @return RhParametros
     */
    public function setNominaRevpor($nominaRevpor)
    {
        $this->nominaRevpor = $nominaRevpor;

        return $this;
    }

    /**
     * Get nominaRevpor
     *
     * @return string 
     */
    public function getNominaRevpor()
    {
        return $this->nominaRevpor;
    }

    /**
     * Set nominaContabpor
     *
     * @param string $nominaContabpor
     * @return RhParametros
     */
    public function setNominaContabpor($nominaContabpor)
    {
        $this->nominaContabpor = $nominaContabpor;

        return $this;
    }

    /**
     * Get nominaContabpor
     *
     * @return string 
     */
    public function getNominaContabpor()
    {
        return $this->nominaContabpor;
    }

    /**
     * Set nombrecontratador
     *
     * @param string $nombrecontratador
     * @return RhParametros
     */
    public function setNombrecontratador($nombrecontratador)
    {
        $this->nombrecontratador = $nombrecontratador;

        return $this;
    }

    /**
     * Get nombrecontratador
     *
     * @return string 
     */
    public function getNombrecontratador()
    {
        return $this->nombrecontratador;
    }

    /**
     * Set cargocontratador
     *
     * @param string $cargocontratador
     * @return RhParametros
     */
    public function setCargocontratador($cargocontratador)
    {
        $this->cargocontratador = $cargocontratador;

        return $this;
    }

    /**
     * Get cargocontratador
     *
     * @return string 
     */
    public function getCargocontratador()
    {
        return $this->cargocontratador;
    }

    /**
     * Set tallasRopa
     *
     * @param boolean $tallasRopa
     * @return RhParametros
     */
    public function setTallasRopa($tallasRopa)
    {
        $this->tallasRopa = $tallasRopa;

        return $this;
    }

    /**
     * Get tallasRopa
     *
     * @return boolean 
     */
    public function getTallasRopa()
    {
        return $this->tallasRopa;
    }

    /**
     * Set docenciaInvestig
     *
     * @param boolean $docenciaInvestig
     * @return RhParametros
     */
    public function setDocenciaInvestig($docenciaInvestig)
    {
        $this->docenciaInvestig = $docenciaInvestig;

        return $this;
    }

    /**
     * Get docenciaInvestig
     *
     * @return boolean 
     */
    public function getDocenciaInvestig()
    {
        return $this->docenciaInvestig;
    }

    /**
     * Set defensa
     *
     * @param boolean $defensa
     * @return RhParametros
     */
    public function setDefensa($defensa)
    {
        $this->defensa = $defensa;

        return $this;
    }

    /**
     * Get defensa
     *
     * @return boolean 
     */
    public function getDefensa()
    {
        return $this->defensa;
    }

    /**
     * Set organizaciones
     *
     * @param boolean $organizaciones
     * @return RhParametros
     */
    public function setOrganizaciones($organizaciones)
    {
        $this->organizaciones = $organizaciones;

        return $this;
    }

    /**
     * Get organizaciones
     *
     * @return boolean 
     */
    public function getOrganizaciones()
    {
        return $this->organizaciones;
    }

    /**
     * Set idiomas
     *
     * @param boolean $idiomas
     * @return RhParametros
     */
    public function setIdiomas($idiomas)
    {
        $this->idiomas = $idiomas;

        return $this;
    }

    /**
     * Get idiomas
     *
     * @return boolean 
     */
    public function getIdiomas()
    {
        return $this->idiomas;
    }

    /**
     * Set antiguedad
     *
     * @param boolean $antiguedad
     * @return RhParametros
     */
    public function setAntiguedad($antiguedad)
    {
        $this->antiguedad = $antiguedad;

        return $this;
    }

    /**
     * Get antiguedad
     *
     * @return boolean 
     */
    public function getAntiguedad()
    {
        return $this->antiguedad;
    }

    /**
     * Set pagoDivisa
     *
     * @param boolean $pagoDivisa
     * @return RhParametros
     */
    public function setPagoDivisa($pagoDivisa)
    {
        $this->pagoDivisa = $pagoDivisa;

        return $this;
    }

    /**
     * Get pagoDivisa
     *
     * @return boolean 
     */
    public function getPagoDivisa()
    {
        return $this->pagoDivisa;
    }

    /**
     * Set estimuloSalarial
     *
     * @param boolean $estimuloSalarial
     * @return RhParametros
     */
    public function setEstimuloSalarial($estimuloSalarial)
    {
        $this->estimuloSalarial = $estimuloSalarial;

        return $this;
    }

    /**
     * Get estimuloSalarial
     *
     * @return boolean 
     */
    public function getEstimuloSalarial()
    {
        return $this->estimuloSalarial;
    }

    /**
     * Set pagoidoneidad
     *
     * @param boolean $pagoidoneidad
     * @return RhParametros
     */
    public function setPagoidoneidad($pagoidoneidad)
    {
        $this->pagoidoneidad = $pagoidoneidad;

        return $this;
    }

    /**
     * Get pagoidoneidad
     *
     * @return boolean 
     */
    public function getPagoidoneidad()
    {
        return $this->pagoidoneidad;
    }

    /**
     * Set porcEstimulacionSalarial
     *
     * @param boolean $porcEstimulacionSalarial
     * @return RhParametros
     */
    public function setPorcEstimulacionSalarial($porcEstimulacionSalarial)
    {
        $this->porcEstimulacionSalarial = $porcEstimulacionSalarial;

        return $this;
    }

    /**
     * Get porcEstimulacionSalarial
     *
     * @return boolean 
     */
    public function getPorcEstimulacionSalarial()
    {
        return $this->porcEstimulacionSalarial;
    }

    /**
     * Set otrosPagos
     *
     * @param boolean $otrosPagos
     * @return RhParametros
     */
    public function setOtrosPagos($otrosPagos)
    {
        $this->otrosPagos = $otrosPagos;

        return $this;
    }

    /**
     * Get otrosPagos
     *
     * @return boolean 
     */
    public function getOtrosPagos()
    {
        return $this->otrosPagos;
    }

    /**
     * Set generaautomnoexped
     *
     * @param boolean $generaautomnoexped
     * @return RhParametros
     */
    public function setGeneraautomnoexped($generaautomnoexped)
    {
        $this->generaautomnoexped = $generaautomnoexped;

        return $this;
    }

    /**
     * Get generaautomnoexped
     *
     * @return boolean 
     */
    public function getGeneraautomnoexped()
    {
        return $this->generaautomnoexped;
    }

    /**
     * Set maxlongautomnoexped
     *
     * @param integer $maxlongautomnoexped
     * @return RhParametros
     */
    public function setMaxlongautomnoexped($maxlongautomnoexped)
    {
        $this->maxlongautomnoexped = $maxlongautomnoexped;

        return $this;
    }

    /**
     * Get maxlongautomnoexped
     *
     * @return integer 
     */
    public function getMaxlongautomnoexped()
    {
        return $this->maxlongautomnoexped;
    }

    /**
     * Set ajustarcentavos
     *
     * @param boolean $ajustarcentavos
     * @return RhParametros
     */
    public function setAjustarcentavos($ajustarcentavos)
    {
        $this->ajustarcentavos = $ajustarcentavos;

        return $this;
    }

    /**
     * Get ajustarcentavos
     *
     * @return boolean 
     */
    public function getAjustarcentavos()
    {
        return $this->ajustarcentavos;
    }

    /**
     * Set calculosautomaticos
     *
     * @param boolean $calculosautomaticos
     * @return RhParametros
     */
    public function setCalculosautomaticos($calculosautomaticos)
    {
        $this->calculosautomaticos = $calculosautomaticos;

        return $this;
    }

    /**
     * Get calculosautomaticos
     *
     * @return boolean 
     */
    public function getCalculosautomaticos()
    {
        return $this->calculosautomaticos;
    }

    /**
     * Set horasextrasconreporte
     *
     * @param boolean $horasextrasconreporte
     * @return RhParametros
     */
    public function setHorasextrasconreporte($horasextrasconreporte)
    {
        $this->horasextrasconreporte = $horasextrasconreporte;

        return $this;
    }

    /**
     * Get horasextrasconreporte
     *
     * @return boolean 
     */
    public function getHorasextrasconreporte()
    {
        return $this->horasextrasconreporte;
    }

    /**
     * Set claconreporte
     *
     * @param boolean $claconreporte
     * @return RhParametros
     */
    public function setClaconreporte($claconreporte)
    {
        $this->claconreporte = $claconreporte;

        return $this;
    }

    /**
     * Get claconreporte
     *
     * @return boolean 
     */
    public function getClaconreporte()
    {
        return $this->claconreporte;
    }

    /**
     * Set reportarestimulacion
     *
     * @param boolean $reportarestimulacion
     * @return RhParametros
     */
    public function setReportarestimulacion($reportarestimulacion)
    {
        $this->reportarestimulacion = $reportarestimulacion;

        return $this;
    }

    /**
     * Get reportarestimulacion
     *
     * @return boolean 
     */
    public function getReportarestimulacion()
    {
        return $this->reportarestimulacion;
    }

    /**
     * Set perfeccionamientosubsidio
     *
     * @param boolean $perfeccionamientosubsidio
     * @return RhParametros
     */
    public function setPerfeccionamientosubsidio($perfeccionamientosubsidio)
    {
        $this->perfeccionamientosubsidio = $perfeccionamientosubsidio;

        return $this;
    }

    /**
     * Get perfeccionamientosubsidio
     *
     * @return boolean 
     */
    public function getPerfeccionamientosubsidio()
    {
        return $this->perfeccionamientosubsidio;
    }

    /**
     * Set perfeccionamientoconvacaciones
     *
     * @param boolean $perfeccionamientoconvacaciones
     * @return RhParametros
     */
    public function setPerfeccionamientoconvacaciones($perfeccionamientoconvacaciones)
    {
        $this->perfeccionamientoconvacaciones = $perfeccionamientoconvacaciones;

        return $this;
    }

    /**
     * Get perfeccionamientoconvacaciones
     *
     * @return boolean 
     */
    public function getPerfeccionamientoconvacaciones()
    {
        return $this->perfeccionamientoconvacaciones;
    }

    /**
     * Set msantigtipopago
     *
     * @param integer $msantigtipopago
     * @return RhParametros
     */
    public function setMsantigtipopago($msantigtipopago)
    {
        $this->msantigtipopago = $msantigtipopago;

        return $this;
    }

    /**
     * Get msantigtipopago
     *
     * @return integer 
     */
    public function getMsantigtipopago()
    {
        return $this->msantigtipopago;
    }

    /**
     * Set idoneidadconausentismo
     *
     * @param boolean $idoneidadconausentismo
     * @return RhParametros
     */
    public function setIdoneidadconausentismo($idoneidadconausentismo)
    {
        $this->idoneidadconausentismo = $idoneidadconausentismo;

        return $this;
    }

    /**
     * Get idoneidadconausentismo
     *
     * @return boolean 
     */
    public function getIdoneidadconausentismo()
    {
        return $this->idoneidadconausentismo;
    }

    /**
     * Set contratoperfeccionamiento
     *
     * @param boolean $contratoperfeccionamiento
     * @return RhParametros
     */
    public function setContratoperfeccionamiento($contratoperfeccionamiento)
    {
        $this->contratoperfeccionamiento = $contratoperfeccionamiento;

        return $this;
    }

    /**
     * Get contratoperfeccionamiento
     *
     * @return boolean 
     */
    public function getContratoperfeccionamiento()
    {
        return $this->contratoperfeccionamiento;
    }

    /**
     * Set nominainterrupto
     *
     * @param boolean $nominainterrupto
     * @return RhParametros
     */
    public function setNominainterrupto($nominainterrupto)
    {
        $this->nominainterrupto = $nominainterrupto;

        return $this;
    }

    /**
     * Get nominainterrupto
     *
     * @return boolean 
     */
    public function getNominainterrupto()
    {
        return $this->nominainterrupto;
    }

    /**
     * Set descuentocontravalor
     *
     * @param boolean $descuentocontravalor
     * @return RhParametros
     */
    public function setDescuentocontravalor($descuentocontravalor)
    {
        $this->descuentocontravalor = $descuentocontravalor;

        return $this;
    }

    /**
     * Get descuentocontravalor
     *
     * @return boolean 
     */
    public function getDescuentocontravalor()
    {
        return $this->descuentocontravalor;
    }

    /**
     * Set controlsalario
     *
     * @param boolean $controlsalario
     * @return RhParametros
     */
    public function setControlsalario($controlsalario)
    {
        $this->controlsalario = $controlsalario;

        return $this;
    }

    /**
     * Get controlsalario
     *
     * @return boolean 
     */
    public function getControlsalario()
    {
        return $this->controlsalario;
    }

    /**
     * Set controlplazas
     *
     * @param boolean $controlplazas
     * @return RhParametros
     */
    public function setControlplazas($controlplazas)
    {
        $this->controlplazas = $controlplazas;

        return $this;
    }

    /**
     * Get controlplazas
     *
     * @return boolean 
     */
    public function getControlplazas()
    {
        return $this->controlplazas;
    }

    /**
     * Set porcientoperfeccionamiento
     *
     * @param string $porcientoperfeccionamiento
     * @return RhParametros
     */
    public function setPorcientoperfeccionamiento($porcientoperfeccionamiento)
    {
        $this->porcientoperfeccionamiento = $porcientoperfeccionamiento;

        return $this;
    }

    /**
     * Get porcientoperfeccionamiento
     *
     * @return string 
     */
    public function getPorcientoperfeccionamiento()
    {
        return $this->porcientoperfeccionamiento;
    }

    /**
     * Set porcientointerrupcion
     *
     * @param string $porcientointerrupcion
     * @return RhParametros
     */
    public function setPorcientointerrupcion($porcientointerrupcion)
    {
        $this->porcientointerrupcion = $porcientointerrupcion;

        return $this;
    }

    /**
     * Get porcientointerrupcion
     *
     * @return string 
     */
    public function getPorcientointerrupcion()
    {
        return $this->porcientointerrupcion;
    }

    /**
     * Set porcientotiempotasadoapagar
     *
     * @param string $porcientotiempotasadoapagar
     * @return RhParametros
     */
    public function setPorcientotiempotasadoapagar($porcientotiempotasadoapagar)
    {
        $this->porcientotiempotasadoapagar = $porcientotiempotasadoapagar;

        return $this;
    }

    /**
     * Get porcientotiempotasadoapagar
     *
     * @return string 
     */
    public function getPorcientotiempotasadoapagar()
    {
        return $this->porcientotiempotasadoapagar;
    }

    /**
     * Set tarifapagovinculacion
     *
     * @param integer $tarifapagovinculacion
     * @return RhParametros
     */
    public function setTarifapagovinculacion($tarifapagovinculacion)
    {
        $this->tarifapagovinculacion = $tarifapagovinculacion;

        return $this;
    }

    /**
     * Get tarifapagovinculacion
     *
     * @return integer 
     */
    public function getTarifapagovinculacion()
    {
        return $this->tarifapagovinculacion;
    }

    /**
     * Set diasvencereintegros
     *
     * @param integer $diasvencereintegros
     * @return RhParametros
     */
    public function setDiasvencereintegros($diasvencereintegros)
    {
        $this->diasvencereintegros = $diasvencereintegros;

        return $this;
    }

    /**
     * Get diasvencereintegros
     *
     * @return integer 
     */
    public function getDiasvencereintegros()
    {
        return $this->diasvencereintegros;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return RhParametros
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return RhParametros
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set mssalarioescalabasecalculo
     *
     * @param boolean $mssalarioescalabasecalculo
     * @return RhParametros
     */
    public function setMssalarioescalabasecalculo($mssalarioescalabasecalculo)
    {
        $this->mssalarioescalabasecalculo = $mssalarioescalabasecalculo;

        return $this;
    }

    /**
     * Get mssalarioescalabasecalculo
     *
     * @return boolean 
     */
    public function getMssalarioescalabasecalculo()
    {
        return $this->mssalarioescalabasecalculo;
    }

    /**
     * Set msplus
     *
     * @param boolean $msplus
     * @return RhParametros
     */
    public function setMsplus($msplus)
    {
        $this->msplus = $msplus;

        return $this;
    }

    /**
     * Get msplus
     *
     * @return boolean 
     */
    public function getMsplus()
    {
        return $this->msplus;
    }

    /**
     * Set msantiguedad
     *
     * @param boolean $msantiguedad
     * @return RhParametros
     */
    public function setMsantiguedad($msantiguedad)
    {
        $this->msantiguedad = $msantiguedad;

        return $this;
    }

    /**
     * Get msantiguedad
     *
     * @return boolean 
     */
    public function getMsantiguedad()
    {
        return $this->msantiguedad;
    }

    /**
     * Set msotros
     *
     * @param boolean $msotros
     * @return RhParametros
     */
    public function setMsotros($msotros)
    {
        $this->msotros = $msotros;

        return $this;
    }

    /**
     * Get msotros
     *
     * @return boolean 
     */
    public function getMsotros()
    {
        return $this->msotros;
    }

    /**
     * Set mssalarioporcargo
     *
     * @param boolean $mssalarioporcargo
     * @return RhParametros
     */
    public function setMssalarioporcargo($mssalarioporcargo)
    {
        $this->mssalarioporcargo = $mssalarioporcargo;

        return $this;
    }

    /**
     * Get mssalarioporcargo
     *
     * @return boolean 
     */
    public function getMssalarioporcargo()
    {
        return $this->mssalarioporcargo;
    }

    /**
     * Set msalbergamiento
     *
     * @param boolean $msalbergamiento
     * @return RhParametros
     */
    public function setMsalbergamiento($msalbergamiento)
    {
        $this->msalbergamiento = $msalbergamiento;

        return $this;
    }

    /**
     * Get msalbergamiento
     *
     * @return boolean 
     */
    public function getMsalbergamiento()
    {
        return $this->msalbergamiento;
    }

    /**
     * Set mshorarioirregular
     *
     * @param boolean $mshorarioirregular
     * @return RhParametros
     */
    public function setMshorarioirregular($mshorarioirregular)
    {
        $this->mshorarioirregular = $mshorarioirregular;

        return $this;
    }

    /**
     * Get mshorarioirregular
     *
     * @return boolean 
     */
    public function getMshorarioirregular()
    {
        return $this->mshorarioirregular;
    }

    /**
     * Set mscondiciones
     *
     * @param boolean $mscondiciones
     * @return RhParametros
     */
    public function setMscondiciones($mscondiciones)
    {
        $this->mscondiciones = $mscondiciones;

        return $this;
    }

    /**
     * Get mscondiciones
     *
     * @return boolean 
     */
    public function getMscondiciones()
    {
        return $this->mscondiciones;
    }

    /**
     * Set msieterritorial
     *
     * @param boolean $msieterritorial
     * @return RhParametros
     */
    public function setMsieterritorial($msieterritorial)
    {
        $this->msieterritorial = $msieterritorial;

        return $this;
    }

    /**
     * Get msieterritorial
     *
     * @return boolean 
     */
    public function getMsieterritorial()
    {
        return $this->msieterritorial;
    }

    /**
     * Set msetsector
     *
     * @param boolean $msetsector
     * @return RhParametros
     */
    public function setMsetsector($msetsector)
    {
        $this->msetsector = $msetsector;

        return $this;
    }

    /**
     * Get msetsector
     *
     * @return boolean 
     */
    public function getMsetsector()
    {
        return $this->msetsector;
    }

    /**
     * Set agrupacion
     *
     * @param string $agrupacion
     * @return RhParametros
     */
    public function setAgrupacion($agrupacion)
    {
        $this->agrupacion = $agrupacion;

        return $this;
    }

    /**
     * Get agrupacion
     *
     * @return string 
     */
    public function getAgrupacion()
    {
        return $this->agrupacion;
    }

    /**
     * Set ajustarcentavosvacaciones
     *
     * @param boolean $ajustarcentavosvacaciones
     * @return RhParametros
     */
    public function setAjustarcentavosvacaciones($ajustarcentavosvacaciones)
    {
        $this->ajustarcentavosvacaciones = $ajustarcentavosvacaciones;

        return $this;
    }

    /**
     * Get ajustarcentavosvacaciones
     *
     * @return boolean 
     */
    public function getAjustarcentavosvacaciones()
    {
        return $this->ajustarcentavosvacaciones;
    }

    /**
     * Set tiporeloj
     *
     * @param integer $tiporeloj
     * @return RhParametros
     */
    public function setTiporeloj($tiporeloj)
    {
        $this->tiporeloj = $tiporeloj;

        return $this;
    }

    /**
     * Get tiporeloj
     *
     * @return integer 
     */
    public function getTiporeloj()
    {
        return $this->tiporeloj;
    }

    /**
     * Set claveimpunt
     *
     * @param string $claveimpunt
     * @return RhParametros
     */
    public function setClaveimpunt($claveimpunt)
    {
        $this->claveimpunt = $claveimpunt;

        return $this;
    }

    /**
     * Get claveimpunt
     *
     * @return string 
     */
    public function getClaveimpunt()
    {
        return $this->claveimpunt;
    }

    /**
     * Set titulo2doformatonominasalario
     *
     * @param string $titulo2doformatonominasalario
     * @return RhParametros
     */
    public function setTitulo2doformatonominasalario($titulo2doformatonominasalario)
    {
        $this->titulo2doformatonominasalario = $titulo2doformatonominasalario;

        return $this;
    }

    /**
     * Get titulo2doformatonominasalario
     *
     * @return string 
     */
    public function getTitulo2doformatonominasalario()
    {
        return $this->titulo2doformatonominasalario;
    }

    /**
     * Set titulo2doformatonominavacaciones
     *
     * @param string $titulo2doformatonominavacaciones
     * @return RhParametros
     */
    public function setTitulo2doformatonominavacaciones($titulo2doformatonominavacaciones)
    {
        $this->titulo2doformatonominavacaciones = $titulo2doformatonominavacaciones;

        return $this;
    }

    /**
     * Get titulo2doformatonominavacaciones
     *
     * @return string 
     */
    public function getTitulo2doformatonominavacaciones()
    {
        return $this->titulo2doformatonominavacaciones;
    }

    /**
     * Set titulo2doformatonominasubsidios
     *
     * @param string $titulo2doformatonominasubsidios
     * @return RhParametros
     */
    public function setTitulo2doformatonominasubsidios($titulo2doformatonominasubsidios)
    {
        $this->titulo2doformatonominasubsidios = $titulo2doformatonominasubsidios;

        return $this;
    }

    /**
     * Get titulo2doformatonominasubsidios
     *
     * @return string 
     */
    public function getTitulo2doformatonominasubsidios()
    {
        return $this->titulo2doformatonominasubsidios;
    }

    /**
     * Set agenciaEmpleadora
     *
     * @param boolean $agenciaEmpleadora
     * @return RhParametros
     */
    public function setAgenciaEmpleadora($agenciaEmpleadora)
    {
        $this->agenciaEmpleadora = $agenciaEmpleadora;

        return $this;
    }

    /**
     * Get agenciaEmpleadora
     *
     * @return boolean 
     */
    public function getAgenciaEmpleadora()
    {
        return $this->agenciaEmpleadora;
    }

    /**
     * Set coeficientehorasextras
     *
     * @param integer $coeficientehorasextras
     * @return RhParametros
     */
    public function setCoeficientehorasextras($coeficientehorasextras)
    {
        $this->coeficientehorasextras = $coeficientehorasextras;

        return $this;
    }

    /**
     * Get coeficientehorasextras
     *
     * @return integer 
     */
    public function getCoeficientehorasextras()
    {
        return $this->coeficientehorasextras;
    }

    /**
     * Set idAlmacenFactura
     *
     * @param string $idAlmacenFactura
     * @return RhParametros
     */
    public function setIdAlmacenFactura($idAlmacenFactura)
    {
        $this->idAlmacenFactura = $idAlmacenFactura;

        return $this;
    }

    /**
     * Get idAlmacenFactura
     *
     * @return string 
     */
    public function getIdAlmacenFactura()
    {
        return $this->idAlmacenFactura;
    }

    /**
     * Set idClasifacturaSalario
     *
     * @param string $idClasifacturaSalario
     * @return RhParametros
     */
    public function setIdClasifacturaSalario($idClasifacturaSalario)
    {
        $this->idClasifacturaSalario = $idClasifacturaSalario;

        return $this;
    }

    /**
     * Get idClasifacturaSalario
     *
     * @return string 
     */
    public function getIdClasifacturaSalario()
    {
        return $this->idClasifacturaSalario;
    }

    /**
     * Set idClasifacturaIndemnizacion
     *
     * @param string $idClasifacturaIndemnizacion
     * @return RhParametros
     */
    public function setIdClasifacturaIndemnizacion($idClasifacturaIndemnizacion)
    {
        $this->idClasifacturaIndemnizacion = $idClasifacturaIndemnizacion;

        return $this;
    }

    /**
     * Get idClasifacturaIndemnizacion
     *
     * @return string 
     */
    public function getIdClasifacturaIndemnizacion()
    {
        return $this->idClasifacturaIndemnizacion;
    }

    /**
     * Set monedaFactura
     *
     * @param string $monedaFactura
     * @return RhParametros
     */
    public function setMonedaFactura($monedaFactura)
    {
        $this->monedaFactura = $monedaFactura;

        return $this;
    }

    /**
     * Get monedaFactura
     *
     * @return string 
     */
    public function getMonedaFactura()
    {
        return $this->monedaFactura;
    }

    /**
     * Set idDeduccionPagoindebido
     *
     * @param string $idDeduccionPagoindebido
     * @return RhParametros
     */
    public function setIdDeduccionPagoindebido($idDeduccionPagoindebido)
    {
        $this->idDeduccionPagoindebido = $idDeduccionPagoindebido;

        return $this;
    }

    /**
     * Get idDeduccionPagoindebido
     *
     * @return string 
     */
    public function getIdDeduccionPagoindebido()
    {
        return $this->idDeduccionPagoindebido;
    }

    /**
     * Set idClavereloj
     *
     * @param string $idClavereloj
     * @return RhParametros
     */
    public function setIdClavereloj($idClavereloj)
    {
        $this->idClavereloj = $idClavereloj;

        return $this;
    }

    /**
     * Get idClavereloj
     *
     * @return string 
     */
    public function getIdClavereloj()
    {
        return $this->idClavereloj;
    }

    /**
     * Set horarioAlmuerzo
     *
     * @param boolean $horarioAlmuerzo
     * @return RhParametros
     */
    public function setHorarioAlmuerzo($horarioAlmuerzo)
    {
        $this->horarioAlmuerzo = $horarioAlmuerzo;

        return $this;
    }

    /**
     * Get horarioAlmuerzo
     *
     * @return boolean 
     */
    public function getHorarioAlmuerzo()
    {
        return $this->horarioAlmuerzo;
    }

    /**
     * Set mssalariopagoactual
     *
     * @param integer $mssalariopagoactual
     * @return RhParametros
     */
    public function setMssalariopagoactual($mssalariopagoactual)
    {
        $this->mssalariopagoactual = $mssalariopagoactual;

        return $this;
    }

    /**
     * Get mssalariopagoactual
     *
     * @return integer 
     */
    public function getMssalariopagoactual()
    {
        return $this->mssalariopagoactual;
    }

    /**
     * Set idClavedecretoLey91
     *
     * @param string $idClavedecretoLey91
     * @return RhParametros
     */
    public function setIdClavedecretoLey91($idClavedecretoLey91)
    {
        $this->idClavedecretoLey91 = $idClavedecretoLey91;

        return $this;
    }

    /**
     * Get idClavedecretoLey91
     *
     * @return string 
     */
    public function getIdClavedecretoLey91()
    {
        return $this->idClavedecretoLey91;
    }

    /**
     * Set perfeccionamientosolodevengado
     *
     * @param boolean $perfeccionamientosolodevengado
     * @return RhParametros
     */
    public function setPerfeccionamientosolodevengado($perfeccionamientosolodevengado)
    {
        $this->perfeccionamientosolodevengado = $perfeccionamientosolodevengado;

        return $this;
    }

    /**
     * Get perfeccionamientosolodevengado
     *
     * @return boolean 
     */
    public function getPerfeccionamientosolodevengado()
    {
        return $this->perfeccionamientosolodevengado;
    }

    /**
     * Set msidoneidadfijo
     *
     * @param boolean $msidoneidadfijo
     * @return RhParametros
     */
    public function setMsidoneidadfijo($msidoneidadfijo)
    {
        $this->msidoneidadfijo = $msidoneidadfijo;

        return $this;
    }

    /**
     * Get msidoneidadfijo
     *
     * @return boolean 
     */
    public function getMsidoneidadfijo()
    {
        return $this->msidoneidadfijo;
    }

    /**
     * Set msidoneidadmovil
     *
     * @param boolean $msidoneidadmovil
     * @return RhParametros
     */
    public function setMsidoneidadmovil($msidoneidadmovil)
    {
        $this->msidoneidadmovil = $msidoneidadmovil;

        return $this;
    }

    /**
     * Get msidoneidadmovil
     *
     * @return boolean 
     */
    public function getMsidoneidadmovil()
    {
        return $this->msidoneidadmovil;
    }

    /**
     * Set afectaEstimulacionAusencias
     *
     * @param boolean $afectaEstimulacionAusencias
     * @return RhParametros
     */
    public function setAfectaEstimulacionAusencias($afectaEstimulacionAusencias)
    {
        $this->afectaEstimulacionAusencias = $afectaEstimulacionAusencias;

        return $this;
    }

    /**
     * Get afectaEstimulacionAusencias
     *
     * @return boolean 
     */
    public function getAfectaEstimulacionAusencias()
    {
        return $this->afectaEstimulacionAusencias;
    }

    /**
     * Set pagoInterrupTarifaDiaria
     *
     * @param boolean $pagoInterrupTarifaDiaria
     * @return RhParametros
     */
    public function setPagoInterrupTarifaDiaria($pagoInterrupTarifaDiaria)
    {
        $this->pagoInterrupTarifaDiaria = $pagoInterrupTarifaDiaria;

        return $this;
    }

    /**
     * Get pagoInterrupTarifaDiaria
     *
     * @return boolean 
     */
    public function getPagoInterrupTarifaDiaria()
    {
        return $this->pagoInterrupTarifaDiaria;
    }

    /**
     * Set puertoSerie
     *
     * @param integer $puertoSerie
     * @return RhParametros
     */
    public function setPuertoSerie($puertoSerie)
    {
        $this->puertoSerie = $puertoSerie;

        return $this;
    }

    /**
     * Get puertoSerie
     *
     * @return integer 
     */
    public function getPuertoSerie()
    {
        return $this->puertoSerie;
    }

    /**
     * Set totalNodos
     *
     * @param integer $totalNodos
     * @return RhParametros
     */
    public function setTotalNodos($totalNodos)
    {
        $this->totalNodos = $totalNodos;

        return $this;
    }

    /**
     * Get totalNodos
     *
     * @return integer 
     */
    public function getTotalNodos()
    {
        return $this->totalNodos;
    }

    /**
     * Set tiempoEspera
     *
     * @param integer $tiempoEspera
     * @return RhParametros
     */
    public function setTiempoEspera($tiempoEspera)
    {
        $this->tiempoEspera = $tiempoEspera;

        return $this;
    }

    /**
     * Get tiempoEspera
     *
     * @return integer 
     */
    public function getTiempoEspera()
    {
        return $this->tiempoEspera;
    }

    /**
     * Set msPagoNominillas
     *
     * @param boolean $msPagoNominillas
     * @return RhParametros
     */
    public function setMsPagoNominillas($msPagoNominillas)
    {
        $this->msPagoNominillas = $msPagoNominillas;

        return $this;
    }

    /**
     * Get msPagoNominillas
     *
     * @return boolean 
     */
    public function getMsPagoNominillas()
    {
        return $this->msPagoNominillas;
    }

    /**
     * Set tarifaHrsExtrasSalarioBasico
     *
     * @param boolean $tarifaHrsExtrasSalarioBasico
     * @return RhParametros
     */
    public function setTarifaHrsExtrasSalarioBasico($tarifaHrsExtrasSalarioBasico)
    {
        $this->tarifaHrsExtrasSalarioBasico = $tarifaHrsExtrasSalarioBasico;

        return $this;
    }

    /**
     * Get tarifaHrsExtrasSalarioBasico
     *
     * @return boolean 
     */
    public function getTarifaHrsExtrasSalarioBasico()
    {
        return $this->tarifaHrsExtrasSalarioBasico;
    }

    /**
     * Set mssalarioescalabasecalculo1
     *
     * @param boolean $mssalarioescalabasecalculo1
     * @return RhParametros
     */
    public function setMssalarioescalabasecalculo1($mssalarioescalabasecalculo1)
    {
        $this->mssalarioescalabasecalculo1 = $mssalarioescalabasecalculo1;

        return $this;
    }

    /**
     * Get mssalarioescalabasecalculo1
     *
     * @return boolean 
     */
    public function getMssalarioescalabasecalculo1()
    {
        return $this->mssalarioescalabasecalculo1;
    }

    /**
     * Set msplus1
     *
     * @param boolean $msplus1
     * @return RhParametros
     */
    public function setMsplus1($msplus1)
    {
        $this->msplus1 = $msplus1;

        return $this;
    }

    /**
     * Get msplus1
     *
     * @return boolean 
     */
    public function getMsplus1()
    {
        return $this->msplus1;
    }

    /**
     * Set msantiguedad1
     *
     * @param boolean $msantiguedad1
     * @return RhParametros
     */
    public function setMsantiguedad1($msantiguedad1)
    {
        $this->msantiguedad1 = $msantiguedad1;

        return $this;
    }

    /**
     * Get msantiguedad1
     *
     * @return boolean 
     */
    public function getMsantiguedad1()
    {
        return $this->msantiguedad1;
    }

    /**
     * Set msotros1
     *
     * @param boolean $msotros1
     * @return RhParametros
     */
    public function setMsotros1($msotros1)
    {
        $this->msotros1 = $msotros1;

        return $this;
    }

    /**
     * Get msotros1
     *
     * @return boolean 
     */
    public function getMsotros1()
    {
        return $this->msotros1;
    }

    /**
     * Set mssalarioporcargo1
     *
     * @param boolean $mssalarioporcargo1
     * @return RhParametros
     */
    public function setMssalarioporcargo1($mssalarioporcargo1)
    {
        $this->mssalarioporcargo1 = $mssalarioporcargo1;

        return $this;
    }

    /**
     * Get mssalarioporcargo1
     *
     * @return boolean 
     */
    public function getMssalarioporcargo1()
    {
        return $this->mssalarioporcargo1;
    }

    /**
     * Set msalbergamiento1
     *
     * @param boolean $msalbergamiento1
     * @return RhParametros
     */
    public function setMsalbergamiento1($msalbergamiento1)
    {
        $this->msalbergamiento1 = $msalbergamiento1;

        return $this;
    }

    /**
     * Get msalbergamiento1
     *
     * @return boolean 
     */
    public function getMsalbergamiento1()
    {
        return $this->msalbergamiento1;
    }

    /**
     * Set mshorarioirregular1
     *
     * @param boolean $mshorarioirregular1
     * @return RhParametros
     */
    public function setMshorarioirregular1($mshorarioirregular1)
    {
        $this->mshorarioirregular1 = $mshorarioirregular1;

        return $this;
    }

    /**
     * Get mshorarioirregular1
     *
     * @return boolean 
     */
    public function getMshorarioirregular1()
    {
        return $this->mshorarioirregular1;
    }

    /**
     * Set mscondiciones1
     *
     * @param boolean $mscondiciones1
     * @return RhParametros
     */
    public function setMscondiciones1($mscondiciones1)
    {
        $this->mscondiciones1 = $mscondiciones1;

        return $this;
    }

    /**
     * Get mscondiciones1
     *
     * @return boolean 
     */
    public function getMscondiciones1()
    {
        return $this->mscondiciones1;
    }

    /**
     * Set msieterritorial1
     *
     * @param boolean $msieterritorial1
     * @return RhParametros
     */
    public function setMsieterritorial1($msieterritorial1)
    {
        $this->msieterritorial1 = $msieterritorial1;

        return $this;
    }

    /**
     * Get msieterritorial1
     *
     * @return boolean 
     */
    public function getMsieterritorial1()
    {
        return $this->msieterritorial1;
    }

    /**
     * Set msetsector1
     *
     * @param boolean $msetsector1
     * @return RhParametros
     */
    public function setMsetsector1($msetsector1)
    {
        $this->msetsector1 = $msetsector1;

        return $this;
    }

    /**
     * Get msetsector1
     *
     * @return boolean 
     */
    public function getMsetsector1()
    {
        return $this->msetsector1;
    }

    /**
     * Set msidoneidadfijo1
     *
     * @param boolean $msidoneidadfijo1
     * @return RhParametros
     */
    public function setMsidoneidadfijo1($msidoneidadfijo1)
    {
        $this->msidoneidadfijo1 = $msidoneidadfijo1;

        return $this;
    }

    /**
     * Get msidoneidadfijo1
     *
     * @return boolean 
     */
    public function getMsidoneidadfijo1()
    {
        return $this->msidoneidadfijo1;
    }

    /**
     * Set msidoneidadmovil1
     *
     * @param boolean $msidoneidadmovil1
     * @return RhParametros
     */
    public function setMsidoneidadmovil1($msidoneidadmovil1)
    {
        $this->msidoneidadmovil1 = $msidoneidadmovil1;

        return $this;
    }

    /**
     * Get msidoneidadmovil1
     *
     * @return boolean 
     */
    public function getMsidoneidadmovil1()
    {
        return $this->msidoneidadmovil1;
    }

    /**
     * Set sncEaPrPromSubs
     *
     * @param boolean $sncEaPrPromSubs
     * @return RhParametros
     */
    public function setSncEaPrPromSubs($sncEaPrPromSubs)
    {
        $this->sncEaPrPromSubs = $sncEaPrPromSubs;

        return $this;
    }

    /**
     * Get sncEaPrPromSubs
     *
     * @return boolean 
     */
    public function getSncEaPrPromSubs()
    {
        return $this->sncEaPrPromSubs;
    }

    /**
     * Set msano
     *
     * @param integer $msano
     * @return RhParametros
     */
    public function setMsano($msano)
    {
        $this->msano = $msano;

        return $this;
    }

    /**
     * Get msano
     *
     * @return integer 
     */
    public function getMsano()
    {
        return $this->msano;
    }

    /**
     * Set msmes
     *
     * @param integer $msmes
     * @return RhParametros
     */
    public function setMsmes($msmes)
    {
        $this->msmes = $msmes;

        return $this;
    }

    /**
     * Get msmes
     *
     * @return integer 
     */
    public function getMsmes()
    {
        return $this->msmes;
    }

    /**
     * Set tipoHrsExtrasReloj
     *
     * @param integer $tipoHrsExtrasReloj
     * @return RhParametros
     */
    public function setTipoHrsExtrasReloj($tipoHrsExtrasReloj)
    {
        $this->tipoHrsExtrasReloj = $tipoHrsExtrasReloj;

        return $this;
    }

    /**
     * Get tipoHrsExtrasReloj
     *
     * @return integer 
     */
    public function getTipoHrsExtrasReloj()
    {
        return $this->tipoHrsExtrasReloj;
    }

    /**
     * Set cantMinHrsExtrasReloj
     *
     * @param integer $cantMinHrsExtrasReloj
     * @return RhParametros
     */
    public function setCantMinHrsExtrasReloj($cantMinHrsExtrasReloj)
    {
        $this->cantMinHrsExtrasReloj = $cantMinHrsExtrasReloj;

        return $this;
    }

    /**
     * Get cantMinHrsExtrasReloj
     *
     * @return integer 
     */
    public function getCantMinHrsExtrasReloj()
    {
        return $this->cantMinHrsExtrasReloj;
    }

    /**
     * Set mscoeficientecondevengado
     *
     * @param boolean $mscoeficientecondevengado
     * @return RhParametros
     */
    public function setMscoeficientecondevengado($mscoeficientecondevengado)
    {
        $this->mscoeficientecondevengado = $mscoeficientecondevengado;

        return $this;
    }

    /**
     * Get mscoeficientecondevengado
     *
     * @return boolean 
     */
    public function getMscoeficientecondevengado()
    {
        return $this->mscoeficientecondevengado;
    }

    /**
     * Set mscoeficientetipopago
     *
     * @param integer $mscoeficientetipopago
     * @return RhParametros
     */
    public function setMscoeficientetipopago($mscoeficientetipopago)
    {
        $this->mscoeficientetipopago = $mscoeficientetipopago;

        return $this;
    }

    /**
     * Get mscoeficientetipopago
     *
     * @return integer 
     */
    public function getMscoeficientetipopago()
    {
        return $this->mscoeficientetipopago;
    }

    /**
     * Set mscoeficienteporciento
     *
     * @param integer $mscoeficienteporciento
     * @return RhParametros
     */
    public function setMscoeficienteporciento($mscoeficienteporciento)
    {
        $this->mscoeficienteporciento = $mscoeficienteporciento;

        return $this;
    }

    /**
     * Get mscoeficienteporciento
     *
     * @return integer 
     */
    public function getMscoeficienteporciento()
    {
        return $this->mscoeficienteporciento;
    }

    /**
     * Set estimulacionPuntos
     *
     * @param boolean $estimulacionPuntos
     * @return RhParametros
     */
    public function setEstimulacionPuntos($estimulacionPuntos)
    {
        $this->estimulacionPuntos = $estimulacionPuntos;

        return $this;
    }

    /**
     * Get estimulacionPuntos
     *
     * @return boolean 
     */
    public function getEstimulacionPuntos()
    {
        return $this->estimulacionPuntos;
    }

    /**
     * Set shopconvertindex
     *
     * @param integer $shopconvertindex
     * @return RhParametros
     */
    public function setShopconvertindex($shopconvertindex)
    {
        $this->shopconvertindex = $shopconvertindex;

        return $this;
    }

    /**
     * Get shopconvertindex
     *
     * @return integer 
     */
    public function getShopconvertindex()
    {
        return $this->shopconvertindex;
    }

    /**
     * Set cucpromindex
     *
     * @param integer $cucpromindex
     * @return RhParametros
     */
    public function setCucpromindex($cucpromindex)
    {
        $this->cucpromindex = $cucpromindex;

        return $this;
    }

    /**
     * Get cucpromindex
     *
     * @return integer 
     */
    public function getCucpromindex()
    {
        return $this->cucpromindex;
    }

    /**
     * Set estimulacionPuntosSalarioMax
     *
     * @param integer $estimulacionPuntosSalarioMax
     * @return RhParametros
     */
    public function setEstimulacionPuntosSalarioMax($estimulacionPuntosSalarioMax)
    {
        $this->estimulacionPuntosSalarioMax = $estimulacionPuntosSalarioMax;

        return $this;
    }

    /**
     * Get estimulacionPuntosSalarioMax
     *
     * @return integer 
     */
    public function getEstimulacionPuntosSalarioMax()
    {
        return $this->estimulacionPuntosSalarioMax;
    }

    /**
     * Set estimulacionPuntosCuantiaMin
     *
     * @param integer $estimulacionPuntosCuantiaMin
     * @return RhParametros
     */
    public function setEstimulacionPuntosCuantiaMin($estimulacionPuntosCuantiaMin)
    {
        $this->estimulacionPuntosCuantiaMin = $estimulacionPuntosCuantiaMin;

        return $this;
    }

    /**
     * Get estimulacionPuntosCuantiaMin
     *
     * @return integer 
     */
    public function getEstimulacionPuntosCuantiaMin()
    {
        return $this->estimulacionPuntosCuantiaMin;
    }

    /**
     * Set pagoFeriadosSalarioPromedio
     *
     * @param boolean $pagoFeriadosSalarioPromedio
     * @return RhParametros
     */
    public function setPagoFeriadosSalarioPromedio($pagoFeriadosSalarioPromedio)
    {
        $this->pagoFeriadosSalarioPromedio = $pagoFeriadosSalarioPromedio;

        return $this;
    }

    /**
     * Get pagoFeriadosSalarioPromedio
     *
     * @return boolean 
     */
    public function getPagoFeriadosSalarioPromedio()
    {
        return $this->pagoFeriadosSalarioPromedio;
    }

    /**
     * Set aplicarRetencionesVacacadelantPagomensual
     *
     * @param boolean $aplicarRetencionesVacacadelantPagomensual
     * @return RhParametros
     */
    public function setAplicarRetencionesVacacadelantPagomensual($aplicarRetencionesVacacadelantPagomensual)
    {
        $this->aplicarRetencionesVacacadelantPagomensual = $aplicarRetencionesVacacadelantPagomensual;

        return $this;
    }

    /**
     * Get aplicarRetencionesVacacadelantPagomensual
     *
     * @return boolean 
     */
    public function getAplicarRetencionesVacacadelantPagomensual()
    {
        return $this->aplicarRetencionesVacacadelantPagomensual;
    }

    /**
     * Set pagoAdicional
     *
     * @param boolean $pagoAdicional
     * @return RhParametros
     */
    public function setPagoAdicional($pagoAdicional)
    {
        $this->pagoAdicional = $pagoAdicional;

        return $this;
    }

    /**
     * Get pagoAdicional
     *
     * @return boolean 
     */
    public function getPagoAdicional()
    {
        return $this->pagoAdicional;
    }

    /**
     * Set pagoComedorDesglose
     *
     * @param boolean $pagoComedorDesglose
     * @return RhParametros
     */
    public function setPagoComedorDesglose($pagoComedorDesglose)
    {
        $this->pagoComedorDesglose = $pagoComedorDesglose;

        return $this;
    }

    /**
     * Get pagoComedorDesglose
     *
     * @return boolean 
     */
    public function getPagoComedorDesglose()
    {
        return $this->pagoComedorDesglose;
    }

    /**
     * Set pagoComedorBanco
     *
     * @param boolean $pagoComedorBanco
     * @return RhParametros
     */
    public function setPagoComedorBanco($pagoComedorBanco)
    {
        $this->pagoComedorBanco = $pagoComedorBanco;

        return $this;
    }

    /**
     * Get pagoComedorBanco
     *
     * @return boolean 
     */
    public function getPagoComedorBanco()
    {
        return $this->pagoComedorBanco;
    }

    /**
     * Set tcPeople
     *
     * @param integer $tcPeople
     * @return RhParametros
     */
    public function setTcPeople($tcPeople)
    {
        $this->tcPeople = $tcPeople;

        return $this;
    }

    /**
     * Get tcPeople
     *
     * @return integer 
     */
    public function getTcPeople()
    {
        return $this->tcPeople;
    }

    /**
     * Set porcientosegurosocialplazolargo
     *
     * @param string $porcientosegurosocialplazolargo
     * @return RhParametros
     */
    public function setPorcientosegurosocialplazolargo($porcientosegurosocialplazolargo)
    {
        $this->porcientosegurosocialplazolargo = $porcientosegurosocialplazolargo;

        return $this;
    }

    /**
     * Get porcientosegurosocialplazolargo
     *
     * @return string 
     */
    public function getPorcientosegurosocialplazolargo()
    {
        return $this->porcientosegurosocialplazolargo;
    }

    /**
     * Set porcientosegurosocialplazocorto
     *
     * @param string $porcientosegurosocialplazocorto
     * @return RhParametros
     */
    public function setPorcientosegurosocialplazocorto($porcientosegurosocialplazocorto)
    {
        $this->porcientosegurosocialplazocorto = $porcientosegurosocialplazocorto;

        return $this;
    }

    /**
     * Get porcientosegurosocialplazocorto
     *
     * @return string 
     */
    public function getPorcientosegurosocialplazocorto()
    {
        return $this->porcientosegurosocialplazocorto;
    }

    /**
     * Set porcientoutilizafuerzatrabajo
     *
     * @param string $porcientoutilizafuerzatrabajo
     * @return RhParametros
     */
    public function setPorcientoutilizafuerzatrabajo($porcientoutilizafuerzatrabajo)
    {
        $this->porcientoutilizafuerzatrabajo = $porcientoutilizafuerzatrabajo;

        return $this;
    }

    /**
     * Get porcientoutilizafuerzatrabajo
     *
     * @return string 
     */
    public function getPorcientoutilizafuerzatrabajo()
    {
        return $this->porcientoutilizafuerzatrabajo;
    }

    /**
     * Set otrospagosconreporte
     *
     * @param boolean $otrospagosconreporte
     * @return RhParametros
     */
    public function setOtrospagosconreporte($otrospagosconreporte)
    {
        $this->otrospagosconreporte = $otrospagosconreporte;

        return $this;
    }

    /**
     * Get otrospagosconreporte
     *
     * @return boolean 
     */
    public function getOtrospagosconreporte()
    {
        return $this->otrospagosconreporte;
    }

    /**
     * Set pathEnvio
     *
     * @param string $pathEnvio
     * @return RhParametros
     */
    public function setPathEnvio($pathEnvio)
    {
        $this->pathEnvio = $pathEnvio;

        return $this;
    }

    /**
     * Get pathEnvio
     *
     * @return string 
     */
    public function getPathEnvio()
    {
        return $this->pathEnvio;
    }

    /**
     * Set pathRecibo
     *
     * @param string $pathRecibo
     * @return RhParametros
     */
    public function setPathRecibo($pathRecibo)
    {
        $this->pathRecibo = $pathRecibo;

        return $this;
    }

    /**
     * Get pathRecibo
     *
     * @return string 
     */
    public function getPathRecibo()
    {
        return $this->pathRecibo;
    }

    /**
     * Set sucBancaria
     *
     * @param string $sucBancaria
     * @return RhParametros
     */
    public function setSucBancaria($sucBancaria)
    {
        $this->sucBancaria = $sucBancaria;

        return $this;
    }

    /**
     * Get sucBancaria
     *
     * @return string 
     */
    public function getSucBancaria()
    {
        return $this->sucBancaria;
    }

    /**
     * Set centroPagoBpa
     *
     * @param string $centroPagoBpa
     * @return RhParametros
     */
    public function setCentroPagoBpa($centroPagoBpa)
    {
        $this->centroPagoBpa = $centroPagoBpa;

        return $this;
    }

    /**
     * Get centroPagoBpa
     *
     * @return string 
     */
    public function getCentroPagoBpa()
    {
        return $this->centroPagoBpa;
    }
}
