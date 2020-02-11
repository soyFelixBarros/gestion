<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PagosValores
 *
 * @ORM\Table(name="pagos_valores", indexes={@ORM\Index(name="pagos_valores_id_recibo", columns={"id_recibo"}), @ORM\Index(name="pagos_valores_id_formapago", columns={"id_formapago"}), @ORM\Index(name="pagos_valores_id_item", columns={"id_item"}), @ORM\Index(name="pagos_valores_id_sucursal", columns={"id_sucursal"})})
 * @ORM\Entity
 */
class PagosValores
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_valor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idValor;

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
     * @var int|null
     *
     * @ORM\Column(name="id_item", type="integer", nullable=true)
     */
    private $idItem;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="text", length=65535, nullable=false)
     */
    private $importe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="numero", type="string", length=200, nullable=true)
     */
    private $numero;

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
     * @var \Recibos
     *
     * @ORM\ManyToOne(targetEntity="Recibos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_recibo", referencedColumnName="id_recibo")
     * })
     */
    private $idRecibo;

    /**
     * @var \Sucursales
     *
     * @ORM\ManyToOne(targetEntity="Sucursales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sucursal", referencedColumnName="id_sucursal")
     * })
     */
    private $idSucursal;

    public function getIdValor(): ?int
    {
        return $this->idValor;
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

    public function getIdItem(): ?int
    {
        return $this->idItem;
    }

    public function setIdItem(?int $idItem): self
    {
        $this->idItem = $idItem;

        return $this;
    }

    public function getImporte(): ?string
    {
        return $this->importe;
    }

    public function setImporte(string $importe): self
    {
        $this->importe = $importe;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

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

    public function getIdRecibo(): ?Recibos
    {
        return $this->idRecibo;
    }

    public function setIdRecibo(?Recibos $idRecibo): self
    {
        $this->idRecibo = $idRecibo;

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
