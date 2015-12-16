<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhOrganizacionesMasas
 *
 * @ORM\Table(name="RH_Organizaciones_Masas")
 * @ORM\Entity
 */
class RhOrganizacionesMasas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_OrgMasa", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrgmasa;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_OrgMasa", type="string", length=50, nullable=false)
     */
    private $descOrgmasa;


}
