<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCapacitacion
 *
 * @ORM\Table(name="RH_Capacitacion")
 * @ORM\Entity
 */
class RhCapacitacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Curso", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCurso;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Curso", type="string", length=80, nullable=false)
     */
    private $descCurso;



    /**
     * Get idCurso
     *
     * @return string 
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }

    /**
     * Set descCurso
     *
     * @param string $descCurso
     * @return RhCapacitacion
     */
    public function setDescCurso($descCurso)
    {
        $this->descCurso = $descCurso;

        return $this;
    }

    /**
     * Get descCurso
     *
     * @return string 
     */
    public function getDescCurso()
    {
        return $this->descCurso;
    }
}
