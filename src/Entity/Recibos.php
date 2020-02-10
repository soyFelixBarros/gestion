<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recibos
 *
 * @ORM\Table(name="recibos", indexes={@ORM\Index(name="recibos_id_concepto", columns={"id_concepto"}), @ORM\Index(name="recibos_numero", columns={"numero"}), @ORM\Index(name="recibos_pv_numero_estado", columns={"pv", "numero", "estado"}), @ORM\Index(name="recibos_id_cliente", columns={"id_cliente"}), @ORM\Index(name="recibos_pv_numero_tipo_fac", columns={"pv", "numero", "tipo_fac"}), @ORM\Index(name="recibos_id_sucursal", columns={"id_sucursal"}), @ORM\Index(name="recibos_id_vendedor", columns={"id_vendedor"})})
 * @ORM\Entity
 */
class Recibos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_recibo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecibo;

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
     * @var string
     *
     * @ORM\Column(name="tipo_fac", type="string", length=50, nullable=false)
     */
    private $tipoFac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="concepto", type="string", length=200, nullable=true)
     */
    private $concepto;

    /**
     * @var bool
     *
     * @ORM\Column(name="pv", type="boolean", nullable=false)
     */
    private $pv;

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
     * @var bool
     *
     * @ORM\Column(name="impreso", type="boolean", nullable=false)
     */
    private $impreso = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $total = '0.0000';

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
     * @var \Conceptos
     *
     * @ORM\ManyToOne(targetEntity="Conceptos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_concepto", referencedColumnName="id_concepto")
     * })
     */
    private $idConcepto;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Comprob", inversedBy="idRecibo")
     * @ORM\JoinTable(name="recibos_comprob",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_recibo", referencedColumnName="id_recibo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_comprob", referencedColumnName="id_comprob")
     *   }
     * )
     */
    private $idComprob;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idComprob = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
