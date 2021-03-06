<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chequeras
 *
 * @ORM\Table(name="chequeras", indexes={@ORM\Index(name="chequeras_id_banco", columns={"id_banco"}), @ORM\Index(name="chequeras_id_caja", columns={"id_caja"})})
 * @ORM\Entity
 */
class Chequeras
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_chequera", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChequera;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="prefijo", type="smallint", nullable=false)
     */
    private $prefijo;

    /**
     * @var int
     *
     * @ORM\Column(name="desde", type="integer", nullable=false)
     */
    private $desde;

    /**
     * @var int
     *
     * @ORM\Column(name="hasta", type="integer", nullable=false)
     */
    private $hasta;

    /**
     * @var int
     *
     * @ORM\Column(name="cheques_total", type="smallint", nullable=false)
     */
    private $chequesTotal;

    /**
     * @var int
     *
     * @ORM\Column(name="cheques_emitidos", type="smallint", nullable=false)
     */
    private $chequesEmitidos;

    /**
     * @var string
     *
     * @ORM\Column(name="titular", type="string", length=50, nullable=false)
     */
    private $titular;

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
     * @var int|null
     *
     * @ORM\Column(name="id_sucursal", type="integer", nullable=true)
     */
    private $idSucursal;

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
     * @var \Cajas
     *
     * @ORM\ManyToOne(targetEntity="Cajas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_caja", referencedColumnName="id_caja")
     * })
     */
    private $idCaja;

    public function getIdChequera(): ?int
    {
        return $this->idChequera;
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

    public function getPrefijo(): ?int
    {
        return $this->prefijo;
    }

    public function setPrefijo(int $prefijo): self
    {
        $this->prefijo = $prefijo;

        return $this;
    }

    public function getDesde(): ?int
    {
        return $this->desde;
    }

    public function setDesde(int $desde): self
    {
        $this->desde = $desde;

        return $this;
    }

    public function getHasta(): ?int
    {
        return $this->hasta;
    }

    public function setHasta(int $hasta): self
    {
        $this->hasta = $hasta;

        return $this;
    }

    public function getChequesTotal(): ?int
    {
        return $this->chequesTotal;
    }

    public function setChequesTotal(int $chequesTotal): self
    {
        $this->chequesTotal = $chequesTotal;

        return $this;
    }

    public function getChequesEmitidos(): ?int
    {
        return $this->chequesEmitidos;
    }

    public function setChequesEmitidos(int $chequesEmitidos): self
    {
        $this->chequesEmitidos = $chequesEmitidos;

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

    public function getIdSucursal(): ?int
    {
        return $this->idSucursal;
    }

    public function setIdSucursal(?int $idSucursal): self
    {
        $this->idSucursal = $idSucursal;

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

    public function getIdCaja(): ?Cajas
    {
        return $this->idCaja;
    }

    public function setIdCaja(?Cajas $idCaja): self
    {
        $this->idCaja = $idCaja;

        return $this;
    }


}
