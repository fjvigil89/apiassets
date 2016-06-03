<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleAlquilermovout
 *
 * @ORM\Table(name="Detalle_AlquilerMovOut", indexes={@ORM\Index(name="IX_Detalle_AlquilerMovOut", columns={"Contador"})})
 * @ORM\Entity
 */
class DetalleAlquilermovout
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_AlquilerMov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anoAlquilermov;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenMov", type="string", length=5, nullable=false)
     */
    private $idAlmacenmov;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_AlquilerMov", type="integer", nullable=false)
     */
    private $idAlquilermov;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="smallint", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Rotulo", type="string", length=15, nullable=false)
     */
    private $idRotulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Activofijo", type="string", length=15, nullable=false)
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijo", type="string", length=255, nullable=false)
     */
    private $descActivofijo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Devolucion", type="datetime", nullable=false)
     */
    private $fechaDevolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Estado_Activo", type="string", length=3, nullable=false)
     */
    private $idEstadoActivo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaResp", type="string", length=10, nullable=false)
     */
    private $idArearesp;



    /**
     * Get anoAlquilermov
     *
     * @return integer 
     */
    public function getAnoAlquilermov()
    {
        return $this->anoAlquilermov;
    }

    /**
     * Set idAlmacenmov
     *
     * @param string $idAlmacenmov
     * @return DetalleAlquilermovout
     */
    public function setIdAlmacenmov($idAlmacenmov)
    {
        $this->idAlmacenmov = $idAlmacenmov;

        return $this;
    }

    /**
     * Get idAlmacenmov
     *
     * @return string 
     */
    public function getIdAlmacenmov()
    {
        return $this->idAlmacenmov;
    }

    /**
     * Set idAlquilermov
     *
     * @param integer $idAlquilermov
     * @return DetalleAlquilermovout
     */
    public function setIdAlquilermov($idAlquilermov)
    {
        $this->idAlquilermov = $idAlquilermov;

        return $this;
    }

    /**
     * Get idAlquilermov
     *
     * @return integer 
     */
    public function getIdAlquilermov()
    {
        return $this->idAlquilermov;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return DetalleAlquilermovout
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
     * Set idRotulo
     *
     * @param string $idRotulo
     * @return DetalleAlquilermovout
     */
    public function setIdRotulo($idRotulo)
    {
        $this->idRotulo = $idRotulo;

        return $this;
    }

    /**
     * Get idRotulo
     *
     * @return string 
     */
    public function getIdRotulo()
    {
        return $this->idRotulo;
    }

    /**
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return DetalleAlquilermovout
     */
    public function setIdActivofijo($idActivofijo)
    {
        $this->idActivofijo = $idActivofijo;

        return $this;
    }

    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set descActivofijo
     *
     * @param string $descActivofijo
     * @return DetalleAlquilermovout
     */
    public function setDescActivofijo($descActivofijo)
    {
        $this->descActivofijo = $descActivofijo;

        return $this;
    }

    /**
     * Get descActivofijo
     *
     * @return string 
     */
    public function getDescActivofijo()
    {
        return $this->descActivofijo;
    }

    /**
     * Set fechaDevolucion
     *
     * @param \DateTime $fechaDevolucion
     * @return DetalleAlquilermovout
     */
    public function setFechaDevolucion($fechaDevolucion)
    {
        $this->fechaDevolucion = $fechaDevolucion;

        return $this;
    }

    /**
     * Get fechaDevolucion
     *
     * @return \DateTime 
     */
    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }

    /**
     * Set idEstadoActivo
     *
     * @param string $idEstadoActivo
     * @return DetalleAlquilermovout
     */
    public function setIdEstadoActivo($idEstadoActivo)
    {
        $this->idEstadoActivo = $idEstadoActivo;

        return $this;
    }

    /**
     * Get idEstadoActivo
     *
     * @return string 
     */
    public function getIdEstadoActivo()
    {
        return $this->idEstadoActivo;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return DetalleAlquilermovout
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return DetalleAlquilermovout
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set idArearesp
     *
     * @param string $idArearesp
     * @return DetalleAlquilermovout
     */
    public function setIdArearesp($idArearesp)
    {
        $this->idArearesp = $idArearesp;

        return $this;
    }

    /**
     * Get idArearesp
     *
     * @return string 
     */
    public function getIdArearesp()
    {
        return $this->idArearesp;
    }
}
