<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysPlantillasImagenes
 *
 * @ORM\Table(name="sys_plantillas_imagenes")
 * @ORM\Entity
 */
class SysPlantillasImagenes
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="blob", length=0, nullable=true)
     */
    private $imagen;

    /**
     * @var \SysPlantillas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SysPlantillas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plantilla", referencedColumnName="id_plantilla")
     * })
     */
    private $idPlantilla;


}
