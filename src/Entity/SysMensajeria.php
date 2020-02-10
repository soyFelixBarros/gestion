<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysMensajeria
 *
 * @ORM\Table(name="sys_mensajeria", indexes={@ORM\Index(name="sys_mensajeria_id_ultimomensaje", columns={"id_ultimomensaje"})})
 * @ORM\Entity
 */
class SysMensajeria
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="estacion", type="string", length=200, nullable=false)
     */
    private $estacion;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \SysMensajes
     *
     * @ORM\ManyToOne(targetEntity="SysMensajes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ultimomensaje", referencedColumnName="id_mensaje")
     * })
     */
    private $idUltimomensaje;


}
