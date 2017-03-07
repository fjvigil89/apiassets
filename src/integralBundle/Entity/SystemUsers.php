<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemUsers
 *
 * @ORM\Table(name="System_Users")
 * @ORM\Entity
 */
class SystemUsers
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Modulo", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idModulo;

    /**
     * @var string
     *
     * @ORM\Column(name="ComputerName", type="string", length=50, nullable=false)
     */
    private $computername;

    /**
     * @var boolean
     *
     * @ORM\Column(name="G7XW4OMIA4", type="boolean", nullable=false)
     */
    private $g7xw4omia4;



    /**
     * Set idUser
     *
     * @param string $idUser
     * @return SystemUsers
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
     * Set idModulo
     *
     * @param string $idModulo
     * @return SystemUsers
     */
    public function setIdModulo($idModulo)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return string 
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Set computername
     *
     * @param string $computername
     * @return SystemUsers
     */
    public function setComputername($computername)
    {
        $this->computername = $computername;

        return $this;
    }

    /**
     * Get computername
     *
     * @return string 
     */
    public function getComputername()
    {
        return $this->computername;
    }

    /**
     * Set g7xw4omia4
     *
     * @param boolean $g7xw4omia4
     * @return SystemUsers
     */
    public function setG7xw4omia4($g7xw4omia4)
    {
        $this->g7xw4omia4 = $g7xw4omia4;

        return $this;
    }

    /**
     * Get g7xw4omia4
     *
     * @return boolean 
     */
    public function getG7xw4omia4()
    {
        return $this->g7xw4omia4;
    }
}
