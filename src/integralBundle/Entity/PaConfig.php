<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaConfig
 *
 * @ORM\Table(name="Pa_Config")
 * @ORM\Entity
 */
class PaConfig
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
     * @ORM\Column(name="User_Id1", type="string", length=15, nullable=false)
     */
    private $userId1;

    /**
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=10, nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="Config_Cols", type="string", length=40, nullable=false)
     */
    private $configCols;



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
     * Set userId1
     *
     * @param string $userId1
     * @return PaConfig
     */
    public function setUserId1($userId1)
    {
        $this->userId1 = $userId1;

        return $this;
    }

    /**
     * Get userId1
     *
     * @return string 
     */
    public function getUserId1()
    {
        return $this->userId1;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return PaConfig
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set configCols
     *
     * @param string $configCols
     * @return PaConfig
     */
    public function setConfigCols($configCols)
    {
        $this->configCols = $configCols;

        return $this;
    }

    /**
     * Get configCols
     *
     * @return string 
     */
    public function getConfigCols()
    {
        return $this->configCols;
    }
}
