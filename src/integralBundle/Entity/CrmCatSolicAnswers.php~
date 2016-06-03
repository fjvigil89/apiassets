<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmCatSolicAnswers
 *
 * @ORM\Table(name="CRM_Cat_Solic_Answers")
 * @ORM\Entity
 */
class CrmCatSolicAnswers
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Answer", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Activa", type="boolean", nullable=false)
     */
    private $activa;



    /**
     * Get idAnswer
     *
     * @return string 
     */
    public function getIdAnswer()
    {
        return $this->idAnswer;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return CrmCatSolicAnswers
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set activa
     *
     * @param boolean $activa
     * @return CrmCatSolicAnswers
     */
    public function setActiva($activa)
    {
        $this->activa = $activa;

        return $this;
    }

    /**
     * Get activa
     *
     * @return boolean 
     */
    public function getActiva()
    {
        return $this->activa;
    }
}
