<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCalendarios
 *
 * @ORM\Table(name="RH_Calendarios")
 * @ORM\Entity
 */
class RhCalendarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="Calendario", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $calendario;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="FeriadosMes", type="smallint", nullable=false)
     */
    private $feriadosmes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Feriados1raQ", type="smallint", nullable=false)
     */
    private $feriados1raq;

    /**
     * @var integer
     *
     * @ORM\Column(name="Feriados2daQ", type="smallint", nullable=false)
     */
    private $feriados2daq;

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasFondoJornaleros1Q", type="smallint", nullable=false)
     */
    private $diasfondojornaleros1q;

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasFondoJornaleros2Q", type="smallint", nullable=false)
     */
    private $diasfondojornaleros2q;

    /**
     * @var integer
     *
     * @ORM\Column(name="Domingos", type="smallint", nullable=false)
     */
    private $domingos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D1", type="boolean", nullable=false)
     */
    private $d1;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D2", type="boolean", nullable=false)
     */
    private $d2;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D3", type="boolean", nullable=false)
     */
    private $d3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D4", type="boolean", nullable=false)
     */
    private $d4;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D5", type="boolean", nullable=false)
     */
    private $d5;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D6", type="boolean", nullable=false)
     */
    private $d6;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D7", type="boolean", nullable=false)
     */
    private $d7;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D8", type="boolean", nullable=false)
     */
    private $d8;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D9", type="boolean", nullable=false)
     */
    private $d9;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D10", type="boolean", nullable=false)
     */
    private $d10;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D11", type="boolean", nullable=false)
     */
    private $d11;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D12", type="boolean", nullable=false)
     */
    private $d12;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D13", type="boolean", nullable=false)
     */
    private $d13;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D14", type="boolean", nullable=false)
     */
    private $d14;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D15", type="boolean", nullable=false)
     */
    private $d15;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D16", type="boolean", nullable=false)
     */
    private $d16;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D17", type="boolean", nullable=false)
     */
    private $d17;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D18", type="boolean", nullable=false)
     */
    private $d18;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D19", type="boolean", nullable=false)
     */
    private $d19;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D20", type="boolean", nullable=false)
     */
    private $d20;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D21", type="boolean", nullable=false)
     */
    private $d21;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D22", type="boolean", nullable=false)
     */
    private $d22;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D23", type="boolean", nullable=false)
     */
    private $d23;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D24", type="boolean", nullable=false)
     */
    private $d24;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D25", type="boolean", nullable=false)
     */
    private $d25;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D26", type="boolean", nullable=false)
     */
    private $d26;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D27", type="boolean", nullable=false)
     */
    private $d27;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D28", type="boolean", nullable=false)
     */
    private $d28;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D29", type="boolean", nullable=false)
     */
    private $d29;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D30", type="boolean", nullable=false)
     */
    private $d30;

    /**
     * @var boolean
     *
     * @ORM\Column(name="D31", type="boolean", nullable=false)
     */
    private $d31;

    /**
     * @var integer
     *
     * @ORM\Column(name="DiasComedor", type="smallint", nullable=false)
     */
    private $diascomedor;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhCalendarios
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
     * @return RhCalendarios
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
     * Set calendario
     *
     * @param string $calendario
     * @return RhCalendarios
     */
    public function setCalendario($calendario)
    {
        $this->calendario = $calendario;

        return $this;
    }

    /**
     * Get calendario
     *
     * @return string 
     */
    public function getCalendario()
    {
        return $this->calendario;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return RhCalendarios
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

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
     * Set feriadosmes
     *
     * @param integer $feriadosmes
     * @return RhCalendarios
     */
    public function setFeriadosmes($feriadosmes)
    {
        $this->feriadosmes = $feriadosmes;

        return $this;
    }

    /**
     * Get feriadosmes
     *
     * @return integer 
     */
    public function getFeriadosmes()
    {
        return $this->feriadosmes;
    }

    /**
     * Set feriados1raq
     *
     * @param integer $feriados1raq
     * @return RhCalendarios
     */
    public function setFeriados1raq($feriados1raq)
    {
        $this->feriados1raq = $feriados1raq;

        return $this;
    }

    /**
     * Get feriados1raq
     *
     * @return integer 
     */
    public function getFeriados1raq()
    {
        return $this->feriados1raq;
    }

    /**
     * Set feriados2daq
     *
     * @param integer $feriados2daq
     * @return RhCalendarios
     */
    public function setFeriados2daq($feriados2daq)
    {
        $this->feriados2daq = $feriados2daq;

        return $this;
    }

    /**
     * Get feriados2daq
     *
     * @return integer 
     */
    public function getFeriados2daq()
    {
        return $this->feriados2daq;
    }

    /**
     * Set diasfondojornaleros1q
     *
     * @param integer $diasfondojornaleros1q
     * @return RhCalendarios
     */
    public function setDiasfondojornaleros1q($diasfondojornaleros1q)
    {
        $this->diasfondojornaleros1q = $diasfondojornaleros1q;

        return $this;
    }

    /**
     * Get diasfondojornaleros1q
     *
     * @return integer 
     */
    public function getDiasfondojornaleros1q()
    {
        return $this->diasfondojornaleros1q;
    }

    /**
     * Set diasfondojornaleros2q
     *
     * @param integer $diasfondojornaleros2q
     * @return RhCalendarios
     */
    public function setDiasfondojornaleros2q($diasfondojornaleros2q)
    {
        $this->diasfondojornaleros2q = $diasfondojornaleros2q;

        return $this;
    }

    /**
     * Get diasfondojornaleros2q
     *
     * @return integer 
     */
    public function getDiasfondojornaleros2q()
    {
        return $this->diasfondojornaleros2q;
    }

    /**
     * Set domingos
     *
     * @param integer $domingos
     * @return RhCalendarios
     */
    public function setDomingos($domingos)
    {
        $this->domingos = $domingos;

        return $this;
    }

    /**
     * Get domingos
     *
     * @return integer 
     */
    public function getDomingos()
    {
        return $this->domingos;
    }

    /**
     * Set d1
     *
     * @param boolean $d1
     * @return RhCalendarios
     */
    public function setD1($d1)
    {
        $this->d1 = $d1;

        return $this;
    }

    /**
     * Get d1
     *
     * @return boolean 
     */
    public function getD1()
    {
        return $this->d1;
    }

    /**
     * Set d2
     *
     * @param boolean $d2
     * @return RhCalendarios
     */
    public function setD2($d2)
    {
        $this->d2 = $d2;

        return $this;
    }

    /**
     * Get d2
     *
     * @return boolean 
     */
    public function getD2()
    {
        return $this->d2;
    }

    /**
     * Set d3
     *
     * @param boolean $d3
     * @return RhCalendarios
     */
    public function setD3($d3)
    {
        $this->d3 = $d3;

        return $this;
    }

    /**
     * Get d3
     *
     * @return boolean 
     */
    public function getD3()
    {
        return $this->d3;
    }

    /**
     * Set d4
     *
     * @param boolean $d4
     * @return RhCalendarios
     */
    public function setD4($d4)
    {
        $this->d4 = $d4;

        return $this;
    }

    /**
     * Get d4
     *
     * @return boolean 
     */
    public function getD4()
    {
        return $this->d4;
    }

    /**
     * Set d5
     *
     * @param boolean $d5
     * @return RhCalendarios
     */
    public function setD5($d5)
    {
        $this->d5 = $d5;

        return $this;
    }

    /**
     * Get d5
     *
     * @return boolean 
     */
    public function getD5()
    {
        return $this->d5;
    }

    /**
     * Set d6
     *
     * @param boolean $d6
     * @return RhCalendarios
     */
    public function setD6($d6)
    {
        $this->d6 = $d6;

        return $this;
    }

    /**
     * Get d6
     *
     * @return boolean 
     */
    public function getD6()
    {
        return $this->d6;
    }

    /**
     * Set d7
     *
     * @param boolean $d7
     * @return RhCalendarios
     */
    public function setD7($d7)
    {
        $this->d7 = $d7;

        return $this;
    }

    /**
     * Get d7
     *
     * @return boolean 
     */
    public function getD7()
    {
        return $this->d7;
    }

    /**
     * Set d8
     *
     * @param boolean $d8
     * @return RhCalendarios
     */
    public function setD8($d8)
    {
        $this->d8 = $d8;

        return $this;
    }

    /**
     * Get d8
     *
     * @return boolean 
     */
    public function getD8()
    {
        return $this->d8;
    }

    /**
     * Set d9
     *
     * @param boolean $d9
     * @return RhCalendarios
     */
    public function setD9($d9)
    {
        $this->d9 = $d9;

        return $this;
    }

    /**
     * Get d9
     *
     * @return boolean 
     */
    public function getD9()
    {
        return $this->d9;
    }

    /**
     * Set d10
     *
     * @param boolean $d10
     * @return RhCalendarios
     */
    public function setD10($d10)
    {
        $this->d10 = $d10;

        return $this;
    }

    /**
     * Get d10
     *
     * @return boolean 
     */
    public function getD10()
    {
        return $this->d10;
    }

    /**
     * Set d11
     *
     * @param boolean $d11
     * @return RhCalendarios
     */
    public function setD11($d11)
    {
        $this->d11 = $d11;

        return $this;
    }

    /**
     * Get d11
     *
     * @return boolean 
     */
    public function getD11()
    {
        return $this->d11;
    }

    /**
     * Set d12
     *
     * @param boolean $d12
     * @return RhCalendarios
     */
    public function setD12($d12)
    {
        $this->d12 = $d12;

        return $this;
    }

    /**
     * Get d12
     *
     * @return boolean 
     */
    public function getD12()
    {
        return $this->d12;
    }

    /**
     * Set d13
     *
     * @param boolean $d13
     * @return RhCalendarios
     */
    public function setD13($d13)
    {
        $this->d13 = $d13;

        return $this;
    }

    /**
     * Get d13
     *
     * @return boolean 
     */
    public function getD13()
    {
        return $this->d13;
    }

    /**
     * Set d14
     *
     * @param boolean $d14
     * @return RhCalendarios
     */
    public function setD14($d14)
    {
        $this->d14 = $d14;

        return $this;
    }

    /**
     * Get d14
     *
     * @return boolean 
     */
    public function getD14()
    {
        return $this->d14;
    }

    /**
     * Set d15
     *
     * @param boolean $d15
     * @return RhCalendarios
     */
    public function setD15($d15)
    {
        $this->d15 = $d15;

        return $this;
    }

    /**
     * Get d15
     *
     * @return boolean 
     */
    public function getD15()
    {
        return $this->d15;
    }

    /**
     * Set d16
     *
     * @param boolean $d16
     * @return RhCalendarios
     */
    public function setD16($d16)
    {
        $this->d16 = $d16;

        return $this;
    }

    /**
     * Get d16
     *
     * @return boolean 
     */
    public function getD16()
    {
        return $this->d16;
    }

    /**
     * Set d17
     *
     * @param boolean $d17
     * @return RhCalendarios
     */
    public function setD17($d17)
    {
        $this->d17 = $d17;

        return $this;
    }

    /**
     * Get d17
     *
     * @return boolean 
     */
    public function getD17()
    {
        return $this->d17;
    }

    /**
     * Set d18
     *
     * @param boolean $d18
     * @return RhCalendarios
     */
    public function setD18($d18)
    {
        $this->d18 = $d18;

        return $this;
    }

    /**
     * Get d18
     *
     * @return boolean 
     */
    public function getD18()
    {
        return $this->d18;
    }

    /**
     * Set d19
     *
     * @param boolean $d19
     * @return RhCalendarios
     */
    public function setD19($d19)
    {
        $this->d19 = $d19;

        return $this;
    }

    /**
     * Get d19
     *
     * @return boolean 
     */
    public function getD19()
    {
        return $this->d19;
    }

    /**
     * Set d20
     *
     * @param boolean $d20
     * @return RhCalendarios
     */
    public function setD20($d20)
    {
        $this->d20 = $d20;

        return $this;
    }

    /**
     * Get d20
     *
     * @return boolean 
     */
    public function getD20()
    {
        return $this->d20;
    }

    /**
     * Set d21
     *
     * @param boolean $d21
     * @return RhCalendarios
     */
    public function setD21($d21)
    {
        $this->d21 = $d21;

        return $this;
    }

    /**
     * Get d21
     *
     * @return boolean 
     */
    public function getD21()
    {
        return $this->d21;
    }

    /**
     * Set d22
     *
     * @param boolean $d22
     * @return RhCalendarios
     */
    public function setD22($d22)
    {
        $this->d22 = $d22;

        return $this;
    }

    /**
     * Get d22
     *
     * @return boolean 
     */
    public function getD22()
    {
        return $this->d22;
    }

    /**
     * Set d23
     *
     * @param boolean $d23
     * @return RhCalendarios
     */
    public function setD23($d23)
    {
        $this->d23 = $d23;

        return $this;
    }

    /**
     * Get d23
     *
     * @return boolean 
     */
    public function getD23()
    {
        return $this->d23;
    }

    /**
     * Set d24
     *
     * @param boolean $d24
     * @return RhCalendarios
     */
    public function setD24($d24)
    {
        $this->d24 = $d24;

        return $this;
    }

    /**
     * Get d24
     *
     * @return boolean 
     */
    public function getD24()
    {
        return $this->d24;
    }

    /**
     * Set d25
     *
     * @param boolean $d25
     * @return RhCalendarios
     */
    public function setD25($d25)
    {
        $this->d25 = $d25;

        return $this;
    }

    /**
     * Get d25
     *
     * @return boolean 
     */
    public function getD25()
    {
        return $this->d25;
    }

    /**
     * Set d26
     *
     * @param boolean $d26
     * @return RhCalendarios
     */
    public function setD26($d26)
    {
        $this->d26 = $d26;

        return $this;
    }

    /**
     * Get d26
     *
     * @return boolean 
     */
    public function getD26()
    {
        return $this->d26;
    }

    /**
     * Set d27
     *
     * @param boolean $d27
     * @return RhCalendarios
     */
    public function setD27($d27)
    {
        $this->d27 = $d27;

        return $this;
    }

    /**
     * Get d27
     *
     * @return boolean 
     */
    public function getD27()
    {
        return $this->d27;
    }

    /**
     * Set d28
     *
     * @param boolean $d28
     * @return RhCalendarios
     */
    public function setD28($d28)
    {
        $this->d28 = $d28;

        return $this;
    }

    /**
     * Get d28
     *
     * @return boolean 
     */
    public function getD28()
    {
        return $this->d28;
    }

    /**
     * Set d29
     *
     * @param boolean $d29
     * @return RhCalendarios
     */
    public function setD29($d29)
    {
        $this->d29 = $d29;

        return $this;
    }

    /**
     * Get d29
     *
     * @return boolean 
     */
    public function getD29()
    {
        return $this->d29;
    }

    /**
     * Set d30
     *
     * @param boolean $d30
     * @return RhCalendarios
     */
    public function setD30($d30)
    {
        $this->d30 = $d30;

        return $this;
    }

    /**
     * Get d30
     *
     * @return boolean 
     */
    public function getD30()
    {
        return $this->d30;
    }

    /**
     * Set d31
     *
     * @param boolean $d31
     * @return RhCalendarios
     */
    public function setD31($d31)
    {
        $this->d31 = $d31;

        return $this;
    }

    /**
     * Get d31
     *
     * @return boolean 
     */
    public function getD31()
    {
        return $this->d31;
    }

    /**
     * Set diascomedor
     *
     * @param integer $diascomedor
     * @return RhCalendarios
     */
    public function setDiascomedor($diascomedor)
    {
        $this->diascomedor = $diascomedor;

        return $this;
    }

    /**
     * Get diascomedor
     *
     * @return integer 
     */
    public function getDiascomedor()
    {
        return $this->diascomedor;
    }
}
