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


}
