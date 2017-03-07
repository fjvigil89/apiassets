<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SystemTrace
 *
 * @ORM\Table(name="System_Trace")
 * @ORM\Entity
 */
class SystemTrace
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Modulo", type="string", length=2, nullable=false)
     */
    private $idModulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Opcion", type="string", length=5, nullable=false)
     */
    private $idOpcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Trace_Date", type="datetime", nullable=false)
     */
    private $traceDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="Trace_Code", type="smallint", nullable=false)
     */
    private $traceCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Trace_Desc", type="string", length=100, nullable=false)
     */
    private $traceDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="ComputerName", type="string", length=50, nullable=false)
     */
    private $computername;



    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return SystemTrace
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
     * @return SystemTrace
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
     * Set idOpcion
     *
     * @param string $idOpcion
     * @return SystemTrace
     */
    public function setIdOpcion($idOpcion)
    {
        $this->idOpcion = $idOpcion;

        return $this;
    }

    /**
     * Get idOpcion
     *
     * @return string 
     */
    public function getIdOpcion()
    {
        return $this->idOpcion;
    }

    /**
     * Set traceDate
     *
     * @param \DateTime $traceDate
     * @return SystemTrace
     */
    public function setTraceDate($traceDate)
    {
        $this->traceDate = $traceDate;

        return $this;
    }

    /**
     * Get traceDate
     *
     * @return \DateTime 
     */
    public function getTraceDate()
    {
        return $this->traceDate;
    }

    /**
     * Set traceCode
     *
     * @param integer $traceCode
     * @return SystemTrace
     */
    public function setTraceCode($traceCode)
    {
        $this->traceCode = $traceCode;

        return $this;
    }

    /**
     * Get traceCode
     *
     * @return integer 
     */
    public function getTraceCode()
    {
        return $this->traceCode;
    }

    /**
     * Set traceDesc
     *
     * @param string $traceDesc
     * @return SystemTrace
     */
    public function setTraceDesc($traceDesc)
    {
        $this->traceDesc = $traceDesc;

        return $this;
    }

    /**
     * Get traceDesc
     *
     * @return string 
     */
    public function getTraceDesc()
    {
        return $this->traceDesc;
    }

    /**
     * Set computername
     *
     * @param string $computername
     * @return SystemTrace
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
}
