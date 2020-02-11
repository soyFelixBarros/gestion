<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TicketsArticulos
 *
 * @ORM\Table(name="tickets_articulos", indexes={@ORM\Index(name="tickets_articulos_id_ticket", columns={"id_ticket"}), @ORM\Index(name="tickets_articulos_id_articulo", columns={"id_articulo"})})
 * @ORM\Entity
 */
class TicketsArticulos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ticket_articulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTicketArticulo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var bool
     *
     * @ORM\Column(name="orden", type="boolean", nullable=false)
     */
    private $orden = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantidad = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="precio", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $precio = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="descuento", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $descuento = '0.0000';

    /**
     * @var \Articulos
     *
     * @ORM\ManyToOne(targetEntity="Articulos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_articulo", referencedColumnName="id_articulo")
     * })
     */
    private $idArticulo;

    /**
     * @var \Tickets
     *
     * @ORM\ManyToOne(targetEntity="Tickets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ticket", referencedColumnName="id_ticket")
     * })
     */
    private $idTicket;

    public function getIdTicketArticulo(): ?int
    {
        return $this->idTicketArticulo;
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

    public function getOrden(): ?bool
    {
        return $this->orden;
    }

    public function setOrden(bool $orden): self
    {
        $this->orden = $orden;

        return $this;
    }

    public function getCantidad(): ?string
    {
        return $this->cantidad;
    }

    public function setCantidad(string $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getPrecio(): ?string
    {
        return $this->precio;
    }

    public function setPrecio(string $precio): self
    {
        $this->precio = $precio;

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

    public function getIdArticulo(): ?Articulos
    {
        return $this->idArticulo;
    }

    public function setIdArticulo(?Articulos $idArticulo): self
    {
        $this->idArticulo = $idArticulo;

        return $this;
    }

    public function getIdTicket(): ?Tickets
    {
        return $this->idTicket;
    }

    public function setIdTicket(?Tickets $idTicket): self
    {
        $this->idTicket = $idTicket;

        return $this;
    }


}
