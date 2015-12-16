<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhClasificacionNominillasMs
 *
 * @ORM\Table(name="RH_Clasificacion_Nominillas_MS")
 * @ORM\Entity
 */
class RhClasificacionNominillasMs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Clasif_Nominilla", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasifNominilla;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasif_Nominilla", type="string", length=30, nullable=false)
     */
    private $descClasifNominilla;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MS", type="boolean", nullable=false)
     */
    private $ms;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Aplicar", type="boolean", nullable=false)
     */
    private $aplicar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Vac", type="boolean", nullable=false)
     */
    private $vac;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Acum_Vac_Dia", type="boolean", nullable=false)
     */
    private $acumVacDia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Acum_Vac_Imp", type="boolean", nullable=false)
     */
    private $acumVacImp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Perfeccionamiento", type="boolean", nullable=false)
     */
    private $perfeccionamiento;



    /**
     * Get idClasifNominilla
     *
     * @return integer 
     */
    public function getIdClasifNominilla()
    {
        return $this->idClasifNominilla;
    }

    /**
     * Set descClasifNominilla
     *
     * @param string $descClasifNominilla
     * @return RhClasificacionNominillasMs
     */
    public function setDescClasifNominilla($descClasifNominilla)
    {
        $this->descClasifNominilla = $descClasifNominilla;

        return $this;
    }

    /**
     * Get descClasifNominilla
     *
     * @return string 
     */
    public function getDescClasifNominilla()
    {
        return $this->descClasifNominilla;
    }

    /**
     * Set ms
     *
     * @param boolean $ms
     * @return RhClasificacionNominillasMs
     */
    public function setMs($ms)
    {
        $this->ms = $ms;

        return $this;
    }

    /**
     * Get ms
     *
     * @return boolean 
     */
    public function getMs()
    {
        return $this->ms;
    }

    /**
     * Set aplicar
     *
     * @param boolean $aplicar
     * @return RhClasificacionNominillasMs
     */
    public function setAplicar($aplicar)
    {
        $this->aplicar = $aplicar;

        return $this;
    }

    /**
     * Get aplicar
     *
     * @return boolean 
     */
    public function getAplicar()
    {
        return $this->aplicar;
    }

    /**
     * Set vac
     *
     * @param boolean $vac
     * @return RhClasificacionNominillasMs
     */
    public function setVac($vac)
    {
        $this->vac = $vac;

        return $this;
    }

    /**
     * Get vac
     *
     * @return boolean 
     */
    public function getVac()
    {
        return $this->vac;
    }

    /**
     * Set acumVacDia
     *
     * @param boolean $acumVacDia
     * @return RhClasificacionNominillasMs
     */
    public function setAcumVacDia($acumVacDia)
    {
        $this->acumVacDia = $acumVacDia;

        return $this;
    }

    /**
     * Get acumVacDia
     *
     * @return boolean 
     */
    public function getAcumVacDia()
    {
        return $this->acumVacDia;
    }

    /**
     * Set acumVacImp
     *
     * @param boolean $acumVacImp
     * @return RhClasificacionNominillasMs
     */
    public function setAcumVacImp($acumVacImp)
    {
        $this->acumVacImp = $acumVacImp;

        return $this;
    }

    /**
     * Get acumVacImp
     *
     * @return boolean 
     */
    public function getAcumVacImp()
    {
        return $this->acumVacImp;
    }

    /**
     * Set perfeccionamiento
     *
     * @param boolean $perfeccionamiento
     * @return RhClasificacionNominillasMs
     */
    public function setPerfeccionamiento($perfeccionamiento)
    {
        $this->perfeccionamiento = $perfeccionamiento;

        return $this;
    }

    /**
     * Get perfeccionamiento
     *
     * @return boolean 
     */
    public function getPerfeccionamiento()
    {
        return $this->perfeccionamiento;
    }
}
