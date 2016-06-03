<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ErroresRecibo
 *
 * @ORM\Table(name="Errores_Recibo")
 * @ORM\Entity
 */
class ErroresRecibo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Refer", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refer;

    /**
     * @var string
     *
     * @ORM\Column(name="Error", type="string", length=255, nullable=false)
     */
    private $error;



    /**
     * Get refer
     *
     * @return string 
     */
    public function getRefer()
    {
        return $this->refer;
    }

    /**
     * Set error
     *
     * @param string $error
     * @return ErroresRecibo
     */
    public function setError($error)
    {
        $this->error = $error;

        return $this;
    }

    /**
     * Get error
     *
     * @return string 
     */
    public function getError()
    {
        return $this->error;
    }
}
