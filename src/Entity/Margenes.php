<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Margenes
 *
 * @ORM\Table(name="margenes")
 * @ORM\Entity
 */
class Margenes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_margen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMargen;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="sumar", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $sumar = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $porcentaje = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje2", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $porcentaje2 = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje3", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $porcentaje3 = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="sumar2", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $sumar2 = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="predet", type="boolean", nullable=false)
     */
    private $predet = '0';

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
