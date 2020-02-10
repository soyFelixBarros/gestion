<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonasTipos
 *
 * @ORM\Table(name="personas_tipos")
 * @ORM\Entity
 */
class PersonasTipos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo_persona", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoPersona;

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


}
