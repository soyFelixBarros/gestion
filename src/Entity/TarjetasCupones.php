<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TarjetasCupones
 *
 * @ORM\Table(name="tarjetas_cupones", indexes={@ORM\Index(name="tarjetas_cupones_id_recibo", columns={"id_recibo"}), @ORM\Index(name="tarjetas_estado", columns={"estado"}), @ORM\Index(name="tarjetas_cupones_id_comprob", columns={"id_comprob"}), @ORM\Index(name="tarjetas_cupones_id_tarjeta", columns={"id_tarjeta"}), @ORM\Index(name="tarjetas_cupones_id_cliente", columns={"id_cliente"}), @ORM\Index(name="tarjetas_cupones_id_plan", columns={"id_plan"}), @ORM\Index(name="tarjetas_cupones_id_vendedor", columns={"id_vendedor"}), @ORM\Index(name="tarjetas_cupones_id_concepto", columns={"id_concepto"})})
 * @ORM\Entity
 */
class TarjetasCupones
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cupon", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCupon;

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
     * @ORM\Column(name="numero", type="string", length=30, nullable=false)
     */
    private $numero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="concepto", type="string", length=200, nullable=true)
     */
    private $concepto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="autorizacion", type="string", length=30, nullable=true)
     */
    private $autorizacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_pres", type="datetime", nullable=true)
     */
    private $fechaPres;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_acred", type="datetime", nullable=true)
     */
    private $fechaAcred;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $importe = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="importe_pagado", type="text", length=65535, nullable=false)
     */
    private $importePagado;

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
     *   @ORM\JoinColumn(name="id_comprob", referencedColumnName="id_comprob")
     * })
     */
    private $idComprob;

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
     * @var \Formaspago
     *
     * @ORM\ManyToOne(targetEntity="Formaspago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tarjeta", referencedColumnName="id_formapago")
     * })
     */
    private $idTarjeta;

    /**
     * @var \TarjetasPlanes
     *
     * @ORM\ManyToOne(targetEntity="TarjetasPlanes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plan", referencedColumnName="id_plan")
     * })
     */
    private $idPlan;

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
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vendedor", referencedColumnName="id_persona")
     * })
     */
    private $idVendedor;

    public function getIdCupon(): ?int
    {
        return $this->idCupon;
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

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

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

    public function getAutorizacion(): ?string
    {
        return $this->autorizacion;
    }

    public function setAutorizacion(?string $autorizacion): self
    {
        $this->autorizacion = $autorizacion;

        return $this;
    }

    public function getFechaPres(): ?\DateTimeInterface
    {
        return $this->fechaPres;
    }

    public function setFechaPres(?\DateTimeInterface $fechaPres): self
    {
        $this->fechaPres = $fechaPres;

        return $this;
    }

    public function getFechaAcred(): ?\DateTimeInterface
    {
        return $this->fechaAcred;
    }

    public function setFechaAcred(?\DateTimeInterface $fechaAcred): self
    {
        $this->fechaAcred = $fechaAcred;

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

    public function getImportePagado(): ?string
    {
        return $this->importePagado;
    }

    public function setImportePagado(string $importePagado): self
    {
        $this->importePagado = $importePagado;

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

    public function getIdComprob(): ?Comprob
    {
        return $this->idComprob;
    }

    public function setIdComprob(?Comprob $idComprob): self
    {
        $this->idComprob = $idComprob;

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

    public function getIdTarjeta(): ?Formaspago
    {
        return $this->idTarjeta;
    }

    public function setIdTarjeta(?Formaspago $idTarjeta): self
    {
        $this->idTarjeta = $idTarjeta;

        return $this;
    }

    public function getIdPlan(): ?TarjetasPlanes
    {
        return $this->idPlan;
    }

    public function setIdPlan(?TarjetasPlanes $idPlan): self
    {
        $this->idPlan = $idPlan;

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

    public function getIdVendedor(): ?Personas
    {
        return $this->idVendedor;
    }

    public function setIdVendedor(?Personas $idVendedor): self
    {
        $this->idVendedor = $idVendedor;

        return $this;
    }


}
