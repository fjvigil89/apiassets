<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnidadesMedida
 *
 * @ORM\Table(name="Unidades_Medida")
 * @ORM\Entity
 */
class UnidadesMedida
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Um", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUm;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Um", type="string", length=50, nullable=false)
     */
    private $descUm;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Um", type="string", length=2, nullable=false)
     */
    private $codUm;



    /**
     * Get idUm
     *
     * @return string 
     */
    public function getIdUm()
    {
        return $this->idUm;
    }

    /**
     * Set descUm
     *
     * @param string $descUm
     * @return UnidadesMedida
     */
    public function setDescUm($descUm)
    {
        $this->descUm = $descUm;

        return $this;
    }

    /**
     * Get descUm
     *
     * @return string 
     */
    public function getDescUm()
    {
        return $this->descUm;
    }

    /**
     * Set codUm
     *
     * @param string $codUm
     * @return UnidadesMedida
     */
    public function setCodUm($codUm)
    {
        $this->codUm = $codUm;

        return $this;
    }

    /**
     * Get codUm
     *
     * @return string 
     */
    public function getCodUm()
    {
        return $this->codUm;
    }
}
