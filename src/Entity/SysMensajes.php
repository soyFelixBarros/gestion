<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysMensajes
 *
 * @ORM\Table(name="sys_mensajes", indexes={@ORM\Index(name="sys_mensajes_id_grupo", columns={"id_grupo"}), @ORM\Index(name="sys_mensajes_id_remitente", columns={"id_remitente"}), @ORM\Index(name="sys_mensajes_id_destinatario", columns={"id_destinatario"})})
 * @ORM\Entity
 */
class SysMensajes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_mensaje", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMensaje;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_recibo", type="datetime", nullable=true)
     */
    private $fechaRecibo;

    /**
     * @var string
     *
     * @ORM\Column(name="destino", type="string", length=200, nullable=false)
     */
    private $destino;

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
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado;

    /**
     * @var bool
     *
     * @ORM\Column(name="flags", type="boolean", nullable=false)
     */
    private $flags;

    /**
     * @var string
     *
     * @ORM\Column(name="estacion_envia", type="string", length=200, nullable=false)
     */
    private $estacionEnvia;

    /**
     * @var string
     *
     * @ORM\Column(name="estacion_recibe", type="string", length=200, nullable=false)
     */
    private $estacionRecibe;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_destinatario", referencedColumnName="id_persona")
     * })
     */
    private $idDestinatario;

    /**
     * @var \PersonasGrupos
     *
     * @ORM\ManyToOne(targetEntity="PersonasGrupos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo", referencedColumnName="id_grupo")
     * })
     */
    private $idGrupo;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_remitente", referencedColumnName="id_persona")
     * })
     */
    private $idRemitente;


}
