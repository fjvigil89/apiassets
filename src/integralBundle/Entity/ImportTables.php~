<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportTables
 *
 * @ORM\Table(name="Import_Tables")
 * @ORM\Entity
 */
class ImportTables
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="STable", type="string", length=80, nullable=false)
     */
    private $stable;



    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set stable
     *
     * @param string $stable
     * @return ImportTables
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
