<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhGrpsendrec
 *
 * @ORM\Table(name="RH_GrpSendRec")
 * @ORM\Entity
 */
class RhGrpsendrec
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_GrpSendRec", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrpsendrec;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_GrpSendRec", type="string", length=50, nullable=false)
     */
    private $descGrpsendrec;



    /**
     * Get idGrpsendrec
     *
     * @return string 
     */
    public function getIdGrpsendrec()
    {
        return $this->idGrpsendrec;
    }

    /**
     * Set descGrpsendrec
     *
     * @param string $descGrpsendrec
     * @return RhGrpsendrec
     */
    public function setDescGrpsendrec($descGrpsendrec)
    {
        $this->descGrpsendrec = $descGrpsendrec;

        return $this;
    }

    /**
     * Get descGrpsendrec
     *
     * @return string 
     */
    public function getDescGrpsendrec()
    {
        return $this->descGrpsendrec;
    }
}
