<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhVersatConfig
 *
 * @ORM\Table(name="RH_Versat_Config")
 * @ORM\Entity
 */
class RhVersatConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="CTA", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cta;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctCuenta_Assets", type="smallint", nullable=false)
     */
    private $ctcuentaAssets;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctCuenta_Len", type="smallint", nullable=false)
     */
    private $ctcuentaLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctSub_Cuenta_Assets", type="smallint", nullable=false)
     */
    private $ctsubCuentaAssets;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctSub_Cuenta_Len", type="smallint", nullable=false)
     */
    private $ctsubCuentaLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctSub_Control_Assets", type="smallint", nullable=false)
     */
    private $ctsubControlAssets;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctSub_Control_Len", type="smallint", nullable=false)
     */
    private $ctsubControlLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctAnalisis_Assets", type="smallint", nullable=false)
     */
    private $ctanalisisAssets;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctAnalisis_Len", type="smallint", nullable=false)
     */
    private $ctanalisisLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctEspecifico_Assets", type="smallint", nullable=false)
     */
    private $ctespecificoAssets;

    /**
     * @var integer
     *
     * @ORM\Column(name="ctEspecifico_Len", type="smallint", nullable=false)
     */
    private $ctespecificoLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccCapitulo_Assets", type="smallint", nullable=false)
     */
    private $cccapituloAssets;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccCapitulo_Len", type="smallint", nullable=false)
     */
    private $cccapituloLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccSub_Capitulo_Assets", type="smallint", nullable=false)
     */
    private $ccsubCapituloAssets;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccSub_Capitulo_Len", type="smallint", nullable=false)
     */
    private $ccsubCapituloLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccEspecifico_Assets", type="smallint", nullable=false)
     */
    private $ccespecificoAssets;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccEspecifico_Len", type="smallint", nullable=false)
     */
    private $ccespecificoLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccSub_Especifico_Assets", type="smallint", nullable=false)
     */
    private $ccsubEspecificoAssets;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccSub_Especifico_Len", type="smallint", nullable=false)
     */
    private $ccsubEspecificoLen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sub_Elemento_Assets", type="smallint", nullable=false)
     */
    private $subElementoAssets;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sub_Elemento_Len", type="smallint", nullable=false)
     */
    private $subElementoLen;



    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set ctcuentaAssets
     *
     * @param integer $ctcuentaAssets
     * @return RhVersatConfig
     */
    public function setCtcuentaAssets($ctcuentaAssets)
    {
        $this->ctcuentaAssets = $ctcuentaAssets;

        return $this;
    }

    /**
     * Get ctcuentaAssets
     *
     * @return integer 
     */
    public function getCtcuentaAssets()
    {
        return $this->ctcuentaAssets;
    }

    /**
     * Set ctcuentaLen
     *
     * @param integer $ctcuentaLen
     * @return RhVersatConfig
     */
    public function setCtcuentaLen($ctcuentaLen)
    {
        $this->ctcuentaLen = $ctcuentaLen;

        return $this;
    }

    /**
     * Get ctcuentaLen
     *
     * @return integer 
     */
    public function getCtcuentaLen()
    {
        return $this->ctcuentaLen;
    }

    /**
     * Set ctsubCuentaAssets
     *
     * @param integer $ctsubCuentaAssets
     * @return RhVersatConfig
     */
    public function setCtsubCuentaAssets($ctsubCuentaAssets)
    {
        $this->ctsubCuentaAssets = $ctsubCuentaAssets;

        return $this;
    }

    /**
     * Get ctsubCuentaAssets
     *
     * @return integer 
     */
    public function getCtsubCuentaAssets()
    {
        return $this->ctsubCuentaAssets;
    }

    /**
     * Set ctsubCuentaLen
     *
     * @param integer $ctsubCuentaLen
     * @return RhVersatConfig
     */
    public function setCtsubCuentaLen($ctsubCuentaLen)
    {
        $this->ctsubCuentaLen = $ctsubCuentaLen;

        return $this;
    }

    /**
     * Get ctsubCuentaLen
     *
     * @return integer 
     */
    public function getCtsubCuentaLen()
    {
        return $this->ctsubCuentaLen;
    }

    /**
     * Set ctsubControlAssets
     *
     * @param integer $ctsubControlAssets
     * @return RhVersatConfig
     */
    public function setCtsubControlAssets($ctsubControlAssets)
    {
        $this->ctsubControlAssets = $ctsubControlAssets;

        return $this;
    }

    /**
     * Get ctsubControlAssets
     *
     * @return integer 
     */
    public function getCtsubControlAssets()
    {
        return $this->ctsubControlAssets;
    }

    /**
     * Set ctsubControlLen
     *
     * @param integer $ctsubControlLen
     * @return RhVersatConfig
     */
    public function setCtsubControlLen($ctsubControlLen)
    {
        $this->ctsubControlLen = $ctsubControlLen;

        return $this;
    }

    /**
     * Get ctsubControlLen
     *
     * @return integer 
     */
    public function getCtsubControlLen()
    {
        return $this->ctsubControlLen;
    }

    /**
     * Set ctanalisisAssets
     *
     * @param integer $ctanalisisAssets
     * @return RhVersatConfig
     */
    public function setCtanalisisAssets($ctanalisisAssets)
    {
        $this->ctanalisisAssets = $ctanalisisAssets;

        return $this;
    }

    /**
     * Get ctanalisisAssets
     *
     * @return integer 
     */
    public function getCtanalisisAssets()
    {
        return $this->ctanalisisAssets;
    }

    /**
     * Set ctanalisisLen
     *
     * @param integer $ctanalisisLen
     * @return RhVersatConfig
     */
    public function setCtanalisisLen($ctanalisisLen)
    {
        $this->ctanalisisLen = $ctanalisisLen;

        return $this;
    }

    /**
     * Get ctanalisisLen
     *
     * @return integer 
     */
    public function getCtanalisisLen()
    {
        return $this->ctanalisisLen;
    }

    /**
     * Set ctespecificoAssets
     *
     * @param integer $ctespecificoAssets
     * @return RhVersatConfig
     */
    public function setCtespecificoAssets($ctespecificoAssets)
    {
        $this->ctespecificoAssets = $ctespecificoAssets;

        return $this;
    }

    /**
     * Get ctespecificoAssets
     *
     * @return integer 
     */
    public function getCtespecificoAssets()
    {
        return $this->ctespecificoAssets;
    }

    /**
     * Set ctespecificoLen
     *
     * @param integer $ctespecificoLen
     * @return RhVersatConfig
     */
    public function setCtespecificoLen($ctespecificoLen)
    {
        $this->ctespecificoLen = $ctespecificoLen;

        return $this;
    }

    /**
     * Get ctespecificoLen
     *
     * @return integer 
     */
    public function getCtespecificoLen()
    {
        return $this->ctespecificoLen;
    }

    /**
     * Set cccapituloAssets
     *
     * @param integer $cccapituloAssets
     * @return RhVersatConfig
     */
    public function setCccapituloAssets($cccapituloAssets)
    {
        $this->cccapituloAssets = $cccapituloAssets;

        return $this;
    }

    /**
     * Get cccapituloAssets
     *
     * @return integer 
     */
    public function getCccapituloAssets()
    {
        return $this->cccapituloAssets;
    }

    /**
     * Set cccapituloLen
     *
     * @param integer $cccapituloLen
     * @return RhVersatConfig
     */
    public function setCccapituloLen($cccapituloLen)
    {
        $this->cccapituloLen = $cccapituloLen;

        return $this;
    }

    /**
     * Get cccapituloLen
     *
     * @return integer 
     */
    public function getCccapituloLen()
    {
        return $this->cccapituloLen;
    }

    /**
     * Set ccsubCapituloAssets
     *
     * @param integer $ccsubCapituloAssets
     * @return RhVersatConfig
     */
    public function setCcsubCapituloAssets($ccsubCapituloAssets)
    {
        $this->ccsubCapituloAssets = $ccsubCapituloAssets;

        return $this;
    }

    /**
     * Get ccsubCapituloAssets
     *
     * @return integer 
     */
    public function getCcsubCapituloAssets()
    {
        return $this->ccsubCapituloAssets;
    }

    /**
     * Set ccsubCapituloLen
     *
     * @param integer $ccsubCapituloLen
     * @return RhVersatConfig
     */
    public function setCcsubCapituloLen($ccsubCapituloLen)
    {
        $this->ccsubCapituloLen = $ccsubCapituloLen;

        return $this;
    }

    /**
     * Get ccsubCapituloLen
     *
     * @return integer 
     */
    public function getCcsubCapituloLen()
    {
        return $this->ccsubCapituloLen;
    }

    /**
     * Set ccespecificoAssets
     *
     * @param integer $ccespecificoAssets
     * @return RhVersatConfig
     */
    public function setCcespecificoAssets($ccespecificoAssets)
    {
        $this->ccespecificoAssets = $ccespecificoAssets;

        return $this;
    }

    /**
     * Get ccespecificoAssets
     *
     * @return integer 
     */
    public function getCcespecificoAssets()
    {
        return $this->ccespecificoAssets;
    }

    /**
     * Set ccespecificoLen
     *
     * @param integer $ccespecificoLen
     * @return RhVersatConfig
     */
    public function setCcespecificoLen($ccespecificoLen)
    {
        $this->ccespecificoLen = $ccespecificoLen;

        return $this;
    }

    /**
     * Get ccespecificoLen
     *
     * @return integer 
     */
    public function getCcespecificoLen()
    {
        return $this->ccespecificoLen;
    }

    /**
     * Set ccsubEspecificoAssets
     *
     * @param integer $ccsubEspecificoAssets
     * @return RhVersatConfig
     */
    public function setCcsubEspecificoAssets($ccsubEspecificoAssets)
    {
        $this->ccsubEspecificoAssets = $ccsubEspecificoAssets;

        return $this;
    }

    /**
     * Get ccsubEspecificoAssets
     *
     * @return integer 
     */
    public function getCcsubEspecificoAssets()
    {
        return $this->ccsubEspecificoAssets;
    }

    /**
     * Set ccsubEspecificoLen
     *
     * @param integer $ccsubEspecificoLen
     * @return RhVersatConfig
     */
    public function setCcsubEspecificoLen($ccsubEspecificoLen)
    {
        $this->ccsubEspecificoLen = $ccsubEspecificoLen;

        return $this;
    }

    /**
     * Get ccsubEspecificoLen
     *
     * @return integer 
     */
    public function getCcsubEspecificoLen()
    {
        return $this->ccsubEspecificoLen;
    }

    /**
     * Set subElementoAssets
     *
     * @param integer $subElementoAssets
     * @return RhVersatConfig
     */
    public function setSubElementoAssets($subElementoAssets)
    {
        $this->subElementoAssets = $subElementoAssets;

        return $this;
    }

    /**
     * Get subElementoAssets
     *
     * @return integer 
     */
    public function getSubElementoAssets()
    {
        return $this->subElementoAssets;
    }

    /**
     * Set subElementoLen
     *
     * @param integer $subElementoLen
     * @return RhVersatConfig
     */
    public function setSubElementoLen($subElementoLen)
    {
        $this->subElementoLen = $subElementoLen;

        return $this;
    }

    /**
     * Get subElementoLen
     *
     * @return integer 
     */
    public function getSubElementoLen()
    {
        return $this->subElementoLen;
    }
}
