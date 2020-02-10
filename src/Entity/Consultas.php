<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Consultas
 *
 * @ORM\Table(name="consultas")
 * @ORM\Entity
 */
class Consultas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_consulta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConsulta;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="query", type="text", length=65535, nullable=false)
     */
    private $query;

    /**
     * @var string|null
     *
     * @ORM\Column(name="query_where", type="text", length=65535, nullable=true)
     */
    private $queryWhere;

    /**
     * @var string|null
     *
     * @ORM\Column(name="query_groupby", type="text", length=65535, nullable=true)
     */
    private $queryGroupby;

    /**
     * @var string|null
     *
     * @ORM\Column(name="query_orderby", type="text", length=65535, nullable=true)
     */
    private $queryOrderby;

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


}
