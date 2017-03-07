<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OagrupSelecc
 *
 * @ORM\Table(name="OAgrup_Selecc")
 * @ORM\Entity
 */
class OagrupSelecc
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgrupacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Agrupacion", type="string", length=50, nullable=false)
     */
    private $agrupacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Incluir", type="boolean", nullable=false)
     */
    private $incluir;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="Usp_Id", type="smallint", nullable=false)
     */
    private $uspId;



    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set agrupacion
     *
     * @param string $agrupacion
     * @return OagrupSelecc
     */
    public function setAgrupacion($agrupacion)
    {
        $this->agrupacion = $agrupacion;

        return $this;
    }

    /**
     * Get agrupacion
     *
     * @return string 
     */
    public function getAgrupacion()
    {
        return $this->agrupacion;
    }

    /**
     * Set incluir
     *
     * @param boolean $incluir
     * @return OagrupSelecc
     */
    public function setIncluir($incluir)
    {
        $this->incluir = $incluir;

        return $this;
    }

    /**
     * Get incluir
     *
     * @return boolean 
     */
    public function getIncluir()
    {
        return $this->incluir;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return OagrupSelecc
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
     * Set uspId
     *
     * @param integer $uspId
     * @return OagrupSelecc
     */
    public function setUspId($uspId)
    {
        $this->uspId = $uspId;

        return $this;
    }

    /**
     * Get uspId
     *
     * @return integer 
     */
    public function getUspId()
    {
        return $this->uspId;
    }
}
