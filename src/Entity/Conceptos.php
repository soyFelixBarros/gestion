<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conceptos
 *
 * @ORM\Table(name="conceptos")
 * @ORM\Entity
 */
class Conceptos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_concepto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var bool
     *
     * @ORM\Column(name="es", type="boolean", nullable=false)
     */
    private $es = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="grupo", type="smallint", nullable=true)
     */
    private $grupo;

    /**
     * @var bool
     *
     * @ORM\Column(name="fijo", type="boolean", nullable=false)
     */
    private $fijo;

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

    public function getIdConcepto(): ?int
    {
        return $this->idConcepto;
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

    public function getEs(): ?bool
    {
        return $this->es;
    }

    public function setEs(bool $es): self
    {
        $this->es = $es;

        return $this;
    }

    public function getGrupo(): ?int
    {
        return $this->grupo;
    }

    public function setGrupo(?int $grupo): self
    {
        $this->grupo = $grupo;

        return $this;
    }

    public function getFijo(): ?bool
    {
        return $this->fijo;
    }

    public function setFijo(bool $fijo): self
    {
        $this->fijo = $fijo;

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


}
