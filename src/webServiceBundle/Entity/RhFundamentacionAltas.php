<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhFundamentacionAltas
 *
 * @ORM\Table(name="RH_Fundamentacion_Altas")
 * @ORM\Entity
 */
class RhFundamentacionAltas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_FundamentacionAlta", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFundamentacionalta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_FundamentacionAlta", type="string", length=50, nullable=false)
     */
    private $descFundamentacionalta;



    /**
     * Get idFundamentacionalta
     *
     * @return string 
     */
    public function getIdFundamentacionalta()
    {
        return $this->idFundamentacionalta;
    }

    /**
     * Set descFundamentacionalta
     *
     * @param string $descFundamentacionalta
     * @return RhFundamentacionAltas
     */
    public function setDescFundamentacionalta($descFundamentacionalta)
    {
        $this->descFundamentacionalta = $descFundamentacionalta;

        return $this;
    }

    /**
     * Get descFundamentacionalta
     *
     * @return string 
     */
    public function getDescFundamentacionalta()
    {
        return $this->descFundamentacionalta;
    }
}
