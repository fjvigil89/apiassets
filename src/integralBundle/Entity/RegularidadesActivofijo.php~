<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegularidadesActivofijo
 *
 * @ORM\Table(name="Regularidades_ActivoFijo", uniqueConstraints={@ORM\UniqueConstraint(name="Pk1_AFij", columns={"Items"})}, indexes={@ORM\Index(name="Pk_AFij", columns={"Especificacion_Activo", "Actividad", "Movimiento", "Gpo_CCosto"})})
 * @ORM\Entity
 */
class RegularidadesActivofijo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Subcontrol", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $subcontrol;

    /**
     * @var string
     *
     * @ORM\Column(name="Especificacion_Activo", type="string", length=15, nullable=false)
     */
    private $especificacionActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Actividad", type="string", length=1, nullable=false)
     */
    private $actividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Movimiento", type="string", length=4, nullable=false)
     */
    private $movimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Gpo_CCosto", type="string", length=10, nullable=false)
     */
    private $gpoCcosto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Operacion", type="boolean", nullable=false)
     */
    private $operacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_SubCta", type="smallint", nullable=false)
     */
    private $tipoSubcta;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta", type="string", length=20, nullable=false)
     */
    private $subcta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Analisis", type="smallint", nullable=false)
     */
    private $tipoAnalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis", type="string", length=20, nullable=false)
     */
    private $analisis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Subanalisis", type="smallint", nullable=false)
     */
    private $tipoSubanalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="SubAnalisis", type="string", length=20, nullable=false)
     */
    private $subanalisis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Epigrafe", type="smallint", nullable=false)
     */
    private $tipoEpigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe", type="string", length=20, nullable=false)
     */
    private $epigrafe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Partida", type="smallint", nullable=false)
     */
    private $tipoPartida;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida", type="string", length=20, nullable=false)
     */
    private $partida;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="integer", nullable=false)
     */
    private $items;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field1", type="smallint", nullable=false)
     */
    private $field1;

    /**
     * @var string
     *
     * @ORM\Column(name="Op1", type="string", length=1, nullable=false)
     */
    private $op1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field2", type="smallint", nullable=false)
     */
    private $field2;

    /**
     * @var string
     *
     * @ORM\Column(name="Op2", type="string", length=1, nullable=false)
     */
    private $op2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field3", type="smallint", nullable=false)
     */
    private $field3;

    /**
     * @var string
     *
     * @ORM\Column(name="Op3", type="string", length=1, nullable=false)
     */
    private $op3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field4", type="smallint", nullable=false)
     */
    private $field4;

    /**
     * @var string
     *
     * @ORM\Column(name="Op4", type="string", length=1, nullable=false)
     */
    private $op4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Field5", type="smallint", nullable=false)
     */
    private $field5;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Depreciac_Mensual", type="boolean", nullable=false)
     */
    private $depreciacMensual;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Imp_AlquilerVenta", type="boolean", nullable=false)
     */
    private $impAlquilerventa;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Copiar", type="boolean", nullable=false)
     */
    private $copiar;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Factura", type="string", length=10, nullable=false)
     */
    private $idClasifFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="Especificacion_Activo_NEW", type="string", length=15, nullable=false)
     */
    private $especificacionActivoNew;



    /**
     * Get subcontrol
     *
     * @return string 
     */
    public function getSubcontrol()
    {
        return $this->subcontrol;
    }

    /**
     * Set especificacionActivo
     *
     * @param string $especificacionActivo
     * @return RegularidadesActivofijo
     */
    public function setEspecificacionActivo($especificacionActivo)
    {
        $this->especificacionActivo = $especificacionActivo;

        return $this;
    }

    /**
     * Get especificacionActivo
     *
     * @return string 
     */
    public function getEspecificacionActivo()
    {
        return $this->especificacionActivo;
    }

    /**
     * Set actividad
     *
     * @param string $actividad
     * @return RegularidadesActivofijo
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set movimiento
     *
     * @param string $movimiento
     * @return RegularidadesActivofijo
     */
    public function setMovimiento($movimiento)
    {
        $this->movimiento = $movimiento;

        return $this;
    }

    /**
     * Get movimiento
     *
     * @return string 
     */
    public function getMovimiento()
    {
        return $this->movimiento;
    }

    /**
     * Set gpoCcosto
     *
     * @param string $gpoCcosto
     * @return RegularidadesActivofijo
     */
    public function setGpoCcosto($gpoCcosto)
    {
        $this->gpoCcosto = $gpoCcosto;

        return $this;
    }

    /**
     * Get gpoCcosto
     *
     * @return string 
     */
    public function getGpoCcosto()
    {
        return $this->gpoCcosto;
    }

    /**
     * Set operacion
     *
     * @param boolean $operacion
     * @return RegularidadesActivofijo
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

    /**
     * Get operacion
     *
     * @return boolean 
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return RegularidadesActivofijo
     */
    public function setCta($cta)
    {
        $this->cta = $cta;

        return $this;
    }

    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set tipoSubcta
     *
     * @param integer $tipoSubcta
     * @return RegularidadesActivofijo
     */
    public function setTipoSubcta($tipoSubcta)
    {
        $this->tipoSubcta = $tipoSubcta;

        return $this;
    }

    /**
     * Get tipoSubcta
     *
     * @return integer 
     */
    public function getTipoSubcta()
    {
        return $this->tipoSubcta;
    }

    /**
     * Set subcta
     *
     * @param string $subcta
     * @return RegularidadesActivofijo
     */
    public function setSubcta($subcta)
    {
        $this->subcta = $subcta;

        return $this;
    }

    /**
     * Get subcta
     *
     * @return string 
     */
    public function getSubcta()
    {
        return $this->subcta;
    }

    /**
     * Set tipoAnalisis
     *
     * @param integer $tipoAnalisis
     * @return RegularidadesActivofijo
     */
    public function setTipoAnalisis($tipoAnalisis)
    {
        $this->tipoAnalisis = $tipoAnalisis;

        return $this;
    }

    /**
     * Get tipoAnalisis
     *
     * @return integer 
     */
    public function getTipoAnalisis()
    {
        return $this->tipoAnalisis;
    }

    /**
     * Set analisis
     *
     * @param string $analisis
     * @return RegularidadesActivofijo
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * Get analisis
     *
     * @return string 
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }

    /**
     * Set tipoSubanalisis
     *
     * @param integer $tipoSubanalisis
     * @return RegularidadesActivofijo
     */
    public function setTipoSubanalisis($tipoSubanalisis)
    {
        $this->tipoSubanalisis = $tipoSubanalisis;

        return $this;
    }

    /**
     * Get tipoSubanalisis
     *
     * @return integer 
     */
    public function getTipoSubanalisis()
    {
        return $this->tipoSubanalisis;
    }

    /**
     * Set subanalisis
     *
     * @param string $subanalisis
     * @return RegularidadesActivofijo
     */
    public function setSubanalisis($subanalisis)
    {
        $this->subanalisis = $subanalisis;

        return $this;
    }

    /**
     * Get subanalisis
     *
     * @return string 
     */
    public function getSubanalisis()
    {
        return $this->subanalisis;
    }

    /**
     * Set tipoEpigrafe
     *
     * @param integer $tipoEpigrafe
     * @return RegularidadesActivofijo
     */
    public function setTipoEpigrafe($tipoEpigrafe)
    {
        $this->tipoEpigrafe = $tipoEpigrafe;

        return $this;
    }

    /**
     * Get tipoEpigrafe
     *
     * @return integer 
     */
    public function getTipoEpigrafe()
    {
        return $this->tipoEpigrafe;
    }

    /**
     * Set epigrafe
     *
     * @param string $epigrafe
     * @return RegularidadesActivofijo
     */
    public function setEpigrafe($epigrafe)
    {
        $this->epigrafe = $epigrafe;

        return $this;
    }

    /**
     * Get epigrafe
     *
     * @return string 
     */
    public function getEpigrafe()
    {
        return $this->epigrafe;
    }

    /**
     * Set tipoPartida
     *
     * @param integer $tipoPartida
     * @return RegularidadesActivofijo
     */
    public function setTipoPartida($tipoPartida)
    {
        $this->tipoPartida = $tipoPartida;

        return $this;
    }

    /**
     * Get tipoPartida
     *
     * @return integer 
     */
    public function getTipoPartida()
    {
        return $this->tipoPartida;
    }

    /**
     * Set partida
     *
     * @param string $partida
     * @return RegularidadesActivofijo
     */
    public function setPartida($partida)
    {
        $this->partida = $partida;

        return $this;
    }

    /**
     * Get partida
     *
     * @return string 
     */
    public function getPartida()
    {
        return $this->partida;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return RegularidadesActivofijo
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items
     *
     * @return integer 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set field1
     *
     * @param integer $field1
     * @return RegularidadesActivofijo
     */
    public function setField1($field1)
    {
        $this->field1 = $field1;

        return $this;
    }

    /**
     * Get field1
     *
     * @return integer 
     */
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Set op1
     *
     * @param string $op1
     * @return RegularidadesActivofijo
     */
    public function setOp1($op1)
    {
        $this->op1 = $op1;

        return $this;
    }

    /**
     * Get op1
     *
     * @return string 
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * Set field2
     *
     * @param integer $field2
     * @return RegularidadesActivofijo
     */
    public function setField2($field2)
    {
        $this->field2 = $field2;

        return $this;
    }

    /**
     * Get field2
     *
     * @return integer 
     */
    public function getField2()
    {
        return $this->field2;
    }

    /**
     * Set op2
     *
     * @param string $op2
     * @return RegularidadesActivofijo
     */
    public function setOp2($op2)
    {
        $this->op2 = $op2;

        return $this;
    }

    /**
     * Get op2
     *
     * @return string 
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * Set field3
     *
     * @param integer $field3
     * @return RegularidadesActivofijo
     */
    public function setField3($field3)
    {
        $this->field3 = $field3;

        return $this;
    }

    /**
     * Get field3
     *
     * @return integer 
     */
    public function getField3()
    {
        return $this->field3;
    }

    /**
     * Set op3
     *
     * @param string $op3
     * @return RegularidadesActivofijo
     */
    public function setOp3($op3)
    {
        $this->op3 = $op3;

        return $this;
    }

    /**
     * Get op3
     *
     * @return string 
     */
    public function getOp3()
    {
        return $this->op3;
    }

    /**
     * Set field4
     *
     * @param integer $field4
     * @return RegularidadesActivofijo
     */
    public function setField4($field4)
    {
        $this->field4 = $field4;

        return $this;
    }

    /**
     * Get field4
     *
     * @return integer 
     */
    public function getField4()
    {
        return $this->field4;
    }

    /**
     * Set op4
     *
     * @param string $op4
     * @return RegularidadesActivofijo
     */
    public function setOp4($op4)
    {
        $this->op4 = $op4;

        return $this;
    }

    /**
     * Get op4
     *
     * @return string 
     */
    public function getOp4()
    {
        return $this->op4;
    }

    /**
     * Set field5
     *
     * @param integer $field5
     * @return RegularidadesActivofijo
     */
    public function setField5($field5)
    {
        $this->field5 = $field5;

        return $this;
    }

    /**
     * Get field5
     *
     * @return integer 
     */
    public function getField5()
    {
        return $this->field5;
    }

    /**
     * Set depreciacMensual
     *
     * @param boolean $depreciacMensual
     * @return RegularidadesActivofijo
     */
    public function setDepreciacMensual($depreciacMensual)
    {
        $this->depreciacMensual = $depreciacMensual;

        return $this;
    }

    /**
     * Get depreciacMensual
     *
     * @return boolean 
     */
    public function getDepreciacMensual()
    {
        return $this->depreciacMensual;
    }

    /**
     * Set impAlquilerventa
     *
     * @param boolean $impAlquilerventa
     * @return RegularidadesActivofijo
     */
    public function setImpAlquilerventa($impAlquilerventa)
    {
        $this->impAlquilerventa = $impAlquilerventa;

        return $this;
    }

    /**
     * Get impAlquilerventa
     *
     * @return boolean 
     */
    public function getImpAlquilerventa()
    {
        return $this->impAlquilerventa;
    }

    /**
     * Set copiar
     *
     * @param boolean $copiar
     * @return RegularidadesActivofijo
     */
    public function setCopiar($copiar)
    {
        $this->copiar = $copiar;

        return $this;
    }

    /**
     * Get copiar
     *
     * @return boolean 
     */
    public function getCopiar()
    {
        return $this->copiar;
    }

    /**
     * Set idClasifFactura
     *
     * @param string $idClasifFactura
     * @return RegularidadesActivofijo
     */
    public function setIdClasifFactura($idClasifFactura)
    {
        $this->idClasifFactura = $idClasifFactura;

        return $this;
    }

    /**
     * Get idClasifFactura
     *
     * @return string 
     */
    public function getIdClasifFactura()
    {
        return $this->idClasifFactura;
    }

    /**
     * Set especificacionActivoNew
     *
     * @param string $especificacionActivoNew
     * @return RegularidadesActivofijo
     */
    public function setEspecificacionActivoNew($especificacionActivoNew)
    {
        $this->especificacionActivoNew = $especificacionActivoNew;

        return $this;
    }

    /**
     * Get especificacionActivoNew
     *
     * @return string 
     */
    public function getEspecificacionActivoNew()
    {
        return $this->especificacionActivoNew;
    }
}
