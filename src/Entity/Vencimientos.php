<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vencimientos
 *
 * @ORM\Table(name="vencimientos", indexes={@ORM\Index(name="vencimientos_id_concepto", columns={"id_concepto"})})
 * @ORM\Entity
 */
class Vencimientos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vencimiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVencimiento;

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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_proxima", type="datetime", nullable=true)
     */
    private $fechaProxima;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_fin", type="datetime", nullable=true)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="frecuencia", type="string", length=200, nullable=false)
     */
    private $frecuencia;

    /**
     * @var bool
     *
     * @ORM\Column(name="repetir", type="boolean", nullable=false)
     */
    private $repetir = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ocurrencia", type="smallint", nullable=false)
     */
    private $ocurrencia = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_concepto", type="integer", nullable=true)
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $importe = '0.0000';

    public function getIdVencimiento(): ?int
    {
        return $this->idVencimiento;
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

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(\DateTimeInterface $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    public function getFechaProxima(): ?\DateTimeInterface
    {
        return $this->fechaProxima;
    }

    public function setFechaProxima(?\DateTimeInterface $fechaProxima): self
    {
        $this->fechaProxima = $fechaProxima;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fechaFin;
    }

    public function setFechaFin(?\DateTimeInterface $fechaFin): self
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    public function getFrecuencia(): ?string
    {
        return $this->frecuencia;
    }

    public function setFrecuencia(string $frecuencia): self
    {
        $this->frecuencia = $frecuencia;

        return $this;
    }

    public function getRepetir(): ?bool
    {
        return $this->repetir;
    }

    public function setRepetir(bool $repetir): self
    {
        $this->repetir = $repetir;

        return $this;
    }

    public function getOcurrencia(): ?int
    {
        return $this->ocurrencia;
    }

    public function setOcurrencia(int $ocurrencia): self
    {
        $this->ocurrencia = $ocurrencia;

        return $this;
    }

    public function getIdConcepto(): ?int
    {
        return $this->idConcepto;
    }

    public function setIdConcepto(?int $idConcepto): self
    {
        $this->idConcepto = $idConcepto;

        return $this;
    }

    public function getImporte(): ?string
    {
        return $this->importe;
    }

    public function setImporte(string $importe): self
    {
        $this->importe = $importe;

        return $this;
    }


}
