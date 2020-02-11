<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysLabels
 *
 * @ORM\Table(name="sys_labels")
 * @ORM\Entity
 */
class SysLabels
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_label", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLabel;

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
     * @var string|null
     *
     * @ORM\Column(name="tablas", type="string", length=200, nullable=true)
     */
    private $tablas;

    public function getIdLabel(): ?int
    {
        return $this->idLabel;
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

    public function getEstado(): ?int
    {
        return $this->estado;
    }

    public function setEstado(int $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getTablas(): ?string
    {
        return $this->tablas;
    }

    public function setTablas(?string $tablas): self
    {
        $this->tablas = $tablas;

        return $this;
    }


}
