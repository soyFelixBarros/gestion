<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comprob
 *
 * @ORM\Table(name="comprob", indexes={@ORM\Index(name="comprob_id_vendedor", columns={"id_vendedor"}), @ORM\Index(name="comprob_situacionorigen", columns={"situacionorigen"}), @ORM\Index(name="comprob_id_formapago", columns={"id_formapago"}), @ORM\Index(name="comprob_id_remito", columns={"id_remito"}), @ORM\Index(name="comprob_tipo_fac_pv_numero_compra", columns={"tipo_fac", "pv", "numero", "compra"}), @ORM\Index(name="comprob_id_cliente", columns={"id_cliente"}), @ORM\Index(name="comprob_id_sucursal", columns={"id_sucursal"}), @ORM\Index(name="comprob_situaciondestino", columns={"situaciondestino"}), @ORM\Index(name="comprob_tipo_fac_fecha_id_sucursal_compra_anulada_impresa", columns={"tipo_fac", "fecha", "id_sucursal", "compra", "anulada", "impresa"}), @ORM\Index(name="comprob_id_comprob_orig", columns={"id_comprob_orig"})})
 * @ORM\Entity
 */
class Comprob
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comprob", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComprob;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_fac", type="string", length=50, nullable=false)
     */
    private $tipoFac;

    /**
     * @var bool
     *
     * @ORM\Column(name="pv", type="boolean", nullable=false)
     */
    private $pv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="subtotal", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $subtotal = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $descuento = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="interes", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $interes = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $total = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="totalreal", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $totalreal = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="cuotas", type="boolean", nullable=false)
     */
    private $cuotas = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $iva = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="obs", type="text", length=65535, nullable=true)
     */
    private $obs;

    /**
     * @var bool
     *
     * @ORM\Column(name="impresa", type="boolean", nullable=false)
     */
    private $impresa = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="anulada", type="boolean", nullable=false)
     */
    private $anulada = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cancelado", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cancelado = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="gastosenvio", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $gastosenvio;

    /**
     * @var string
     *
     * @ORM\Column(name="otrosgastos", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $otrosgastos;

    /**
     * @var bool
     *
     * @ORM\Column(name="compra", type="boolean", nullable=false)
     */
    private $compra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="series", type="text", length=65535, nullable=true)
     */
    private $series;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cae_numero", type="string", length=50, nullable=true)
     */
    private $caeNumero;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cae_vencimiento", type="datetime", nullable=true)
     */
    private $caeVencimiento;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id_persona")
     * })
     */
    private $idCliente;

    /**
     * @var \Comprob
     *
     * @ORM\ManyToOne(targetEntity="Comprob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_comprob_orig", referencedColumnName="id_comprob")
     * })
     */
    private $idComprobOrig;

    /**
     * @var \Formaspago
     *
     * @ORM\ManyToOne(targetEntity="Formaspago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formapago", referencedColumnName="id_formapago")
     * })
     */
    private $idFormapago;

    /**
     * @var \Comprob
     *
     * @ORM\ManyToOne(targetEntity="Comprob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_remito", referencedColumnName="id_comprob")
     * })
     */
    private $idRemito;

    /**
     * @var \Sucursales
     *
     * @ORM\ManyToOne(targetEntity="Sucursales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sucursal", referencedColumnName="id_sucursal")
     * })
     */
    private $idSucursal;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vendedor", referencedColumnName="id_persona")
     * })
     */
    private $idVendedor;

    /**
     * @var \ArticulosSituaciones
     *
     * @ORM\ManyToOne(targetEntity="ArticulosSituaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situaciondestino", referencedColumnName="id_situacion")
     * })
     */
    private $situaciondestino;

    /**
     * @var \ArticulosSituaciones
     *
     * @ORM\ManyToOne(targetEntity="ArticulosSituaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situacionorigen", referencedColumnName="id_situacion")
     * })
     */
    private $situacionorigen;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Comprob", inversedBy="idComprob")
     * @ORM\JoinTable(name="comprob_comprob",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_comprob", referencedColumnName="id_comprob")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_comprob_rel", referencedColumnName="id_comprob")
     *   }
     * )
     */
    private $idComprobRel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Recibos", mappedBy="idComprob")
     */
    private $idRecibo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idComprobRel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idRecibo = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
