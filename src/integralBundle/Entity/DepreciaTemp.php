<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DepreciaTemp
 *
 * @ORM\Table(name="DEPRECIA_TEMP")
 * @ORM\Entity
 */
class DepreciaTemp
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     */
    private $idActivofijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="ValorIni12", type="integer", nullable=false)
     */
    private $valorini12;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tasa12", type="integer", nullable=false)
     */
    private $tasa12;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeprecAcum12", type="integer", nullable=false)
     */
    private $deprecacum12;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeprecMes12", type="integer", nullable=false)
     */
    private $deprecmes12;

    /**
     * @var integer
     *
     * @ORM\Column(name="ValorIni12MC", type="integer", nullable=false)
     */
    private $valorini12mc;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeprecAcum12MC", type="integer", nullable=false)
     */
    private $deprecacum12mc;

    /**
     * @var integer
     *
     * @ORM\Column(name="DeprecMes12MC", type="integer", nullable=false)
     */
    private $deprecmes12mc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Estado12", type="string", length=3, nullable=false)
     */
    private $idEstado12;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrup12", type="string", length=5, nullable=false)
     */
    private $idAgrup12;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto12", type="string", length=10, nullable=false)
     */
    private $idCcosto12;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AreaResp12", type="string", length=10, nullable=false)
     */
    private $idArearesp12;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado12", type="string", length=15, nullable=false)
     */
    private $idEmpleado12;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion12", type="string", length=5, nullable=false)
     */
    private $idClasificacion12;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Especificacion12", type="string", length=15, nullable=false)
     */
    private $idEspecificacion12;



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
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return DepreciaTemp
     */
    public function setIdActivofijo($idActivofijo)
    {
        $this->idActivofijo = $idActivofijo;

        return $this;
    }

    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set valorini12
     *
     * @param integer $valorini12
     * @return DepreciaTemp
     */
    public function setValorini12($valorini12)
    {
        $this->valorini12 = $valorini12;

        return $this;
    }

    /**
     * Get valorini12
     *
     * @return integer 
     */
    public function getValorini12()
    {
        return $this->valorini12;
    }

    /**
     * Set tasa12
     *
     * @param integer $tasa12
     * @return DepreciaTemp
     */
    public function setTasa12($tasa12)
    {
        $this->tasa12 = $tasa12;

        return $this;
    }

    /**
     * Get tasa12
     *
     * @return integer 
     */
    public function getTasa12()
    {
        return $this->tasa12;
    }

    /**
     * Set deprecacum12
     *
     * @param integer $deprecacum12
     * @return DepreciaTemp
     */
    public function setDeprecacum12($deprecacum12)
    {
        $this->deprecacum12 = $deprecacum12;

        return $this;
    }

    /**
     * Get deprecacum12
     *
     * @return integer 
     */
    public function getDeprecacum12()
    {
        return $this->deprecacum12;
    }

    /**
     * Set deprecmes12
     *
     * @param integer $deprecmes12
     * @return DepreciaTemp
     */
    public function setDeprecmes12($deprecmes12)
    {
        $this->deprecmes12 = $deprecmes12;

        return $this;
    }

    /**
     * Get deprecmes12
     *
     * @return integer 
     */
    public function getDeprecmes12()
    {
        return $this->deprecmes12;
    }

    /**
     * Set valorini12mc
     *
     * @param integer $valorini12mc
     * @return DepreciaTemp
     */
    public function setValorini12mc($valorini12mc)
    {
        $this->valorini12mc = $valorini12mc;

        return $this;
    }

    /**
     * Get valorini12mc
     *
     * @return integer 
     */
    public function getValorini12mc()
    {
        return $this->valorini12mc;
    }

    /**
     * Set deprecacum12mc
     *
     * @param integer $deprecacum12mc
     * @return DepreciaTemp
     */
    public function setDeprecacum12mc($deprecacum12mc)
    {
        $this->deprecacum12mc = $deprecacum12mc;

        return $this;
    }

    /**
     * Get deprecacum12mc
     *
     * @return integer 
     */
    public function getDeprecacum12mc()
    {
        return $this->deprecacum12mc;
    }

    /**
     * Set deprecmes12mc
     *
     * @param integer $deprecmes12mc
     * @return DepreciaTemp
     */
    public function setDeprecmes12mc($deprecmes12mc)
    {
        $this->deprecmes12mc = $deprecmes12mc;

        return $this;
    }

    /**
     * Get deprecmes12mc
     *
     * @return integer 
     */
    public function getDeprecmes12mc()
    {
        return $this->deprecmes12mc;
    }

    /**
     * Set idEstado12
     *
     * @param string $idEstado12
     * @return DepreciaTemp
     */
    public function setIdEstado12($idEstado12)
    {
        $this->idEstado12 = $idEstado12;

        return $this;
    }

    /**
     * Get idEstado12
     *
     * @return string 
     */
    public function getIdEstado12()
    {
        return $this->idEstado12;
    }

    /**
     * Set idAgrup12
     *
     * @param string $idAgrup12
     * @return DepreciaTemp
     */
    public function setIdAgrup12($idAgrup12)
    {
        $this->idAgrup12 = $idAgrup12;

        return $this;
    }

    /**
     * Get idAgrup12
     *
     * @return string 
     */
    public function getIdAgrup12()
    {
        return $this->idAgrup12;
    }

    /**
     * Set idCcosto12
     *
     * @param string $idCcosto12
     * @return DepreciaTemp
     */
    public function setIdCcosto12($idCcosto12)
    {
        $this->idCcosto12 = $idCcosto12;

        return $this;
    }

    /**
     * Get idCcosto12
     *
     * @return string 
     */
    public function getIdCcosto12()
    {
        return $this->idCcosto12;
    }

    /**
     * Set idArearesp12
     *
     * @param string $idArearesp12
     * @return DepreciaTemp
     */
    public function setIdArearesp12($idArearesp12)
    {
        $this->idArearesp12 = $idArearesp12;

        return $this;
    }

    /**
     * Get idArearesp12
     *
     * @return string 
     */
    public function getIdArearesp12()
    {
        return $this->idArearesp12;
    }

    /**
     * Set idEmpleado12
     *
     * @param string $idEmpleado12
     * @return DepreciaTemp
     */
    public function setIdEmpleado12($idEmpleado12)
    {
        $this->idEmpleado12 = $idEmpleado12;

        return $this;
    }

    /**
     * Get idEmpleado12
     *
     * @return string 
     */
    public function getIdEmpleado12()
    {
        return $this->idEmpleado12;
    }

    /**
     * Set idClasificacion12
     *
     * @param string $idClasificacion12
     * @return DepreciaTemp
     */
    public function setIdClasificacion12($idClasificacion12)
    {
        $this->idClasificacion12 = $idClasificacion12;

        return $this;
    }

    /**
     * Get idClasificacion12
     *
     * @return string 
     */
    public function getIdClasificacion12()
    {
        return $this->idClasificacion12;
    }

    /**
     * Set idEspecificacion12
     *
     * @param string $idEspecificacion12
     * @return DepreciaTemp
     */
    public function setIdEspecificacion12($idEspecificacion12)
    {
        $this->idEspecificacion12 = $idEspecificacion12;

        return $this;
    }

    /**
     * Get idEspecificacion12
     *
     * @return string 
     */
    public function getIdEspecificacion12()
    {
        return $this->idEspecificacion12;
    }
}
