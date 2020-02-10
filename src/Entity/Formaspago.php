<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formaspago
 *
 * @ORM\Table(name="formaspago", indexes={@ORM\Index(name="formaspago_id_caja", columns={"id_caja"}), @ORM\Index(name="formaspago_id_concepto", columns={"id_concepto"})})
 * @ORM\Entity
 */
class Formaspago
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_formapago", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormapago;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $descuento = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="retencion", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $retencion = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="autopres", type="boolean", nullable=false)
     */
    private $autopres = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="autoacred", type="boolean", nullable=false)
     */
    private $autoacred = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="adelantacuotas", type="boolean", nullable=false)
     */
    private $adelantacuotas = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dias_acred", type="smallint", nullable=false)
     */
    private $diasAcred = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pagos", type="boolean", nullable=false)
     */
    private $pagos = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cobros", type="boolean", nullable=false)
     */
    private $cobros = '0';

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
     * @var \Cajas
     *
     * @ORM\ManyToOne(targetEntity="Cajas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_caja", referencedColumnName="id_caja")
     * })
     */
    private $idCaja;

    /**
     * @var \Conceptos
     *
     * @ORM\ManyToOne(targetEntity="Conceptos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_concepto", referencedColumnName="id_concepto")
     * })
     */
    private $idConcepto;


}
