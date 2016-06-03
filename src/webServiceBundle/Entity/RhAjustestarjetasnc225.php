<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhAjustestarjetasnc225
 *
 * @ORM\Table(name="RH_AjustesTarjetaSNC_225")
 * @ORM\Entity
 */
class RhAjustestarjetasnc225
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
     * @var integer
     *
     * @ORM\Column(name="AnoAjustar", type="smallint", nullable=false)
     */
    private $anoajustar;

    /**
     * @var integer
     *
     * @ORM\Column(name="MesAjustar", type="smallint", nullable=false)
     */
    private $mesajustar;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $dias;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe", type="integer", nullable=false)
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="Claves", type="string", length=6, nullable=false)
     */
    private $claves;

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
     * @ORM\Column(name="AjusteClaves", type="string", length=6, nullable=false)
     */
    private $ajusteclaves;

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
     * @return RhAjustestarjetasnc225
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
     * @return RhAjustestarjetasnc225
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
     * @return RhAjustestarjetasnc225
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
     * @return RhAjustestarjetasnc225
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
     * @return RhAjustestarjetasnc225
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
     * @return RhAjustestarjetasnc225
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
     * Set anoajustar
     *
     * @param integer $anoajustar
     * @return RhAjustestarjetasnc225
     */
    public function setAnoajustar($anoajustar)
    {
        $this->anoajustar = $anoajustar;

        return $this;
    }

    /**
     * Get anoajustar
     *
     * @return integer 
     */
    public function getAnoajustar()
    {
        return $this->anoajustar;
    }

    /**
     * Set mesajustar
     *
     * @param integer $mesajustar
     * @return RhAjustestarjetasnc225
     */
    public function setMesajustar($mesajustar)
    {
        $this->mesajustar = $mesajustar;

        return $this;
    }

    /**
     * Get mesajustar
     *
     * @return integer 
     */
    public function getMesajustar()
    {
        return $this->mesajustar;
    }

    /**
     * Set dias
     *
     * @param string $dias
     * @return RhAjustestarjetasnc225
     */
    public function setDias($dias)
    {
        $this->dias = $dias;

        return $this;
    }

    /**
     * Get dias
     *
     * @return string 
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * Set importe
     *
     * @param integer $importe
     * @return RhAjustestarjetasnc225
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return integer 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set claves
     *
     * @param string $claves
     * @return RhAjustestarjetasnc225
     */
    public function setClaves($claves)
    {
        $this->claves = $claves;

        return $this;
    }

    /**
     * Get claves
     *
     * @return string 
     */
    public function getClaves()
    {
        return $this->claves;
    }

    /**
     * Set ajustedias
     *
     * @param string $ajustedias
     * @return RhAjustestarjetasnc225
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
     * @return RhAjustestarjetasnc225
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
     * Set ajusteclaves
     *
     * @param string $ajusteclaves
     * @return RhAjustestarjetasnc225
     */
    public function setAjusteclaves($ajusteclaves)
    {
        $this->ajusteclaves = $ajusteclaves;

        return $this;
    }

    /**
     * Get ajusteclaves
     *
     * @return string 
     */
    public function getAjusteclaves()
    {
        return $this->ajusteclaves;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return RhAjustestarjetasnc225
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
     * @return RhAjustestarjetasnc225
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
     * @return RhAjustestarjetasnc225
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
}
