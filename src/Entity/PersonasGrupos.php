<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonasGrupos
 *
 * @ORM\Table(name="personas_grupos", indexes={@ORM\Index(name="personas_grupos_parent", columns={"parent"})})
 * @ORM\Entity
 */
class PersonasGrupos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrupo;

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
     * @ORM\Column(name="descuento", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $descuento = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="predet", type="boolean", nullable=false)
     */
    private $predet = '0';

    /**
     * @var \PersonasGrupos
     *
     * @ORM\ManyToOne(targetEntity="PersonasGrupos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent", referencedColumnName="id_grupo")
     * })
     */
    private $parent;

    public function getIdGrupo(): ?int
    {
        return $this->idGrupo;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(?string $obs): self
    {
        $this->obs = $obs;

        return $this;
    }

    public function getEstado(): ?int
    {
        return $this->estado;
    }

    public function setEstado(int $estado): self
    {
        $this->estado = $estado;

        return $this;
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

    public function getDescuento(): ?string
    {
        return $this->descuento;
    }

    public function setDescuento(string $descuento): self
    {
        $this->descuento = $descuento;

        return $this;
    }

    public function getPredet(): ?bool
    {
        return $this->predet;
    }

    public function setPredet(bool $predet): self
    {
        $this->predet = $predet;

        return $this;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }


}
