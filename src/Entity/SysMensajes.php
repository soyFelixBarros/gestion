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

    public function getIdMensaje(): ?int
    {
        return $this->idMensaje;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getFechaRecibo(): ?\DateTimeInterface
    {
        return $this->fechaRecibo;
    }

    public function setFechaRecibo(?\DateTimeInterface $fechaRecibo): self
    {
        $this->fechaRecibo = $fechaRecibo;

        return $this;
    }

    public function getDestino(): ?string
    {
        return $this->destino;
    }

    public function setDestino(string $destino): self
    {
        $this->destino = $destino;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(?string $obs): self
    {
        $this->obs = $obs;

        return $this;
    }

    public function getEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFlags(): ?bool
    {
        return $this->flags;
    }

    public function setFlags(bool $flags): self
    {
        $this->flags = $flags;

        return $this;
    }

    public function getEstacionEnvia(): ?string
    {
        return $this->estacionEnvia;
    }

    public function setEstacionEnvia(string $estacionEnvia): self
    {
        $this->estacionEnvia = $estacionEnvia;

        return $this;
    }

    public function getEstacionRecibe(): ?string
    {
        return $this->estacionRecibe;
    }

    public function setEstacionRecibe(string $estacionRecibe): self
    {
        $this->estacionRecibe = $estacionRecibe;

        return $this;
    }

    public function getIdDestinatario(): ?Personas
    {
        return $this->idDestinatario;
    }

    public function setIdDestinatario(?Personas $idDestinatario): self
    {
        $this->idDestinatario = $idDestinatario;

        return $this;
    }

    public function getIdGrupo(): ?PersonasGrupos
    {
        return $this->idGrupo;
    }

    public function setIdGrupo(?PersonasGrupos $idGrupo): self
    {
        $this->idGrupo = $idGrupo;

        return $this;
    }

    public function getIdRemitente(): ?Personas
    {
        return $this->idRemitente;
    }

    public function setIdRemitente(?Personas $idRemitente): self
    {
        $this->idRemitente = $idRemitente;

        return $this;
    }


}
