<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvs
 *
 * @ORM\Table(name="pvs", uniqueConstraints={@ORM\UniqueConstraint(name="pvs_prefijo_numero", columns={"prefijo", "numero"})}, indexes={@ORM\Index(name="pvs_id_sucursal", columns={"id_sucursal"}), @ORM\Index(name="pvs_id_impresora", columns={"id_impresora"})})
 * @ORM\Entity
 */
class Pvs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPv;

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
     * @var bool
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cuenta_iva", type="boolean", nullable=false, options={"default"="1"})
     */
    private $cuentaIva = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="cuenta_iibb", type="boolean", nullable=false, options={"default"="1"})
     */
    private $cuentaIibb = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="prefijo", type="smallint", nullable=false)
     */
    private $prefijo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="smallint", nullable=false)
     */
    private $numero = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="estacion", type="string", length=200, nullable=true)
     */
    private $estacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_fac", type="string", length=50, nullable=false)
     */
    private $tipoFac;

    /**
     * @var bool
     *
     * @ORM\Column(name="carga", type="boolean", nullable=false)
     */
    private $carga = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="modelo", type="smallint", nullable=false)
     */
    private $modelo = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="puerto", type="boolean", nullable=false)
     */
    private $puerto = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="bps", type="smallint", nullable=false)
     */
    private $bps = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ultimoz", type="string", length=50, nullable=true)
     */
    private $ultimoz;

    /**
     * @var bool
     *
     * @ORM\Column(name="detalonario", type="boolean", nullable=false)
     */
    private $detalonario = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="variante", type="boolean", nullable=false)
     */
    private $variante = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lsa", type="string", length=50, nullable=true)
     */
    private $lsa;

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
     * @var \Sucursales
     *
     * @ORM\ManyToOne(targetEntity="Sucursales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sucursal", referencedColumnName="id_sucursal")
     * })
     */
    private $idSucursal;

    public function getIdPv(): ?int
    {
        return $this->idPv;
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

    public function getTipo(): ?bool
    {
        return $this->tipo;
    }

    public function setTipo(bool $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getCuentaIva(): ?bool
    {
        return $this->cuentaIva;
    }

    public function setCuentaIva(bool $cuentaIva): self
    {
        $this->cuentaIva = $cuentaIva;

        return $this;
    }

    public function getCuentaIibb(): ?bool
    {
        return $this->cuentaIibb;
    }

    public function setCuentaIibb(bool $cuentaIibb): self
    {
        $this->cuentaIibb = $cuentaIibb;

        return $this;
    }

    public function getPrefijo(): ?int
    {
        return $this->prefijo;
    }

    public function setPrefijo(int $prefijo): self
    {
        $this->prefijo = $prefijo;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

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

    public function getTipoFac(): ?string
    {
        return $this->tipoFac;
    }

    public function setTipoFac(string $tipoFac): self
    {
        $this->tipoFac = $tipoFac;

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

    public function getModelo(): ?int
    {
        return $this->modelo;
    }

    public function setModelo(int $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getPuerto(): ?bool
    {
        return $this->puerto;
    }

    public function setPuerto(bool $puerto): self
    {
        $this->puerto = $puerto;

        return $this;
    }

    public function getBps(): ?int
    {
        return $this->bps;
    }

    public function setBps(int $bps): self
    {
        $this->bps = $bps;

        return $this;
    }

    public function getUltimoz(): ?string
    {
        return $this->ultimoz;
    }

    public function setUltimoz(?string $ultimoz): self
    {
        $this->ultimoz = $ultimoz;

        return $this;
    }

    public function getDetalonario(): ?bool
    {
        return $this->detalonario;
    }

    public function setDetalonario(bool $detalonario): self
    {
        $this->detalonario = $detalonario;

        return $this;
    }

    public function getVariante(): ?bool
    {
        return $this->variante;
    }

    public function setVariante(bool $variante): self
    {
        $this->variante = $variante;

        return $this;
    }

    public function getLsa(): ?string
    {
        return $this->lsa;
    }

    public function setLsa(?string $lsa): self
    {
        $this->lsa = $lsa;

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
