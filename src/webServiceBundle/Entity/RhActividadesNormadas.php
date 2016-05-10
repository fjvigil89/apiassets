<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhActividadesNormadas
 *
 * @ORM\Table(name="RH_Actividades_Normadas")
 * @ORM\Entity
 */
class RhActividadesNormadas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Actividad", type="string", length=100, nullable=false)
     */
    private $descActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="UM", type="string", length=10, nullable=false)
     */
    private $um;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $tasa;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Norma", type="string", length=1, nullable=false)
     */
    private $tipoNorma;

    /**
     * @var string
     *
     * @ORM\Column(name="Norma_Tiempo", type="decimal", precision=11, scale=4, nullable=false)
     */
    private $normaTiempo;



    /**
     * Get idActividad
     *
     * @return string 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }

    /**
     * Set descActividad
     *
     * @param string $descActividad
     * @return RhActividadesNormadas
     */
    public function setDescActividad($descActividad)
    {
        $this->descActividad = $descActividad;

        return $this;
    }

    /**
     * Get descActividad
     *
     * @return string 
     */
    public function getDescActividad()
    {
        return $this->descActividad;
    }

    /**
     * Set um
     *
     * @param string $um
     * @return RhActividadesNormadas
     */
    public function setUm($um)
    {
        $this->um = $um;

        return $this;
    }

    /**
     * Get um
     *
     * @return string 
     */
    public function getUm()
    {
        return $this->um;
    }

    /**
     * Set tasa
     *
     * @param string $tasa
     * @return RhActividadesNormadas
     */
    public function setTasa($tasa)
    {
        $this->tasa = $tasa;

        return $this;
    }

    /**
     * Get tasa
     *
     * @return string 
     */
    public function getTasa()
    {
        return $this->tasa;
    }

    /**
     * Set tipoNorma
     *
     * @param string $tipoNorma
     * @return RhActividadesNormadas
     */
    public function setTipoNorma($tipoNorma)
    {
        $this->tipoNorma = $tipoNorma;

        return $this;
    }

    /**
     * Get tipoNorma
     *
     * @return string 
     */
    public function getTipoNorma()
    {
        return $this->tipoNorma;
    }

    /**
     * Set normaTiempo
     *
     * @param string $normaTiempo
     * @return RhActividadesNormadas
     */
    public function setNormaTiempo($normaTiempo)
    {
        $this->normaTiempo = $normaTiempo;

        return $this;
    }

    /**
     * Get normaTiempo
     *
     * @return string 
     */
    public function getNormaTiempo()
    {
        return $this->normaTiempo;
    }
}
