<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfocorporativaRrhhXml
 *
 * @ORM\Table(name="InfoCorporativa_RRHH_Xml")
 * @ORM\Entity
 */
class InfocorporativaRrhhXml
{
    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="Id", type="uniqueidentifier", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="CodAgrupa", type="string", length=5, nullable=false)
     */
    private $codagrupa;

    /**
     * @var string
     *
     * @ORM\Column(name="DesAgrupa", type="string", length=50, nullable=false)
     */
    private $desagrupa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="integer", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="integer", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoInfo", type="integer", nullable=false)
     */
    private $tipoinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=10, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasificacion", type="string", length=120, nullable=false)
     */
    private $descClasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Indicador1", type="integer", nullable=false)
     */
    private $indicador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Indicador2", type="integer", nullable=false)
     */
    private $indicador2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Indicador3", type="integer", nullable=false)
     */
    private $indicador3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Indicador4", type="integer", nullable=false)
     */
    private $indicador4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Indicador5", type="integer", nullable=false)
     */
    private $indicador5;

    /**
     * @var integer
     *
     * @ORM\Column(name="Indicador6", type="integer", nullable=false)
     */
    private $indicador6;

    /**
     * @var integer
     *
     * @ORM\Column(name="Indicador7", type="integer", nullable=false)
     */
    private $indicador7;

    /**
     * @var integer
     *
     * @ORM\Column(name="Indicador8", type="integer", nullable=false)
     */
    private $indicador8;



    /**
     * Get id
     *
     * @return uniqueidentifier 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codagrupa
     *
     * @param string $codagrupa
     * @return InfocorporativaRrhhXml
     */
    public function setCodagrupa($codagrupa)
    {
        $this->codagrupa = $codagrupa;

        return $this;
    }

    /**
     * Get codagrupa
     *
     * @return string 
     */
    public function getCodagrupa()
    {
        return $this->codagrupa;
    }

    /**
     * Set desagrupa
     *
     * @param string $desagrupa
     * @return InfocorporativaRrhhXml
     */
    public function setDesagrupa($desagrupa)
    {
        $this->desagrupa = $desagrupa;

        return $this;
    }

    /**
     * Get desagrupa
     *
     * @return string 
     */
    public function getDesagrupa()
    {
        return $this->desagrupa;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return InfocorporativaRrhhXml
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return InfocorporativaRrhhXml
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set tipoinfo
     *
     * @param integer $tipoinfo
     * @return InfocorporativaRrhhXml
     */
    public function setTipoinfo($tipoinfo)
    {
        $this->tipoinfo = $tipoinfo;

        return $this;
    }

    /**
     * Get tipoinfo
     *
     * @return integer 
     */
    public function getTipoinfo()
    {
        return $this->tipoinfo;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return InfocorporativaRrhhXml
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set descClasificacion
     *
     * @param string $descClasificacion
     * @return InfocorporativaRrhhXml
     */
    public function setDescClasificacion($descClasificacion)
    {
        $this->descClasificacion = $descClasificacion;

        return $this;
    }

    /**
     * Get descClasificacion
     *
     * @return string 
     */
    public function getDescClasificacion()
    {
        return $this->descClasificacion;
    }

    /**
     * Set indicador1
     *
     * @param integer $indicador1
     * @return InfocorporativaRrhhXml
     */
    public function setIndicador1($indicador1)
    {
        $this->indicador1 = $indicador1;

        return $this;
    }

    /**
     * Get indicador1
     *
     * @return integer 
     */
    public function getIndicador1()
    {
        return $this->indicador1;
    }

    /**
     * Set indicador2
     *
     * @param integer $indicador2
     * @return InfocorporativaRrhhXml
     */
    public function setIndicador2($indicador2)
    {
        $this->indicador2 = $indicador2;

        return $this;
    }

    /**
     * Get indicador2
     *
     * @return integer 
     */
    public function getIndicador2()
    {
        return $this->indicador2;
    }

    /**
     * Set indicador3
     *
     * @param integer $indicador3
     * @return InfocorporativaRrhhXml
     */
    public function setIndicador3($indicador3)
    {
        $this->indicador3 = $indicador3;

        return $this;
    }

    /**
     * Get indicador3
     *
     * @return integer 
     */
    public function getIndicador3()
    {
        return $this->indicador3;
    }

    /**
     * Set indicador4
     *
     * @param integer $indicador4
     * @return InfocorporativaRrhhXml
     */
    public function setIndicador4($indicador4)
    {
        $this->indicador4 = $indicador4;

        return $this;
    }

    /**
     * Get indicador4
     *
     * @return integer 
     */
    public function getIndicador4()
    {
        return $this->indicador4;
    }

    /**
     * Set indicador5
     *
     * @param integer $indicador5
     * @return InfocorporativaRrhhXml
     */
    public function setIndicador5($indicador5)
    {
        $this->indicador5 = $indicador5;

        return $this;
    }

    /**
     * Get indicador5
     *
     * @return integer 
     */
    public function getIndicador5()
    {
        return $this->indicador5;
    }

    /**
     * Set indicador6
     *
     * @param integer $indicador6
     * @return InfocorporativaRrhhXml
     */
    public function setIndicador6($indicador6)
    {
        $this->indicador6 = $indicador6;

        return $this;
    }

    /**
     * Get indicador6
     *
     * @return integer 
     */
    public function getIndicador6()
    {
        return $this->indicador6;
    }

    /**
     * Set indicador7
     *
     * @param integer $indicador7
     * @return InfocorporativaRrhhXml
     */
    public function setIndicador7($indicador7)
    {
        $this->indicador7 = $indicador7;

        return $this;
    }

    /**
     * Get indicador7
     *
     * @return integer 
     */
    public function getIndicador7()
    {
        return $this->indicador7;
    }

    /**
     * Set indicador8
     *
     * @param integer $indicador8
     * @return InfocorporativaRrhhXml
     */
    public function setIndicador8($indicador8)
    {
        $this->indicador8 = $indicador8;

        return $this;
    }

    /**
     * Get indicador8
     *
     * @return integer 
     */
    public function getIndicador8()
    {
        return $this->indicador8;
    }
}
