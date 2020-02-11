<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosMovim
 *
 * @ORM\Table(name="articulos_movim", indexes={@ORM\Index(name="articulos_movim_id_articulo", columns={"id_articulo"}), @ORM\Index(name="articulos_movim_desdesituacion", columns={"desdesituacion"}), @ORM\Index(name="articulos_movim_id_comprob", columns={"id_comprob"}), @ORM\Index(name="articulos_movim_haciasituacion", columns={"haciasituacion"})})
 * @ORM\Entity
 */
class ArticulosMovim
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_movim", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMovim;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantidad = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="saldo", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $saldo = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="series", type="text", length=65535, nullable=true)
     */
    private $series;

    /**
     * @var string|null
     *
     * @ORM\Column(name="obs", type="text", length=65535, nullable=true)
     */
    private $obs;

    /**
     * @var \ArticulosSituaciones
     *
     * @ORM\ManyToOne(targetEntity="ArticulosSituaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="desdesituacion", referencedColumnName="id_situacion")
     * })
     */
    private $desdesituacion;

    /**
     * @var \ArticulosSituaciones
     *
     * @ORM\ManyToOne(targetEntity="ArticulosSituaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="haciasituacion", referencedColumnName="id_situacion")
     * })
     */
    private $haciasituacion;

    /**
     * @var \Articulos
     *
     * @ORM\ManyToOne(targetEntity="Articulos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_articulo", referencedColumnName="id_articulo")
     * })
     */
    private $idArticulo;

    /**
     * @var \Comprob
     *
     * @ORM\ManyToOne(targetEntity="Comprob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_comprob", referencedColumnName="id_comprob")
     * })
     */
    private $idComprob;

    public function getIdMovim(): ?int
    {
        return $this->idMovim;
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

    public function getCantidad(): ?string
    {
        return $this->cantidad;
    }

    public function setCantidad(string $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getSaldo(): ?string
    {
        return $this->saldo;
    }

    public function setSaldo(string $saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getSeries(): ?string
    {
        return $this->series;
    }

    public function setSeries(?string $series): self
    {
        $this->series = $series;

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

    public function getDesdesituacion(): ?ArticulosSituaciones
    {
        return $this->desdesituacion;
    }

    public function setDesdesituacion(?ArticulosSituaciones $desdesituacion): self
    {
        $this->desdesituacion = $desdesituacion;

        return $this;
    }

    public function getHaciasituacion(): ?ArticulosSituaciones
    {
        return $this->haciasituacion;
    }

    public function setHaciasituacion(?ArticulosSituaciones $haciasituacion): self
    {
        $this->haciasituacion = $haciasituacion;

        return $this;
    }

    public function getIdArticulo(): ?Articulos
    {
        return $this->idArticulo;
    }

    public function setIdArticulo(?Articulos $idArticulo): self
    {
        $this->idArticulo = $idArticulo;

        return $this;
    }

    public function getIdComprob(): ?Comprob
    {
        return $this->idComprob;
    }

    public function setIdComprob(?Comprob $idComprob): self
    {
        $this->idComprob = $idComprob;

        return $this;
    }


}
