<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alicuotas
 *
 * @ORM\Table(name="alicuotas")
 * @ORM\Entity
 */
class Alicuotas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_alicuota", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAlicuota;

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $porcentaje;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="importe_minimo", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $importeMinimo;

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

    public function getIdAlicuota(): ?int
    {
        return $this->idAlicuota;
    }

    public function getPorcentaje(): ?string
    {
        return $this->porcentaje;
    }

    public function setPorcentaje(string $porcentaje): self
    {
        $this->porcentaje = $porcentaje;

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

    public function getImporteMinimo(): ?string
    {
        return $this->importeMinimo;
    }

    public function setImporteMinimo(string $importeMinimo): self
    {
        $this->importeMinimo = $importeMinimo;

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
