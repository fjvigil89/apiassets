<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormatoXxl
 *
 * @ORM\Table(name="Formato_XXL")
 * @ORM\Entity
 */
class FormatoXxl
{
    /**
     * @var string
     *
     * @ORM\Column(name="fld001", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $fld001;

    /**
     * @var string
     *
     * @ORM\Column(name="fld002", type="string", length=15, nullable=false)
     */
    private $fld002;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fld003", type="datetime", nullable=false)
     */
    private $fld003;

    /**
     * @var integer
     *
     * @ORM\Column(name="fld004", type="integer", nullable=false)
     */
    private $fld004;



    /**
     * Get fld001
     *
     * @return string 
     */
    public function getFld001()
    {
        return $this->fld001;
    }

    /**
     * Set fld002
     *
     * @param string $fld002
     * @return FormatoXxl
     */
    public function setFld002($fld002)
    {
        $this->fld002 = $fld002;

        return $this;
    }

    /**
     * Get fld002
     *
     * @return string 
     */
    public function getFld002()
    {
        return $this->fld002;
    }

    /**
     * Set fld003
     *
     * @param \DateTime $fld003
     * @return FormatoXxl
     */
    public function setFld003($fld003)
    {
        $this->fld003 = $fld003;

        return $this;
    }

    /**
     * Get fld003
     *
     * @return \DateTime 
     */
    public function getFld003()
    {
        return $this->fld003;
    }

    /**
     * Set fld004
     *
     * @param integer $fld004
     * @return FormatoXxl
     */
    public function setFld004($fld004)
    {
        $this->fld004 = $fld004;

        return $this;
    }

    /**
     * Get fld004
     *
     * @return integer 
     */
    public function getFld004()
    {
        return $this->fld004;
    }
}
