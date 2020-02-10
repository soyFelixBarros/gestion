<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonasGrupos
 *
 * @ORM\Table(name="personas_grupos", indexes={@ORM\Index(name="personas_grupos_parent", columns={"parent"})})
 * @ORM\Entity
 */
class PersonasGrupos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="obs", type="text", length=65535, nullable=true)
     */
    private $obs;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $descuento = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="predet", type="boolean", nullable=false)
     */
    private $predet = '0';

    /**
     * @var \PersonasGrupos
     *
     * @ORM\ManyToOne(targetEntity="PersonasGrupos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent", referencedColumnName="id_grupo")
     * })
     */
    private $parent;


}
