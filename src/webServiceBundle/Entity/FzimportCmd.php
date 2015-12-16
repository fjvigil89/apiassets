<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzimportCmd
 *
 * @ORM\Table(name="FzImport_Cmd", indexes={@ORM\Index(name="IX_FzImport_Cmd", columns={"mTable"})})
 * @ORM\Entity
 */
class FzimportCmd
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador9", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador9;

    /**
     * @var string
     *
     * @ORM\Column(name="mTable", type="string", length=80, nullable=false)
     */
    private $mtable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasTrigger", type="boolean", nullable=false)
     */
    private $hastrigger;

    /**
     * @var string
     *
     * @ORM\Column(name="mCmd", type="string", length=4000, nullable=false)
     */
    private $mcmd;

    /**
     * @var integer
     *
     * @ORM\Column(name="mRows", type="integer", nullable=false)
     */
    private $mrows;

    /**
     * @var string
     *
     * @ORM\Column(name="mMsg", type="string", length=450, nullable=false)
     */
    private $mmsg;



    /**
     * Get contador9
     *
     * @return integer 
     */
    public function getContador9()
    {
        return $this->contador9;
    }

    /**
     * Set mtable
     *
     * @param string $mtable
     * @return FzimportCmd
     */
    public function setMtable($mtable)
    {
        $this->mtable = $mtable;

        return $this;
    }

    /**
     * Get mtable
     *
     * @return string 
     */
    public function getMtable()
    {
        return $this->mtable;
    }

    /**
     * Set hastrigger
     *
     * @param boolean $hastrigger
     * @return FzimportCmd
     */
    public function setHastrigger($hastrigger)
    {
        $this->hastrigger = $hastrigger;

        return $this;
    }

    /**
     * Get hastrigger
     *
     * @return boolean 
     */
    public function getHastrigger()
    {
        return $this->hastrigger;
    }

    /**
     * Set mcmd
     *
     * @param string $mcmd
     * @return FzimportCmd
     */
    public function setMcmd($mcmd)
    {
        $this->mcmd = $mcmd;

        return $this;
    }

    /**
     * Get mcmd
     *
     * @return string 
     */
    public function getMcmd()
    {
        return $this->mcmd;
    }

    /**
     * Set mrows
     *
     * @param integer $mrows
     * @return FzimportCmd
     */
    public function setMrows($mrows)
    {
        $this->mrows = $mrows;

        return $this;
    }

    /**
     * Get mrows
     *
     * @return integer 
     */
    public function getMrows()
    {
        return $this->mrows;
    }

    /**
     * Set mmsg
     *
     * @param string $mmsg
     * @return FzimportCmd
     */
    public function setMmsg($mmsg)
    {
        $this->mmsg = $mmsg;

        return $this;
    }

    /**
     * Get mmsg
     *
     * @return string 
     */
    public function getMmsg()
    {
        return $this->mmsg;
    }
}
