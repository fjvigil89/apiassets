<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CzModuleActiveBck
 *
 * @ORM\Table(name="Cz_Module_Active_Bck")
 * @ORM\Entity
 */
class CzModuleActiveBck
{
    /**
     * @var integer
     *
     * @ORM\Column(name="SpId", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $spid;

    /**
     * @var string
     *
     * @ORM\Column(name="Resultado", type="string", length=20, nullable=false)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="Computer", type="string", length=50, nullable=false)
     */
    private $computer;

    /**
     * @var string
     *
     * @ORM\Column(name="Login_Name", type="string", length=128, nullable=false)
     */
    private $loginName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=100, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="User_Assets", type="string", length=15, nullable=false)
     */
    private $userAssets;

    /**
     * @var string
     *
     * @ORM\Column(name="Module_Id", type="string", length=2, nullable=false)
     */
    private $moduleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="Nro", type="integer", nullable=false)
     */
    private $nro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sec", type="integer", nullable=false)
     */
    private $sec;

    /**
     * @var string
     *
     * @ORM\Column(name="Computer_Id", type="string", length=50, nullable=false)
     */
    private $computerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Rows_Ini_ZZ", type="integer", nullable=false)
     */
    private $rowsIniZz;

    /**
     * @var integer
     *
     * @ORM\Column(name="SpId_Updated", type="smallint", nullable=false)
     */
    private $spidUpdated;

    /**
     * @var string
     *
     * @ORM\Column(name="Obs", type="string", length=80, nullable=false)
     */
    private $obs;



    /**
     * Get spid
     *
     * @return integer 
     */
    public function getSpid()
    {
        return $this->spid;
    }

    /**
     * Set resultado
     *
     * @param string $resultado
     * @return CzModuleActiveBck
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return string 
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set computer
     *
     * @param string $computer
     * @return CzModuleActiveBck
     */
    public function setComputer($computer)
    {
        $this->computer = $computer;

        return $this;
    }

    /**
     * Get computer
     *
     * @return string 
     */
    public function getComputer()
    {
        return $this->computer;
    }

    /**
     * Set loginName
     *
     * @param string $loginName
     * @return CzModuleActiveBck
     */
    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;

        return $this;
    }

    /**
     * Get loginName
     *
     * @return string 
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return CzModuleActiveBck
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
     * Set nota
     *
     * @param string $nota
     * @return CzModuleActiveBck
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set userAssets
     *
     * @param string $userAssets
     * @return CzModuleActiveBck
     */
    public function setUserAssets($userAssets)
    {
        $this->userAssets = $userAssets;

        return $this;
    }

    /**
     * Get userAssets
     *
     * @return string 
     */
    public function getUserAssets()
    {
        return $this->userAssets;
    }

    /**
     * Set moduleId
     *
     * @param string $moduleId
     * @return CzModuleActiveBck
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return string 
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set nro
     *
     * @param integer $nro
     * @return CzModuleActiveBck
     */
    public function setNro($nro)
    {
        $this->nro = $nro;

        return $this;
    }

    /**
     * Get nro
     *
     * @return integer 
     */
    public function getNro()
    {
        return $this->nro;
    }

    /**
     * Set sec
     *
     * @param integer $sec
     * @return CzModuleActiveBck
     */
    public function setSec($sec)
    {
        $this->sec = $sec;

        return $this;
    }

    /**
     * Get sec
     *
     * @return integer 
     */
    public function getSec()
    {
        return $this->sec;
    }

    /**
     * Set computerId
     *
     * @param string $computerId
     * @return CzModuleActiveBck
     */
    public function setComputerId($computerId)
    {
        $this->computerId = $computerId;

        return $this;
    }

    /**
     * Get computerId
     *
     * @return string 
     */
    public function getComputerId()
    {
        return $this->computerId;
    }

    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return CzModuleActiveBck
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

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
     * Set rowsIniZz
     *
     * @param integer $rowsIniZz
     * @return CzModuleActiveBck
     */
    public function setRowsIniZz($rowsIniZz)
    {
        $this->rowsIniZz = $rowsIniZz;

        return $this;
    }

    /**
     * Get rowsIniZz
     *
     * @return integer 
     */
    public function getRowsIniZz()
    {
        return $this->rowsIniZz;
    }

    /**
     * Set spidUpdated
     *
     * @param integer $spidUpdated
     * @return CzModuleActiveBck
     */
    public function setSpidUpdated($spidUpdated)
    {
        $this->spidUpdated = $spidUpdated;

        return $this;
    }

    /**
     * Get spidUpdated
     *
     * @return integer 
     */
    public function getSpidUpdated()
    {
        return $this->spidUpdated;
    }

    /**
     * Set obs
     *
     * @param string $obs
     * @return CzModuleActiveBck
     */
    public function setObs($obs)
    {
        $this->obs = $obs;

        return $this;
    }

    /**
     * Get obs
     *
     * @return string 
     */
    public function getObs()
    {
        return $this->obs;
    }
}
