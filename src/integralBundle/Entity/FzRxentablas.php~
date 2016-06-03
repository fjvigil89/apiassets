<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRxentablas
 *
 * @ORM\Table(name="Fz_RXEnTablas")
 * @ORM\Entity
 */
class FzRxentablas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=4, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Clasificacion", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=100, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipo;

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
     * @ORM\Column(name="Msg", type="string", length=150, nullable=false)
     */
    private $msg;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Confirmado1", type="boolean", nullable=false)
     */
    private $confirmado1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Sinconfirmar1", type="boolean", nullable=false)
     */
    private $sinconfirmar1;



    /**
     * Set codigo
     *
     * @param string $codigo
     * @return FzRxentablas
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

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
     * @return FzRxentablas
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
     * @return FzRxentablas
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
     * Set tipo
     *
     * @param integer $tipo
     * @return FzRxentablas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set enviar
     *
     * @param boolean $enviar
     * @return FzRxentablas
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
     * @return FzRxentablas
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
     * Set fechaenvio
     *
     * @param \DateTime $fechaenvio
     * @return FzRxentablas
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
     * @return FzRxentablas
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
     * @return FzRxentablas
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
     * @return FzRxentablas
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
     * Set msg
     *
     * @param string $msg
     * @return FzRxentablas
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }

    /**
     * Get msg
     *
     * @return string 
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Set confirmado1
     *
     * @param boolean $confirmado1
     * @return FzRxentablas
     */
    public function setConfirmado1($confirmado1)
    {
        $this->confirmado1 = $confirmado1;

        return $this;
    }

    /**
     * Get confirmado1
     *
     * @return boolean 
     */
    public function getConfirmado1()
    {
        return $this->confirmado1;
    }

    /**
     * Set sinconfirmar1
     *
     * @param boolean $sinconfirmar1
     * @return FzRxentablas
     */
    public function setSinconfirmar1($sinconfirmar1)
    {
        $this->sinconfirmar1 = $sinconfirmar1;

        return $this;
    }

    /**
     * Get sinconfirmar1
     *
     * @return boolean 
     */
    public function getSinconfirmar1()
    {
        return $this->sinconfirmar1;
    }
}
