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

    public function getIdUsuario(): ?int
    {
        return $this->idUsuario;
    }

    public function getEstacion(): ?string
    {
        return $this->estacion;
    }

    public function setEstacion(string $estacion): self
    {
        $this->estacion = $estacion;

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

    public function getEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

        return $this;
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

    public function getIdUltimomensaje(): ?SysMensajes
    {
        return $this->idUltimomensaje;
    }

    public function setIdUltimomensaje(?SysMensajes $idUltimomensaje): self
    {
        $this->idUltimomensaje = $idUltimomensaje;

        return $this;
    }


}
