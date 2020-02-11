<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formaspago
 *
 * @ORM\Table(name="formaspago", indexes={@ORM\Index(name="formaspago_id_caja", columns={"id_caja"}), @ORM\Index(name="formaspago_id_concepto", columns={"id_concepto"})})
 * @ORM\Entity
 */
class Formaspago
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_formapago", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormapago;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $descuento = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="retencion", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $retencion = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="autopres", type="boolean", nullable=false)
     */
    private $autopres = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="autoacred", type="boolean", nullable=false)
     */
    private $autoacred = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="adelantacuotas", type="boolean", nullable=false)
     */
    private $adelantacuotas = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dias_acred", type="smallint", nullable=false)
     */
    private $diasAcred = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="pagos", type="boolean", nullable=false)
     */
    private $pagos = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cobros", type="boolean", nullable=false)
     */
    private $cobros = '0';

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
     * @var \Cajas
     *
     * @ORM\ManyToOne(targetEntity="Cajas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_caja", referencedColumnName="id_caja")
     * })
     */
    private $idCaja;

    /**
     * @var \Conceptos
     *
     * @ORM\ManyToOne(targetEntity="Conceptos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_concepto", referencedColumnName="id_concepto")
     * })
     */
    private $idConcepto;

    public function getIdFormapago(): ?int
    {
        return $this->idFormapago;
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

    public function getTipo(): ?bool
    {
        return $this->tipo;
    }

    public function setTipo(bool $tipo): self
    {
        $this->tipo = $tipo;

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

    public function getRetencion(): ?string
    {
        return $this->retencion;
    }

    public function setRetencion(string $retencion): self
    {
        $this->retencion = $retencion;

        return $this;
    }

    public function getAutopres(): ?bool
    {
        return $this->autopres;
    }

    public function setAutopres(bool $autopres): self
    {
        $this->autopres = $autopres;

        return $this;
    }

    public function getAutoacred(): ?bool
    {
        return $this->autoacred;
    }

    public function setAutoacred(bool $autoacred): self
    {
        $this->autoacred = $autoacred;

        return $this;
    }

    public function getAdelantacuotas(): ?bool
    {
        return $this->adelantacuotas;
    }

    public function setAdelantacuotas(bool $adelantacuotas): self
    {
        $this->adelantacuotas = $adelantacuotas;

        return $this;
    }

    public function getDiasAcred(): ?int
    {
        return $this->diasAcred;
    }

    public function setDiasAcred(int $diasAcred): self
    {
        $this->diasAcred = $diasAcred;

        return $this;
    }

    public function getPagos(): ?bool
    {
        return $this->pagos;
    }

    public function setPagos(bool $pagos): self
    {
        $this->pagos = $pagos;

        return $this;
    }

    public function getCobros(): ?bool
    {
        return $this->cobros;
    }

    public function setCobros(bool $cobros): self
    {
        $this->cobros = $cobros;

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

    public function getIdCaja(): ?Cajas
    {
        return $this->idCaja;
    }

    public function setIdCaja(?Cajas $idCaja): self
    {
        $this->idCaja = $idCaja;

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


}
