<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registroprecio
 *
 * @ORM\Table(name="RegistroPrecio")
 * @ORM\Entity
 */
class Registroprecio
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Costo", type="string", length=15, nullable=false)
     */
    private $costo;

    /**
     * @var string
     *
     * @ORM\Column(name="Seleccion", type="string", length=50, nullable=false)
     */
    private $seleccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Valor1", type="string", length=255, nullable=false)
     */
    private $valor1;

    /**
     * @var string
     *
     * @ORM\Column(name="Valor2", type="string", length=255, nullable=false)
     */
    private $valor2;

    /**
     * @var string
     *
     * @ORM\Column(name="FormulaMB", type="string", length=255, nullable=false)
     */
    private $formulamb;

    /**
     * @var string
     *
     * @ORM\Column(name="FormulaMC", type="string", length=255, nullable=false)
     */
    private $formulamc;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Registroprecio
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

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
     * Set idUser
     *
     * @param string $idUser
     * @return Registroprecio
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
     * Set costo
     *
     * @param string $costo
     * @return Registroprecio
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return string 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set seleccion
     *
     * @param string $seleccion
     * @return Registroprecio
     */
    public function setSeleccion($seleccion)
    {
        $this->seleccion = $seleccion;

        return $this;
    }

    /**
     * Get seleccion
     *
     * @return string 
     */
    public function getSeleccion()
    {
        return $this->seleccion;
    }

    /**
     * Set valor1
     *
     * @param string $valor1
     * @return Registroprecio
     */
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }

    /**
     * Get valor1
     *
     * @return string 
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * Set valor2
     *
     * @param string $valor2
     * @return Registroprecio
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * Get valor2
     *
     * @return string 
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * Set formulamb
     *
     * @param string $formulamb
     * @return Registroprecio
     */
    public function setFormulamb($formulamb)
    {
        $this->formulamb = $formulamb;

        return $this;
    }

    /**
     * Get formulamb
     *
     * @return string 
     */
    public function getFormulamb()
    {
        return $this->formulamb;
    }

    /**
     * Set formulamc
     *
     * @param string $formulamc
     * @return Registroprecio
     */
    public function setFormulamc($formulamc)
    {
        $this->formulamc = $formulamc;

        return $this;
    }

    /**
     * Get formulamc
     *
     * @return string 
     */
    public function getFormulamc()
    {
        return $this->formulamc;
    }
}
