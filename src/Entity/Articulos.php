<?php

namespace App\Entity;

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

}
