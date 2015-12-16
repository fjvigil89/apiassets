<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhEmpleadosOrganizacionesMasas
 *
 * @ORM\Table(name="RH_Empleados_Organizaciones_Masas")
 * @ORM\Entity
 */
class RhEmpleadosOrganizacionesMasas
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
     * @ORM\Column(name="Id_OrgMasa", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idOrgmasa;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_OrgMasa", type="string", length=50, nullable=false)
     */
    private $descOrgmasa;



    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhEmpleadosOrganizacionesMasas
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
     * Set idOrgmasa
     *
     * @param string $idOrgmasa
     * @return RhEmpleadosOrganizacionesMasas
     */
    public function setIdOrgmasa($idOrgmasa)
    {
        $this->idOrgmasa = $idOrgmasa;

        return $this;
    }

    /**
     * Get idOrgmasa
     *
     * @return string 
     */
    public function getIdOrgmasa()
    {
        return $this->idOrgmasa;
    }

    /**
     * Set descOrgmasa
     *
     * @param string $descOrgmasa
     * @return RhEmpleadosOrganizacionesMasas
     */
    public function setDescOrgmasa($descOrgmasa)
    {
        $this->descOrgmasa = $descOrgmasa;

        return $this;
    }

    /**
     * Get descOrgmasa
     *
     * @return string 
     */
    public function getDescOrgmasa()
    {
        return $this->descOrgmasa;
    }
}
