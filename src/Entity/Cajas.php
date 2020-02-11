<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cajas
 *
 * @ORM\Table(name="cajas", indexes={@ORM\Index(name="cajas_estado", columns={"estado"}), @ORM\Index(name="cajas_id_banco", columns={"id_banco"}), @ORM\Index(name="cajas_id_moneda", columns={"id_moneda"})})
 * @ORM\Entity
 */
class Cajas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_caja", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCaja;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero", type="string", length=200, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", length=200, nullable=false)
     */
    private $titular;

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cbu", type="string", length=50, nullable=true)
     */
    private $cbu;

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
     * @var \Bancos
     *
     * @ORM\ManyToOne(targetEntity="Bancos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_banco", referencedColumnName="id_banco")
     * })
     */
    private $idBanco;

    /**
     * @var \Monedas
     *
     * @ORM\ManyToOne(targetEntity="Monedas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_moneda", referencedColumnName="id_moneda")
     * })
     */
    private $idMoneda;

    public function getIdCaja(): ?int
    {
        return $this->idCaja;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

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

    public function getTitular(): ?string
    {
        return $this->titular;
    }

    public function setTitular(string $titular): self
    {
        $this->titular = $titular;

        return $this;
    }

    public function getTipo(): ?bool
    {
        return $this->tipo;
    }

    public function setTipo(bool $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getCbu(): ?string
    {
        return $this->cbu;
    }

    public function setCbu(?string $cbu): self
    {
        $this->cbu = $cbu;

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

    public function getIdBanco(): ?Bancos
    {
        return $this->idBanco;
    }

    public function setIdBanco(?Bancos $idBanco): self
    {
        $this->idBanco = $idBanco;

        return $this;
    }

    public function getIdMoneda(): ?Monedas
    {
        return $this->idMoneda;
    }

    public function setIdMoneda(?Monedas $idMoneda): self
    {
        $this->idMoneda = $idMoneda;

        return $this;
    }


}
