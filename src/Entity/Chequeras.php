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


}
