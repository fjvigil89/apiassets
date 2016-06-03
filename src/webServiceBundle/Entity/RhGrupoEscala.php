<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhGrupoEscala
 *
 * @ORM\Table(name="RH_Grupo_Escala")
 * @ORM\Entity
 */
class RhGrupoEscala
{
    /**
     * @var string
     *
     * @ORM\Column(name="NGrupo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ngrupo;

    /**
     * @var integer
     *
     * @ORM\Column(name="RGraduados", type="integer", nullable=false)
     */
    private $rgraduados;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tecnicos_T1", type="integer", nullable=false)
     */
    private $tecnicosT1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tecnicos_T2", type="integer", nullable=false)
     */
    private $tecnicosT2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tecnicos_T3", type="integer", nullable=false)
     */
    private $tecnicosT3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Administrativos", type="integer", nullable=false)
     */
    private $administrativos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Servicios", type="integer", nullable=false)
     */
    private $servicios;

    /**
     * @var integer
     *
     * @ORM\Column(name="Obreros", type="integer", nullable=false)
     */
    private $obreros;

    /**
     * @var integer
     *
     * @ORM\Column(name="Dirigentes", type="integer", nullable=false)
     */
    private $dirigentes;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSObreros", type="integer", nullable=false)
     */
    private $msobreros;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSServicios", type="integer", nullable=false)
     */
    private $msservicios;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSTecnicos", type="integer", nullable=false)
     */
    private $mstecnicos;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSAdministrativos", type="integer", nullable=false)
     */
    private $msadministrativos;

    /**
     * @var integer
     *
     * @ORM\Column(name="MSDirigentes", type="integer", nullable=false)
     */
    private $msdirigentes;



    /**
     * Get ngrupo
     *
     * @return string 
     */
    public function getNgrupo()
    {
        return $this->ngrupo;
    }

    /**
     * Set rgraduados
     *
     * @param integer $rgraduados
     * @return RhGrupoEscala
     */
    public function setRgraduados($rgraduados)
    {
        $this->rgraduados = $rgraduados;

        return $this;
    }

    /**
     * Get rgraduados
     *
     * @return integer 
     */
    public function getRgraduados()
    {
        return $this->rgraduados;
    }

    /**
     * Set tecnicosT1
     *
     * @param integer $tecnicosT1
     * @return RhGrupoEscala
     */
    public function setTecnicosT1($tecnicosT1)
    {
        $this->tecnicosT1 = $tecnicosT1;

        return $this;
    }

    /**
     * Get tecnicosT1
     *
     * @return integer 
     */
    public function getTecnicosT1()
    {
        return $this->tecnicosT1;
    }

    /**
     * Set tecnicosT2
     *
     * @param integer $tecnicosT2
     * @return RhGrupoEscala
     */
    public function setTecnicosT2($tecnicosT2)
    {
        $this->tecnicosT2 = $tecnicosT2;

        return $this;
    }

    /**
     * Get tecnicosT2
     *
     * @return integer 
     */
    public function getTecnicosT2()
    {
        return $this->tecnicosT2;
    }

    /**
     * Set tecnicosT3
     *
     * @param integer $tecnicosT3
     * @return RhGrupoEscala
     */
    public function setTecnicosT3($tecnicosT3)
    {
        $this->tecnicosT3 = $tecnicosT3;

        return $this;
    }

    /**
     * Get tecnicosT3
     *
     * @return integer 
     */
    public function getTecnicosT3()
    {
        return $this->tecnicosT3;
    }

    /**
     * Set administrativos
     *
     * @param integer $administrativos
     * @return RhGrupoEscala
     */
    public function setAdministrativos($administrativos)
    {
        $this->administrativos = $administrativos;

        return $this;
    }

    /**
     * Get administrativos
     *
     * @return integer 
     */
    public function getAdministrativos()
    {
        return $this->administrativos;
    }

    /**
     * Set servicios
     *
     * @param integer $servicios
     * @return RhGrupoEscala
     */
    public function setServicios($servicios)
    {
        $this->servicios = $servicios;

        return $this;
    }

    /**
     * Get servicios
     *
     * @return integer 
     */
    public function getServicios()
    {
        return $this->servicios;
    }

    /**
     * Set obreros
     *
     * @param integer $obreros
     * @return RhGrupoEscala
     */
    public function setObreros($obreros)
    {
        $this->obreros = $obreros;

        return $this;
    }

    /**
     * Get obreros
     *
     * @return integer 
     */
    public function getObreros()
    {
        return $this->obreros;
    }

    /**
     * Set dirigentes
     *
     * @param integer $dirigentes
     * @return RhGrupoEscala
     */
    public function setDirigentes($dirigentes)
    {
        $this->dirigentes = $dirigentes;

        return $this;
    }

    /**
     * Get dirigentes
     *
     * @return integer 
     */
    public function getDirigentes()
    {
        return $this->dirigentes;
    }

    /**
     * Set msobreros
     *
     * @param integer $msobreros
     * @return RhGrupoEscala
     */
    public function setMsobreros($msobreros)
    {
        $this->msobreros = $msobreros;

        return $this;
    }

    /**
     * Get msobreros
     *
     * @return integer 
     */
    public function getMsobreros()
    {
        return $this->msobreros;
    }

    /**
     * Set msservicios
     *
     * @param integer $msservicios
     * @return RhGrupoEscala
     */
    public function setMsservicios($msservicios)
    {
        $this->msservicios = $msservicios;

        return $this;
    }

    /**
     * Get msservicios
     *
     * @return integer 
     */
    public function getMsservicios()
    {
        return $this->msservicios;
    }

    /**
     * Set mstecnicos
     *
     * @param integer $mstecnicos
     * @return RhGrupoEscala
     */
    public function setMstecnicos($mstecnicos)
    {
        $this->mstecnicos = $mstecnicos;

        return $this;
    }

    /**
     * Get mstecnicos
     *
     * @return integer 
     */
    public function getMstecnicos()
    {
        return $this->mstecnicos;
    }

    /**
     * Set msadministrativos
     *
     * @param integer $msadministrativos
     * @return RhGrupoEscala
     */
    public function setMsadministrativos($msadministrativos)
    {
        $this->msadministrativos = $msadministrativos;

        return $this;
    }

    /**
     * Get msadministrativos
     *
     * @return integer 
     */
    public function getMsadministrativos()
    {
        return $this->msadministrativos;
    }

    /**
     * Set msdirigentes
     *
     * @param integer $msdirigentes
     * @return RhGrupoEscala
     */
    public function setMsdirigentes($msdirigentes)
    {
        $this->msdirigentes = $msdirigentes;

        return $this;
    }

    /**
     * Get msdirigentes
     *
     * @return integer 
     */
    public function getMsdirigentes()
    {
        return $this->msdirigentes;
    }
}
