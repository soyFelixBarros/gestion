<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BancosCheques
 *
 * @ORM\Table(name="bancos_cheques", indexes={@ORM\Index(name="bancos_cheques_id_sucursal", columns={"id_sucursal"}), @ORM\Index(name="bancos_cheques_emitido_estado_fechaemision", columns={"emitido", "estado", "fechaemision"}), @ORM\Index(name="bancos_cheques_id_comprob", columns={"id_comprob"}), @ORM\Index(name="bancos_cheques_id_cliente", columns={"id_cliente"}), @ORM\Index(name="bancos_cheques_id_concepto", columns={"id_concepto"}), @ORM\Index(name="bancos_cheques_id_recibo", columns={"id_recibo"}), @ORM\Index(name="bancos_cheques_id_chequera", columns={"id_chequera"}), @ORM\Index(name="bancos_cheques_id_caja", columns={"id_caja"})})
 * @ORM\Entity
 */
class BancosCheques
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cheque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCheque;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=200, nullable=false)
     */
    private $concepto;

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
     * @ORM\Column(name="id_banco", type="integer", nullable=true)
     */
    private $idBanco;

    /**
     * @var int
     *
     * @ORM\Column(name="prefijo", type="smallint", nullable=false)
     */
    private $prefijo;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_recibo_pago", type="integer", nullable=true)
     */
    private $idReciboPago;

    /**
     * @var bool
     *
     * @ORM\Column(name="emitido", type="boolean", nullable=false)
     */
    private $emitido = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $importe = '0.0000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaemision", type="datetime", nullable=false)
     */
    private $fechaemision;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emitidopor", type="string", length=200, nullable=true)
     */
    private $emitidopor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechacobro", type="datetime", nullable=false)
     */
    private $fechacobro;

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
     * @var \Chequeras
     *
     * @ORM\ManyToOne(targetEntity="Chequeras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chequera", referencedColumnName="id_chequera")
     * })
     */
    private $idChequera;

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
     *   @ORM\JoinColumn(name="id_comprob", referencedColumnName="id_comprob")
     * })
     */
    private $idComprob;

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
     * @var \Recibos
     *
     * @ORM\ManyToOne(targetEntity="Recibos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_recibo", referencedColumnName="id_recibo")
     * })
     */
    private $idRecibo;

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
