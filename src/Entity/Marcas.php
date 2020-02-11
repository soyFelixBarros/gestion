<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marcas
 *
 * @ORM\Table(name="marcas", indexes={@ORM\Index(name="marcas_id_proveedor", columns={"id_proveedor"})})
 * @ORM\Entity
 */
class Marcas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_marca", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMarca;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=true)
     */
    private $url;

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
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proveedor", referencedColumnName="id_persona")
     * })
     */
    private $idProveedor;

    public function getIdMarca(): ?int
    {
        return $this->idMarca;
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

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

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

    public function getIdProveedor(): ?Personas
    {
        return $this->idProveedor;
    }

    public function setIdProveedor(?Personas $idProveedor): self
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }


}
