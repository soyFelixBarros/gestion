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


}
