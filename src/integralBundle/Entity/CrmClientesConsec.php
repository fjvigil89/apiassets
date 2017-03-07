<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmClientesConsec
 *
 * @ORM\Table(name="CRM_Clientes_Consec")
 * @ORM\Entity
 */
class CrmClientesConsec
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec", type="integer", nullable=false)
     */
    private $consec;



    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return CrmClientesConsec
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
     * Set consec
     *
     * @param integer $consec
     * @return CrmClientesConsec
     */
    public function setConsec($consec)
    {
        $this->consec = $consec;

        return $this;
    }

    /**
     * Get consec
     *
     * @return integer 
     */
    public function getConsec()
    {
        return $this->consec;
    }
}
