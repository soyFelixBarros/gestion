<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysProgramador
 *
 * @ORM\Table(name="sys_programador", indexes={@ORM\Index(name="sys_programador_estado_estacion_componente", columns={"estado", "estacion", "componente"})})
 * @ORM\Entity
 */
class SysProgramador
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_evento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="crea_estacion", type="string", length=200, nullable=false)
     */
    private $creaEstacion;

    /**
     * @var string
     *
     * @ORM\Column(name="crea_usuario", type="string", length=200, nullable=false)
     */
    private $creaUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="estacion", type="string", length=200, nullable=false)
     */
    private $estacion;

    /**
     * @var string
     *
     * @ORM\Column(name="comando", type="string", length=200, nullable=false)
     */
    private $comando;

    /**
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaejecutar", type="datetime", nullable=true)
     */
    private $fechaejecutar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="componente", type="string", length=50, nullable=true)
     */
    private $componente;


}
