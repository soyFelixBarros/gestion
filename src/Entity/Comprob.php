<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Comprob
 *
 * @ORM\Table(name="comprob", indexes={@ORM\Index(name="comprob_id_vendedor", columns={"id_vendedor"}), @ORM\Index(name="comprob_situacionorigen", columns={"situacionorigen"}), @ORM\Index(name="comprob_id_formapago", columns={"id_formapago"}), @ORM\Index(name="comprob_id_remito", columns={"id_remito"}), @ORM\Index(name="comprob_tipo_fac_pv_numero_compra", columns={"tipo_fac", "pv", "numero", "compra"}), @ORM\Index(name="comprob_id_cliente", columns={"id_cliente"}), @ORM\Index(name="comprob_id_sucursal", columns={"id_sucursal"}), @ORM\Index(name="comprob_situaciondestino", columns={"situaciondestino"}), @ORM\Index(name="comprob_tipo_fac_fecha_id_sucursal_compra_anulada_impresa", columns={"tipo_fac", "fecha", "id_sucursal", "compra", "anulada", "impresa"}), @ORM\Index(name="comprob_id_comprob_orig", columns={"id_comprob_orig"})})
 * @ORM\Entity
 */
class Comprob
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comprob", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComprob;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_fac", type="string", length=50, nullable=false)
     */
    private $tipoFac;

    /**
     * @var bool
     *
     * @ORM\Column(name="pv", type="boolean", nullable=false)
     */
    private $pv = '0';

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="subtotal", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $subtotal = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $descuento = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="interes", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $interes = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $total = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="totalreal", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $totalreal = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="cuotas", type="boolean", nullable=false)
     */
    private $cuotas = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="iva", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $iva = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="obs", type="text", length=65535, nullable=true)
     */
    private $obs;

    /**
     * @var bool
     *
     * @ORM\Column(name="impresa", type="boolean", nullable=false)
     */
    private $impresa = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="anulada", type="boolean", nullable=false)
     */
    private $anulada = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cancelado", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cancelado = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="gastosenvio", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $gastosenvio;

    /**
     * @var string
     *
     * @ORM\Column(name="otrosgastos", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $otrosgastos;

    /**
     * @var bool
     *
     * @ORM\Column(name="compra", type="boolean", nullable=false)
     */
    private $compra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="series", type="text", length=65535, nullable=true)
     */
    private $series;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cae_numero", type="string", length=50, nullable=true)
     */
    private $caeNumero;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cae_vencimiento", type="datetime", nullable=true)
     */
    private $caeVencimiento;

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
     * @var \Comprob
     *
     * @ORM\ManyToOne(targetEntity="Comprob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_comprob_orig", referencedColumnName="id_comprob")
     * })
     */
    private $idComprobOrig;

    /**
     * @var \Formaspago
     *
     * @ORM\ManyToOne(targetEntity="Formaspago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formapago", referencedColumnName="id_formapago")
     * })
     */
    private $idFormapago;

    /**
     * @var \Comprob
     *
     * @ORM\ManyToOne(targetEntity="Comprob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_remito", referencedColumnName="id_comprob")
     * })
     */
    private $idRemito;

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
     * @var \ArticulosSituaciones
     *
     * @ORM\ManyToOne(targetEntity="ArticulosSituaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situaciondestino", referencedColumnName="id_situacion")
     * })
     */
    private $situaciondestino;

    /**
     * @var \ArticulosSituaciones
     *
     * @ORM\ManyToOne(targetEntity="ArticulosSituaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situacionorigen", referencedColumnName="id_situacion")
     * })
     */
    private $situacionorigen;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Comprob", inversedBy="idComprob")
     * @ORM\JoinTable(name="comprob_comprob",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_comprob", referencedColumnName="id_comprob")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_comprob_rel", referencedColumnName="id_comprob")
     *   }
     * )
     */
    private $idComprobRel;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Recibos", mappedBy="idComprob")
     */
    private $idRecibo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idComprobRel = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idRecibo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdComprob(): ?int
    {
        return $this->idComprob;
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

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getSubtotal(): ?string
    {
        return $this->subtotal;
    }

    public function setSubtotal(string $subtotal): self
    {
        $this->subtotal = $subtotal;

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

    public function getInteres(): ?string
    {
        return $this->interes;
    }

    public function setInteres(string $interes): self
    {
        $this->interes = $interes;

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

    public function getTotalreal(): ?string
    {
        return $this->totalreal;
    }

    public function setTotalreal(string $totalreal): self
    {
        $this->totalreal = $totalreal;

        return $this;
    }

    public function getCuotas(): ?bool
    {
        return $this->cuotas;
    }

    public function setCuotas(bool $cuotas): self
    {
        $this->cuotas = $cuotas;

        return $this;
    }

    public function getIva(): ?string
    {
        return $this->iva;
    }

    public function setIva(string $iva): self
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

    public function getImpresa(): ?bool
    {
        return $this->impresa;
    }

    public function setImpresa(bool $impresa): self
    {
        $this->impresa = $impresa;

        return $this;
    }

    public function getAnulada(): ?bool
    {
        return $this->anulada;
    }

    public function setAnulada(bool $anulada): self
    {
        $this->anulada = $anulada;

        return $this;
    }

    public function getCancelado(): ?string
    {
        return $this->cancelado;
    }

    public function setCancelado(string $cancelado): self
    {
        $this->cancelado = $cancelado;

        return $this;
    }

    public function getEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getGastosenvio(): ?string
    {
        return $this->gastosenvio;
    }

    public function setGastosenvio(string $gastosenvio): self
    {
        $this->gastosenvio = $gastosenvio;

        return $this;
    }

    public function getOtrosgastos(): ?string
    {
        return $this->otrosgastos;
    }

    public function setOtrosgastos(string $otrosgastos): self
    {
        $this->otrosgastos = $otrosgastos;

        return $this;
    }

    public function getCompra(): ?bool
    {
        return $this->compra;
    }

    public function setCompra(bool $compra): self
    {
        $this->compra = $compra;

        return $this;
    }

    public function getSeries(): ?string
    {
        return $this->series;
    }

    public function setSeries(?string $series): self
    {
        $this->series = $series;

        return $this;
    }

    public function getCaeNumero(): ?string
    {
        return $this->caeNumero;
    }

    public function setCaeNumero(?string $caeNumero): self
    {
        $this->caeNumero = $caeNumero;

        return $this;
    }

    public function getCaeVencimiento(): ?\DateTimeInterface
    {
        return $this->caeVencimiento;
    }

    public function setCaeVencimiento(?\DateTimeInterface $caeVencimiento): self
    {
        $this->caeVencimiento = $caeVencimiento;

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

    public function getIdComprobOrig(): ?self
    {
        return $this->idComprobOrig;
    }

    public function setIdComprobOrig(?self $idComprobOrig): self
    {
        $this->idComprobOrig = $idComprobOrig;

        return $this;
    }

    public function getIdFormapago(): ?Formaspago
    {
        return $this->idFormapago;
    }

    public function setIdFormapago(?Formaspago $idFormapago): self
    {
        $this->idFormapago = $idFormapago;

        return $this;
    }

    public function getIdRemito(): ?self
    {
        return $this->idRemito;
    }

    public function setIdRemito(?self $idRemito): self
    {
        $this->idRemito = $idRemito;

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

    public function getSituaciondestino(): ?ArticulosSituaciones
    {
        return $this->situaciondestino;
    }

    public function setSituaciondestino(?ArticulosSituaciones $situaciondestino): self
    {
        $this->situaciondestino = $situaciondestino;

        return $this;
    }

    public function getSituacionorigen(): ?ArticulosSituaciones
    {
        return $this->situacionorigen;
    }

    public function setSituacionorigen(?ArticulosSituaciones $situacionorigen): self
    {
        $this->situacionorigen = $situacionorigen;

        return $this;
    }

    /**
     * @return Collection|Comprob[]
     */
    public function getIdComprobRel(): Collection
    {
        return $this->idComprobRel;
    }

    public function addIdComprobRel(Comprob $idComprobRel): self
    {
        if (!$this->idComprobRel->contains($idComprobRel)) {
            $this->idComprobRel[] = $idComprobRel;
        }

        return $this;
    }

    public function removeIdComprobRel(Comprob $idComprobRel): self
    {
        if ($this->idComprobRel->contains($idComprobRel)) {
            $this->idComprobRel->removeElement($idComprobRel);
        }

        return $this;
    }

    /**
     * @return Collection|Recibos[]
     */
    public function getIdRecibo(): Collection
    {
        return $this->idRecibo;
    }

    public function addIdRecibo(Recibos $idRecibo): self
    {
        if (!$this->idRecibo->contains($idRecibo)) {
            $this->idRecibo[] = $idRecibo;
            $idRecibo->addIdComprob($this);
        }

        return $this;
    }

    public function removeIdRecibo(Recibos $idRecibo): self
    {
        if ($this->idRecibo->contains($idRecibo)) {
            $this->idRecibo->removeElement($idRecibo);
            $idRecibo->removeIdComprob($this);
        }

        return $this;
    }

}
