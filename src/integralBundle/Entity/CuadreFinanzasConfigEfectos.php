<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuadreFinanzasConfigEfectos
 *
 * @ORM\Table(name="Cuadre_Finanzas_Config_EFectos")
 * @ORM\Entity
 */
class CuadreFinanzasConfigEfectos
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
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=1, nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_FPago", type="string", length=3, nullable=false)
     */
    private $idFpago;

    /**
     * @var boolean
     *
     * @ORM\Column(name="De_MB", type="boolean", nullable=false)
     */
    private $deMb;

    /**
     * @var string
     *
     * @ORM\Column(name="Periodo", type="string", length=5, nullable=false)
     */
    private $periodo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

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
     * @var boolean
     *
     * @ORM\Column(name="Calcular", type="boolean", nullable=false)
     */
    private $calcular;



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
     * @param string $documento
     * @return CuadreFinanzasConfigEfectos
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set idFpago
     *
     * @param string $idFpago
     * @return CuadreFinanzasConfigEfectos
     */
    public function setIdFpago($idFpago)
    {
        $this->idFpago = $idFpago;

        return $this;
    }

    /**
     * Get idFpago
     *
     * @return string 
     */
    public function getIdFpago()
    {
        return $this->idFpago;
    }

    /**
     * Set deMb
     *
     * @param boolean $deMb
     * @return CuadreFinanzasConfigEfectos
     */
    public function setDeMb($deMb)
    {
        $this->deMb = $deMb;

        return $this;
    }

    /**
     * Get deMb
     *
     * @return boolean 
     */
    public function getDeMb()
    {
        return $this->deMb;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     * @return CuadreFinanzasConfigEfectos
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;

        return $this;
    }

    /**
     * Get periodo
     *
     * @return string 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return CuadreFinanzasConfigEfectos
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set cta
     *
     * @param string $cta
     * @return CuadreFinanzasConfigEfectos
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
     * @return CuadreFinanzasConfigEfectos
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
     * @return CuadreFinanzasConfigEfectos
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
     * @return CuadreFinanzasConfigEfectos
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
     * @return CuadreFinanzasConfigEfectos
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
     * @return CuadreFinanzasConfigEfectos
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
     * Set calcular
     *
     * @param boolean $calcular
     * @return CuadreFinanzasConfigEfectos
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
}
