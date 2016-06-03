<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormatoFinCxcVars
 *
 * @ORM\Table(name="Formato_Fin_CxC_Vars", indexes={@ORM\Index(name="Clu_Tipo_Fo_Nro", columns={"Tipo_Formato", "Numero_Formato"})})
 * @ORM\Entity
 */
class FormatoFinCxcVars
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
     * @ORM\Column(name="Tipo_Formato", type="string", length=10, nullable=false)
     */
    private $tipoFormato;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero_Formato", type="smallint", nullable=false)
     */
    private $numeroFormato;

    /**
     * @var string
     *
     * @ORM\Column(name="Rep_Titulo", type="string", length=80, nullable=false)
     */
    private $repTitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Main_Titulo1", type="string", length=50, nullable=false)
     */
    private $mainTitulo1;

    /**
     * @var string
     *
     * @ORM\Column(name="Main_Titulo2", type="string", length=50, nullable=false)
     */
    private $mainTitulo2;

    /**
     * @var string
     *
     * @ORM\Column(name="SubTitulo1", type="string", length=50, nullable=false)
     */
    private $subtitulo1;

    /**
     * @var string
     *
     * @ORM\Column(name="SubTitulo2", type="string", length=80, nullable=false)
     */
    private $subtitulo2;

    /**
     * @var string
     *
     * @ORM\Column(name="SubTitulo3", type="string", length=50, nullable=false)
     */
    private $subtitulo3;

    /**
     * @var string
     *
     * @ORM\Column(name="Tit_Fecha", type="string", length=15, nullable=false)
     */
    private $titFecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Tit_Dia", type="string", length=5, nullable=false)
     */
    private $titDia;

    /**
     * @var string
     *
     * @ORM\Column(name="Tit_Mes", type="string", length=5, nullable=false)
     */
    private $titMes;

    /**
     * @var string
     *
     * @ORM\Column(name="Tit_Ano", type="string", length=5, nullable=false)
     */
    private $titAno;

    /**
     * @var string
     *
     * @ORM\Column(name="Footer1", type="string", length=50, nullable=false)
     */
    private $footer1;

    /**
     * @var string
     *
     * @ORM\Column(name="Footer2", type="string", length=50, nullable=false)
     */
    private $footer2;

    /**
     * @var string
     *
     * @ORM\Column(name="Footer3", type="string", length=50, nullable=false)
     */
    private $footer3;

    /**
     * @var string
     *
     * @ORM\Column(name="Footer4", type="string", length=50, nullable=false)
     */
    private $footer4;

    /**
     * @var string
     *
     * @ORM\Column(name="Footer5", type="string", length=50, nullable=false)
     */
    private $footer5;

    /**
     * @var string
     *
     * @ORM\Column(name="Footer6", type="string", length=50, nullable=false)
     */
    private $footer6;

    /**
     * @var string
     *
     * @ORM\Column(name="Footer7", type="string", length=50, nullable=false)
     */
    private $footer7;

    /**
     * @var string
     *
     * @ORM\Column(name="Footer8", type="string", length=50, nullable=false)
     */
    private $footer8;

    /**
     * @var string
     *
     * @ORM\Column(name="Footer9", type="string", length=50, nullable=false)
     */
    private $footer9;

    /**
     * @var string
     *
     * @ORM\Column(name="Certificamos1", type="string", length=60, nullable=false)
     */
    private $certificamos1;

    /**
     * @var string
     *
     * @ORM\Column(name="Certificamos2", type="string", length=60, nullable=false)
     */
    private $certificamos2;

    /**
     * @var string
     *
     * @ORM\Column(name="Certificamos3_yTit_Fecha", type="string", length=60, nullable=false)
     */
    private $certificamos3YtitFecha;



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
     * Set tipoFormato
     *
     * @param string $tipoFormato
     * @return FormatoFinCxcVars
     */
    public function setTipoFormato($tipoFormato)
    {
        $this->tipoFormato = $tipoFormato;

        return $this;
    }

    /**
     * Get tipoFormato
     *
     * @return string 
     */
    public function getTipoFormato()
    {
        return $this->tipoFormato;
    }

    /**
     * Set numeroFormato
     *
     * @param integer $numeroFormato
     * @return FormatoFinCxcVars
     */
    public function setNumeroFormato($numeroFormato)
    {
        $this->numeroFormato = $numeroFormato;

        return $this;
    }

    /**
     * Get numeroFormato
     *
     * @return integer 
     */
    public function getNumeroFormato()
    {
        return $this->numeroFormato;
    }

    /**
     * Set repTitulo
     *
     * @param string $repTitulo
     * @return FormatoFinCxcVars
     */
    public function setRepTitulo($repTitulo)
    {
        $this->repTitulo = $repTitulo;

        return $this;
    }

    /**
     * Get repTitulo
     *
     * @return string 
     */
    public function getRepTitulo()
    {
        return $this->repTitulo;
    }

    /**
     * Set mainTitulo1
     *
     * @param string $mainTitulo1
     * @return FormatoFinCxcVars
     */
    public function setMainTitulo1($mainTitulo1)
    {
        $this->mainTitulo1 = $mainTitulo1;

        return $this;
    }

    /**
     * Get mainTitulo1
     *
     * @return string 
     */
    public function getMainTitulo1()
    {
        return $this->mainTitulo1;
    }

    /**
     * Set mainTitulo2
     *
     * @param string $mainTitulo2
     * @return FormatoFinCxcVars
     */
    public function setMainTitulo2($mainTitulo2)
    {
        $this->mainTitulo2 = $mainTitulo2;

        return $this;
    }

    /**
     * Get mainTitulo2
     *
     * @return string 
     */
    public function getMainTitulo2()
    {
        return $this->mainTitulo2;
    }

    /**
     * Set subtitulo1
     *
     * @param string $subtitulo1
     * @return FormatoFinCxcVars
     */
    public function setSubtitulo1($subtitulo1)
    {
        $this->subtitulo1 = $subtitulo1;

        return $this;
    }

    /**
     * Get subtitulo1
     *
     * @return string 
     */
    public function getSubtitulo1()
    {
        return $this->subtitulo1;
    }

    /**
     * Set subtitulo2
     *
     * @param string $subtitulo2
     * @return FormatoFinCxcVars
     */
    public function setSubtitulo2($subtitulo2)
    {
        $this->subtitulo2 = $subtitulo2;

        return $this;
    }

    /**
     * Get subtitulo2
     *
     * @return string 
     */
    public function getSubtitulo2()
    {
        return $this->subtitulo2;
    }

    /**
     * Set subtitulo3
     *
     * @param string $subtitulo3
     * @return FormatoFinCxcVars
     */
    public function setSubtitulo3($subtitulo3)
    {
        $this->subtitulo3 = $subtitulo3;

        return $this;
    }

    /**
     * Get subtitulo3
     *
     * @return string 
     */
    public function getSubtitulo3()
    {
        return $this->subtitulo3;
    }

    /**
     * Set titFecha
     *
     * @param string $titFecha
     * @return FormatoFinCxcVars
     */
    public function setTitFecha($titFecha)
    {
        $this->titFecha = $titFecha;

        return $this;
    }

    /**
     * Get titFecha
     *
     * @return string 
     */
    public function getTitFecha()
    {
        return $this->titFecha;
    }

    /**
     * Set titDia
     *
     * @param string $titDia
     * @return FormatoFinCxcVars
     */
    public function setTitDia($titDia)
    {
        $this->titDia = $titDia;

        return $this;
    }

    /**
     * Get titDia
     *
     * @return string 
     */
    public function getTitDia()
    {
        return $this->titDia;
    }

    /**
     * Set titMes
     *
     * @param string $titMes
     * @return FormatoFinCxcVars
     */
    public function setTitMes($titMes)
    {
        $this->titMes = $titMes;

        return $this;
    }

    /**
     * Get titMes
     *
     * @return string 
     */
    public function getTitMes()
    {
        return $this->titMes;
    }

    /**
     * Set titAno
     *
     * @param string $titAno
     * @return FormatoFinCxcVars
     */
    public function setTitAno($titAno)
    {
        $this->titAno = $titAno;

        return $this;
    }

    /**
     * Get titAno
     *
     * @return string 
     */
    public function getTitAno()
    {
        return $this->titAno;
    }

    /**
     * Set footer1
     *
     * @param string $footer1
     * @return FormatoFinCxcVars
     */
    public function setFooter1($footer1)
    {
        $this->footer1 = $footer1;

        return $this;
    }

    /**
     * Get footer1
     *
     * @return string 
     */
    public function getFooter1()
    {
        return $this->footer1;
    }

    /**
     * Set footer2
     *
     * @param string $footer2
     * @return FormatoFinCxcVars
     */
    public function setFooter2($footer2)
    {
        $this->footer2 = $footer2;

        return $this;
    }

    /**
     * Get footer2
     *
     * @return string 
     */
    public function getFooter2()
    {
        return $this->footer2;
    }

    /**
     * Set footer3
     *
     * @param string $footer3
     * @return FormatoFinCxcVars
     */
    public function setFooter3($footer3)
    {
        $this->footer3 = $footer3;

        return $this;
    }

    /**
     * Get footer3
     *
     * @return string 
     */
    public function getFooter3()
    {
        return $this->footer3;
    }

    /**
     * Set footer4
     *
     * @param string $footer4
     * @return FormatoFinCxcVars
     */
    public function setFooter4($footer4)
    {
        $this->footer4 = $footer4;

        return $this;
    }

    /**
     * Get footer4
     *
     * @return string 
     */
    public function getFooter4()
    {
        return $this->footer4;
    }

    /**
     * Set footer5
     *
     * @param string $footer5
     * @return FormatoFinCxcVars
     */
    public function setFooter5($footer5)
    {
        $this->footer5 = $footer5;

        return $this;
    }

    /**
     * Get footer5
     *
     * @return string 
     */
    public function getFooter5()
    {
        return $this->footer5;
    }

    /**
     * Set footer6
     *
     * @param string $footer6
     * @return FormatoFinCxcVars
     */
    public function setFooter6($footer6)
    {
        $this->footer6 = $footer6;

        return $this;
    }

    /**
     * Get footer6
     *
     * @return string 
     */
    public function getFooter6()
    {
        return $this->footer6;
    }

    /**
     * Set footer7
     *
     * @param string $footer7
     * @return FormatoFinCxcVars
     */
    public function setFooter7($footer7)
    {
        $this->footer7 = $footer7;

        return $this;
    }

    /**
     * Get footer7
     *
     * @return string 
     */
    public function getFooter7()
    {
        return $this->footer7;
    }

    /**
     * Set footer8
     *
     * @param string $footer8
     * @return FormatoFinCxcVars
     */
    public function setFooter8($footer8)
    {
        $this->footer8 = $footer8;

        return $this;
    }

    /**
     * Get footer8
     *
     * @return string 
     */
    public function getFooter8()
    {
        return $this->footer8;
    }

    /**
     * Set footer9
     *
     * @param string $footer9
     * @return FormatoFinCxcVars
     */
    public function setFooter9($footer9)
    {
        $this->footer9 = $footer9;

        return $this;
    }

    /**
     * Get footer9
     *
     * @return string 
     */
    public function getFooter9()
    {
        return $this->footer9;
    }

    /**
     * Set certificamos1
     *
     * @param string $certificamos1
     * @return FormatoFinCxcVars
     */
    public function setCertificamos1($certificamos1)
    {
        $this->certificamos1 = $certificamos1;

        return $this;
    }

    /**
     * Get certificamos1
     *
     * @return string 
     */
    public function getCertificamos1()
    {
        return $this->certificamos1;
    }

    /**
     * Set certificamos2
     *
     * @param string $certificamos2
     * @return FormatoFinCxcVars
     */
    public function setCertificamos2($certificamos2)
    {
        $this->certificamos2 = $certificamos2;

        return $this;
    }

    /**
     * Get certificamos2
     *
     * @return string 
     */
    public function getCertificamos2()
    {
        return $this->certificamos2;
    }

    /**
     * Set certificamos3YtitFecha
     *
     * @param string $certificamos3YtitFecha
     * @return FormatoFinCxcVars
     */
    public function setCertificamos3YtitFecha($certificamos3YtitFecha)
    {
        $this->certificamos3YtitFecha = $certificamos3YtitFecha;

        return $this;
    }

    /**
     * Get certificamos3YtitFecha
     *
     * @return string 
     */
    public function getCertificamos3YtitFecha()
    {
        return $this->certificamos3YtitFecha;
    }
}
