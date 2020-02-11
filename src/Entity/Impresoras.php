<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Impresoras
 *
 * @ORM\Table(name="impresoras", indexes={@ORM\Index(name="impresoras_id_sucursal", columns={"id_sucursal"})})
 * @ORM\Entity
 */
class Impresoras
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_impresora", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImpresora;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estacion", type="string", length=200, nullable=true)
     */
    private $estacion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dispositivo", type="string", length=200, nullable=true)
     */
    private $dispositivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bandeja", type="string", length=200, nullable=true)
     */
    private $bandeja;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ubicacion", type="string", length=200, nullable=true)
     */
    private $ubicacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo;

    /**
     * @var bool
     *
     * @ORM\Column(name="carga", type="boolean", nullable=false)
     */
    private $carga = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="talonario", type="boolean", nullable=false)
     */
    private $talonario = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fiscal_modelo", type="smallint", nullable=true)
     */
    private $fiscalModelo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fiscal_bps", type="smallint", nullable=true)
     */
    private $fiscalBps = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fiscal_ultimoz", type="datetime", nullable=true)
     */
    private $fiscalUltimoz;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lsa", type="datetime", nullable=true)
     */
    private $lsa;

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
     * @var \Sucursales
     *
     * @ORM\ManyToOne(targetEntity="Sucursales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sucursal", referencedColumnName="id_sucursal")
     * })
     */
    private $idSucursal;

    public function getIdImpresora(): ?int
    {
        return $this->idImpresora;
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

    public function getEstacion(): ?string
    {
        return $this->estacion;
    }

    public function setEstacion(?string $estacion): self
    {
        $this->estacion = $estacion;

        return $this;
    }

    public function getDispositivo(): ?string
    {
        return $this->dispositivo;
    }

    public function setDispositivo(?string $dispositivo): self
    {
        $this->dispositivo = $dispositivo;

        return $this;
    }

    public function getBandeja(): ?string
    {
        return $this->bandeja;
    }

    public function setBandeja(?string $bandeja): self
    {
        $this->bandeja = $bandeja;

        return $this;
    }

    public function getUbicacion(): ?string
    {
        return $this->ubicacion;
    }

    public function setUbicacion(?string $ubicacion): self
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    public function getTipo(): ?bool
    {
        return $this->tipo;
    }

    public function setTipo(bool $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getCarga(): ?bool
    {
        return $this->carga;
    }

    public function setCarga(bool $carga): self
    {
        $this->carga = $carga;

        return $this;
    }

    public function getTalonario(): ?bool
    {
        return $this->talonario;
    }

    public function setTalonario(bool $talonario): self
    {
        $this->talonario = $talonario;

        return $this;
    }

    public function getFiscalModelo(): ?int
    {
        return $this->fiscalModelo;
    }

    public function setFiscalModelo(?int $fiscalModelo): self
    {
        $this->fiscalModelo = $fiscalModelo;

        return $this;
    }

    public function getFiscalBps(): ?int
    {
        return $this->fiscalBps;
    }

    public function setFiscalBps(?int $fiscalBps): self
    {
        $this->fiscalBps = $fiscalBps;

        return $this;
    }

    public function getFiscalUltimoz(): ?\DateTimeInterface
    {
        return $this->fiscalUltimoz;
    }

    public function setFiscalUltimoz(?\DateTimeInterface $fiscalUltimoz): self
    {
        $this->fiscalUltimoz = $fiscalUltimoz;

        return $this;
    }

    public function getLsa(): ?\DateTimeInterface
    {
        return $this->lsa;
    }

    public function setLsa(?\DateTimeInterface $lsa): self
    {
        $this->lsa = $lsa;

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

    public function getIdSucursal(): ?Sucursales
    {
        return $this->idSucursal;
    }

    public function setIdSucursal(?Sucursales $idSucursal): self
    {
        $this->idSucursal = $idSucursal;

        return $this;
    }


}
