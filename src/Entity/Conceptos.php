<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conceptos
 *
 * @ORM\Table(name="conceptos")
 * @ORM\Entity
 */
class Conceptos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_concepto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var bool
     *
     * @ORM\Column(name="es", type="boolean", nullable=false)
     */
    private $es = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="grupo", type="smallint", nullable=true)
     */
    private $grupo;

    /**
     * @var bool
     *
     * @ORM\Column(name="fijo", type="boolean", nullable=false)
     */
    private $fijo;

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


}
