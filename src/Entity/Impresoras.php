<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Impresoras
 *
 * @ORM\Table(name="impresoras", indexes={@ORM\Index(name="impresoras_id_sucursal", columns={"id_sucursal"})})
 * @ORM\Entity
 */
class Impresoras
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_impresora", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImpresora;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estacion", type="string", length=200, nullable=true)
     */
    private $estacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dispositivo", type="string", length=200, nullable=true)
     */
    private $dispositivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bandeja", type="string", length=200, nullable=true)
     */
    private $bandeja;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ubicacion", type="string", length=200, nullable=true)
     */
    private $ubicacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo;

    /**
     * @var bool
     *
     * @ORM\Column(name="carga", type="boolean", nullable=false)
     */
    private $carga = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="talonario", type="boolean", nullable=false)
     */
    private $talonario = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fiscal_modelo", type="smallint", nullable=true)
     */
    private $fiscalModelo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fiscal_bps", type="smallint", nullable=true)
     */
    private $fiscalBps = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fiscal_ultimoz", type="datetime", nullable=true)
     */
    private $fiscalUltimoz;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lsa", type="datetime", nullable=true)
     */
    private $lsa;

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
     * @var \Sucursales
     *
     * @ORM\ManyToOne(targetEntity="Sucursales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sucursal", referencedColumnName="id_sucursal")
     * })
     */
    private $idSucursal;


}
