<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Articulos
 *
 * @ORM\Table(name="articulos", indexes={@ORM\Index(name="articulos_id_proveedor", columns={"id_proveedor"}), @ORM\Index(name="articulos_id_caja", columns={"id_caja"}), @ORM\Index(name="articulos_id_categoria", columns={"id_categoria"}), @ORM\Index(name="articulos_id_margen", columns={"id_margen"}), @ORM\Index(name="articulos_id_marca", columns={"id_marca"})})
 * @ORM\Entity
 */
class Articulos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_articulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticulo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo1", type="string", length=50, nullable=true)
     */
    private $codigo1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo2", type="string", length=50, nullable=true)
     */
    private $codigo2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo3", type="string", length=50, nullable=true)
     */
    private $codigo3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo4", type="string", length=50, nullable=true)
     */
    private $codigo4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modelo", type="string", length=200, nullable=true)
     */
    private $modelo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="serie", type="string", length=200, nullable=true)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion2", type="text", length=65535, nullable=true)
     */
    private $descripcion2;

    /**
     * @var bool
     *
     * @ORM\Column(name="control_stock", type="boolean", nullable=false)
     */
    private $controlStock = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="periodicidad", type="boolean", nullable=false)
     */
    private $periodicidad = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="seguimiento", type="boolean", nullable=false)
     */
    private $seguimiento = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="stock_actual", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $stockActual = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="stock_minimo", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $stockMinimo = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unidad_stock", type="string", length=50, nullable=true)
     */
    private $unidadStock;

    /**
     * @var string
     *
     * @ORM\Column(name="rendimiento", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $rendimiento = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="unidad_rend", type="string", length=50, nullable=true)
     */
    private $unidadRend;

    /**
     * @var string
     *
     * @ORM\Column(name="costo", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $costo = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="pvp", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $pvp = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="obs", type="text", length=65535, nullable=true)
     */
    private $obs;

    /**
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="destacado", type="boolean", nullable=false)
     */
    private $destacado = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creado", type="datetime", nullable=false)
     */
    private $fechaCreado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_precio", type="datetime", nullable=false)
     */
    private $fechaPrecio;

    /**
     * @var string
     *
     * @ORM\Column(name="apedir", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $apedir = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="pedido", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $pedido = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="web", type="boolean", nullable=false)
     */
    private $web = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="garantia", type="boolean", nullable=false)
     */
    private $garantia = '0';

    /**
     * @var \Cajas
     *
     * @ORM\ManyToOne(targetEntity="Cajas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_caja", referencedColumnName="id_caja")
     * })
     */
    private $idCaja;

    /**
     * @var \ArticulosCategorias
     *
     * @ORM\ManyToOne(targetEntity="ArticulosCategorias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categoria", referencedColumnName="id_categoria")
     * })
     */
    private $idCategoria;

    /**
     * @var \Marcas
     *
     * @ORM\ManyToOne(targetEntity="Marcas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_marca", referencedColumnName="id_marca")
     * })
     */
    private $idMarca;

    /**
     * @var \Margenes
     *
     * @ORM\ManyToOne(targetEntity="Margenes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_margen", referencedColumnName="id_margen")
     * })
     */
    private $idMargen;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proveedor", referencedColumnName="id_persona")
     * })
     */
    private $idProveedor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ArticulosSituaciones", inversedBy="idArticulo")
     * @ORM\JoinTable(name="articulos_stock",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_articulo", referencedColumnName="id_articulo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_situacion", referencedColumnName="id_situacion")
     *   }
     * )
     */
    private $idSituacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idSituacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdArticulo(): ?int
    {
        return $this->idArticulo;
    }

    public function getCodigo1(): ?string
    {
        return $this->codigo1;
    }

    public function setCodigo1(?string $codigo1): self
    {
        $this->codigo1 = $codigo1;

        return $this;
    }

    public function getCodigo2(): ?string
    {
        return $this->codigo2;
    }

    public function setCodigo2(?string $codigo2): self
    {
        $this->codigo2 = $codigo2;

        return $this;
    }

    public function getCodigo3(): ?string
    {
        return $this->codigo3;
    }

    public function setCodigo3(?string $codigo3): self
    {
        $this->codigo3 = $codigo3;

        return $this;
    }

    public function getCodigo4(): ?string
    {
        return $this->codigo4;
    }

    public function setCodigo4(?string $codigo4): self
    {
        $this->codigo4 = $codigo4;

        return $this;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    public function setModelo(?string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getSerie(): ?string
    {
        return $this->serie;
    }

    public function setSerie(?string $serie): self
    {
        $this->serie = $serie;

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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getDescripcion2(): ?string
    {
        return $this->descripcion2;
    }

    public function setDescripcion2(?string $descripcion2): self
    {
        $this->descripcion2 = $descripcion2;

        return $this;
    }

    public function getControlStock(): ?bool
    {
        return $this->controlStock;
    }

    public function setControlStock(bool $controlStock): self
    {
        $this->controlStock = $controlStock;

        return $this;
    }

    public function getPeriodicidad(): ?bool
    {
        return $this->periodicidad;
    }

    public function setPeriodicidad(bool $periodicidad): self
    {
        $this->periodicidad = $periodicidad;

        return $this;
    }

    public function getSeguimiento(): ?bool
    {
        return $this->seguimiento;
    }

    public function setSeguimiento(bool $seguimiento): self
    {
        $this->seguimiento = $seguimiento;

        return $this;
    }

    public function getStockActual(): ?string
    {
        return $this->stockActual;
    }

    public function setStockActual(string $stockActual): self
    {
        $this->stockActual = $stockActual;

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

    public function getUnidadStock(): ?string
    {
        return $this->unidadStock;
    }

    public function setUnidadStock(?string $unidadStock): self
    {
        $this->unidadStock = $unidadStock;

        return $this;
    }

    public function getRendimiento(): ?string
    {
        return $this->rendimiento;
    }

    public function setRendimiento(string $rendimiento): self
    {
        $this->rendimiento = $rendimiento;

        return $this;
    }

    public function getUnidadRend(): ?string
    {
        return $this->unidadRend;
    }

    public function setUnidadRend(?string $unidadRend): self
    {
        $this->unidadRend = $unidadRend;

        return $this;
    }

    public function getCosto(): ?string
    {
        return $this->costo;
    }

    public function setCosto(string $costo): self
    {
        $this->costo = $costo;

        return $this;
    }

    public function getPvp(): ?string
    {
        return $this->pvp;
    }

    public function setPvp(string $pvp): self
    {
        $this->pvp = $pvp;

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

    public function getEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getDestacado(): ?bool
    {
        return $this->destacado;
    }

    public function setDestacado(bool $destacado): self
    {
        $this->destacado = $destacado;

        return $this;
    }

    public function getFechaCreado(): ?\DateTimeInterface
    {
        return $this->fechaCreado;
    }

    public function setFechaCreado(\DateTimeInterface $fechaCreado): self
    {
        $this->fechaCreado = $fechaCreado;

        return $this;
    }

    public function getFechaPrecio(): ?\DateTimeInterface
    {
        return $this->fechaPrecio;
    }

    public function setFechaPrecio(\DateTimeInterface $fechaPrecio): self
    {
        $this->fechaPrecio = $fechaPrecio;

        return $this;
    }

    public function getApedir(): ?string
    {
        return $this->apedir;
    }

    public function setApedir(string $apedir): self
    {
        $this->apedir = $apedir;

        return $this;
    }

    public function getPedido(): ?string
    {
        return $this->pedido;
    }

    public function setPedido(string $pedido): self
    {
        $this->pedido = $pedido;

        return $this;
    }

    public function getWeb(): ?bool
    {
        return $this->web;
    }

    public function setWeb(bool $web): self
    {
        $this->web = $web;

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

    public function getIdCaja(): ?Cajas
    {
        return $this->idCaja;
    }

    public function setIdCaja(?Cajas $idCaja): self
    {
        $this->idCaja = $idCaja;

        return $this;
    }

    public function getIdCategoria(): ?ArticulosCategorias
    {
        return $this->idCategoria;
    }

    public function setIdCategoria(?ArticulosCategorias $idCategoria): self
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    public function getIdMarca(): ?Marcas
    {
        return $this->idMarca;
    }

    public function setIdMarca(?Marcas $idMarca): self
    {
        $this->idMarca = $idMarca;

        return $this;
    }

    public function getIdMargen(): ?Margenes
    {
        return $this->idMargen;
    }

    public function setIdMargen(?Margenes $idMargen): self
    {
        $this->idMargen = $idMargen;

        return $this;
    }

    public function getIdProveedor(): ?Personas
    {
        return $this->idProveedor;
    }

    public function setIdProveedor(?Personas $idProveedor): self
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * @return Collection|ArticulosSituaciones[]
     */
    public function getIdSituacion(): Collection
    {
        return $this->idSituacion;
    }

    public function addIdSituacion(ArticulosSituaciones $idSituacion): self
    {
        if (!$this->idSituacion->contains($idSituacion)) {
            $this->idSituacion[] = $idSituacion;
        }

        return $this;
    }

    public function removeIdSituacion(ArticulosSituaciones $idSituacion): self
    {
        if ($this->idSituacion->contains($idSituacion)) {
            $this->idSituacion->removeElement($idSituacion);
        }

        return $this;
    }

}
