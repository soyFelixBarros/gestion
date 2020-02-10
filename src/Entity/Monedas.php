<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Monedas
 *
 * @ORM\Table(name="monedas")
 * @ORM\Entity
 */
class Monedas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_moneda", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
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
     * @var string
     *
     * @ORM\Column(name="signo", type="string", length=50, nullable=false)
     */
    private $signo;

    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=50, nullable=false)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="cotizacion", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cotizacion = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="decimales", type="boolean", nullable=false)
     */
    private $decimales;


}
