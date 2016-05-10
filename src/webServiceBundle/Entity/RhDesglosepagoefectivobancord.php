<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhDesglosepagoefectivobancord
 *
 * @ORM\Table(name="RH_DesglosePagoEfectivoBancoRD")
 * @ORM\Entity
 */
class RhDesglosepagoefectivobancord
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExpediente;

    /**
     * @var integer
     *
     * @ORM\Column(name="ACobrar", type="integer", nullable=false)
     */
    private $acobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="ACobrarDesglosado", type="integer", nullable=false)
     */
    private $acobrardesglosado;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantBilletes100", type="integer", nullable=false)
     */
    private $cantbilletes100;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantBilletes50", type="integer", nullable=false)
     */
    private $cantbilletes50;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantBilletes20", type="integer", nullable=false)
     */
    private $cantbilletes20;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantBilletes10", type="integer", nullable=false)
     */
    private $cantbilletes10;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantBilletes5", type="integer", nullable=false)
     */
    private $cantbilletes5;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantBilletes3", type="integer", nullable=false)
     */
    private $cantbilletes3;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantBilletes1", type="integer", nullable=false)
     */
    private $cantbilletes1;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantMonedas5o3Pesos", type="integer", nullable=false)
     */
    private $cantmonedas5o3pesos;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantMonedas1Peso", type="integer", nullable=false)
     */
    private $cantmonedas1peso;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantMonedas50o20Centavos", type="integer", nullable=false)
     */
    private $cantmonedas50o20centavos;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantMonedas25o5Centavos", type="integer", nullable=false)
     */
    private $cantmonedas25o5centavos;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantMonedas10o2Centavos", type="integer", nullable=false)
     */
    private $cantmonedas10o2centavos;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantMonedas5o1Centavo", type="integer", nullable=false)
     */
    private $cantmonedas5o1centavo;

    /**
     * @var integer
     *
     * @ORM\Column(name="CantMonedas1Centavo", type="integer", nullable=false)
     */
    private $cantmonedas1centavo;



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
     * Set acobrar
     *
     * @param integer $acobrar
     * @return RhDesglosepagoefectivobancord
     */
    public function setAcobrar($acobrar)
    {
        $this->acobrar = $acobrar;

        return $this;
    }

    /**
     * Get acobrar
     *
     * @return integer 
     */
    public function getAcobrar()
    {
        return $this->acobrar;
    }

    /**
     * Set acobrardesglosado
     *
     * @param integer $acobrardesglosado
     * @return RhDesglosepagoefectivobancord
     */
    public function setAcobrardesglosado($acobrardesglosado)
    {
        $this->acobrardesglosado = $acobrardesglosado;

        return $this;
    }

    /**
     * Get acobrardesglosado
     *
     * @return integer 
     */
    public function getAcobrardesglosado()
    {
        return $this->acobrardesglosado;
    }

    /**
     * Set cantbilletes100
     *
     * @param integer $cantbilletes100
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantbilletes100($cantbilletes100)
    {
        $this->cantbilletes100 = $cantbilletes100;

        return $this;
    }

    /**
     * Get cantbilletes100
     *
     * @return integer 
     */
    public function getCantbilletes100()
    {
        return $this->cantbilletes100;
    }

    /**
     * Set cantbilletes50
     *
     * @param integer $cantbilletes50
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantbilletes50($cantbilletes50)
    {
        $this->cantbilletes50 = $cantbilletes50;

        return $this;
    }

    /**
     * Get cantbilletes50
     *
     * @return integer 
     */
    public function getCantbilletes50()
    {
        return $this->cantbilletes50;
    }

    /**
     * Set cantbilletes20
     *
     * @param integer $cantbilletes20
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantbilletes20($cantbilletes20)
    {
        $this->cantbilletes20 = $cantbilletes20;

        return $this;
    }

    /**
     * Get cantbilletes20
     *
     * @return integer 
     */
    public function getCantbilletes20()
    {
        return $this->cantbilletes20;
    }

    /**
     * Set cantbilletes10
     *
     * @param integer $cantbilletes10
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantbilletes10($cantbilletes10)
    {
        $this->cantbilletes10 = $cantbilletes10;

        return $this;
    }

    /**
     * Get cantbilletes10
     *
     * @return integer 
     */
    public function getCantbilletes10()
    {
        return $this->cantbilletes10;
    }

    /**
     * Set cantbilletes5
     *
     * @param integer $cantbilletes5
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantbilletes5($cantbilletes5)
    {
        $this->cantbilletes5 = $cantbilletes5;

        return $this;
    }

    /**
     * Get cantbilletes5
     *
     * @return integer 
     */
    public function getCantbilletes5()
    {
        return $this->cantbilletes5;
    }

    /**
     * Set cantbilletes3
     *
     * @param integer $cantbilletes3
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantbilletes3($cantbilletes3)
    {
        $this->cantbilletes3 = $cantbilletes3;

        return $this;
    }

    /**
     * Get cantbilletes3
     *
     * @return integer 
     */
    public function getCantbilletes3()
    {
        return $this->cantbilletes3;
    }

    /**
     * Set cantbilletes1
     *
     * @param integer $cantbilletes1
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantbilletes1($cantbilletes1)
    {
        $this->cantbilletes1 = $cantbilletes1;

        return $this;
    }

    /**
     * Get cantbilletes1
     *
     * @return integer 
     */
    public function getCantbilletes1()
    {
        return $this->cantbilletes1;
    }

    /**
     * Set cantmonedas5o3pesos
     *
     * @param integer $cantmonedas5o3pesos
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantmonedas5o3pesos($cantmonedas5o3pesos)
    {
        $this->cantmonedas5o3pesos = $cantmonedas5o3pesos;

        return $this;
    }

    /**
     * Get cantmonedas5o3pesos
     *
     * @return integer 
     */
    public function getCantmonedas5o3pesos()
    {
        return $this->cantmonedas5o3pesos;
    }

    /**
     * Set cantmonedas1peso
     *
     * @param integer $cantmonedas1peso
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantmonedas1peso($cantmonedas1peso)
    {
        $this->cantmonedas1peso = $cantmonedas1peso;

        return $this;
    }

    /**
     * Get cantmonedas1peso
     *
     * @return integer 
     */
    public function getCantmonedas1peso()
    {
        return $this->cantmonedas1peso;
    }

    /**
     * Set cantmonedas50o20centavos
     *
     * @param integer $cantmonedas50o20centavos
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantmonedas50o20centavos($cantmonedas50o20centavos)
    {
        $this->cantmonedas50o20centavos = $cantmonedas50o20centavos;

        return $this;
    }

    /**
     * Get cantmonedas50o20centavos
     *
     * @return integer 
     */
    public function getCantmonedas50o20centavos()
    {
        return $this->cantmonedas50o20centavos;
    }

    /**
     * Set cantmonedas25o5centavos
     *
     * @param integer $cantmonedas25o5centavos
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantmonedas25o5centavos($cantmonedas25o5centavos)
    {
        $this->cantmonedas25o5centavos = $cantmonedas25o5centavos;

        return $this;
    }

    /**
     * Get cantmonedas25o5centavos
     *
     * @return integer 
     */
    public function getCantmonedas25o5centavos()
    {
        return $this->cantmonedas25o5centavos;
    }

    /**
     * Set cantmonedas10o2centavos
     *
     * @param integer $cantmonedas10o2centavos
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantmonedas10o2centavos($cantmonedas10o2centavos)
    {
        $this->cantmonedas10o2centavos = $cantmonedas10o2centavos;

        return $this;
    }

    /**
     * Get cantmonedas10o2centavos
     *
     * @return integer 
     */
    public function getCantmonedas10o2centavos()
    {
        return $this->cantmonedas10o2centavos;
    }

    /**
     * Set cantmonedas5o1centavo
     *
     * @param integer $cantmonedas5o1centavo
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantmonedas5o1centavo($cantmonedas5o1centavo)
    {
        $this->cantmonedas5o1centavo = $cantmonedas5o1centavo;

        return $this;
    }

    /**
     * Get cantmonedas5o1centavo
     *
     * @return integer 
     */
    public function getCantmonedas5o1centavo()
    {
        return $this->cantmonedas5o1centavo;
    }

    /**
     * Set cantmonedas1centavo
     *
     * @param integer $cantmonedas1centavo
     * @return RhDesglosepagoefectivobancord
     */
    public function setCantmonedas1centavo($cantmonedas1centavo)
    {
        $this->cantmonedas1centavo = $cantmonedas1centavo;

        return $this;
    }

    /**
     * Get cantmonedas1centavo
     *
     * @return integer 
     */
    public function getCantmonedas1centavo()
    {
        return $this->cantmonedas1centavo;
    }
}
