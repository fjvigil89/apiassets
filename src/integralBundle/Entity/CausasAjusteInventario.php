<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CausasAjusteInventario
 *
 * @ORM\Table(name="Causas_Ajuste_Inventario")
 * @ORM\Entity
 */
class CausasAjusteInventario
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausasAjuste", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCausasajuste;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CausasAjuste", type="string", length=50, nullable=false)
     */
    private $descCausasajuste;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Aumenta_Inventario", type="boolean", nullable=false)
     */
    private $aumentaInventario;



    /**
     * Get idCausasajuste
     *
     * @return string 
     */
    public function getIdCausasajuste()
    {
        return $this->idCausasajuste;
    }

    /**
     * Set descCausasajuste
     *
     * @param string $descCausasajuste
     * @return CausasAjusteInventario
     */
    public function setDescCausasajuste($descCausasajuste)
    {
        $this->descCausasajuste = $descCausasajuste;

        return $this;
    }

    /**
     * Get descCausasajuste
     *
     * @return string 
     */
    public function getDescCausasajuste()
    {
        return $this->descCausasajuste;
    }

    /**
     * Set aumentaInventario
     *
     * @param boolean $aumentaInventario
     * @return CausasAjusteInventario
     */
    public function setAumentaInventario($aumentaInventario)
    {
        $this->aumentaInventario = $aumentaInventario;

        return $this;
    }

    /**
     * Get aumentaInventario
     *
     * @return boolean 
     */
    public function getAumentaInventario()
    {
        return $this->aumentaInventario;
    }
}
