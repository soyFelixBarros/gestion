<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysConfig
 *
 * @ORM\Table(name="sys_config")
 * @ORM\Entity
 */
class SysConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="estacion", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $estacion;

    /**
     * @var int
     *
     * @ORM\Column(name="id_sucursal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSucursal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=200, nullable=false)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="text", length=65535, nullable=false)
     */
    private $valor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;


}
