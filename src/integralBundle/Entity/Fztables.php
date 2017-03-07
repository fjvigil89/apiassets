<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fztables
 *
 * @ORM\Table(name="FzTables")
 * @ORM\Entity
 */
class Fztables
{
    /**
     * @var string
     *
     * @ORM\Column(name="Header", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $header;

    /**
     * @var string
     *
     * @ORM\Column(name="Detail", type="string", length=50, nullable=false)
     */
    private $detail;

    /**
     * @var string
     *
     * @ORM\Column(name="Key_Field", type="string", length=50, nullable=false)
     */
    private $keyField;



    /**
     * Get header
     *
     * @return string 
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Set detail
     *
     * @param string $detail
     * @return Fztables
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set keyField
     *
     * @param string $keyField
     * @return Fztables
     */
    public function setKeyField($keyField)
    {
        $this->keyField = $keyField;

        return $this;
    }

    /**
     * Get keyField
     *
     * @return string 
     */
    public function getKeyField()
    {
        return $this->keyField;
    }
}
