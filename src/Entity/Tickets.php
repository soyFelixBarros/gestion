<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tickets
 *
 * @ORM\Table(name="tickets", indexes={@ORM\Index(name="tickets_id_tecnico_entrega", columns={"id_tecnico_entrega"}), @ORM\Index(name="tickets_id_tipo_ticket", columns={"id_tipo_ticket"}), @ORM\Index(name="tickets_id_persona", columns={"id_persona"}), @ORM\Index(name="tickets_id_tecnico_recibe", columns={"id_tecnico_recibe"}), @ORM\Index(name="tickets_id_comprob", columns={"id_comprob"}), @ORM\Index(name="tickets_id_sucursal", columns={"id_sucursal"}), @ORM\Index(name="tickets_id_tecnico_verifica", columns={"id_tecnico_verifica"}), @ORM\Index(name="tickets_id_presupuesto", columns={"id_presupuesto"})})
 * @ORM\Entity
 */
class Tickets
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTicket;

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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ingreso", type="datetime", nullable=false)
     */
    private $fechaIngreso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var bool
     *
     * @ORM\Column(name="prioridad", type="boolean", nullable=false)
     */
    private $prioridad = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="minutos_tecnico", type="smallint", nullable=false)
     */
    private $minutosTecnico = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="presupuesto", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $presupuesto = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="articulos_descuento", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $articulosDescuento = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="presupuesto_aprobado", type="boolean", nullable=false)
     */
    private $presupuestoAprobado = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="entrega_estimada", type="datetime", nullable=true)
     */
    private $entregaEstimada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="entrega_limite", type="datetime", nullable=true)
     */
    private $entregaLimite;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_finalizacion", type="datetime", nullable=true)
     */
    private $fechaFinalizacion;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_salida", type="datetime", nullable=true)
     */
    private $fechaSalida;

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
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_persona", referencedColumnName="id_persona")
     * })
     */
    private $idPersona;

    /**
     * @var \Comprob
     *
     * @ORM\ManyToOne(targetEntity="Comprob")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_presupuesto", referencedColumnName="id_comprob")
     * })
     */
    private $idPresupuesto;

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
     *   @ORM\JoinColumn(name="id_tecnico_entrega", referencedColumnName="id_persona")
     * })
     */
    private $idTecnicoEntrega;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tecnico_recibe", referencedColumnName="id_persona")
     * })
     */
    private $idTecnicoRecibe;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tecnico_verifica", referencedColumnName="id_persona")
     * })
     */
    private $idTecnicoVerifica;

    /**
     * @var \TicketsTipos
     *
     * @ORM\ManyToOne(targetEntity="TicketsTipos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_ticket", referencedColumnName="id_tipo_ticket")
     * })
     */
    private $idTipoTicket;

    public function getIdTicket(): ?int
    {
        return $this->idTicket;
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

    public function getFechaIngreso(): ?\DateTimeInterface
    {
        return $this->fechaIngreso;
    }

    public function setFechaIngreso(\DateTimeInterface $fechaIngreso): self
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPrioridad(): ?bool
    {
        return $this->prioridad;
    }

    public function setPrioridad(bool $prioridad): self
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    public function getMinutosTecnico(): ?int
    {
        return $this->minutosTecnico;
    }

    public function setMinutosTecnico(int $minutosTecnico): self
    {
        $this->minutosTecnico = $minutosTecnico;

        return $this;
    }

    public function getPresupuesto(): ?string
    {
        return $this->presupuesto;
    }

    public function setPresupuesto(string $presupuesto): self
    {
        $this->presupuesto = $presupuesto;

        return $this;
    }

    public function getArticulosDescuento(): ?string
    {
        return $this->articulosDescuento;
    }

    public function setArticulosDescuento(string $articulosDescuento): self
    {
        $this->articulosDescuento = $articulosDescuento;

        return $this;
    }

    public function getPresupuestoAprobado(): ?bool
    {
        return $this->presupuestoAprobado;
    }

    public function setPresupuestoAprobado(bool $presupuestoAprobado): self
    {
        $this->presupuestoAprobado = $presupuestoAprobado;

        return $this;
    }

    public function getEntregaEstimada(): ?\DateTimeInterface
    {
        return $this->entregaEstimada;
    }

    public function setEntregaEstimada(?\DateTimeInterface $entregaEstimada): self
    {
        $this->entregaEstimada = $entregaEstimada;

        return $this;
    }

    public function getEntregaLimite(): ?\DateTimeInterface
    {
        return $this->entregaLimite;
    }

    public function setEntregaLimite(?\DateTimeInterface $entregaLimite): self
    {
        $this->entregaLimite = $entregaLimite;

        return $this;
    }

    public function getFechaFinalizacion(): ?\DateTimeInterface
    {
        return $this->fechaFinalizacion;
    }

    public function setFechaFinalizacion(?\DateTimeInterface $fechaFinalizacion): self
    {
        $this->fechaFinalizacion = $fechaFinalizacion;

        return $this;
    }

    public function getFechaSalida(): ?\DateTimeInterface
    {
        return $this->fechaSalida;
    }

    public function setFechaSalida(?\DateTimeInterface $fechaSalida): self
    {
        $this->fechaSalida = $fechaSalida;

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

    public function getIdPersona(): ?Personas
    {
        return $this->idPersona;
    }

    public function setIdPersona(?Personas $idPersona): self
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    public function getIdPresupuesto(): ?Comprob
    {
        return $this->idPresupuesto;
    }

    public function setIdPresupuesto(?Comprob $idPresupuesto): self
    {
        $this->idPresupuesto = $idPresupuesto;

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

    public function getIdTecnicoEntrega(): ?Personas
    {
        return $this->idTecnicoEntrega;
    }

    public function setIdTecnicoEntrega(?Personas $idTecnicoEntrega): self
    {
        $this->idTecnicoEntrega = $idTecnicoEntrega;

        return $this;
    }

    public function getIdTecnicoRecibe(): ?Personas
    {
        return $this->idTecnicoRecibe;
    }

    public function setIdTecnicoRecibe(?Personas $idTecnicoRecibe): self
    {
        $this->idTecnicoRecibe = $idTecnicoRecibe;

        return $this;
    }

    public function getIdTecnicoVerifica(): ?Personas
    {
        return $this->idTecnicoVerifica;
    }

    public function setIdTecnicoVerifica(?Personas $idTecnicoVerifica): self
    {
        $this->idTecnicoVerifica = $idTecnicoVerifica;

        return $this;
    }

    public function getIdTipoTicket(): ?TicketsTipos
    {
        return $this->idTipoTicket;
    }

    public function setIdTipoTicket(?TicketsTipos $idTipoTicket): self
    {
        $this->idTipoTicket = $idTipoTicket;

        return $this;
    }


}
