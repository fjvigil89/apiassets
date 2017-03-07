<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmAbcCompras
 *
 * @ORM\Table(name="CRM_ABC_Compras", uniqueConstraints={@ORM\UniqueConstraint(name="IX1_CRM_ABC_Compras", columns={"Contador1"})}, indexes={@ORM\Index(name="Clu_CRM_ABC_Compras", columns={"Facturado_Ano"})})
 * @ORM\Entity
 */
class CrmAbcCompras
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Clasificacion", type="string", length=1, nullable=false)
     */
    private $clasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porc_Cliente", type="integer", nullable=false)
     */
    private $porcCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="Facturado_Ano", type="integer", nullable=false)
     */
    private $facturadoAno;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porc_Facturado", type="integer", nullable=false)
     */
    private $porcFacturado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Facturado_Acum", type="integer", nullable=false)
     */
    private $facturadoAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porc_Acum", type="integer", nullable=false)
     */
    private $porcAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     */
    private $contador1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Facturado_Ant", type="integer", nullable=false)
     */
    private $facturadoAnt;



    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set clasificacion
     *
     * @param string $clasificacion
     * @return CrmAbcCompras
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return string 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return CrmAbcCompras
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set porcCliente
     *
     * @param integer $porcCliente
     * @return CrmAbcCompras
     */
    public function setPorcCliente($porcCliente)
    {
        $this->porcCliente = $porcCliente;

        return $this;
    }

    /**
     * Get porcCliente
     *
     * @return integer 
     */
    public function getPorcCliente()
    {
        return $this->porcCliente;
    }

    /**
     * Set facturadoAno
     *
     * @param integer $facturadoAno
     * @return CrmAbcCompras
     */
    public function setFacturadoAno($facturadoAno)
    {
        $this->facturadoAno = $facturadoAno;

        return $this;
    }

    /**
     * Get facturadoAno
     *
     * @return integer 
     */
    public function getFacturadoAno()
    {
        return $this->facturadoAno;
    }

    /**
     * Set porcFacturado
     *
     * @param integer $porcFacturado
     * @return CrmAbcCompras
     */
    public function setPorcFacturado($porcFacturado)
    {
        $this->porcFacturado = $porcFacturado;

        return $this;
    }

    /**
     * Get porcFacturado
     *
     * @return integer 
     */
    public function getPorcFacturado()
    {
        return $this->porcFacturado;
    }

    /**
     * Set facturadoAcum
     *
     * @param integer $facturadoAcum
     * @return CrmAbcCompras
     */
    public function setFacturadoAcum($facturadoAcum)
    {
        $this->facturadoAcum = $facturadoAcum;

        return $this;
    }

    /**
     * Get facturadoAcum
     *
     * @return integer 
     */
    public function getFacturadoAcum()
    {
        return $this->facturadoAcum;
    }

    /**
     * Set porcAcum
     *
     * @param integer $porcAcum
     * @return CrmAbcCompras
     */
    public function setPorcAcum($porcAcum)
    {
        $this->porcAcum = $porcAcum;

        return $this;
    }

    /**
     * Get porcAcum
     *
     * @return integer 
     */
    public function getPorcAcum()
    {
        return $this->porcAcum;
    }

    /**
     * Set contador1
     *
     * @param integer $contador1
     * @return CrmAbcCompras
     */
    public function setContador1($contador1)
    {
        $this->contador1 = $contador1;

        return $this;
    }

    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set facturadoAnt
     *
     * @param integer $facturadoAnt
     * @return CrmAbcCompras
     */
    public function setFacturadoAnt($facturadoAnt)
    {
        $this->facturadoAnt = $facturadoAnt;

        return $this;
    }

    /**
     * Get facturadoAnt
     *
     * @return integer 
     */
    public function getFacturadoAnt()
    {
        return $this->facturadoAnt;
    }
}
