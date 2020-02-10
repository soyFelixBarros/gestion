<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TarjetasPlanes
 *
 * @ORM\Table(name="tarjetas_planes", indexes={@ORM\Index(name="tarjetas_planes_id_tarjeta", columns={"id_tarjeta"})})
 * @ORM\Entity
 */
class TarjetasPlanes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_plan", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlan;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
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
     * @ORM\Column(name="cuotas", type="boolean", nullable=false)
     */
    private $cuotas = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="interes", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $interes = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="comision", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $comision = '0.0000';

    /**
     * @var \Formaspago
     *
     * @ORM\ManyToOne(targetEntity="Formaspago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tarjeta", referencedColumnName="id_formapago")
     * })
     */
    private $idTarjeta;


}
