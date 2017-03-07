<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TablaNcf
 *
 * @ORM\Table(name="Tabla_NCF")
 * @ORM\Entity
 */
class TablaNcf
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAgrupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Dcto", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dcto;

    /**
     * @var string
     *
     * @ORM\Column(name="Numero", type="string", length=11, nullable=false)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="Conse", type="integer", nullable=false)
     */
    private $conse;



    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return TablaNcf
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set dcto
     *
     * @param string $dcto
     * @return TablaNcf
     */
    public function setDcto($dcto)
    {
        $this->dcto = $dcto;

        return $this;
    }

    /**
     * Get dcto
     *
     * @return string 
     */
    public function getDcto()
    {
        return $this->dcto;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return TablaNcf
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set conse
     *
     * @param integer $conse
     * @return TablaNcf
     */
    public function setConse($conse)
    {
        $this->conse = $conse;

        return $this;
    }

    /**
     * Get conse
     *
     * @return integer 
     */
    public function getConse()
    {
        return $this->conse;
    }
}
