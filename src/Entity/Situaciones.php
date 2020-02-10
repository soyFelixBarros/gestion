<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Situaciones
 *
 * @ORM\Table(name="situaciones")
 * @ORM\Entity
 */
class Situaciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_situacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSituacion;

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
     * @var string
     *
     * @ORM\Column(name="nombrecorto", type="string", length=50, nullable=false)
     */
    private $nombrecorto;

    /**
     * @var string
     *
     * @ORM\Column(name="abrev", type="string", length=2, nullable=false)
     */
    private $abrev = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comprob", type="string", length=50, nullable=false)
     */
    private $comprob;

    /**
     * @var string
     *
     * @ORM\Column(name="comprob2", type="string", length=50, nullable=false)
     */
    private $comprob2;


}
