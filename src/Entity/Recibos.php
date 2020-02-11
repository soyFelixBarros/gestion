<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Recibos
 *
 * @ORM\Table(name="recibos", indexes={@ORM\Index(name="recibos_id_concepto", columns={"id_concepto"}), @ORM\Index(name="recibos_numero", columns={"numero"}), @ORM\Index(name="recibos_pv_numero_estado", columns={"pv", "numero", "estado"}), @ORM\Index(name="recibos_id_cliente", columns={"id_cliente"}), @ORM\Index(name="recibos_pv_numero_tipo_fac", columns={"pv", "numero", "tipo_fac"}), @ORM\Index(name="recibos_id_sucursal", columns={"id_sucursal"}), @ORM\Index(name="recibos_id_vendedor", columns={"id_vendedor"})})
 * @ORM\Entity
 */
class Recibos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_recibo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecibo;

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
     * @ORM\Column(name="tipo_fac", type="string", length=50, nullable=false)
     */
    private $tipoFac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="concepto", type="string", length=200, nullable=true)
     */
    private $concepto;

    /**
     * @var bool
     *
     * @ORM\Column(name="pv", type="boolean", nullable=false)
     */
    private $pv;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var bool
     *
     * @ORM\Column(name="impreso", type="boolean", nullable=false)
     */
    private $impreso = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $total = '0.0000';

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cliente", referencedColumnName="id_persona")
     * })
     */
    private $idCliente;

    /**
     * @var \Conceptos
     *
     * @ORM\ManyToOne(targetEntity="Conceptos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_concepto", referencedColumnName="id_concepto")
     * })
     */
    private $idConcepto;

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
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vendedor", referencedColumnName="id_persona")
     * })
     */
    private $idVendedor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Comprob", inversedBy="idRecibo")
     * @ORM\JoinTable(name="recibos_comprob",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_recibo", referencedColumnName="id_recibo")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_comprob", referencedColumnName="id_comprob")
     *   }
     * )
     */
    private $idComprob;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idComprob = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdRecibo(): ?int
    {
        return $this->idRecibo;
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

    public function getTipoFac(): ?string
    {
        return $this->tipoFac;
    }

    public function setTipoFac(string $tipoFac): self
    {
        $this->tipoFac = $tipoFac;

        return $this;
    }

    public function getConcepto(): ?string
    {
        return $this->concepto;
    }

    public function setConcepto(?string $concepto): self
    {
        $this->concepto = $concepto;

        return $this;
    }

    public function getPv(): ?bool
    {
        return $this->pv;
    }

    public function setPv(bool $pv): self
    {
        $this->pv = $pv;

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

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getImpreso(): ?bool
    {
        return $this->impreso;
    }

    public function setImpreso(bool $impreso): self
    {
        $this->impreso = $impreso;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getIdCliente(): ?Personas
    {
        return $this->idCliente;
    }

    public function setIdCliente(?Personas $idCliente): self
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    public function getIdConcepto(): ?Conceptos
    {
        return $this->idConcepto;
    }

    public function setIdConcepto(?Conceptos $idConcepto): self
    {
        $this->idConcepto = $idConcepto;

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

    public function getIdVendedor(): ?Personas
    {
        return $this->idVendedor;
    }

    public function setIdVendedor(?Personas $idVendedor): self
    {
        $this->idVendedor = $idVendedor;

        return $this;
    }

    /**
     * @return Collection|Comprob[]
     */
    public function getIdComprob(): Collection
    {
        return $this->idComprob;
    }

    public function addIdComprob(Comprob $idComprob): self
    {
        if (!$this->idComprob->contains($idComprob)) {
            $this->idComprob[] = $idComprob;
        }

        return $this;
    }

    public function removeIdComprob(Comprob $idComprob): self
    {
        if ($this->idComprob->contains($idComprob)) {
            $this->idComprob->removeElement($idComprob);
        }

        return $this;
    }

}
