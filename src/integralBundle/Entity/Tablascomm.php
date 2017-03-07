<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tablascomm
 *
 * @ORM\Table(name="Tablascomm")
 * @ORM\Entity
 */
class Tablascomm
{
    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Clasificacion", type="string", length=2, nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Enviar", type="boolean", nullable=false)
     */
    private $enviar;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Recibir", type="boolean", nullable=false)
     */
    private $recibir;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Confirmado", type="boolean", nullable=false)
     */
    private $confirmado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Sinconfirmar", type="boolean", nullable=false)
     */
    private $sinconfirmar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fechaenvio", type="datetime", nullable=false)
     */
    private $fechaenvio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaRecibo", type="datetime", nullable=false)
     */
    private $fecharecibo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Recibido", type="boolean", nullable=false)
     */
    private $recibido;

    /**
     * @var string
     *
     * @ORM\Column(name="Fichero", type="string", length=50, nullable=false)
     */
    private $fichero;

    /**
     * @var string
     *
     * @ORM\Column(name="FicheroDetalle", type="string", length=50, nullable=false)
     */
    private $ficherodetalle;

    /**
     * @var string
     *
     * @ORM\Column(name="Rinner", type="string", length=150, nullable=false)
     */
    private $rinner;

    /**
     * @var string
     *
     * @ORM\Column(name="Rwhere", type="string", length=150, nullable=false)
     */
    private $rwhere;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rescribir", type="boolean", nullable=false)
     */
    private $rescribir;



    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return Tablascomm
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Tablascomm
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set enviar
     *
     * @param boolean $enviar
     * @return Tablascomm
     */
    public function setEnviar($enviar)
    {
        $this->enviar = $enviar;

        return $this;
    }

    /**
     * Get enviar
     *
     * @return boolean 
     */
    public function getEnviar()
    {
        return $this->enviar;
    }

    /**
     * Set recibir
     *
     * @param boolean $recibir
     * @return Tablascomm
     */
    public function setRecibir($recibir)
    {
        $this->recibir = $recibir;

        return $this;
    }

    /**
     * Get recibir
     *
     * @return boolean 
     */
    public function getRecibir()
    {
        return $this->recibir;
    }

    /**
     * Set confirmado
     *
     * @param boolean $confirmado
     * @return Tablascomm
     */
    public function setConfirmado($confirmado)
    {
        $this->confirmado = $confirmado;

        return $this;
    }

    /**
     * Get confirmado
     *
     * @return boolean 
     */
    public function getConfirmado()
    {
        return $this->confirmado;
    }

    /**
     * Set sinconfirmar
     *
     * @param boolean $sinconfirmar
     * @return Tablascomm
     */
    public function setSinconfirmar($sinconfirmar)
    {
        $this->sinconfirmar = $sinconfirmar;

        return $this;
    }

    /**
     * Get sinconfirmar
     *
     * @return boolean 
     */
    public function getSinconfirmar()
    {
        return $this->sinconfirmar;
    }

    /**
     * Set fechaenvio
     *
     * @param \DateTime $fechaenvio
     * @return Tablascomm
     */
    public function setFechaenvio($fechaenvio)
    {
        $this->fechaenvio = $fechaenvio;

        return $this;
    }

    /**
     * Get fechaenvio
     *
     * @return \DateTime 
     */
    public function getFechaenvio()
    {
        return $this->fechaenvio;
    }

    /**
     * Set fecharecibo
     *
     * @param \DateTime $fecharecibo
     * @return Tablascomm
     */
    public function setFecharecibo($fecharecibo)
    {
        $this->fecharecibo = $fecharecibo;

        return $this;
    }

    /**
     * Get fecharecibo
     *
     * @return \DateTime 
     */
    public function getFecharecibo()
    {
        return $this->fecharecibo;
    }

    /**
     * Set recibido
     *
     * @param boolean $recibido
     * @return Tablascomm
     */
    public function setRecibido($recibido)
    {
        $this->recibido = $recibido;

        return $this;
    }

    /**
     * Get recibido
     *
     * @return boolean 
     */
    public function getRecibido()
    {
        return $this->recibido;
    }

    /**
     * Set fichero
     *
     * @param string $fichero
     * @return Tablascomm
     */
    public function setFichero($fichero)
    {
        $this->fichero = $fichero;

        return $this;
    }

    /**
     * Get fichero
     *
     * @return string 
     */
    public function getFichero()
    {
        return $this->fichero;
    }

    /**
     * Set ficherodetalle
     *
     * @param string $ficherodetalle
     * @return Tablascomm
     */
    public function setFicherodetalle($ficherodetalle)
    {
        $this->ficherodetalle = $ficherodetalle;

        return $this;
    }

    /**
     * Get ficherodetalle
     *
     * @return string 
     */
    public function getFicherodetalle()
    {
        return $this->ficherodetalle;
    }

    /**
     * Set rinner
     *
     * @param string $rinner
     * @return Tablascomm
     */
    public function setRinner($rinner)
    {
        $this->rinner = $rinner;

        return $this;
    }

    /**
     * Get rinner
     *
     * @return string 
     */
    public function getRinner()
    {
        return $this->rinner;
    }

    /**
     * Set rwhere
     *
     * @param string $rwhere
     * @return Tablascomm
     */
    public function setRwhere($rwhere)
    {
        $this->rwhere = $rwhere;

        return $this;
    }

    /**
     * Get rwhere
     *
     * @return string 
     */
    public function getRwhere()
    {
        return $this->rwhere;
    }

    /**
     * Set rescribir
     *
     * @param boolean $rescribir
     * @return Tablascomm
     */
    public function setRescribir($rescribir)
    {
        $this->rescribir = $rescribir;

        return $this;
    }

    /**
     * Get rescribir
     *
     * @return boolean 
     */
    public function getRescribir()
    {
        return $this->rescribir;
    }
}
