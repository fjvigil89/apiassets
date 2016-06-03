<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * XlsimportedHist
 *
 * @ORM\Table(name="XLSImported_Hist")
 * @ORM\Entity
 */
class XlsimportedHist
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="XLS_FileName", type="string", length=120, nullable=false)
     */
    private $xlsFilename;

    /**
     * @var integer
     *
     * @ORM\Column(name="Total_Rows", type="integer", nullable=false)
     */
    private $totalRows;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=20, nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=50, nullable=false)
     */
    private $nota;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return XlsimportedHist
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
     * Set xlsFilename
     *
     * @param string $xlsFilename
     * @return XlsimportedHist
     */
    public function setXlsFilename($xlsFilename)
    {
        $this->xlsFilename = $xlsFilename;

        return $this;
    }

    /**
     * Get xlsFilename
     *
     * @return string 
     */
    public function getXlsFilename()
    {
        return $this->xlsFilename;
    }

    /**
     * Set totalRows
     *
     * @param integer $totalRows
     * @return XlsimportedHist
     */
    public function setTotalRows($totalRows)
    {
        $this->totalRows = $totalRows;

        return $this;
    }

    /**
     * Get totalRows
     *
     * @return integer 
     */
    public function getTotalRows()
    {
        return $this->totalRows;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return XlsimportedHist
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
     * Set nota
     *
     * @param string $nota
     * @return XlsimportedHist
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
}
