<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTarjetaSnc225
 *
 * @ORM\Table(name="RH_Tarjeta_SNC225")
 * @ORM\Entity
 */
class RhTarjetaSnc225
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ano;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="EneD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $ened;

    /**
     * @var integer
     *
     * @ORM\Column(name="EneI", type="integer", nullable=false)
     */
    private $enei;

    /**
     * @var string
     *
     * @ORM\Column(name="EneC", type="string", length=23, nullable=false)
     */
    private $enec;

    /**
     * @var string
     *
     * @ORM\Column(name="FebD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $febd;

    /**
     * @var integer
     *
     * @ORM\Column(name="FebI", type="integer", nullable=false)
     */
    private $febi;

    /**
     * @var string
     *
     * @ORM\Column(name="FebC", type="string", length=23, nullable=false)
     */
    private $febc;

    /**
     * @var string
     *
     * @ORM\Column(name="MarD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $mard;

    /**
     * @var integer
     *
     * @ORM\Column(name="MarI", type="integer", nullable=false)
     */
    private $mari;

    /**
     * @var string
     *
     * @ORM\Column(name="MarC", type="string", length=23, nullable=false)
     */
    private $marc;

    /**
     * @var string
     *
     * @ORM\Column(name="AbrD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $abrd;

    /**
     * @var integer
     *
     * @ORM\Column(name="AbrI", type="integer", nullable=false)
     */
    private $abri;

    /**
     * @var string
     *
     * @ORM\Column(name="AbrC", type="string", length=23, nullable=false)
     */
    private $abrc;

    /**
     * @var string
     *
     * @ORM\Column(name="MayD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $mayd;

    /**
     * @var integer
     *
     * @ORM\Column(name="MayI", type="integer", nullable=false)
     */
    private $mayi;

    /**
     * @var string
     *
     * @ORM\Column(name="MayC", type="string", length=23, nullable=false)
     */
    private $mayc;

    /**
     * @var string
     *
     * @ORM\Column(name="JunD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $jund;

    /**
     * @var integer
     *
     * @ORM\Column(name="JunI", type="integer", nullable=false)
     */
    private $juni;

    /**
     * @var string
     *
     * @ORM\Column(name="JunC", type="string", length=23, nullable=false)
     */
    private $junc;

    /**
     * @var string
     *
     * @ORM\Column(name="JulD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $juld;

    /**
     * @var integer
     *
     * @ORM\Column(name="JulI", type="integer", nullable=false)
     */
    private $juli;

    /**
     * @var string
     *
     * @ORM\Column(name="JulC", type="string", length=23, nullable=false)
     */
    private $julc;

    /**
     * @var string
     *
     * @ORM\Column(name="AgoD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $agod;

    /**
     * @var integer
     *
     * @ORM\Column(name="AgoI", type="integer", nullable=false)
     */
    private $agoi;

    /**
     * @var string
     *
     * @ORM\Column(name="AgoC", type="string", length=23, nullable=false)
     */
    private $agoc;

    /**
     * @var string
     *
     * @ORM\Column(name="SepD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $sepd;

    /**
     * @var integer
     *
     * @ORM\Column(name="SepI", type="integer", nullable=false)
     */
    private $sepi;

    /**
     * @var string
     *
     * @ORM\Column(name="SepC", type="string", length=23, nullable=false)
     */
    private $sepc;

    /**
     * @var string
     *
     * @ORM\Column(name="OctD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $octd;

    /**
     * @var integer
     *
     * @ORM\Column(name="OctI", type="integer", nullable=false)
     */
    private $octi;

    /**
     * @var string
     *
     * @ORM\Column(name="OctC", type="string", length=23, nullable=false)
     */
    private $octc;

    /**
     * @var string
     *
     * @ORM\Column(name="NovD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $novd;

    /**
     * @var integer
     *
     * @ORM\Column(name="NovI", type="integer", nullable=false)
     */
    private $novi;

    /**
     * @var string
     *
     * @ORM\Column(name="NovC", type="string", length=23, nullable=false)
     */
    private $novc;

    /**
     * @var string
     *
     * @ORM\Column(name="DicD", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $dicd;

    /**
     * @var integer
     *
     * @ORM\Column(name="DicI", type="integer", nullable=false)
     */
    private $dici;

    /**
     * @var string
     *
     * @ORM\Column(name="DicC", type="string", length=23, nullable=false)
     */
    private $dicc;



    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhTarjetaSnc225
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhTarjetaSnc225
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set ened
     *
     * @param string $ened
     * @return RhTarjetaSnc225
     */
    public function setEned($ened)
    {
        $this->ened = $ened;

        return $this;
    }

    /**
     * Get ened
     *
     * @return string 
     */
    public function getEned()
    {
        return $this->ened;
    }

    /**
     * Set enei
     *
     * @param integer $enei
     * @return RhTarjetaSnc225
     */
    public function setEnei($enei)
    {
        $this->enei = $enei;

        return $this;
    }

    /**
     * Get enei
     *
     * @return integer 
     */
    public function getEnei()
    {
        return $this->enei;
    }

    /**
     * Set enec
     *
     * @param string $enec
     * @return RhTarjetaSnc225
     */
    public function setEnec($enec)
    {
        $this->enec = $enec;

        return $this;
    }

    /**
     * Get enec
     *
     * @return string 
     */
    public function getEnec()
    {
        return $this->enec;
    }

    /**
     * Set febd
     *
     * @param string $febd
     * @return RhTarjetaSnc225
     */
    public function setFebd($febd)
    {
        $this->febd = $febd;

        return $this;
    }

    /**
     * Get febd
     *
     * @return string 
     */
    public function getFebd()
    {
        return $this->febd;
    }

    /**
     * Set febi
     *
     * @param integer $febi
     * @return RhTarjetaSnc225
     */
    public function setFebi($febi)
    {
        $this->febi = $febi;

        return $this;
    }

    /**
     * Get febi
     *
     * @return integer 
     */
    public function getFebi()
    {
        return $this->febi;
    }

    /**
     * Set febc
     *
     * @param string $febc
     * @return RhTarjetaSnc225
     */
    public function setFebc($febc)
    {
        $this->febc = $febc;

        return $this;
    }

    /**
     * Get febc
     *
     * @return string 
     */
    public function getFebc()
    {
        return $this->febc;
    }

    /**
     * Set mard
     *
     * @param string $mard
     * @return RhTarjetaSnc225
     */
    public function setMard($mard)
    {
        $this->mard = $mard;

        return $this;
    }

    /**
     * Get mard
     *
     * @return string 
     */
    public function getMard()
    {
        return $this->mard;
    }

    /**
     * Set mari
     *
     * @param integer $mari
     * @return RhTarjetaSnc225
     */
    public function setMari($mari)
    {
        $this->mari = $mari;

        return $this;
    }

    /**
     * Get mari
     *
     * @return integer 
     */
    public function getMari()
    {
        return $this->mari;
    }

    /**
     * Set marc
     *
     * @param string $marc
     * @return RhTarjetaSnc225
     */
    public function setMarc($marc)
    {
        $this->marc = $marc;

        return $this;
    }

    /**
     * Get marc
     *
     * @return string 
     */
    public function getMarc()
    {
        return $this->marc;
    }

    /**
     * Set abrd
     *
     * @param string $abrd
     * @return RhTarjetaSnc225
     */
    public function setAbrd($abrd)
    {
        $this->abrd = $abrd;

        return $this;
    }

    /**
     * Get abrd
     *
     * @return string 
     */
    public function getAbrd()
    {
        return $this->abrd;
    }

    /**
     * Set abri
     *
     * @param integer $abri
     * @return RhTarjetaSnc225
     */
    public function setAbri($abri)
    {
        $this->abri = $abri;

        return $this;
    }

    /**
     * Get abri
     *
     * @return integer 
     */
    public function getAbri()
    {
        return $this->abri;
    }

    /**
     * Set abrc
     *
     * @param string $abrc
     * @return RhTarjetaSnc225
     */
    public function setAbrc($abrc)
    {
        $this->abrc = $abrc;

        return $this;
    }

    /**
     * Get abrc
     *
     * @return string 
     */
    public function getAbrc()
    {
        return $this->abrc;
    }

    /**
     * Set mayd
     *
     * @param string $mayd
     * @return RhTarjetaSnc225
     */
    public function setMayd($mayd)
    {
        $this->mayd = $mayd;

        return $this;
    }

    /**
     * Get mayd
     *
     * @return string 
     */
    public function getMayd()
    {
        return $this->mayd;
    }

    /**
     * Set mayi
     *
     * @param integer $mayi
     * @return RhTarjetaSnc225
     */
    public function setMayi($mayi)
    {
        $this->mayi = $mayi;

        return $this;
    }

    /**
     * Get mayi
     *
     * @return integer 
     */
    public function getMayi()
    {
        return $this->mayi;
    }

    /**
     * Set mayc
     *
     * @param string $mayc
     * @return RhTarjetaSnc225
     */
    public function setMayc($mayc)
    {
        $this->mayc = $mayc;

        return $this;
    }

    /**
     * Get mayc
     *
     * @return string 
     */
    public function getMayc()
    {
        return $this->mayc;
    }

    /**
     * Set jund
     *
     * @param string $jund
     * @return RhTarjetaSnc225
     */
    public function setJund($jund)
    {
        $this->jund = $jund;

        return $this;
    }

    /**
     * Get jund
     *
     * @return string 
     */
    public function getJund()
    {
        return $this->jund;
    }

    /**
     * Set juni
     *
     * @param integer $juni
     * @return RhTarjetaSnc225
     */
    public function setJuni($juni)
    {
        $this->juni = $juni;

        return $this;
    }

    /**
     * Get juni
     *
     * @return integer 
     */
    public function getJuni()
    {
        return $this->juni;
    }

    /**
     * Set junc
     *
     * @param string $junc
     * @return RhTarjetaSnc225
     */
    public function setJunc($junc)
    {
        $this->junc = $junc;

        return $this;
    }

    /**
     * Get junc
     *
     * @return string 
     */
    public function getJunc()
    {
        return $this->junc;
    }

    /**
     * Set juld
     *
     * @param string $juld
     * @return RhTarjetaSnc225
     */
    public function setJuld($juld)
    {
        $this->juld = $juld;

        return $this;
    }

    /**
     * Get juld
     *
     * @return string 
     */
    public function getJuld()
    {
        return $this->juld;
    }

    /**
     * Set juli
     *
     * @param integer $juli
     * @return RhTarjetaSnc225
     */
    public function setJuli($juli)
    {
        $this->juli = $juli;

        return $this;
    }

    /**
     * Get juli
     *
     * @return integer 
     */
    public function getJuli()
    {
        return $this->juli;
    }

    /**
     * Set julc
     *
     * @param string $julc
     * @return RhTarjetaSnc225
     */
    public function setJulc($julc)
    {
        $this->julc = $julc;

        return $this;
    }

    /**
     * Get julc
     *
     * @return string 
     */
    public function getJulc()
    {
        return $this->julc;
    }

    /**
     * Set agod
     *
     * @param string $agod
     * @return RhTarjetaSnc225
     */
    public function setAgod($agod)
    {
        $this->agod = $agod;

        return $this;
    }

    /**
     * Get agod
     *
     * @return string 
     */
    public function getAgod()
    {
        return $this->agod;
    }

    /**
     * Set agoi
     *
     * @param integer $agoi
     * @return RhTarjetaSnc225
     */
    public function setAgoi($agoi)
    {
        $this->agoi = $agoi;

        return $this;
    }

    /**
     * Get agoi
     *
     * @return integer 
     */
    public function getAgoi()
    {
        return $this->agoi;
    }

    /**
     * Set agoc
     *
     * @param string $agoc
     * @return RhTarjetaSnc225
     */
    public function setAgoc($agoc)
    {
        $this->agoc = $agoc;

        return $this;
    }

    /**
     * Get agoc
     *
     * @return string 
     */
    public function getAgoc()
    {
        return $this->agoc;
    }

    /**
     * Set sepd
     *
     * @param string $sepd
     * @return RhTarjetaSnc225
     */
    public function setSepd($sepd)
    {
        $this->sepd = $sepd;

        return $this;
    }

    /**
     * Get sepd
     *
     * @return string 
     */
    public function getSepd()
    {
        return $this->sepd;
    }

    /**
     * Set sepi
     *
     * @param integer $sepi
     * @return RhTarjetaSnc225
     */
    public function setSepi($sepi)
    {
        $this->sepi = $sepi;

        return $this;
    }

    /**
     * Get sepi
     *
     * @return integer 
     */
    public function getSepi()
    {
        return $this->sepi;
    }

    /**
     * Set sepc
     *
     * @param string $sepc
     * @return RhTarjetaSnc225
     */
    public function setSepc($sepc)
    {
        $this->sepc = $sepc;

        return $this;
    }

    /**
     * Get sepc
     *
     * @return string 
     */
    public function getSepc()
    {
        return $this->sepc;
    }

    /**
     * Set octd
     *
     * @param string $octd
     * @return RhTarjetaSnc225
     */
    public function setOctd($octd)
    {
        $this->octd = $octd;

        return $this;
    }

    /**
     * Get octd
     *
     * @return string 
     */
    public function getOctd()
    {
        return $this->octd;
    }

    /**
     * Set octi
     *
     * @param integer $octi
     * @return RhTarjetaSnc225
     */
    public function setOcti($octi)
    {
        $this->octi = $octi;

        return $this;
    }

    /**
     * Get octi
     *
     * @return integer 
     */
    public function getOcti()
    {
        return $this->octi;
    }

    /**
     * Set octc
     *
     * @param string $octc
     * @return RhTarjetaSnc225
     */
    public function setOctc($octc)
    {
        $this->octc = $octc;

        return $this;
    }

    /**
     * Get octc
     *
     * @return string 
     */
    public function getOctc()
    {
        return $this->octc;
    }

    /**
     * Set novd
     *
     * @param string $novd
     * @return RhTarjetaSnc225
     */
    public function setNovd($novd)
    {
        $this->novd = $novd;

        return $this;
    }

    /**
     * Get novd
     *
     * @return string 
     */
    public function getNovd()
    {
        return $this->novd;
    }

    /**
     * Set novi
     *
     * @param integer $novi
     * @return RhTarjetaSnc225
     */
    public function setNovi($novi)
    {
        $this->novi = $novi;

        return $this;
    }

    /**
     * Get novi
     *
     * @return integer 
     */
    public function getNovi()
    {
        return $this->novi;
    }

    /**
     * Set novc
     *
     * @param string $novc
     * @return RhTarjetaSnc225
     */
    public function setNovc($novc)
    {
        $this->novc = $novc;

        return $this;
    }

    /**
     * Get novc
     *
     * @return string 
     */
    public function getNovc()
    {
        return $this->novc;
    }

    /**
     * Set dicd
     *
     * @param string $dicd
     * @return RhTarjetaSnc225
     */
    public function setDicd($dicd)
    {
        $this->dicd = $dicd;

        return $this;
    }

    /**
     * Get dicd
     *
     * @return string 
     */
    public function getDicd()
    {
        return $this->dicd;
    }

    /**
     * Set dici
     *
     * @param integer $dici
     * @return RhTarjetaSnc225
     */
    public function setDici($dici)
    {
        $this->dici = $dici;

        return $this;
    }

    /**
     * Get dici
     *
     * @return integer 
     */
    public function getDici()
    {
        return $this->dici;
    }

    /**
     * Set dicc
     *
     * @param string $dicc
     * @return RhTarjetaSnc225
     */
    public function setDicc($dicc)
    {
        $this->dicc = $dicc;

        return $this;
    }

    /**
     * Get dicc
     *
     * @return string 
     */
    public function getDicc()
    {
        return $this->dicc;
    }
}
