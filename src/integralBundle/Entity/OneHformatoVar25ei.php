<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OneHformatoVar25ei
 *
 * @ORM\Table(name="ONE_HFormato_Var_25EI")
 * @ORM\Entity
 */
class OneHformatoVar25ei
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Numero_Formato", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numeroFormato;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_EF", type="string", length=5, nullable=false)
     */
    private $tipoEf;

    /**
     * @var string
     *
     * @ORM\Column(name="ENTIDAD", type="string", length=120, nullable=false)
     */
    private $entidad;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ENTIDAD", type="string", length=50, nullable=false)
     */
    private $idEntidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Hecho_Por", type="string", length=25, nullable=false)
     */
    private $hechoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Contador", type="string", length=30, nullable=false)
     */
    private $nameContador;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Director", type="string", length=30, nullable=false)
     */
    private $nameDirector;

    /**
     * @var string
     *
     * @ORM\Column(name="Cap_Oficial1", type="string", length=55, nullable=false)
     */
    private $capOficial1;

    /**
     * @var string
     *
     * @ORM\Column(name="Cap_Oficial2", type="string", length=55, nullable=false)
     */
    private $capOficial2;

    /**
     * @var string
     *
     * @ORM\Column(name="Cap_Oficial3", type="string", length=55, nullable=false)
     */
    private $capOficial3;

    /**
     * @var string
     *
     * @ORM\Column(name="Cap_Oficial4", type="string", length=55, nullable=false)
     */
    private $capOficial4;

    /**
     * @var string
     *
     * @ORM\Column(name="Cap_Oficial5", type="string", length=55, nullable=false)
     */
    private $capOficial5;

    /**
     * @var string
     *
     * @ORM\Column(name="Cap1_T_Ini", type="string", length=25, nullable=false)
     */
    private $cap1TIni;

    /**
     * @var string
     *
     * @ORM\Column(name="Cap2_SMC_INI", type="string", length=25, nullable=false)
     */
    private $cap2SmcIni;

    /**
     * @var string
     *
     * @ORM\Column(name="Modelo", type="string", length=25, nullable=false)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=25, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="UM1", type="string", length=25, nullable=false)
     */
    private $um1;

    /**
     * @var string
     *
     * @ORM\Column(name="UM2", type="string", length=25, nullable=false)
     */
    private $um2;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado_Empresa", type="string", length=1, nullable=false)
     */
    private $estadoEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ORGANISMO", type="string", length=50, nullable=false)
     */
    private $idOrganismo;

    /**
     * @var string
     *
     * @ORM\Column(name="SUB", type="string", length=50, nullable=false)
     */
    private $sub;

    /**
     * @var string
     *
     * @ORM\Column(name="DIVISION", type="string", length=50, nullable=false)
     */
    private $division;

    /**
     * @var string
     *
     * @ORM\Column(name="CLASE", type="string", length=50, nullable=false)
     */
    private $clase;

    /**
     * @var string
     *
     * @ORM\Column(name="Provincia", type="string", length=50, nullable=false)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="MUNICIPIO", type="string", length=50, nullable=false)
     */
    private $municipio;



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
     * Set tipoEf
     *
     * @param string $tipoEf
     * @return OneHformatoVar25ei
     */
    public function setTipoEf($tipoEf)
    {
        $this->tipoEf = $tipoEf;

        return $this;
    }

    /**
     * Get tipoEf
     *
     * @return string 
     */
    public function getTipoEf()
    {
        return $this->tipoEf;
    }

    /**
     * Set entidad
     *
     * @param string $entidad
     * @return OneHformatoVar25ei
     */
    public function setEntidad($entidad)
    {
        $this->entidad = $entidad;

        return $this;
    }

    /**
     * Get entidad
     *
     * @return string 
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * Set idEntidad
     *
     * @param string $idEntidad
     * @return OneHformatoVar25ei
     */
    public function setIdEntidad($idEntidad)
    {
        $this->idEntidad = $idEntidad;

        return $this;
    }

    /**
     * Get idEntidad
     *
     * @return string 
     */
    public function getIdEntidad()
    {
        return $this->idEntidad;
    }

    /**
     * Set hechoPor
     *
     * @param string $hechoPor
     * @return OneHformatoVar25ei
     */
    public function setHechoPor($hechoPor)
    {
        $this->hechoPor = $hechoPor;

        return $this;
    }

    /**
     * Get hechoPor
     *
     * @return string 
     */
    public function getHechoPor()
    {
        return $this->hechoPor;
    }

    /**
     * Set nameContador
     *
     * @param string $nameContador
     * @return OneHformatoVar25ei
     */
    public function setNameContador($nameContador)
    {
        $this->nameContador = $nameContador;

        return $this;
    }

    /**
     * Get nameContador
     *
     * @return string 
     */
    public function getNameContador()
    {
        return $this->nameContador;
    }

    /**
     * Set nameDirector
     *
     * @param string $nameDirector
     * @return OneHformatoVar25ei
     */
    public function setNameDirector($nameDirector)
    {
        $this->nameDirector = $nameDirector;

        return $this;
    }

    /**
     * Get nameDirector
     *
     * @return string 
     */
    public function getNameDirector()
    {
        return $this->nameDirector;
    }

    /**
     * Set capOficial1
     *
     * @param string $capOficial1
     * @return OneHformatoVar25ei
     */
    public function setCapOficial1($capOficial1)
    {
        $this->capOficial1 = $capOficial1;

        return $this;
    }

    /**
     * Get capOficial1
     *
     * @return string 
     */
    public function getCapOficial1()
    {
        return $this->capOficial1;
    }

    /**
     * Set capOficial2
     *
     * @param string $capOficial2
     * @return OneHformatoVar25ei
     */
    public function setCapOficial2($capOficial2)
    {
        $this->capOficial2 = $capOficial2;

        return $this;
    }

    /**
     * Get capOficial2
     *
     * @return string 
     */
    public function getCapOficial2()
    {
        return $this->capOficial2;
    }

    /**
     * Set capOficial3
     *
     * @param string $capOficial3
     * @return OneHformatoVar25ei
     */
    public function setCapOficial3($capOficial3)
    {
        $this->capOficial3 = $capOficial3;

        return $this;
    }

    /**
     * Get capOficial3
     *
     * @return string 
     */
    public function getCapOficial3()
    {
        return $this->capOficial3;
    }

    /**
     * Set capOficial4
     *
     * @param string $capOficial4
     * @return OneHformatoVar25ei
     */
    public function setCapOficial4($capOficial4)
    {
        $this->capOficial4 = $capOficial4;

        return $this;
    }

    /**
     * Get capOficial4
     *
     * @return string 
     */
    public function getCapOficial4()
    {
        return $this->capOficial4;
    }

    /**
     * Set capOficial5
     *
     * @param string $capOficial5
     * @return OneHformatoVar25ei
     */
    public function setCapOficial5($capOficial5)
    {
        $this->capOficial5 = $capOficial5;

        return $this;
    }

    /**
     * Get capOficial5
     *
     * @return string 
     */
    public function getCapOficial5()
    {
        return $this->capOficial5;
    }

    /**
     * Set cap1TIni
     *
     * @param string $cap1TIni
     * @return OneHformatoVar25ei
     */
    public function setCap1TIni($cap1TIni)
    {
        $this->cap1TIni = $cap1TIni;

        return $this;
    }

    /**
     * Get cap1TIni
     *
     * @return string 
     */
    public function getCap1TIni()
    {
        return $this->cap1TIni;
    }

    /**
     * Set cap2SmcIni
     *
     * @param string $cap2SmcIni
     * @return OneHformatoVar25ei
     */
    public function setCap2SmcIni($cap2SmcIni)
    {
        $this->cap2SmcIni = $cap2SmcIni;

        return $this;
    }

    /**
     * Get cap2SmcIni
     *
     * @return string 
     */
    public function getCap2SmcIni()
    {
        return $this->cap2SmcIni;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return OneHformatoVar25ei
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return OneHformatoVar25ei
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set um1
     *
     * @param string $um1
     * @return OneHformatoVar25ei
     */
    public function setUm1($um1)
    {
        $this->um1 = $um1;

        return $this;
    }

    /**
     * Get um1
     *
     * @return string 
     */
    public function getUm1()
    {
        return $this->um1;
    }

    /**
     * Set um2
     *
     * @param string $um2
     * @return OneHformatoVar25ei
     */
    public function setUm2($um2)
    {
        $this->um2 = $um2;

        return $this;
    }

    /**
     * Get um2
     *
     * @return string 
     */
    public function getUm2()
    {
        return $this->um2;
    }

    /**
     * Set estadoEmpresa
     *
     * @param string $estadoEmpresa
     * @return OneHformatoVar25ei
     */
    public function setEstadoEmpresa($estadoEmpresa)
    {
        $this->estadoEmpresa = $estadoEmpresa;

        return $this;
    }

    /**
     * Get estadoEmpresa
     *
     * @return string 
     */
    public function getEstadoEmpresa()
    {
        return $this->estadoEmpresa;
    }

    /**
     * Set idOrganismo
     *
     * @param string $idOrganismo
     * @return OneHformatoVar25ei
     */
    public function setIdOrganismo($idOrganismo)
    {
        $this->idOrganismo = $idOrganismo;

        return $this;
    }

    /**
     * Get idOrganismo
     *
     * @return string 
     */
    public function getIdOrganismo()
    {
        return $this->idOrganismo;
    }

    /**
     * Set sub
     *
     * @param string $sub
     * @return OneHformatoVar25ei
     */
    public function setSub($sub)
    {
        $this->sub = $sub;

        return $this;
    }

    /**
     * Get sub
     *
     * @return string 
     */
    public function getSub()
    {
        return $this->sub;
    }

    /**
     * Set division
     *
     * @param string $division
     * @return OneHformatoVar25ei
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string 
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set clase
     *
     * @param string $clase
     * @return OneHformatoVar25ei
     */
    public function setClase($clase)
    {
        $this->clase = $clase;

        return $this;
    }

    /**
     * Get clase
     *
     * @return string 
     */
    public function getClase()
    {
        return $this->clase;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return OneHformatoVar25ei
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     * @return OneHformatoVar25ei
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }
}
