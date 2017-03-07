<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TconciliacionBank
 *
 * @ORM\Table(name="TConciliacion_Bank", indexes={@ORM\Index(name="Ix_Conc_Bank", columns={"Id_Compro", "Ano", "Mes"})})
 * @ORM\Entity
 */
class TconciliacionBank
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=15, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Doc", type="string", length=20, nullable=false)
     */
    private $idDoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="DEBE", type="integer", nullable=false)
     */
    private $debe;

    /**
     * @var integer
     *
     * @ORM\Column(name="HABER", type="integer", nullable=false)
     */
    private $haber;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Transito", type="boolean", nullable=false)
     */
    private $transito;

    /**
     * @var integer
     *
     * @ORM\Column(name="Items", type="integer", nullable=false)
     */
    private $items;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Conciliacion", type="datetime", nullable=false)
     */
    private $fechaConciliacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="Computer_Name", type="string", length=50, nullable=false)
     */
    private $computerName;



    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return TconciliacionBank
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return TconciliacionBank
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
     * Set idCompro
     *
     * @param integer $idCompro
     * @return TconciliacionBank
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return integer 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set idDoc
     *
     * @param string $idDoc
     * @return TconciliacionBank
     */
    public function setIdDoc($idDoc)
    {
        $this->idDoc = $idDoc;

        return $this;
    }

    /**
     * Get idDoc
     *
     * @return string 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set debe
     *
     * @param integer $debe
     * @return TconciliacionBank
     */
    public function setDebe($debe)
    {
        $this->debe = $debe;

        return $this;
    }

    /**
     * Get debe
     *
     * @return integer 
     */
    public function getDebe()
    {
        return $this->debe;
    }

    /**
     * Set haber
     *
     * @param integer $haber
     * @return TconciliacionBank
     */
    public function setHaber($haber)
    {
        $this->haber = $haber;

        return $this;
    }

    /**
     * Get haber
     *
     * @return integer 
     */
    public function getHaber()
    {
        return $this->haber;
    }

    /**
     * Set transito
     *
     * @param boolean $transito
     * @return TconciliacionBank
     */
    public function setTransito($transito)
    {
        $this->transito = $transito;

        return $this;
    }

    /**
     * Get transito
     *
     * @return boolean 
     */
    public function getTransito()
    {
        return $this->transito;
    }

    /**
     * Set items
     *
     * @param integer $items
     * @return TconciliacionBank
     */
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get items
     *
     * @return integer 
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set fechaConciliacion
     *
     * @param \DateTime $fechaConciliacion
     * @return TconciliacionBank
     */
    public function setFechaConciliacion($fechaConciliacion)
    {
        $this->fechaConciliacion = $fechaConciliacion;

        return $this;
    }

    /**
     * Get fechaConciliacion
     *
     * @return \DateTime 
     */
    public function getFechaConciliacion()
    {
        return $this->fechaConciliacion;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return TconciliacionBank
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
     * Set computerName
     *
     * @param string $computerName
     * @return TconciliacionBank
     */
    public function setComputerName($computerName)
    {
        $this->computerName = $computerName;

        return $this;
    }

    /**
     * Get computerName
     *
     * @return string 
     */
    public function getComputerName()
    {
        return $this->computerName;
    }
}
