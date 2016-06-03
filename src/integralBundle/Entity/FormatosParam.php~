<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormatosParam
 *
 * @ORM\Table(name="Formatos_Param")
 * @ORM\Entity
 */
class FormatosParam
{
    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_EF", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tipoEf;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero_Formato", type="smallint", nullable=false)
     */
    private $numeroFormato;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Formato", type="string", length=30, nullable=false)
     */
    private $nombreFormato;



    /**
     * Get tipoEf
     *
     * @return string 
     */
    public function getTipoEf()
    {
        return $this->tipoEf;
    }

    /**
     * Set numeroFormato
     *
     * @param integer $numeroFormato
     * @return FormatosParam
     */
    public function setNumeroFormato($numeroFormato)
    {
        $this->numeroFormato = $numeroFormato;

        return $this;
    }

    /**
     * Get numeroFormato
     *
     * @return integer 
     */
    public function getNumeroFormato()
    {
        return $this->numeroFormato;
    }

    /**
     * Set nombreFormato
     *
     * @param string $nombreFormato
     * @return FormatosParam
     */
    public function setNombreFormato($nombreFormato)
    {
        $this->nombreFormato = $nombreFormato;

        return $this;
    }

    /**
     * Get nombreFormato
     *
     * @return string 
     */
    public function getNombreFormato()
    {
        return $this->nombreFormato;
    }
}
