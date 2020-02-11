<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudades
 *
 * @ORM\Table(name="ciudades", indexes={@ORM\Index(name="ciudades_cp", columns={"cp"}), @ORM\Index(name="ciudades_id_pais", columns={"id_pais"})})
 * @ORM\Entity
 */
class Ciudades
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ciudad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=50, nullable=false)
     */
    private $cp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent", type="integer", nullable=true)
     */
    private $parent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_provincia", type="integer", nullable=true)
     */
    private $idProvincia;

    /**
     * @var bool
     *
     * @ORM\Column(name="nivel", type="boolean", nullable=false)
     */
    private $nivel = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="iva", type="boolean", nullable=false)
     */
    private $iva = '0';

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
     * @var \Paises
     *
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id_pais")
     * })
     */
    private $idPais;

    public function getIdCiudad(): ?int
    {
        return $this->idCiudad;
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

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): self
    {
        $this->cp = $cp;

        return $this;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(?int $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getIdProvincia(): ?int
    {
        return $this->idProvincia;
    }

    public function setIdProvincia(?int $idProvincia): self
    {
        $this->idProvincia = $idProvincia;

        return $this;
    }

    public function getNivel(): ?bool
    {
        return $this->nivel;
    }

    public function setNivel(bool $nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }

    public function getIva(): ?bool
    {
        return $this->iva;
    }

    public function setIva(bool $iva): self
    {
        $this->iva = $iva;

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

    public function getIdPais(): ?Paises
    {
        return $this->idPais;
    }

    public function setIdPais(?Paises $idPais): self
    {
        $this->idPais = $idPais;

        return $this;
    }


}
