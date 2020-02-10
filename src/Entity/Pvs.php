<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvs
 *
 * @ORM\Table(name="pvs", uniqueConstraints={@ORM\UniqueConstraint(name="pvs_prefijo_numero", columns={"prefijo", "numero"})}, indexes={@ORM\Index(name="pvs_id_sucursal", columns={"id_sucursal"}), @ORM\Index(name="pvs_id_impresora", columns={"id_impresora"})})
 * @ORM\Entity
 */
class Pvs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPv;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

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
     * @var bool
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cuenta_iva", type="boolean", nullable=false, options={"default"="1"})
     */
    private $cuentaIva = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="cuenta_iibb", type="boolean", nullable=false, options={"default"="1"})
     */
    private $cuentaIibb = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="prefijo", type="smallint", nullable=false)
     */
    private $prefijo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="smallint", nullable=false)
     */
    private $numero = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="estacion", type="string", length=200, nullable=true)
     */
    private $estacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_fac", type="string", length=50, nullable=false)
     */
    private $tipoFac;

    /**
     * @var bool
     *
     * @ORM\Column(name="carga", type="boolean", nullable=false)
     */
    private $carga = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="modelo", type="smallint", nullable=false)
     */
    private $modelo = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="puerto", type="boolean", nullable=false)
     */
    private $puerto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bps", type="smallint", nullable=false)
     */
    private $bps = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ultimoz", type="string", length=50, nullable=true)
     */
    private $ultimoz;

    /**
     * @var bool
     *
     * @ORM\Column(name="detalonario", type="boolean", nullable=false)
     */
    private $detalonario = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="variante", type="boolean", nullable=false)
     */
    private $variante = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lsa", type="string", length=50, nullable=true)
     */
    private $lsa;

    /**
     * @var \Impresoras
     *
     * @ORM\ManyToOne(targetEntity="Impresoras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_impresora", referencedColumnName="id_impresora")
     * })
     */
    private $idImpresora;

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
