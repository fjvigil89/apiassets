<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhActividadesNormadas
 *
 * @ORM\Table(name="RH_Actividades_Normadas")
 * @ORM\Entity
 */
class RhActividadesNormadas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Actividad", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Actividad", type="string", length=100, nullable=false)
     */
    private $descActividad;

    /**
     * @var string
     *
     * @ORM\Column(name="UM", type="string", length=10, nullable=false)
     */
    private $um;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa", type="decimal", precision=19, scale=6, nullable=false)
     */
    private $tasa;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Norma", type="string", length=1, nullable=false)
     */
    private $tipoNorma;

    /**
     * @var string
     *
     * @ORM\Column(name="Norma_Tiempo", type="decimal", precision=11, scale=4, nullable=false)
     */
    private $normaTiempo;


}
