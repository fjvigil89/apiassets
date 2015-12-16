<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzimportSourceTables
 *
 * @ORM\Table(name="FzImport_Source_Tables")
 * @ORM\Entity
 */
class FzimportSourceTables
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador9", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador9;

    /**
     * @var string
     *
     * @ORM\Column(name="STable", type="string", length=80, nullable=false)
     */
    private $stable;



    /**
     * Get contador9
     *
     * @return integer 
     */
    public function getContador9()
    {
        return $this->contador9;
    }

    /**
     * Set stable
     *
     * @param string $stable
     * @return FzimportSourceTables
     */
    public function setStable($stable)
    {
        $this->stable = $stable;

        return $this;
    }

    /**
     * Get stable
     *
     * @return string 
     */
    public function getStable()
    {
        return $this->stable;
    }
}
