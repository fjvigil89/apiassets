<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hojaconteo
 *
 * @ORM\Table(name="HojaConteo")
 * @ORM\Entity
 */
class Hojaconteo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $confirmada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Ajuste", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAjuste;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Ajuste", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoAjuste;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Ajuste", type="datetime", nullable=false)
     */
    private $fechaAjuste;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Conteo_Last", type="boolean", nullable=false)
     */
    private $conteoLast;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteA_MB", type="integer", nullable=false)
     */
    private $importeaMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteD_MB", type="integer", nullable=false)
     */
    private $importedMb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteA_MC", type="integer", nullable=false)
     */
    private $importeaMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteD_MC", type="integer", nullable=false)
     */
    private $importedMc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMB", type="integer", nullable=false)
     */
    private $importetotalmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMC", type="integer", nullable=false)
     */
    private $importetotalmc;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=500, nullable=false)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var integer
     *
     * @ORM\Column(name="NodeItems", type="integer", nullable=false)
     */
    private $nodeitems;

    /**
     * @var integer
     *
     * @ORM\Column(name="ConteoActivo", type="smallint", nullable=false)
     */
    private $conteoactivo;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return Hojaconteo
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return Hojaconteo
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return integer 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set idAjuste
     *
     * @param integer $idAjuste
     * @return Hojaconteo
     */
    public function setIdAjuste($idAjuste)
    {
        $this->idAjuste = $idAjuste;

        return $this;
    }

    /**
     * Get idAjuste
     *
     * @return integer 
     */
    public function getIdAjuste()
    {
        return $this->idAjuste;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Hojaconteo
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set anoAjuste
     *
     * @param integer $anoAjuste
     * @return Hojaconteo
     */
    public function setAnoAjuste($anoAjuste)
    {
        $this->anoAjuste = $anoAjuste;

        return $this;
    }

    /**
     * Get anoAjuste
     *
     * @return integer 
     */
    public function getAnoAjuste()
    {
        return $this->anoAjuste;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Hojaconteo
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Get fechaConfirmacion
     *
     * @return \DateTime 
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Set fechaAjuste
     *
     * @param \DateTime $fechaAjuste
     * @return Hojaconteo
     */
    public function setFechaAjuste($fechaAjuste)
    {
        $this->fechaAjuste = $fechaAjuste;

        return $this;
    }

    /**
     * Get fechaAjuste
     *
     * @return \DateTime 
     */
    public function getFechaAjuste()
    {
        return $this->fechaAjuste;
    }

    /**
     * Set conteoLast
     *
     * @param boolean $conteoLast
     * @return Hojaconteo
     */
    public function setConteoLast($conteoLast)
    {
        $this->conteoLast = $conteoLast;

        return $this;
    }

    /**
     * Get conteoLast
     *
     * @return boolean 
     */
    public function getConteoLast()
    {
        return $this->conteoLast;
    }

    /**
     * Set importeaMb
     *
     * @param integer $importeaMb
     * @return Hojaconteo
     */
    public function setImporteaMb($importeaMb)
    {
        $this->importeaMb = $importeaMb;

        return $this;
    }

    /**
     * Get importeaMb
     *
     * @return integer 
     */
    public function getImporteaMb()
    {
        return $this->importeaMb;
    }

    /**
     * Set importedMb
     *
     * @param integer $importedMb
     * @return Hojaconteo
     */
    public function setImportedMb($importedMb)
    {
        $this->importedMb = $importedMb;

        return $this;
    }

    /**
     * Get importedMb
     *
     * @return integer 
     */
    public function getImportedMb()
    {
        return $this->importedMb;
    }

    /**
     * Set importeaMc
     *
     * @param integer $importeaMc
     * @return Hojaconteo
     */
    public function setImporteaMc($importeaMc)
    {
        $this->importeaMc = $importeaMc;

        return $this;
    }

    /**
     * Get importeaMc
     *
     * @return integer 
     */
    public function getImporteaMc()
    {
        return $this->importeaMc;
    }

    /**
     * Set importedMc
     *
     * @param integer $importedMc
     * @return Hojaconteo
     */
    public function setImportedMc($importedMc)
    {
        $this->importedMc = $importedMc;

        return $this;
    }

    /**
     * Get importedMc
     *
     * @return integer 
     */
    public function getImportedMc()
    {
        return $this->importedMc;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return Hojaconteo
     */
    public function setImportetotalmb($importetotalmb)
    {
        $this->importetotalmb = $importetotalmb;

        return $this;
    }

    /**
     * Get importetotalmb
     *
     * @return integer 
     */
    public function getImportetotalmb()
    {
        return $this->importetotalmb;
    }

    /**
     * Set importetotalmc
     *
     * @param integer $importetotalmc
     * @return Hojaconteo
     */
    public function setImportetotalmc($importetotalmc)
    {
        $this->importetotalmc = $importetotalmc;

        return $this;
    }

    /**
     * Get importetotalmc
     *
     * @return integer 
     */
    public function getImportetotalmc()
    {
        return $this->importetotalmc;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Hojaconteo
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return Hojaconteo
     */
    public function setXtrans($xtrans)
    {
        $this->xtrans = $xtrans;

        return $this;
    }

    /**
     * Get xtrans
     *
     * @return boolean 
     */
    public function getXtrans()
    {
        return $this->xtrans;
    }

    /**
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return Hojaconteo
     */
    public function setDescAlmacen($descAlmacen)
    {
        $this->descAlmacen = $descAlmacen;

        return $this;
    }

    /**
     * Get descAlmacen
     *
     * @return string 
     */
    public function getDescAlmacen()
    {
        return $this->descAlmacen;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return Hojaconteo
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return Hojaconteo
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set nodeitems
     *
     * @param integer $nodeitems
     * @return Hojaconteo
     */
    public function setNodeitems($nodeitems)
    {
        $this->nodeitems = $nodeitems;

        return $this;
    }

    /**
     * Get nodeitems
     *
     * @return integer 
     */
    public function getNodeitems()
    {
        return $this->nodeitems;
    }

    /**
     * Set conteoactivo
     *
     * @param integer $conteoactivo
     * @return Hojaconteo
     */
    public function setConteoactivo($conteoactivo)
    {
        $this->conteoactivo = $conteoactivo;

        return $this;
    }

    /**
     * Get conteoactivo
     *
     * @return integer 
     */
    public function getConteoactivo()
    {
        return $this->conteoactivo;
    }
}
