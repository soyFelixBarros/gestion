<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vencimientos
 *
 * @ORM\Table(name="vencimientos", indexes={@ORM\Index(name="vencimientos_id_concepto", columns={"id_concepto"})})
 * @ORM\Entity
 */
class Vencimientos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vencimiento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVencimiento;

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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_proxima", type="datetime", nullable=true)
     */
    private $fechaProxima;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_fin", type="datetime", nullable=true)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="frecuencia", type="string", length=200, nullable=false)
     */
    private $frecuencia;

    /**
     * @var bool
     *
     * @ORM\Column(name="repetir", type="boolean", nullable=false)
     */
    private $repetir = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ocurrencia", type="smallint", nullable=false)
     */
    private $ocurrencia = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_concepto", type="integer", nullable=true)
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $importe = '0.0000';


}
