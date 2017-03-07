<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagoSolicChequeCons
 *
 * @ORM\Table(name="Pago_Solic_Cheque_Cons")
 * @ORM\Entity
 */
class PagoSolicChequeCons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consec_Solic_Cheque", type="integer", nullable=false)
     */
    private $consecSolicCheque;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cerrado", type="boolean", nullable=false)
     */
    private $cerrado;



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
     * Set consecSolicCheque
     *
     * @param integer $consecSolicCheque
     * @return PagoSolicChequeCons
     */
    public function setConsecSolicCheque($consecSolicCheque)
    {
        $this->consecSolicCheque = $consecSolicCheque;

        return $this;
    }

    /**
     * Get consecSolicCheque
     *
     * @return integer 
     */
    public function getConsecSolicCheque()
    {
        return $this->consecSolicCheque;
    }

    /**
     * Set cerrado
     *
     * @param boolean $cerrado
     * @return PagoSolicChequeCons
     */
    public function setCerrado($cerrado)
    {
        $this->cerrado = $cerrado;

        return $this;
    }

    /**
     * Get cerrado
     *
     * @return boolean 
     */
    public function getCerrado()
    {
        return $this->cerrado;
    }
}
