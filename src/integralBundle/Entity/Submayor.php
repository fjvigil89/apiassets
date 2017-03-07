<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Submayor
 *
 * @ORM\Table(name="Submayor", indexes={@ORM\Index(name="Clu_SubMayor", columns={"Id_Agrupacion", "Cta"})})
 * @ORM\Entity
 */
class Submayor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ano;

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
     * @ORM\Column(name="SubAnalisis", type="string", length=20, nullable=false)
     */
    private $subanalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Epigrafe", type="string", length=20, nullable=false)
     */
    private $epigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Partida", type="string", length=20, nullable=false)
     */
    private $partida;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Doc", type="string", length=10, nullable=false)
     */
    private $tipoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc", type="string", length=20, nullable=false)
     */
    private $idDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="Detalle", type="string", length=200, nullable=false)
     */
    private $detalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="Debe", type="integer", nullable=false)
     */
    private $debe;

    /**
     * @var integer
     *
     * @ORM\Column(name="Haber", type="integer", nullable=false)
     */
    private $haber;

    /**
     * @var integer
     *
     * @ORM\Column(name="Saldo", type="integer", nullable=false)
     */
    private $saldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Compro", type="string", length=10, nullable=false)
     */
    private $tipoCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="Calculo", type="decimal", precision=15, scale=5, nullable=false)
     */
    private $calculo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Natu", type="boolean", nullable=false)
     */
    private $natu;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;



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
     * Set cta
     *
     * @param string $cta
     * @return Submayor
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
     * @return Submayor
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
     * @return Submayor
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
     * Set subanalisis
     *
     * @param string $subanalisis
     * @return Submayor
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
     * Set epigrafe
     *
     * @param string $epigrafe
     * @return Submayor
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
     * Set partida
     *
     * @param string $partida
     * @return Submayor
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Submayor
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set tipoDoc
     *
     * @param string $tipoDoc
     * @return Submayor
     */
    public function setTipoDoc($tipoDoc)
    {
        $this->tipoDoc = $tipoDoc;

        return $this;
    }

    /**
     * Get tipoDoc
     *
     * @return string 
     */
    public function getTipoDoc()
    {
        return $this->tipoDoc;
    }

    /**
     * Set idDoc
     *
     * @param string $idDoc
     * @return Submayor
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return string 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set detalle
     *
     * @param string $detalle
     * @return Submayor
     */
    public function setDetalle($detalle)
    {
        $this->detalle = $detalle;

        return $this;
    }

    /**
     * Get detalle
     *
     * @return string 
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * Set debe
     *
     * @param integer $debe
     * @return Submayor
     */
    public function setDebe($debe)
    {
        $this->debe = $debe;

        return $this;
    }

    /**
     * Get debe
     *
     * @return integer 
     */
    public function getDebe()
    {
        return $this->debe;
    }

    /**
     * Set haber
     *
     * @param integer $haber
     * @return Submayor
     */
    public function setHaber($haber)
    {
        $this->haber = $haber;

        return $this;
    }

    /**
     * Get haber
     *
     * @return integer 
     */
    public function getHaber()
    {
        return $this->haber;
    }

    /**
     * Set saldo
     *
     * @param integer $saldo
     * @return Submayor
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get saldo
     *
     * @return integer 
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return Submayor
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
     * Set idCompro
     *
     * @param integer $idCompro
     * @return Submayor
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return integer 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set tipoCompro
     *
     * @param string $tipoCompro
     * @return Submayor
     */
    public function setTipoCompro($tipoCompro)
    {
        $this->tipoCompro = $tipoCompro;

        return $this;
    }

    /**
     * Get tipoCompro
     *
     * @return string 
     */
    public function getTipoCompro()
    {
        return $this->tipoCompro;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Submayor
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set calculo
     *
     * @param string $calculo
     * @return Submayor
     */
    public function setCalculo($calculo)
    {
        $this->calculo = $calculo;

        return $this;
    }

    /**
     * Get calculo
     *
     * @return string 
     */
    public function getCalculo()
    {
        return $this->calculo;
    }

    /**
     * Set natu
     *
     * @param boolean $natu
     * @return Submayor
     */
    public function setNatu($natu)
    {
        $this->natu = $natu;

        return $this;
    }

    /**
     * Get natu
     *
     * @return boolean 
     */
    public function getNatu()
    {
        return $this->natu;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return Submayor
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }
}
