<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhAjustessubmayorvacaciones
 *
 * @ORM\Table(name="RH_AjustesSubmayorVacaciones")
 * @ORM\Entity
 */
class RhAjustessubmayorvacaciones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="SaldoDias", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $saldodias;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoImporte", type="integer", nullable=false)
     */
    private $saldoimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteDias", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $ajustedias;

    /**
     * @var integer
     *
     * @ORM\Column(name="AjusteImporte", type="integer", nullable=false)
     */
    private $ajusteimporte;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=100, nullable=false)
     */
    private $observaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ProcesarAjuste", type="boolean", nullable=false)
     */
    private $procesarajuste;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Procesado", type="boolean", nullable=false)
     */
    private $procesado;

    /**
     * @var integer
     *
     * @ORM\Column(name="SaldoPuntos", type="integer", nullable=false)
     */
    private $saldopuntos;

    /**
     * @var integer
     *
     * @ORM\Column(name="AjustePuntos", type="integer", nullable=false)
     */
    private $ajustepuntos;



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
     * Set contador
     *
     * @param integer $contador
     * @return RhAjustessubmayorvacaciones
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
     * Set ano
     *
     * @param integer $ano
     * @return RhAjustessubmayorvacaciones
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
     * Set mes
     *
     * @param integer $mes
     * @return RhAjustessubmayorvacaciones
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
     * Set tipoPago
     *
     * @param integer $tipoPago
     * @return RhAjustessubmayorvacaciones
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Get tipoPago
     *
     * @return integer 
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhAjustessubmayorvacaciones
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return RhAjustessubmayorvacaciones
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
     * Set saldodias
     *
     * @param string $saldodias
     * @return RhAjustessubmayorvacaciones
     */
    public function setSaldodias($saldodias)
    {
        $this->saldodias = $saldodias;

        return $this;
    }

    /**
     * Get saldodias
     *
     * @return string 
     */
    public function getSaldodias()
    {
        return $this->saldodias;
    }

    /**
     * Set saldoimporte
     *
     * @param integer $saldoimporte
     * @return RhAjustessubmayorvacaciones
     */
    public function setSaldoimporte($saldoimporte)
    {
        $this->saldoimporte = $saldoimporte;

        return $this;
    }

    /**
     * Get saldoimporte
     *
     * @return integer 
     */
    public function getSaldoimporte()
    {
        return $this->saldoimporte;
    }

    /**
     * Set ajustedias
     *
     * @param string $ajustedias
     * @return RhAjustessubmayorvacaciones
     */
    public function setAjustedias($ajustedias)
    {
        $this->ajustedias = $ajustedias;

        return $this;
    }

    /**
     * Get ajustedias
     *
     * @return string 
     */
    public function getAjustedias()
    {
        return $this->ajustedias;
    }

    /**
     * Set ajusteimporte
     *
     * @param integer $ajusteimporte
     * @return RhAjustessubmayorvacaciones
     */
    public function setAjusteimporte($ajusteimporte)
    {
        $this->ajusteimporte = $ajusteimporte;

        return $this;
    }

    /**
     * Get ajusteimporte
     *
     * @return integer 
     */
    public function getAjusteimporte()
    {
        return $this->ajusteimporte;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return RhAjustessubmayorvacaciones
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set procesarajuste
     *
     * @param boolean $procesarajuste
     * @return RhAjustessubmayorvacaciones
     */
    public function setProcesarajuste($procesarajuste)
    {
        $this->procesarajuste = $procesarajuste;

        return $this;
    }

    /**
     * Get procesarajuste
     *
     * @return boolean 
     */
    public function getProcesarajuste()
    {
        return $this->procesarajuste;
    }

    /**
     * Set procesado
     *
     * @param boolean $procesado
     * @return RhAjustessubmayorvacaciones
     */
    public function setProcesado($procesado)
    {
        $this->procesado = $procesado;

        return $this;
    }

    /**
     * Get procesado
     *
     * @return boolean 
     */
    public function getProcesado()
    {
        return $this->procesado;
    }

    /**
     * Set saldopuntos
     *
     * @param integer $saldopuntos
     * @return RhAjustessubmayorvacaciones
     */
    public function setSaldopuntos($saldopuntos)
    {
        $this->saldopuntos = $saldopuntos;

        return $this;
    }

    /**
     * Get saldopuntos
     *
     * @return integer 
     */
    public function getSaldopuntos()
    {
        return $this->saldopuntos;
    }

    /**
     * Set ajustepuntos
     *
     * @param integer $ajustepuntos
     * @return RhAjustessubmayorvacaciones
     */
    public function setAjustepuntos($ajustepuntos)
    {
        $this->ajustepuntos = $ajustepuntos;

        return $this;
    }

    /**
     * Get ajustepuntos
     *
     * @return integer 
     */
    public function getAjustepuntos()
    {
        return $this->ajustepuntos;
    }
}
