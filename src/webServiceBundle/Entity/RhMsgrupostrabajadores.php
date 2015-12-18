<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMsgrupostrabajadores
 *
 * @ORM\Table(name="RH_MSGruposTrabajadores")
 * @ORM\Entity
 */
class RhMsgrupostrabajadores
{
    /**
     * @var string
     *
     * @ORM\Column(name="MSCodGrupo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mscodgrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="MSDescGrupo", type="string", length=50, nullable=false)
     */
    private $msdescgrupo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSPagoCoeficiente", type="boolean", nullable=false)
     */
    private $mspagocoeficiente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSPagoAntiguedad", type="boolean", nullable=false)
     */
    private $mspagoantiguedad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSPagoTurno", type="boolean", nullable=false)
     */
    private $mspagoturno;



    /**
     * Get mscodgrupo
     *
     * @return string 
     */
    public function getMscodgrupo()
    {
        return $this->mscodgrupo;
    }

    /**
     * Set msdescgrupo
     *
     * @param string $msdescgrupo
     * @return RhMsgrupostrabajadores
     */
    public function setMsdescgrupo($msdescgrupo)
    {
        $this->msdescgrupo = $msdescgrupo;

        return $this;
    }

    /**
     * Get msdescgrupo
     *
     * @return string 
     */
    public function getMsdescgrupo()
    {
        return $this->msdescgrupo;
    }

    /**
     * Set mspagocoeficiente
     *
     * @param boolean $mspagocoeficiente
     * @return RhMsgrupostrabajadores
     */
    public function setMspagocoeficiente($mspagocoeficiente)
    {
        $this->mspagocoeficiente = $mspagocoeficiente;

        return $this;
    }

    /**
     * Get mspagocoeficiente
     *
     * @return boolean 
     */
    public function getMspagocoeficiente()
    {
        return $this->mspagocoeficiente;
    }

    /**
     * Set mspagoantiguedad
     *
     * @param boolean $mspagoantiguedad
     * @return RhMsgrupostrabajadores
     */
    public function setMspagoantiguedad($mspagoantiguedad)
    {
        $this->mspagoantiguedad = $mspagoantiguedad;

        return $this;
    }

    /**
     * Get mspagoantiguedad
     *
     * @return boolean 
     */
    public function getMspagoantiguedad()
    {
        return $this->mspagoantiguedad;
    }

    /**
     * Set mspagoturno
     *
     * @param boolean $mspagoturno
     * @return RhMsgrupostrabajadores
     */
    public function setMspagoturno($mspagoturno)
    {
        $this->mspagoturno = $mspagoturno;

        return $this;
    }

    /**
     * Get mspagoturno
     *
     * @return boolean 
     */
    public function getMspagoturno()
    {
        return $this->mspagoturno;
    }
}
