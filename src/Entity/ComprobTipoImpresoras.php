<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComprobTipoImpresoras
 *
 * @ORM\Table(name="comprob_tipo_impresoras", indexes={@ORM\Index(name="comprob_tipo_impresoras_id_impresora", columns={"id_impresora"}), @ORM\Index(name="comprob_tipo_impresoras_id_tipo", columns={"id_tipo"}), @ORM\Index(name="comprob_tipo_impresoras_id_pv", columns={"id_pv"}), @ORM\Index(name="comprob_tipo_impresoras_id_sucursal", columns={"id_sucursal"})})
 * @ORM\Entity
 */
class ComprobTipoImpresoras
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo_impresora", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoImpresora;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estacion", type="string", length=200, nullable=true)
     */
    private $estacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \Impresoras
     *
     * @ORM\ManyToOne(targetEntity="Impresoras")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_impresora", referencedColumnName="id_impresora")
     * })
     */
    private $idImpresora;

    /**
     * @var \Pvs
     *
     * @ORM\ManyToOne(targetEntity="Pvs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pv", referencedColumnName="id_pv")
     * })
     */
    private $idPv;

    /**
     * @var \Sucursales
     *
     * @ORM\ManyToOne(targetEntity="Sucursales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sucursal", referencedColumnName="id_sucursal")
     * })
     */
    private $idSucursal;

    /**
     * @var \DocumentosTipos
     *
     * @ORM\ManyToOne(targetEntity="DocumentosTipos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo", referencedColumnName="id_tipo")
     * })
     */
    private $idTipo;

    public function getIdTipoImpresora(): ?int
    {
        return $this->idTipoImpresora;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getEstacion(): ?string
    {
        return $this->estacion;
    }

    public function setEstacion(?string $estacion): self
    {
        $this->estacion = $estacion;

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

    public function getIdImpresora(): ?Impresoras
    {
        return $this->idImpresora;
    }

    public function setIdImpresora(?Impresoras $idImpresora): self
    {
        $this->idImpresora = $idImpresora;

        return $this;
    }

    public function getIdPv(): ?Pvs
    {
        return $this->idPv;
    }

    public function setIdPv(?Pvs $idPv): self
    {
        $this->idPv = $idPv;

        return $this;
    }

    public function getIdSucursal(): ?Sucursales
    {
        return $this->idSucursal;
    }

    public function setIdSucursal(?Sucursales $idSucursal): self
    {
        $this->idSucursal = $idSucursal;

        return $this;
    }

    public function getIdTipo(): ?DocumentosTipos
    {
        return $this->idTipo;
    }

    public function setIdTipo(?DocumentosTipos $idTipo): self
    {
        $this->idTipo = $idTipo;

        return $this;
    }


}
