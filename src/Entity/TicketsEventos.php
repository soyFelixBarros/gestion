<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TicketsEventos
 *
 * @ORM\Table(name="tickets_eventos", indexes={@ORM\Index(name="tickets_eventos_id_tecnico", columns={"id_tecnico"}), @ORM\Index(name="tickets_eventos_id_ticket", columns={"id_ticket"})})
 * @ORM\Entity
 */
class TicketsEventos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_evento", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descripcion", type="text", length=65535, nullable=true)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="minutos_tecnico", type="smallint", nullable=false)
     */
    private $minutosTecnico = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="privado", type="boolean", nullable=false)
     */
    private $privado = '0';

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tecnico", referencedColumnName="id_persona")
     * })
     */
    private $idTecnico;

    /**
     * @var \Tickets
     *
     * @ORM\ManyToOne(targetEntity="Tickets")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ticket", referencedColumnName="id_ticket")
     * })
     */
    private $idTicket;


}
