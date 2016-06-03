<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysfilesDm
 *
 * @ORM\Table(name="SysFiles_dm")
 * @ORM\Entity
 */
class SysfilesDm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nu;

    /**
     * @var string
     *
     * @ORM\Column(name="_SYS_1LI", type="string", length=250, nullable=false)
     */
    private $sys1li;

    /**
     * @var string
     *
     * @ORM\Column(name="_SYS_2LE", type="string", length=250, nullable=false)
     */
    private $sys2le;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_dt", type="datetime", nullable=false)
     */
    private $dt;



    /**
     * Get nu
     *
     * @return integer 
     */
    public function getNu()
    {
        return $this->nu;
    }

    /**
     * Set sys1li
     *
     * @param string $sys1li
     * @return SysfilesDm
     */
    public function setSys1li($sys1li)
    {
        $this->sys1li = $sys1li;

        return $this;
    }

    /**
     * Get sys1li
     *
     * @return string 
     */
    public function getSys1li()
    {
        return $this->sys1li;
    }

    /**
     * Set sys2le
     *
     * @param string $sys2le
     * @return SysfilesDm
     */
    public function setSys2le($sys2le)
    {
        $this->sys2le = $sys2le;

        return $this;
    }

    /**
     * Get sys2le
     *
     * @return string 
     */
    public function getSys2le()
    {
        return $this->sys2le;
    }

    /**
     * Set dt
     *
     * @param \DateTime $dt
     * @return SysfilesDm
     */
    public function setDt($dt)
    {
        $this->dt = $dt;

        return $this;
    }

    /**
     * Get dt
     *
     * @return \DateTime 
     */
    public function getDt()
    {
        return $this->dt;
    }
}
