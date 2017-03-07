<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfocorporativaInv
 *
 * @ORM\Table(name="InfoCorporativa_Inv")
 * @ORM\Entity
 */
class InfocorporativaInv
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodAgrupa", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codagrupa;

    /**
     * @var string
     *
     * @ORM\Column(name="DesAgrupa", type="string", length=50, nullable=false)
     */
    private $desagrupa;

    /**
     * @var string
     *
     * @ORM\Column(name="CodAlmacen", type="string", length=5, nullable=false)
     */
    private $codalmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="DesAlmacen", type="string", length=50, nullable=false)
     */
    private $desalmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Anno", type="integer", nullable=false)
     */
    private $anno;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="integer", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoInfo", type="integer", nullable=false)
     */
    private $tipoinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="CodCliente", type="string", length=15, nullable=false)
     */
    private $codcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="DesCliente", type="string", length=70, nullable=false)
     */
    private $descliente;

    /**
     * @var string
     *
     * @ORM\Column(name="CodProducto", type="string", length=20, nullable=false)
     */
    private $codproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="DesProducto", type="string", length=255, nullable=false)
     */
    private $desproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="UmProducto", type="string", length=5, nullable=false)
     */
    private $umproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMB", type="integer", nullable=false)
     */
    private $importemb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMC", type="integer", nullable=false)
     */
    private $importemc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Consumo_Promedio", type="integer", nullable=false)
     */
    private $consumoPromedio;

    /**
     * @var string
     *
     * @ORM\Column(name="Existencia_Minimo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $existenciaMinimo;

    /**
     * @var string
     *
     * @ORM\Column(name="Existencia_Maximo", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $existenciaMaximo;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     */
    private $idsync;

    /**
     * @var string
     *
     * @ORM\Column(name="Modifi", type="string", length=1, nullable=false)
     */
    private $modifi;

    /**
     * @var string
     *
     * @ORM\Column(name="Entradas", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $entradas;

    /**
     * @var string
     *
     * @ORM\Column(name="Entradas_Trans", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $entradasTrans;

    /**
     * @var string
     *
     * @ORM\Column(name="Salidas", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $salidas;



    /**
     * Get codagrupa
     *
     * @return string 
     */
    public function getCodagrupa()
    {
        return $this->codagrupa;
    }

    /**
     * Set desagrupa
     *
     * @param string $desagrupa
     * @return InfocorporativaInv
     */
    public function setDesagrupa($desagrupa)
    {
        $this->desagrupa = $desagrupa;

        return $this;
    }

    /**
     * Get desagrupa
     *
     * @return string 
     */
    public function getDesagrupa()
    {
        return $this->desagrupa;
    }

    /**
     * Set codalmacen
     *
     * @param string $codalmacen
     * @return InfocorporativaInv
     */
    public function setCodalmacen($codalmacen)
    {
        $this->codalmacen = $codalmacen;

        return $this;
    }

    /**
     * Get codalmacen
     *
     * @return string 
     */
    public function getCodalmacen()
    {
        return $this->codalmacen;
    }

    /**
     * Set desalmacen
     *
     * @param string $desalmacen
     * @return InfocorporativaInv
     */
    public function setDesalmacen($desalmacen)
    {
        $this->desalmacen = $desalmacen;

        return $this;
    }

    /**
     * Get desalmacen
     *
     * @return string 
     */
    public function getDesalmacen()
    {
        return $this->desalmacen;
    }

    /**
     * Set anno
     *
     * @param integer $anno
     * @return InfocorporativaInv
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;

        return $this;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return InfocorporativaInv
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set tipoinfo
     *
     * @param integer $tipoinfo
     * @return InfocorporativaInv
     */
    public function setTipoinfo($tipoinfo)
    {
        $this->tipoinfo = $tipoinfo;

        return $this;
    }

    /**
     * Get tipoinfo
     *
     * @return integer 
     */
    public function getTipoinfo()
    {
        return $this->tipoinfo;
    }

    /**
     * Set codcliente
     *
     * @param string $codcliente
     * @return InfocorporativaInv
     */
    public function setCodcliente($codcliente)
    {
        $this->codcliente = $codcliente;

        return $this;
    }

    /**
     * Get codcliente
     *
     * @return string 
     */
    public function getCodcliente()
    {
        return $this->codcliente;
    }

    /**
     * Set descliente
     *
     * @param string $descliente
     * @return InfocorporativaInv
     */
    public function setDescliente($descliente)
    {
        $this->descliente = $descliente;

        return $this;
    }

    /**
     * Get descliente
     *
     * @return string 
     */
    public function getDescliente()
    {
        return $this->descliente;
    }

    /**
     * Set codproducto
     *
     * @param string $codproducto
     * @return InfocorporativaInv
     */
    public function setCodproducto($codproducto)
    {
        $this->codproducto = $codproducto;

        return $this;
    }

    /**
     * Get codproducto
     *
     * @return string 
     */
    public function getCodproducto()
    {
        return $this->codproducto;
    }

    /**
     * Set desproducto
     *
     * @param string $desproducto
     * @return InfocorporativaInv
     */
    public function setDesproducto($desproducto)
    {
        $this->desproducto = $desproducto;

        return $this;
    }

    /**
     * Get desproducto
     *
     * @return string 
     */
    public function getDesproducto()
    {
        return $this->desproducto;
    }

    /**
     * Set umproducto
     *
     * @param string $umproducto
     * @return InfocorporativaInv
     */
    public function setUmproducto($umproducto)
    {
        $this->umproducto = $umproducto;

        return $this;
    }

    /**
     * Get umproducto
     *
     * @return string 
     */
    public function getUmproducto()
    {
        return $this->umproducto;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return InfocorporativaInv
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set importemb
     *
     * @param integer $importemb
     * @return InfocorporativaInv
     */
    public function setImportemb($importemb)
    {
        $this->importemb = $importemb;

        return $this;
    }

    /**
     * Get importemb
     *
     * @return integer 
     */
    public function getImportemb()
    {
        return $this->importemb;
    }

    /**
     * Set importemc
     *
     * @param integer $importemc
     * @return InfocorporativaInv
     */
    public function setImportemc($importemc)
    {
        $this->importemc = $importemc;

        return $this;
    }

    /**
     * Get importemc
     *
     * @return integer 
     */
    public function getImportemc()
    {
        return $this->importemc;
    }

    /**
     * Set consumoPromedio
     *
     * @param integer $consumoPromedio
     * @return InfocorporativaInv
     */
    public function setConsumoPromedio($consumoPromedio)
    {
        $this->consumoPromedio = $consumoPromedio;

        return $this;
    }

    /**
     * Get consumoPromedio
     *
     * @return integer 
     */
    public function getConsumoPromedio()
    {
        return $this->consumoPromedio;
    }

    /**
     * Set existenciaMinimo
     *
     * @param string $existenciaMinimo
     * @return InfocorporativaInv
     */
    public function setExistenciaMinimo($existenciaMinimo)
    {
        $this->existenciaMinimo = $existenciaMinimo;

        return $this;
    }

    /**
     * Get existenciaMinimo
     *
     * @return string 
     */
    public function getExistenciaMinimo()
    {
        return $this->existenciaMinimo;
    }

    /**
     * Set existenciaMaximo
     *
     * @param string $existenciaMaximo
     * @return InfocorporativaInv
     */
    public function setExistenciaMaximo($existenciaMaximo)
    {
        $this->existenciaMaximo = $existenciaMaximo;

        return $this;
    }

    /**
     * Get existenciaMaximo
     *
     * @return string 
     */
    public function getExistenciaMaximo()
    {
        return $this->existenciaMaximo;
    }

    /**
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return InfocorporativaInv
     */
    public function setIdsync($idsync)
    {
        $this->idsync = $idsync;

        return $this;
    }

    /**
     * Get idsync
     *
     * @return uniqueidentifier 
     */
    public function getIdsync()
    {
        return $this->idsync;
    }

    /**
     * Set modifi
     *
     * @param string $modifi
     * @return InfocorporativaInv
     */
    public function setModifi($modifi)
    {
        $this->modifi = $modifi;

        return $this;
    }

    /**
     * Get modifi
     *
     * @return string 
     */
    public function getModifi()
    {
        return $this->modifi;
    }

    /**
     * Set entradas
     *
     * @param string $entradas
     * @return InfocorporativaInv
     */
    public function setEntradas($entradas)
    {
        $this->entradas = $entradas;

        return $this;
    }

    /**
     * Get entradas
     *
     * @return string 
     */
    public function getEntradas()
    {
        return $this->entradas;
    }

    /**
     * Set entradasTrans
     *
     * @param string $entradasTrans
     * @return InfocorporativaInv
     */
    public function setEntradasTrans($entradasTrans)
    {
        $this->entradasTrans = $entradasTrans;

        return $this;
    }

    /**
     * Get entradasTrans
     *
     * @return string 
     */
    public function getEntradasTrans()
    {
        return $this->entradasTrans;
    }

    /**
     * Set salidas
     *
     * @param string $salidas
     * @return InfocorporativaInv
     */
    public function setSalidas($salidas)
    {
        $this->salidas = $salidas;

        return $this;
    }

    /**
     * Get salidas
     *
     * @return string 
     */
    public function getSalidas()
    {
        return $this->salidas;
    }
}
