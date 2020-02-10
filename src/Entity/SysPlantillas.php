<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysPlantillas
 *
 * @ORM\Table(name="sys_plantillas", uniqueConstraints={@ORM\UniqueConstraint(name="sys_plantillas_codigo", columns={"codigo"})})
 * @ORM\Entity
 */
class SysPlantillas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_plantilla", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlantilla;

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
     * @ORM\Column(name="codigo", type="string", length=50, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="tamanopapel", type="string", length=50, nullable=false)
     */
    private $tamanopapel;

    /**
     * @var bool
     *
     * @ORM\Column(name="landscape", type="boolean", nullable=false)
     */
    private $landscape = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="copias", type="boolean", nullable=false, options={"default"="1"})
     */
    private $copias = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="bandeja", type="boolean", nullable=true)
     */
    private $bandeja = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="margen_izquierda", type="integer", nullable=false, options={"default"="-1"})
     */
    private $margenIzquierda = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="margen_derecha", type="integer", nullable=false, options={"default"="-1"})
     */
    private $margenDerecha = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="margen_arriba", type="integer", nullable=false, options={"default"="-1"})
     */
    private $margenArriba = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="margen_abajo", type="integer", nullable=false, options={"default"="-1"})
     */
    private $margenAbajo = '-1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="def", type="blob", length=0, nullable=true)
     */
    private $def;

    /**
     * @var string|null
     *
     * @ORM\Column(name="defxml", type="text", length=65535, nullable=true)
     */
    private $defxml;


}
