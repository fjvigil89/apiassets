<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmCatClientePot
 *
 * @ORM\Table(name="CRM_Cat_Cliente_Pot")
 * @ORM\Entity
 */
class CrmCatClientePot
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente_Pot", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClientePot;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente_Pot", type="string", length=50, nullable=false)
     */
    private $descClientePot;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Contacto", type="string", length=30, nullable=false)
     */
    private $nombreContacto;

    /**
     * @var string
     *
     * @ORM\Column(name="Cargo", type="string", length=30, nullable=false)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="Direccion", type="string", length=80, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefono", type="string", length=24, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer", nullable=false)
     */
    private $item;



    /**
     * Get idClientePot
     *
     * @return string 
     */
    public function getIdClientePot()
    {
        return $this->idClientePot;
    }

    /**
     * Set descClientePot
     *
     * @param string $descClientePot
     * @return CrmCatClientePot
     */
    public function setDescClientePot($descClientePot)
    {
        $this->descClientePot = $descClientePot;

        return $this;
    }

    /**
     * Get descClientePot
     *
     * @return string 
     */
    public function getDescClientePot()
    {
        return $this->descClientePot;
    }

    /**
     * Set nombreContacto
     *
     * @param string $nombreContacto
     * @return CrmCatClientePot
     */
    public function setNombreContacto($nombreContacto)
    {
        $this->nombreContacto = $nombreContacto;

        return $this;
    }

    /**
     * Get nombreContacto
     *
     * @return string 
     */
    public function getNombreContacto()
    {
        return $this->nombreContacto;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return CrmCatClientePot
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return CrmCatClientePot
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return CrmCatClientePot
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return CrmCatClientePot
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set item
     *
     * @param integer $item
     * @return CrmCatClientePot
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }
}
