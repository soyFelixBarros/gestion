<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysPermisosObjetos
 *
 * @ORM\Table(name="sys_permisos_objetos")
 * @ORM\Entity
 */
class SysPermisosObjetos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_objeto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObjeto;

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
     * @ORM\Column(name="tipo", type="string", length=200, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="clase", type="string", length=200, nullable=false)
     */
    private $clase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra1_nombre", type="string", length=200, nullable=true)
     */
    private $extra1Nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra2_nombre", type="string", length=200, nullable=true)
     */
    private $extra2Nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra3_nombre", type="string", length=200, nullable=true)
     */
    private $extra3Nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraa_nombre", type="string", length=200, nullable=true)
     */
    private $extraaNombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extrab_nombre", type="string", length=200, nullable=true)
     */
    private $extrabNombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extrac_nombre", type="string", length=200, nullable=true)
     */
    private $extracNombre;


}
