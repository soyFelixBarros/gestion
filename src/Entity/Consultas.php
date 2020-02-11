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

    public function getIdConsulta(): ?int
    {
        return $this->idConsulta;
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

    public function getQuery(): ?string
    {
        return $this->query;
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function getQueryWhere(): ?string
    {
        return $this->queryWhere;
    }

    public function setQueryWhere(?string $queryWhere): self
    {
        $this->queryWhere = $queryWhere;

        return $this;
    }

    public function getQueryGroupby(): ?string
    {
        return $this->queryGroupby;
    }

    public function setQueryGroupby(?string $queryGroupby): self
    {
        $this->queryGroupby = $queryGroupby;

        return $this;
    }

    public function getQueryOrderby(): ?string
    {
        return $this->queryOrderby;
    }

    public function setQueryOrderby(?string $queryOrderby): self
    {
        $this->queryOrderby = $queryOrderby;

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


}
