<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CfItems
 *
 * @ORM\Table(name="CF_Items")
 * @ORM\Entity
 */
class CfItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Item", type="string", length=10, nullable=false)
     */
    private $idItem;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Item", type="string", length=70, nullable=false)
     */
    private $descItem;

    /**
     * @var integer
     *
     * @ORM\Column(name="Aumenta_Caja", type="smallint", nullable=false)
     */
    private $aumentaCaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Relacionado_Con", type="string", length=20, nullable=false)
     */
    private $relacionadoCon;

    /**
     * @var integer
     *
     * @ORM\Column(name="Activo", type="smallint", nullable=false)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuentazz", type="string", length=50, nullable=false)
     */
    private $idCuentazz;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set idItem
     *
     * @param string $idItem
     * @return CfItems
     */
    public function setIdItem($idItem)
    {
        $this->idItem = $idItem;

        return $this;
    }

    /**
     * Get idItem
     *
     * @return string 
     */
    public function getIdItem()
    {
        return $this->idItem;
    }

    /**
     * Set descItem
     *
     * @param string $descItem
     * @return CfItems
     */
    public function setDescItem($descItem)
    {
        $this->descItem = $descItem;

        return $this;
    }

    /**
     * Get descItem
     *
     * @return string 
     */
    public function getDescItem()
    {
        return $this->descItem;
    }

    /**
     * Set aumentaCaja
     *
     * @param integer $aumentaCaja
     * @return CfItems
     */
    public function setAumentaCaja($aumentaCaja)
    {
        $this->aumentaCaja = $aumentaCaja;

        return $this;
    }

    /**
     * Get aumentaCaja
     *
     * @return integer 
     */
    public function getAumentaCaja()
    {
        return $this->aumentaCaja;
    }

    /**
     * Set relacionadoCon
     *
     * @param string $relacionadoCon
     * @return CfItems
     */
    public function setRelacionadoCon($relacionadoCon)
    {
        $this->relacionadoCon = $relacionadoCon;

        return $this;
    }

    /**
     * Get relacionadoCon
     *
     * @return string 
     */
    public function getRelacionadoCon()
    {
        return $this->relacionadoCon;
    }

    /**
     * Set activo
     *
     * @param integer $activo
     * @return CfItems
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return integer 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set idCuentazz
     *
     * @param string $idCuentazz
     * @return CfItems
     */
    public function setIdCuentazz($idCuentazz)
    {
        $this->idCuentazz = $idCuentazz;

        return $this;
    }

    /**
     * Get idCuentazz
     *
     * @return string 
     */
    public function getIdCuentazz()
    {
        return $this->idCuentazz;
    }
}
