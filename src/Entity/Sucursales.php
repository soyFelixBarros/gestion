<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sucursales
 *
 * @ORM\Table(name="sucursales", indexes={@ORM\Index(name="sucursales_id_caja_diaria", columns={"id_caja_diaria"}), @ORM\Index(name="sucursales_id_ciudad", columns={"id_ciudad"}), @ORM\Index(name="sucursales_id_caja_cheques", columns={"id_caja_cheques"}), @ORM\Index(name="sucursales_situacionorigen", columns={"situacionorigen"})})
 * @ORM\Entity
 */
class Sucursales
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sucursal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSucursal;

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
     * @ORM\Column(name="direccion", type="string", length=200, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=200, nullable=false)
     */
    private $telefono;

    /**
     * @var \Cajas
     *
     * @ORM\ManyToOne(targetEntity="Cajas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_caja_cheques", referencedColumnName="id_caja")
     * })
     */
    private $idCajaCheques;

    /**
     * @var \Cajas
     *
     * @ORM\ManyToOne(targetEntity="Cajas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_caja_diaria", referencedColumnName="id_caja")
     * })
     */
    private $idCajaDiaria;

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ciudad", referencedColumnName="id_ciudad")
     * })
     */
    private $idCiudad;

    /**
     * @var \Situaciones
     *
     * @ORM\ManyToOne(targetEntity="Situaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situacionorigen", referencedColumnName="id_situacion")
     * })
     */
    private $situacionorigen;

    public function getIdSucursal(): ?int
    {
        return $this->idSucursal;
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

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getIdCajaCheques(): ?Cajas
    {
        return $this->idCajaCheques;
    }

    public function setIdCajaCheques(?Cajas $idCajaCheques): self
    {
        $this->idCajaCheques = $idCajaCheques;

        return $this;
    }

    public function getIdCajaDiaria(): ?Cajas
    {
        return $this->idCajaDiaria;
    }

    public function setIdCajaDiaria(?Cajas $idCajaDiaria): self
    {
        $this->idCajaDiaria = $idCajaDiaria;

        return $this;
    }

    public function getIdCiudad(): ?Ciudades
    {
        return $this->idCiudad;
    }

    public function setIdCiudad(?Ciudades $idCiudad): self
    {
        $this->idCiudad = $idCiudad;

        return $this;
    }

    public function getSituacionorigen(): ?Situaciones
    {
        return $this->situacionorigen;
    }

    public function setSituacionorigen(?Situaciones $situacionorigen): self
    {
        $this->situacionorigen = $situacionorigen;

        return $this;
    }


}
