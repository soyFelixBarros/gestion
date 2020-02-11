<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonasEventos
 *
 * @ORM\Table(name="personas_eventos", indexes={@ORM\Index(name="personas_eventos_id_persona", columns={"id_persona"}), @ORM\Index(name="personas_eventos_id_creador", columns={"id_creador"})})
 * @ORM\Entity
 */
class PersonasEventos
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_creador", referencedColumnName="id_persona")
     * })
     */
    private $idCreador;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_persona", referencedColumnName="id_persona")
     * })
     */
    private $idPersona;

    public function getIdEvento(): ?int
    {
        return $this->idEvento;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getIdCreador(): ?Personas
    {
        return $this->idCreador;
    }

    public function setIdCreador(?Personas $idCreador): self
    {
        $this->idCreador = $idCreador;

        return $this;
    }

    public function getIdPersona(): ?Personas
    {
        return $this->idPersona;
    }

    public function setIdPersona(?Personas $idPersona): self
    {
        $this->idPersona = $idPersona;

        return $this;
    }


}
