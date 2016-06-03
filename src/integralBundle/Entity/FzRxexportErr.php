<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRxexportErr
 *
 * @ORM\Table(name="Fz_RxExport_ERR")
 * @ORM\Entity
 */
class FzRxexportErr
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Exp_Num", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $expNum;

    /**
     * @var string
     *
     * @ORM\Column(name="Exp_Name", type="string", length=20, nullable=false)
     */
    private $expName;

    /**
     * @var string
     *
     * @ORM\Column(name="Error1", type="string", length=220, nullable=false)
     */
    private $error1;



    /**
     * Get expNum
     *
     * @return integer 
     */
    public function getExpNum()
    {
        return $this->expNum;
    }

    /**
     * Set expName
     *
     * @param string $expName
     * @return FzRxexportErr
     */
    public function setExpName($expName)
    {
        $this->expName = $expName;

        return $this;
    }

    /**
     * Get expName
     *
     * @return string 
     */
    public function getExpName()
    {
        return $this->expName;
    }

    /**
     * Set error1
     *
     * @param string $error1
     * @return FzRxexportErr
     */
    public function setError1($error1)
    {
        $this->error1 = $error1;

        return $this;
    }

    /**
     * Get error1
     *
     * @return string 
     */
    public function getError1()
    {
        return $this->error1;
    }
}
