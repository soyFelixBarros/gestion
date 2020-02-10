<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Talonarios
 *
 * @ORM\Table(name="talonarios")
 * @ORM\Entity
 */
class Talonarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_talonario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTalonario;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_comprob", type="string", length=50, nullable=false)
     */
    private $tipoComprob;

    /**
     * @var bool
     *
     * @ORM\Column(name="pv", type="boolean", nullable=false)
     */
    private $pv;

    /**
     * @var int
     *
     * @ORM\Column(name="desde", type="integer", nullable=false)
     */
    private $desde;

    /**
     * @var int
     *
     * @ORM\Column(name="hasta", type="integer", nullable=false)
     */
    private $hasta;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;


}
