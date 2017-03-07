<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CzModuleCn
 *
 * @ORM\Table(name="Cz_Module_CN")
 * @ORM\Entity
 */
class CzModuleCn
{
    /**
     * @var string
     *
     * @ORM\Column(name="CN", type="blob", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cn;



    /**
     * Get cn
     *
     * @return string 
     */
    public function getCn()
    {
        return $this->cn;
    }
}
