<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CentroPago
 *
 * @ORM\Table(name="Centro_Pago")
 * @ORM\Entity
 */
class CentroPago
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cpago", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCpago;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cpago", type="string", length=50, nullable=false)
     */
    private $descCpago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Organismo", type="string", length=15, nullable=false)
     */
    private $idOrganismo;



    /**
     * Get idCpago
     *
     * @return string 
     */
    public function getIdCpago()
    {
        return $this->idCpago;
    }

    /**
     * Set descCpago
     *
     * @param string $descCpago
     * @return CentroPago
     */
    public function setDescCpago($descCpago)
    {
        $this->descCpago = $descCpago;

        return $this;
    }

    /**
     * Get descCpago
     *
     * @return string 
     */
    public function getDescCpago()
    {
        return $this->descCpago;
    }

    /**
     * Set idOrganismo
     *
     * @param string $idOrganismo
     * @return CentroPago
     */
    public function setIdOrganismo($idOrganismo)
    {
        $this->idOrganismo = $idOrganismo;

        return $this;
    }

    /**
     * Get idOrganismo
     *
     * @return string 
     */
    public function getIdOrganismo()
    {
        return $this->idOrganismo;
    }
}
