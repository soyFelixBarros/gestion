<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysComponents
 *
 * @ORM\Table(name="sys_components")
 * @ORM\Entity
 */
class SysComponents
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_component", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComponent;

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
     * @ORM\Column(name="espacio", type="string", length=200, nullable=false)
     */
    private $espacio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="version", type="datetime", nullable=false)
     */
    private $version;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estructura", type="text", length=65535, nullable=true)
     */
    private $estructura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cif", type="text", length=65535, nullable=true)
     */
    private $cif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_act", type="string", length=200, nullable=true)
     */
    private $urlAct;


}
