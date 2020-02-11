<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Situaciones
 *
 * @ORM\Table(name="situaciones")
 * @ORM\Entity
 */
class Situaciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_situacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSituacion;

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
     * @ORM\Column(name="nombrecorto", type="string", length=50, nullable=false)
     */
    private $nombrecorto;

    /**
     * @var string
     *
     * @ORM\Column(name="abrev", type="string", length=2, nullable=false)
     */
    private $abrev = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comprob", type="string", length=50, nullable=false)
     */
    private $comprob;

    /**
     * @var string
     *
     * @ORM\Column(name="comprob2", type="string", length=50, nullable=false)
     */
    private $comprob2;

    public function getIdSituacion(): ?int
    {
        return $this->idSituacion;
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

    public function getNombrecorto(): ?string
    {
        return $this->nombrecorto;
    }

    public function setNombrecorto(string $nombrecorto): self
    {
        $this->nombrecorto = $nombrecorto;

        return $this;
    }

    public function getAbrev(): ?string
    {
        return $this->abrev;
    }

    public function setAbrev(string $abrev): self
    {
        $this->abrev = $abrev;

        return $this;
    }

    public function getComprob(): ?string
    {
        return $this->comprob;
    }

    public function setComprob(string $comprob): self
    {
        $this->comprob = $comprob;

        return $this;
    }

    public function getComprob2(): ?string
    {
        return $this->comprob2;
    }

    public function setComprob2(string $comprob2): self
    {
        $this->comprob2 = $comprob2;

        return $this;
    }


}
