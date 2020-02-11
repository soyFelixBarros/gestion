<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysPermisosObjetos
 *
 * @ORM\Table(name="sys_permisos_objetos")
 * @ORM\Entity
 */
class SysPermisosObjetos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_objeto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObjeto;

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
     * @ORM\Column(name="tipo", type="string", length=200, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="clase", type="string", length=200, nullable=false)
     */
    private $clase;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra1_nombre", type="string", length=200, nullable=true)
     */
    private $extra1Nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra2_nombre", type="string", length=200, nullable=true)
     */
    private $extra2Nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra3_nombre", type="string", length=200, nullable=true)
     */
    private $extra3Nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraa_nombre", type="string", length=200, nullable=true)
     */
    private $extraaNombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extrab_nombre", type="string", length=200, nullable=true)
     */
    private $extrabNombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extrac_nombre", type="string", length=200, nullable=true)
     */
    private $extracNombre;

    public function getIdObjeto(): ?int
    {
        return $this->idObjeto;
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

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getClase(): ?string
    {
        return $this->clase;
    }

    public function setClase(string $clase): self
    {
        $this->clase = $clase;

        return $this;
    }

    public function getExtra1Nombre(): ?string
    {
        return $this->extra1Nombre;
    }

    public function setExtra1Nombre(?string $extra1Nombre): self
    {
        $this->extra1Nombre = $extra1Nombre;

        return $this;
    }

    public function getExtra2Nombre(): ?string
    {
        return $this->extra2Nombre;
    }

    public function setExtra2Nombre(?string $extra2Nombre): self
    {
        $this->extra2Nombre = $extra2Nombre;

        return $this;
    }

    public function getExtra3Nombre(): ?string
    {
        return $this->extra3Nombre;
    }

    public function setExtra3Nombre(?string $extra3Nombre): self
    {
        $this->extra3Nombre = $extra3Nombre;

        return $this;
    }

    public function getExtraaNombre(): ?string
    {
        return $this->extraaNombre;
    }

    public function setExtraaNombre(?string $extraaNombre): self
    {
        $this->extraaNombre = $extraaNombre;

        return $this;
    }

    public function getExtrabNombre(): ?string
    {
        return $this->extrabNombre;
    }

    public function setExtrabNombre(?string $extrabNombre): self
    {
        $this->extrabNombre = $extrabNombre;

        return $this;
    }

    public function getExtracNombre(): ?string
    {
        return $this->extracNombre;
    }

    public function setExtracNombre(?string $extracNombre): self
    {
        $this->extracNombre = $extracNombre;

        return $this;
    }


}
