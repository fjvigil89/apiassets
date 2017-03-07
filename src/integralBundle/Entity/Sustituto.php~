<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sustituto
 *
 * @ORM\Table(name="Sustituto")
 * @ORM\Entity
 */
class Sustituto
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ProductoPadre", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductopadre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ProductoSustituto", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProductosustituto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ProductoSustituto", type="string", length=255, nullable=false)
     */
    private $descProductosustituto;

    /**
     * @var string
     *
     * @ORM\Column(name="Um_Sustituto", type="string", length=5, nullable=false)
     */
    private $umSustituto;



    /**
     * Set idProductopadre
     *
     * @param string $idProductopadre
     * @return Sustituto
     */
    public function setIdProductopadre($idProductopadre)
    {
        $this->idProductopadre = $idProductopadre;

        return $this;
    }

    /**
     * Get idProductopadre
     *
     * @return string 
     */
    public function getIdProductopadre()
    {
        return $this->idProductopadre;
    }

    /**
     * Set idProductosustituto
     *
     * @param string $idProductosustituto
     * @return Sustituto
     */
    public function setIdProductosustituto($idProductosustituto)
    {
        $this->idProductosustituto = $idProductosustituto;

        return $this;
    }

    /**
     * Get idProductosustituto
     *
     * @return string 
     */
    public function getIdProductosustituto()
    {
        return $this->idProductosustituto;
    }

    /**
     * Set descProductosustituto
     *
     * @param string $descProductosustituto
     * @return Sustituto
     */
    public function setDescProductosustituto($descProductosustituto)
    {
        $this->descProductosustituto = $descProductosustituto;

        return $this;
    }

    /**
     * Get descProductosustituto
     *
     * @return string 
     */
    public function getDescProductosustituto()
    {
        return $this->descProductosustituto;
    }

    /**
     * Set umSustituto
     *
     * @param string $umSustituto
     * @return Sustituto
     */
    public function setUmSustituto($umSustituto)
    {
        $this->umSustituto = $umSustituto;

        return $this;
    }

    /**
     * Get umSustituto
     *
     * @return string 
     */
    public function getUmSustituto()
    {
        return $this->umSustituto;
    }
}
