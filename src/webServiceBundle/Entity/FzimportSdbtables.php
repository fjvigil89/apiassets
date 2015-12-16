<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzimportSdbtables
 *
 * @ORM\Table(name="FzImport_SDBTables")
 * @ORM\Entity
 */
class FzimportSdbtables
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="integer", nullable=false)
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="STable", type="string", length=80, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stable;



    /**
     * Set item
     *
     * @param integer $item
     * @return FzimportSdbtables
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

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
     * Get stable
     *
     * @return string 
     */
    public function getStable()
    {
        return $this->stable;
    }
}
