<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosCategorias
 *
 * @ORM\Table(name="articulos_categorias", indexes={@ORM\Index(name="articulos_categorias_id_rubro", columns={"id_rubro"}), @ORM\Index(name="articulos_categorias_id_alicuota", columns={"id_alicuota"})})
 * @ORM\Entity
 */
class ArticulosCategorias
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_categoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombresing", type="string", length=200, nullable=true)
     */
    private $nombresing;

    /**
     * @var string
     *
     * @ORM\Column(name="stock_minimo", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $stockMinimo = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="blob", length=0, nullable=true)
     */
    private $imagen;

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
     * @var bool|null
     *
     * @ORM\Column(name="web", type="boolean", nullable=true)
     */
    private $web = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="requierens", type="boolean", nullable=false)
     */
    private $requierens = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_stock_actual", type="decimal", precision=14, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $cacheStockActual = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cache_costo", type="decimal", precision=15, scale=4, nullable=true)
     */
    private $cacheCosto;

    /**
     * @var bool
     *
     * @ORM\Column(name="garantia", type="boolean", nullable=false)
     */
    private $garantia = '0';

    /**
     * @var \Alicuotas
     *
     * @ORM\ManyToOne(targetEntity="Alicuotas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_alicuota", referencedColumnName="id_alicuota")
     * })
     */
    private $idAlicuota;

    /**
     * @var \ArticulosRubros
     *
     * @ORM\ManyToOne(targetEntity="ArticulosRubros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rubro", referencedColumnName="id_rubro")
     * })
     */
    private $idRubro;

    public function getIdCategoria(): ?int
    {
        return $this->idCategoria;
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

    public function getNombresing(): ?string
    {
        return $this->nombresing;
    }

    public function setNombresing(?string $nombresing): self
    {
        $this->nombresing = $nombresing;

        return $this;
    }

    public function getStockMinimo(): ?string
    {
        return $this->stockMinimo;
    }

    public function setStockMinimo(string $stockMinimo): self
    {
        $this->stockMinimo = $stockMinimo;

        return $this;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

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

    public function getWeb(): ?bool
    {
        return $this->web;
    }

    public function setWeb(?bool $web): self
    {
        $this->web = $web;

        return $this;
    }

    public function getRequierens(): ?bool
    {
        return $this->requierens;
    }

    public function setRequierens(bool $requierens): self
    {
        $this->requierens = $requierens;

        return $this;
    }

    public function getCacheStockActual(): ?string
    {
        return $this->cacheStockActual;
    }

    public function setCacheStockActual(?string $cacheStockActual): self
    {
        $this->cacheStockActual = $cacheStockActual;

        return $this;
    }

    public function getCacheCosto(): ?string
    {
        return $this->cacheCosto;
    }

    public function setCacheCosto(?string $cacheCosto): self
    {
        $this->cacheCosto = $cacheCosto;

        return $this;
    }

    public function getGarantia(): ?bool
    {
        return $this->garantia;
    }

    public function setGarantia(bool $garantia): self
    {
        $this->garantia = $garantia;

        return $this;
    }

    public function getIdAlicuota(): ?Alicuotas
    {
        return $this->idAlicuota;
    }

    public function setIdAlicuota(?Alicuotas $idAlicuota): self
    {
        $this->idAlicuota = $idAlicuota;

        return $this;
    }

    public function getIdRubro(): ?ArticulosRubros
    {
        return $this->idRubro;
    }

    public function setIdRubro(?ArticulosRubros $idRubro): self
    {
        $this->idRubro = $idRubro;

        return $this;
    }


}
