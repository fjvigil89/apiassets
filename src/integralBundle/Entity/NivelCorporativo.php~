<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NivelCorporativo
 *
 * @ORM\Table(name="Nivel_Corporativo")
 * @ORM\Entity
 */
class NivelCorporativo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Corporativo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCorporativo;

    /**
     * @var string
     *
     * @ORM\Column(name="Corporativo", type="string", length=50, nullable=false)
     */
    private $corporativo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizar", type="boolean", nullable=false)
     */
    private $contabilizar;



    /**
     * Get idCorporativo
     *
     * @return string 
     */
    public function getIdCorporativo()
    {
        return $this->idCorporativo;
    }

    /**
     * Set corporativo
     *
     * @param string $corporativo
     * @return NivelCorporativo
     */
    public function setCorporativo($corporativo)
    {
        $this->corporativo = $corporativo;

        return $this;
    }

    /**
     * Get corporativo
     *
     * @return string 
     */
    public function getCorporativo()
    {
        return $this->corporativo;
    }

    /**
     * Set contabilizar
     *
     * @param boolean $contabilizar
     * @return NivelCorporativo
     */
    public function setContabilizar($contabilizar)
    {
        $this->contabilizar = $contabilizar;

        return $this;
    }

    /**
     * Get contabilizar
     *
     * @return boolean 
     */
    public function getContabilizar()
    {
        return $this->contabilizar;
    }
}
