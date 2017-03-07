<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Generaajuste
 *
 * @ORM\Table(name="GeneraAjuste")
 * @ORM\Entity
 */
class Generaajuste
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Ajuste", type="datetime", nullable=false)
     */
    private $fechaAjuste;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=5, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=60, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoAjuste", type="smallint", nullable=false)
     */
    private $tipoajuste;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=500, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_DocRef", type="integer", nullable=false)
     */
    private $idDocref;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_DocRef", type="smallint", nullable=false)
     */
    private $anoDocref;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ajuste_Contador", type="integer", nullable=false)
     */
    private $ajusteContador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=255, nullable=false)
     */
    private $descProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="UM_Almacen", type="string", length=5, nullable=false)
     */
    private $umAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Lote", type="string", length=20, nullable=false)
     */
    private $idLote;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoAduana", type="smallint", nullable=false)
     */
    private $tipoaduana;



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
     * Set confirmada
     *
     * @param integer $confirmada
     * @return Generaajuste
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return integer 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Generaajuste
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Generaajuste
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Get fechaConfirmacion
     *
     * @return \DateTime 
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Set fechaAjuste
     *
     * @param \DateTime $fechaAjuste
     * @return Generaajuste
     */
    public function setFechaAjuste($fechaAjuste)
    {
        $this->fechaAjuste = $fechaAjuste;

        return $this;
    }

    /**
     * Get fechaAjuste
     *
     * @return \DateTime 
     */
    public function getFechaAjuste()
    {
        return $this->fechaAjuste;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return Generaajuste
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Generaajuste
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tipoajuste
     *
     * @param integer $tipoajuste
     * @return Generaajuste
     */
    public function setTipoajuste($tipoajuste)
    {
        $this->tipoajuste = $tipoajuste;

        return $this;
    }

    /**
     * Get tipoajuste
     *
     * @return integer 
     */
    public function getTipoajuste()
    {
        return $this->tipoajuste;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Generaajuste
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return Generaajuste
     */
    public function setDescAlmacen($descAlmacen)
    {
        $this->descAlmacen = $descAlmacen;

        return $this;
    }

    /**
     * Get descAlmacen
     *
     * @return string 
     */
    public function getDescAlmacen()
    {
        return $this->descAlmacen;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Generaajuste
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return Generaajuste
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set idDocref
     *
     * @param integer $idDocref
     * @return Generaajuste
     */
    public function setIdDocref($idDocref)
    {
        $this->idDocref = $idDocref;

        return $this;
    }

    /**
     * Get idDocref
     *
     * @return integer 
     */
    public function getIdDocref()
    {
        return $this->idDocref;
    }

    /**
     * Set anoDocref
     *
     * @param integer $anoDocref
     * @return Generaajuste
     */
    public function setAnoDocref($anoDocref)
    {
        $this->anoDocref = $anoDocref;

        return $this;
    }

    /**
     * Get anoDocref
     *
     * @return integer 
     */
    public function getAnoDocref()
    {
        return $this->anoDocref;
    }

    /**
     * Set ajusteContador
     *
     * @param integer $ajusteContador
     * @return Generaajuste
     */
    public function setAjusteContador($ajusteContador)
    {
        $this->ajusteContador = $ajusteContador;

        return $this;
    }

    /**
     * Get ajusteContador
     *
     * @return integer 
     */
    public function getAjusteContador()
    {
        return $this->ajusteContador;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return Generaajuste
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return string 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set descProducto
     *
     * @param string $descProducto
     * @return Generaajuste
     */
    public function setDescProducto($descProducto)
    {
        $this->descProducto = $descProducto;

        return $this;
    }

    /**
     * Get descProducto
     *
     * @return string 
     */
    public function getDescProducto()
    {
        return $this->descProducto;
    }

    /**
     * Set umAlmacen
     *
     * @param string $umAlmacen
     * @return Generaajuste
     */
    public function setUmAlmacen($umAlmacen)
    {
        $this->umAlmacen = $umAlmacen;

        return $this;
    }

    /**
     * Get umAlmacen
     *
     * @return string 
     */
    public function getUmAlmacen()
    {
        return $this->umAlmacen;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Generaajuste
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set idLote
     *
     * @param string $idLote
     * @return Generaajuste
     */
    public function setIdLote($idLote)
    {
        $this->idLote = $idLote;

        return $this;
    }

    /**
     * Get idLote
     *
     * @return string 
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Set tipoaduana
     *
     * @param integer $tipoaduana
     * @return Generaajuste
     */
    public function setTipoaduana($tipoaduana)
    {
        $this->tipoaduana = $tipoaduana;

        return $this;
    }

    /**
     * Get tipoaduana
     *
     * @return integer 
     */
    public function getTipoaduana()
    {
        return $this->tipoaduana;
    }
}
