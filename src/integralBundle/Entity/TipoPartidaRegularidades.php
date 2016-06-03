<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPartidaRegularidades
 *
 * @ORM\Table(name="Tipo_Partida_Regularidades", indexes={@ORM\Index(name="Ix1_Tipo_Part", columns={"Documento"})})
 * @ORM\Entity
 */
class TipoPartidaRegularidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Tipo_Partida", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoPartida;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Partida", type="string", length=50, nullable=false)
     */
    private $tipoPartida;

    /**
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=10, nullable=false)
     */
    private $documento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EsDe_MC", type="boolean", nullable=false)
     */
    private $esdeMc;



    /**
     * Get idTipoPartida
     *
     * @return integer 
     */
    public function getIdTipoPartida()
    {
        return $this->idTipoPartida;
    }

    /**
     * Set tipoPartida
     *
     * @param string $tipoPartida
     * @return TipoPartidaRegularidades
     */
    public function setTipoPartida($tipoPartida)
    {
        $this->tipoPartida = $tipoPartida;

        return $this;
    }

    /**
     * Get tipoPartida
     *
     * @return string 
     */
    public function getTipoPartida()
    {
        return $this->tipoPartida;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return TipoPartidaRegularidades
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set esdeMc
     *
     * @param boolean $esdeMc
     * @return TipoPartidaRegularidades
     */
    public function setEsdeMc($esdeMc)
    {
        $this->esdeMc = $esdeMc;

        return $this;
    }

    /**
     * Get esdeMc
     *
     * @return boolean 
     */
    public function getEsdeMc()
    {
        return $this->esdeMc;
    }
}
