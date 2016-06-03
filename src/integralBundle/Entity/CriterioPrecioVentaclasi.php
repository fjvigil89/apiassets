<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CriterioPrecioVentaclasi
 *
 * @ORM\Table(name="Criterio_Precio_VentaClasi")
 * @ORM\Entity
 */
class CriterioPrecioVentaclasi
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
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=2, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Calcular", type="boolean", nullable=false)
     */
    private $calcular;

    /**
     * @var integer
     *
     * @ORM\Column(name="Condicion1", type="smallint", nullable=false)
     */
    private $condicion1;

    /**
     * @var string
     *
     * @ORM\Column(name="Signo1", type="string", length=1, nullable=false)
     */
    private $signo1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Condicion2", type="smallint", nullable=false)
     */
    private $condicion2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor1", type="integer", nullable=false)
     */
    private $valor1;

    /**
     * @var string
     *
     * @ORM\Column(name="Signo2", type="string", length=1, nullable=false)
     */
    private $signo2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Condicion3", type="smallint", nullable=false)
     */
    private $condicion3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor2", type="integer", nullable=false)
     */
    private $valor2;

    /**
     * @var string
     *
     * @ORM\Column(name="Signo3", type="string", length=1, nullable=false)
     */
    private $signo3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Condicion4", type="smallint", nullable=false)
     */
    private $condicion4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor3", type="integer", nullable=false)
     */
    private $valor3;

    /**
     * @var string
     *
     * @ORM\Column(name="Signo4", type="string", length=1, nullable=false)
     */
    private $signo4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Condicion5", type="smallint", nullable=false)
     */
    private $condicion5;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor4", type="integer", nullable=false)
     */
    private $valor4;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;



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
     * Set codigo
     *
     * @param string $codigo
     * @return CriterioPrecioVentaclasi
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
     * Set moneda
     *
     * @param string $moneda
     * @return CriterioPrecioVentaclasi
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set calcular
     *
     * @param boolean $calcular
     * @return CriterioPrecioVentaclasi
     */
    public function setCalcular($calcular)
    {
        $this->calcular = $calcular;

        return $this;
    }

    /**
     * Get calcular
     *
     * @return boolean 
     */
    public function getCalcular()
    {
        return $this->calcular;
    }

    /**
     * Set condicion1
     *
     * @param integer $condicion1
     * @return CriterioPrecioVentaclasi
     */
    public function setCondicion1($condicion1)
    {
        $this->condicion1 = $condicion1;

        return $this;
    }

    /**
     * Get condicion1
     *
     * @return integer 
     */
    public function getCondicion1()
    {
        return $this->condicion1;
    }

    /**
     * Set signo1
     *
     * @param string $signo1
     * @return CriterioPrecioVentaclasi
     */
    public function setSigno1($signo1)
    {
        $this->signo1 = $signo1;

        return $this;
    }

    /**
     * Get signo1
     *
     * @return string 
     */
    public function getSigno1()
    {
        return $this->signo1;
    }

    /**
     * Set condicion2
     *
     * @param integer $condicion2
     * @return CriterioPrecioVentaclasi
     */
    public function setCondicion2($condicion2)
    {
        $this->condicion2 = $condicion2;

        return $this;
    }

    /**
     * Get condicion2
     *
     * @return integer 
     */
    public function getCondicion2()
    {
        return $this->condicion2;
    }

    /**
     * Set valor1
     *
     * @param integer $valor1
     * @return CriterioPrecioVentaclasi
     */
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }

    /**
     * Get valor1
     *
     * @return integer 
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * Set signo2
     *
     * @param string $signo2
     * @return CriterioPrecioVentaclasi
     */
    public function setSigno2($signo2)
    {
        $this->signo2 = $signo2;

        return $this;
    }

    /**
     * Get signo2
     *
     * @return string 
     */
    public function getSigno2()
    {
        return $this->signo2;
    }

    /**
     * Set condicion3
     *
     * @param integer $condicion3
     * @return CriterioPrecioVentaclasi
     */
    public function setCondicion3($condicion3)
    {
        $this->condicion3 = $condicion3;

        return $this;
    }

    /**
     * Get condicion3
     *
     * @return integer 
     */
    public function getCondicion3()
    {
        return $this->condicion3;
    }

    /**
     * Set valor2
     *
     * @param integer $valor2
     * @return CriterioPrecioVentaclasi
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * Get valor2
     *
     * @return integer 
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * Set signo3
     *
     * @param string $signo3
     * @return CriterioPrecioVentaclasi
     */
    public function setSigno3($signo3)
    {
        $this->signo3 = $signo3;

        return $this;
    }

    /**
     * Get signo3
     *
     * @return string 
     */
    public function getSigno3()
    {
        return $this->signo3;
    }

    /**
     * Set condicion4
     *
     * @param integer $condicion4
     * @return CriterioPrecioVentaclasi
     */
    public function setCondicion4($condicion4)
    {
        $this->condicion4 = $condicion4;

        return $this;
    }

    /**
     * Get condicion4
     *
     * @return integer 
     */
    public function getCondicion4()
    {
        return $this->condicion4;
    }

    /**
     * Set valor3
     *
     * @param integer $valor3
     * @return CriterioPrecioVentaclasi
     */
    public function setValor3($valor3)
    {
        $this->valor3 = $valor3;

        return $this;
    }

    /**
     * Get valor3
     *
     * @return integer 
     */
    public function getValor3()
    {
        return $this->valor3;
    }

    /**
     * Set signo4
     *
     * @param string $signo4
     * @return CriterioPrecioVentaclasi
     */
    public function setSigno4($signo4)
    {
        $this->signo4 = $signo4;

        return $this;
    }

    /**
     * Get signo4
     *
     * @return string 
     */
    public function getSigno4()
    {
        return $this->signo4;
    }

    /**
     * Set condicion5
     *
     * @param integer $condicion5
     * @return CriterioPrecioVentaclasi
     */
    public function setCondicion5($condicion5)
    {
        $this->condicion5 = $condicion5;

        return $this;
    }

    /**
     * Get condicion5
     *
     * @return integer 
     */
    public function getCondicion5()
    {
        return $this->condicion5;
    }

    /**
     * Set valor4
     *
     * @param integer $valor4
     * @return CriterioPrecioVentaclasi
     */
    public function setValor4($valor4)
    {
        $this->valor4 = $valor4;

        return $this;
    }

    /**
     * Get valor4
     *
     * @return integer 
     */
    public function getValor4()
    {
        return $this->valor4;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return CriterioPrecioVentaclasi
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
}
