<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ctacte
 *
 * @ORM\Table(name="ctacte", indexes={@ORM\Index(name="ctacte_id_comprob", columns={"id_comprob"}), @ORM\Index(name="ctacte_id_cliente", columns={"id_cliente"}), @ORM\Index(name="ctacte_id_recibo", columns={"id_recibo"}), @ORM\Index(name="ctacte_id_concepto", columns={"id_concepto"})})
 * @ORM\Entity
 */
class Ctacte
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_movim", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMovim;

    /**
     * @var bool
     *
     * @ORM\Column(name="auto", type="boolean", nullable=false)
     */
    private $auto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=200, nullable=false)
     */
    private $concepto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $importe = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="saldo", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $saldo = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comprob", type="string", length=200, nullable=true)
     */
    private $comprob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="obs", type="text", length=65535, nullable=true)
     */
    private $obs;

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
     * @var \Recibos
     *
     * @ORM\ManyToOne(targetEntity="Recibos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_recibo", referencedColumnName="id_recibo")
     * })
     */
    private $idRecibo;

    public function getIdMovim(): ?int
    {
        return $this->idMovim;
    }

    public function getAuto(): ?bool
    {
        return $this->auto;
    }

    public function setAuto(bool $auto): self
    {
        $this->auto = $auto;

        return $this;
    }

    public function getConcepto(): ?string
    {
        return $this->concepto;
    }

    public function setConcepto(string $concepto): self
    {
        $this->concepto = $concepto;

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

    public function getImporte(): ?string
    {
        return $this->importe;
    }

    public function setImporte(string $importe): self
    {
        $this->importe = $importe;

        return $this;
    }

    public function getSaldo(): ?string
    {
        return $this->saldo;
    }

    public function setSaldo(string $saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getComprob(): ?string
    {
        return $this->comprob;
    }

    public function setComprob(?string $comprob): self
    {
        $this->comprob = $comprob;

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

    public function getIdRecibo(): ?Recibos
    {
        return $this->idRecibo;
    }

    public function setIdRecibo(?Recibos $idRecibo): self
    {
        $this->idRecibo = $idRecibo;

        return $this;
    }


}
