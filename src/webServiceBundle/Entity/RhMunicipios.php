<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMunicipios
 *
 * @ORM\Table(name="RH_Municipios")
 * @ORM\Entity
 */
class RhMunicipios
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Provincia", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProvincia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Municipio", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Municipio", type="string", length=50, nullable=false)
     */
    private $descMunicipio;



    /**
     * Set idProvincia
     *
     * @param string $idProvincia
     * @return RhMunicipios
     */
    public function setIdProvincia($idProvincia)
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    /**
     * Get idProvincia
     *
     * @return string 
     */
    public function getIdProvincia()
    {
        return $this->idProvincia;
    }

    /**
     * Set idMunicipio
     *
     * @param string $idMunicipio
     * @return RhMunicipios
     */
    public function setIdMunicipio($idMunicipio)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return string 
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set descMunicipio
     *
     * @param string $descMunicipio
     * @return RhMunicipios
     */
    public function setDescMunicipio($descMunicipio)
    {
        $this->descMunicipio = $descMunicipio;

        return $this;
    }

    /**
     * Get descMunicipio
     *
     * @return string 
     */
    public function getDescMunicipio()
    {
        return $this->descMunicipio;
    }
}
