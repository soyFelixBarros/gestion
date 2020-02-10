<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysLog
 *
 * @ORM\Table(name="sys_log", indexes={@ORM\Index(name="sys_log_usuario", columns={"usuario"}), @ORM\Index(name="sys_log_item_id_tabla_comando", columns={"item_id", "tabla", "comando"})})
 * @ORM\Entity
 */
class SysLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_log", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLog;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

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
     * @var string|null
     *
     * @ORM\Column(name="tabla", type="string", length=200, nullable=true)
     */
    private $tabla;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_id", type="integer", nullable=true)
     */
    private $itemId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra1", type="text", length=65535, nullable=true)
     */
    private $extra1;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="id_persona")
     * })
     */
    private $usuario;


}
