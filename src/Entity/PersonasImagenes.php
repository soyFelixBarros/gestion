<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonasImagenes
 *
 * @ORM\Table(name="personas_imagenes")
 * @ORM\Entity
 */
class PersonasImagenes
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="blob", length=0, nullable=true)
     */
    private $imagen;

    /**
     * @var \Personas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_persona", referencedColumnName="id_persona")
     * })
     */
    private $idPersona;


}
