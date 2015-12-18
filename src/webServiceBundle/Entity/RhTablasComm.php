<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTablasComm
 *
 * @ORM\Table(name="RH_Tablas_Comm")
 * @ORM\Entity
 */
class RhTablasComm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Tabla", type="string", length=100, nullable=false)
     */
    private $nombreTabla;

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
     * @ORM\Column(name="Fecha_Envio", type="datetime", nullable=false)
     */
    private $fechaEnvio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Recibo", type="datetime", nullable=false)
     */
    private $fechaRecibo;

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
     * @ORM\Column(name="Truncar_Tabla", type="boolean", nullable=false)
     */
    private $truncarTabla;

    /**
     * @var boolean
     *
     * @ORM\Column(name="OKSend", type="boolean", nullable=false)
     */
    private $oksend;

    /**
     * @var boolean
     *
     * @ORM\Column(name="OKReceive", type="boolean", nullable=false)
     */
    private $okreceive;



    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhTablasComm
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set nombreTabla
     *
     * @param string $nombreTabla
     * @return RhTablasComm
     */
    public function setNombreTabla($nombreTabla)
    {
        $this->nombreTabla = $nombreTabla;

        return $this;
    }

    /**
     * Get nombreTabla
     *
     * @return string 
     */
    public function getNombreTabla()
    {
        return $this->nombreTabla;
    }

    /**
     * Set enviar
     *
     * @param boolean $enviar
     * @return RhTablasComm
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
     * @return RhTablasComm
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
     * Set fechaEnvio
     *
     * @param \DateTime $fechaEnvio
     * @return RhTablasComm
     */
    public function setFechaEnvio($fechaEnvio)
    {
        $this->fechaEnvio = $fechaEnvio;

        return $this;
    }

    /**
     * Get fechaEnvio
     *
     * @return \DateTime 
     */
    public function getFechaEnvio()
    {
        return $this->fechaEnvio;
    }

    /**
     * Set fechaRecibo
     *
     * @param \DateTime $fechaRecibo
     * @return RhTablasComm
     */
    public function setFechaRecibo($fechaRecibo)
    {
        $this->fechaRecibo = $fechaRecibo;

        return $this;
    }

    /**
     * Get fechaRecibo
     *
     * @return \DateTime 
     */
    public function getFechaRecibo()
    {
        return $this->fechaRecibo;
    }

    /**
     * Set recibido
     *
     * @param boolean $recibido
     * @return RhTablasComm
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
     * @return RhTablasComm
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
     * @return RhTablasComm
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
     * @return RhTablasComm
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
     * @return RhTablasComm
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
     * Set truncarTabla
     *
     * @param boolean $truncarTabla
     * @return RhTablasComm
     */
    public function setTruncarTabla($truncarTabla)
    {
        $this->truncarTabla = $truncarTabla;

        return $this;
    }

    /**
     * Get truncarTabla
     *
     * @return boolean 
     */
    public function getTruncarTabla()
    {
        return $this->truncarTabla;
    }

    /**
     * Set oksend
     *
     * @param boolean $oksend
     * @return RhTablasComm
     */
    public function setOksend($oksend)
    {
        $this->oksend = $oksend;

        return $this;
    }

    /**
     * Get oksend
     *
     * @return boolean 
     */
    public function getOksend()
    {
        return $this->oksend;
    }

    /**
     * Set okreceive
     *
     * @param boolean $okreceive
     * @return RhTablasComm
     */
    public function setOkreceive($okreceive)
    {
        $this->okreceive = $okreceive;

        return $this;
    }

    /**
     * Get okreceive
     *
     * @return boolean 
     */
    public function getOkreceive()
    {
        return $this->okreceive;
    }
}
