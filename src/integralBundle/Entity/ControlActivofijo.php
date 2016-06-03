<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ControlActivofijo
 *
 * @ORM\Table(name="Control_ActivoFijo")
 * @ORM\Entity
 */
class ControlActivofijo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="IddeAlmacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $iddealmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Entrada", type="integer", nullable=false)
     */
    private $entrada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Movimiento", type="integer", nullable=false)
     */
    private $movimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="Baja", type="integer", nullable=false)
     */
    private $baja;

    /**
     * @var integer
     *
     * @ORM\Column(name="Alquiler", type="integer", nullable=false)
     */
    private $alquiler;

    /**
     * @var integer
     *
     * @ORM\Column(name="Entradas_Utiles", type="integer", nullable=false)
     */
    private $entradasUtiles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Traslados_Utiles", type="integer", nullable=false)
     */
    private $trasladosUtiles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salidas_Utiles", type="integer", nullable=false)
     */
    private $salidasUtiles;

    /**
     * @var integer
     *
     * @ORM\Column(name="AlquilerMov", type="integer", nullable=false)
     */
    private $alquilermov;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Cerrado", type="smallint", nullable=false)
     */
    private $mesCerrado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Cerrado_UH", type="smallint", nullable=false)
     */
    private $mesCerradoUh;

    /**
     * @var integer
     *
     * @ORM\Column(name="Movimiento_Masivo", type="integer", nullable=false)
     */
    private $movimientoMasivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Baja_Masiva", type="integer", nullable=false)
     */
    private $bajaMasiva;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mov_Masivo_Utiles", type="integer", nullable=false)
     */
    private $movMasivoUtiles;

    /**
     * @var integer
     *
     * @ORM\Column(name="Movimiento_Masivo_Val", type="integer", nullable=false)
     */
    private $movimientoMasivoVal;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return ControlActivofijo
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
     * Set iddealmacen
     *
     * @param string $iddealmacen
     * @return ControlActivofijo
     */
    public function setIddealmacen($iddealmacen)
    {
        $this->iddealmacen = $iddealmacen;

        return $this;
    }

    /**
     * Get iddealmacen
     *
     * @return string 
     */
    public function getIddealmacen()
    {
        return $this->iddealmacen;
    }

    /**
     * Set entrada
     *
     * @param integer $entrada
     * @return ControlActivofijo
     */
    public function setEntrada($entrada)
    {
        $this->entrada = $entrada;

        return $this;
    }

    /**
     * Get entrada
     *
     * @return integer 
     */
    public function getEntrada()
    {
        return $this->entrada;
    }

    /**
     * Set movimiento
     *
     * @param integer $movimiento
     * @return ControlActivofijo
     */
    public function setMovimiento($movimiento)
    {
        $this->movimiento = $movimiento;

        return $this;
    }

    /**
     * Get movimiento
     *
     * @return integer 
     */
    public function getMovimiento()
    {
        return $this->movimiento;
    }

    /**
     * Set baja
     *
     * @param integer $baja
     * @return ControlActivofijo
     */
    public function setBaja($baja)
    {
        $this->baja = $baja;

        return $this;
    }

    /**
     * Get baja
     *
     * @return integer 
     */
    public function getBaja()
    {
        return $this->baja;
    }

    /**
     * Set alquiler
     *
     * @param integer $alquiler
     * @return ControlActivofijo
     */
    public function setAlquiler($alquiler)
    {
        $this->alquiler = $alquiler;

        return $this;
    }

    /**
     * Get alquiler
     *
     * @return integer 
     */
    public function getAlquiler()
    {
        return $this->alquiler;
    }

    /**
     * Set entradasUtiles
     *
     * @param integer $entradasUtiles
     * @return ControlActivofijo
     */
    public function setEntradasUtiles($entradasUtiles)
    {
        $this->entradasUtiles = $entradasUtiles;

        return $this;
    }

    /**
     * Get entradasUtiles
     *
     * @return integer 
     */
    public function getEntradasUtiles()
    {
        return $this->entradasUtiles;
    }

    /**
     * Set trasladosUtiles
     *
     * @param integer $trasladosUtiles
     * @return ControlActivofijo
     */
    public function setTrasladosUtiles($trasladosUtiles)
    {
        $this->trasladosUtiles = $trasladosUtiles;

        return $this;
    }

    /**
     * Get trasladosUtiles
     *
     * @return integer 
     */
    public function getTrasladosUtiles()
    {
        return $this->trasladosUtiles;
    }

    /**
     * Set salidasUtiles
     *
     * @param integer $salidasUtiles
     * @return ControlActivofijo
     */
    public function setSalidasUtiles($salidasUtiles)
    {
        $this->salidasUtiles = $salidasUtiles;

        return $this;
    }

    /**
     * Get salidasUtiles
     *
     * @return integer 
     */
    public function getSalidasUtiles()
    {
        return $this->salidasUtiles;
    }

    /**
     * Set alquilermov
     *
     * @param integer $alquilermov
     * @return ControlActivofijo
     */
    public function setAlquilermov($alquilermov)
    {
        $this->alquilermov = $alquilermov;

        return $this;
    }

    /**
     * Get alquilermov
     *
     * @return integer 
     */
    public function getAlquilermov()
    {
        return $this->alquilermov;
    }

    /**
     * Set mesCerrado
     *
     * @param integer $mesCerrado
     * @return ControlActivofijo
     */
    public function setMesCerrado($mesCerrado)
    {
        $this->mesCerrado = $mesCerrado;

        return $this;
    }

    /**
     * Get mesCerrado
     *
     * @return integer 
     */
    public function getMesCerrado()
    {
        return $this->mesCerrado;
    }

    /**
     * Set mesCerradoUh
     *
     * @param integer $mesCerradoUh
     * @return ControlActivofijo
     */
    public function setMesCerradoUh($mesCerradoUh)
    {
        $this->mesCerradoUh = $mesCerradoUh;

        return $this;
    }

    /**
     * Get mesCerradoUh
     *
     * @return integer 
     */
    public function getMesCerradoUh()
    {
        return $this->mesCerradoUh;
    }

    /**
     * Set movimientoMasivo
     *
     * @param integer $movimientoMasivo
     * @return ControlActivofijo
     */
    public function setMovimientoMasivo($movimientoMasivo)
    {
        $this->movimientoMasivo = $movimientoMasivo;

        return $this;
    }

    /**
     * Get movimientoMasivo
     *
     * @return integer 
     */
    public function getMovimientoMasivo()
    {
        return $this->movimientoMasivo;
    }

    /**
     * Set bajaMasiva
     *
     * @param integer $bajaMasiva
     * @return ControlActivofijo
     */
    public function setBajaMasiva($bajaMasiva)
    {
        $this->bajaMasiva = $bajaMasiva;

        return $this;
    }

    /**
     * Get bajaMasiva
     *
     * @return integer 
     */
    public function getBajaMasiva()
    {
        return $this->bajaMasiva;
    }

    /**
     * Set movMasivoUtiles
     *
     * @param integer $movMasivoUtiles
     * @return ControlActivofijo
     */
    public function setMovMasivoUtiles($movMasivoUtiles)
    {
        $this->movMasivoUtiles = $movMasivoUtiles;

        return $this;
    }

    /**
     * Get movMasivoUtiles
     *
     * @return integer 
     */
    public function getMovMasivoUtiles()
    {
        return $this->movMasivoUtiles;
    }

    /**
     * Set movimientoMasivoVal
     *
     * @param integer $movimientoMasivoVal
     * @return ControlActivofijo
     */
    public function setMovimientoMasivoVal($movimientoMasivoVal)
    {
        $this->movimientoMasivoVal = $movimientoMasivoVal;

        return $this;
    }

    /**
     * Get movimientoMasivoVal
     *
     * @return integer 
     */
    public function getMovimientoMasivoVal()
    {
        return $this->movimientoMasivoVal;
    }
}
