<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportsPagos
 *
 * @ORM\Table(name="Reports_Pagos")
 * @ORM\Entity
 */
class ReportsPagos
{
    /**
     * @var string
     *
     * @ORM\Column(name="ReportName", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportname;

    /**
     * @var string
     *
     * @ORM\Column(name="ReportFile", type="string", length=50, nullable=false)
     */
    private $reportfile;



    /**
     * Get reportname
     *
     * @return string 
     */
    public function getReportname()
    {
        return $this->reportname;
    }

    /**
     * Set reportfile
     *
     * @param string $reportfile
     * @return ReportsPagos
     */
    public function setReportfile($reportfile)
    {
        $this->reportfile = $reportfile;

        return $this;
    }

    /**
     * Get reportfile
     *
     * @return string 
     */
    public function getReportfile()
    {
        return $this->reportfile;
    }
}
