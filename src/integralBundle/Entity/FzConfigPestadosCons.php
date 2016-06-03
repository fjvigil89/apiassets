<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzConfigPestadosCons
 *
 * @ORM\Table(name="Fz_Config_PEstados_Cons")
 * @ORM\Entity
 */
class FzConfigPestadosCons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Documento", type="smallint", nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=10, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta", type="string", length=20, nullable=false)
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta", type="string", length=20, nullable=false)
     */
    private $subcta;

    /**
     * @var string
     *
     * @ORM\Column(name="Analisis", type="string", length=20, nullable=false)
     */
    private $analisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Posic_Organismo", type="string", length=12, nullable=false)
     */
    private $posicOrganismo;

    /**
     * @var string
     *
     * @ORM\Column(name="Posic_CPago", type="string", length=12, nullable=false)
     */
    private $posicCpago;

    /**
     * @var string
     *
     * @ORM\Column(name="Posic_Cliente", type="string", length=12, nullable=false)
     */
    private $posicCliente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Calcular", type="boolean", nullable=false)
     */
    private $calcular;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set documento
     *
     * @param integer $documento
     * @return FzConfigPestadosCons
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return integer 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return FzConfigPestadosCons
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return FzConfigPestadosCons
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
     * Set subcta
     *
     * @param string $subcta
     * @return FzConfigPestadosCons
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
     * Set analisis
     *
     * @param string $analisis
     * @return FzConfigPestadosCons
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
     * Set posicOrganismo
     *
     * @param string $posicOrganismo
     * @return FzConfigPestadosCons
     */
    public function setPosicOrganismo($posicOrganismo)
    {
        $this->posicOrganismo = $posicOrganismo;

        return $this;
    }

    /**
     * Get posicOrganismo
     *
     * @return string 
     */
    public function getPosicOrganismo()
    {
        return $this->posicOrganismo;
    }

    /**
     * Set posicCpago
     *
     * @param string $posicCpago
     * @return FzConfigPestadosCons
     */
    public function setPosicCpago($posicCpago)
    {
        $this->posicCpago = $posicCpago;

        return $this;
    }

    /**
     * Get posicCpago
     *
     * @return string 
     */
    public function getPosicCpago()
    {
        return $this->posicCpago;
    }

    /**
     * Set posicCliente
     *
     * @param string $posicCliente
     * @return FzConfigPestadosCons
     */
    public function setPosicCliente($posicCliente)
    {
        $this->posicCliente = $posicCliente;

        return $this;
    }

    /**
     * Get posicCliente
     *
     * @return string 
     */
    public function getPosicCliente()
    {
        return $this->posicCliente;
    }

    /**
     * Set calcular
     *
     * @param boolean $calcular
     * @return FzConfigPestadosCons
     */
    public function setCalcular($calcular)
    {
        $this->calcular = $calcular;

        return $this;
    }

    /**
     * Get calcular
     *
     * @return boolean 
     */
    public function getCalcular()
    {
        return $this->calcular;
    }

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return FzConfigPestadosCons
     */
    public function setTipoMoneda($tipoMoneda)
    {
        $this->tipoMoneda = $tipoMoneda;

        return $this;
    }

    /**
     * Get tipoMoneda
     *
     * @return integer 
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }
}
