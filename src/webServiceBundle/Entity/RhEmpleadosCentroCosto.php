<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEmpleadosCentroCosto
 *
 * @ORM\Table(name="RH_Empleados_Centro_Costo")
 * @ORM\Entity
 */
class RhEmpleadosCentroCosto
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Obra", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idObra;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ccosto", type="string", length=50, nullable=false)
     */
    private $descCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Porciento_Fondo_Tiempo", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoFondoTiempo;



    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhEmpleadosCentroCosto
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return RhEmpleadosCentroCosto
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set idObra
     *
     * @param string $idObra
     * @return RhEmpleadosCentroCosto
     */
    public function setIdObra($idObra)
    {
        $this->idObra = $idObra;

        return $this;
    }

    /**
     * Get idObra
     *
     * @return string 
     */
    public function getIdObra()
    {
        return $this->idObra;
    }

    /**
     * Set descCcosto
     *
     * @param string $descCcosto
     * @return RhEmpleadosCentroCosto
     */
    public function setDescCcosto($descCcosto)
    {
        $this->descCcosto = $descCcosto;

        return $this;
    }

    /**
     * Get descCcosto
     *
     * @return string 
     */
    public function getDescCcosto()
    {
        return $this->descCcosto;
    }

    /**
     * Set porcientoFondoTiempo
     *
     * @param string $porcientoFondoTiempo
     * @return RhEmpleadosCentroCosto
     */
    public function setPorcientoFondoTiempo($porcientoFondoTiempo)
    {
        $this->porcientoFondoTiempo = $porcientoFondoTiempo;

        return $this;
    }

    /**
     * Get porcientoFondoTiempo
     *
     * @return string 
     */
    public function getPorcientoFondoTiempo()
    {
        return $this->porcientoFondoTiempo;
    }
}
