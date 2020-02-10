<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComprobDetalle
 *
 * @ORM\Table(name="comprob_detalle", indexes={@ORM\Index(name="comprob_detalle_id_alicuota", columns={"id_alicuota"}), @ORM\Index(name="comprob_detalle_id_comprob", columns={"id_comprob"}), @ORM\Index(name="comprob_detalle_id_comprob_id_articulo", columns={"id_comprob", "id_articulo"}), @ORM\Index(name="comprob_detalle_id_articulo", columns={"id_articulo"})})
 * @ORM\Entity
 */
class ComprobDetalle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comprob_detalle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComprobDetalle;

    /**
     * @var bool
     *
     * @ORM\Column(name="orden", type="boolean", nullable=false)
     */
    private $orden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantidad = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="costo", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $costo = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $precio = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $iva = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $importe = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $total = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="recargo", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $recargo = '0.0000';

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
     * @var \Alicuotas
     *
     * @ORM\ManyToOne(targetEntity="Alicuotas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_alicuota", referencedColumnName="id_alicuota")
     * })
     */
    private $idAlicuota;

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


}
