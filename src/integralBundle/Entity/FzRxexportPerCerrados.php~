<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRxexportPerCerrados
 *
 * @ORM\Table(name="Fz_RxExport_Per_Cerrados")
 * @ORM\Entity
 */
class FzRxexportPerCerrados
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado_Contabilidad", type="boolean", nullable=false)
     */
    private $cerradoContabilidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado_Finanzas", type="boolean", nullable=false)
     */
    private $cerradoFinanzas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado_Inventario", type="boolean", nullable=false)
     */
    private $cerradoInventario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado_AFijos", type="boolean", nullable=false)
     */
    private $cerradoAfijos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado_Utiles", type="boolean", nullable=false)
     */
    private $cerradoUtiles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nivel", type="smallint", nullable=false)
     */
    private $nivel;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Nivel", type="string", length=5, nullable=false)
     */
    private $idNivel;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     */
    private $idsync;



    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return FzRxexportPerCerrados
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return FzRxexportPerCerrados
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set cerradoContabilidad
     *
     * @param boolean $cerradoContabilidad
     * @return FzRxexportPerCerrados
     */
    public function setCerradoContabilidad($cerradoContabilidad)
    {
        $this->cerradoContabilidad = $cerradoContabilidad;

        return $this;
    }

    /**
     * Get cerradoContabilidad
     *
     * @return boolean 
     */
    public function getCerradoContabilidad()
    {
        return $this->cerradoContabilidad;
    }

    /**
     * Set cerradoFinanzas
     *
     * @param boolean $cerradoFinanzas
     * @return FzRxexportPerCerrados
     */
    public function setCerradoFinanzas($cerradoFinanzas)
    {
        $this->cerradoFinanzas = $cerradoFinanzas;

        return $this;
    }

    /**
     * Get cerradoFinanzas
     *
     * @return boolean 
     */
    public function getCerradoFinanzas()
    {
        return $this->cerradoFinanzas;
    }

    /**
     * Set cerradoInventario
     *
     * @param boolean $cerradoInventario
     * @return FzRxexportPerCerrados
     */
    public function setCerradoInventario($cerradoInventario)
    {
        $this->cerradoInventario = $cerradoInventario;

        return $this;
    }

    /**
     * Get cerradoInventario
     *
     * @return boolean 
     */
    public function getCerradoInventario()
    {
        return $this->cerradoInventario;
    }

    /**
     * Set cerradoAfijos
     *
     * @param boolean $cerradoAfijos
     * @return FzRxexportPerCerrados
     */
    public function setCerradoAfijos($cerradoAfijos)
    {
        $this->cerradoAfijos = $cerradoAfijos;

        return $this;
    }

    /**
     * Get cerradoAfijos
     *
     * @return boolean 
     */
    public function getCerradoAfijos()
    {
        return $this->cerradoAfijos;
    }

    /**
     * Set cerradoUtiles
     *
     * @param boolean $cerradoUtiles
     * @return FzRxexportPerCerrados
     */
    public function setCerradoUtiles($cerradoUtiles)
    {
        $this->cerradoUtiles = $cerradoUtiles;

        return $this;
    }

    /**
     * Get cerradoUtiles
     *
     * @return boolean 
     */
    public function getCerradoUtiles()
    {
        return $this->cerradoUtiles;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     * @return FzRxexportPerCerrados
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set idNivel
     *
     * @param string $idNivel
     * @return FzRxexportPerCerrados
     */
    public function setIdNivel($idNivel)
    {
        $this->idNivel = $idNivel;

        return $this;
    }

    /**
     * Get idNivel
     *
     * @return string 
     */
    public function getIdNivel()
    {
        return $this->idNivel;
    }

    /**
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return FzRxexportPerCerrados
     */
    public function setIdsync($idsync)
    {
        $this->idsync = $idsync;

        return $this;
    }

    /**
     * Get idsync
     *
     * @return uniqueidentifier 
     */
    public function getIdsync()
    {
        return $this->idsync;
    }
}
