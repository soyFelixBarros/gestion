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


}
