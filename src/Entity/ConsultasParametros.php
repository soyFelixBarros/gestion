<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsultasParametros
 *
 * @ORM\Table(name="consultas_parametros", indexes={@ORM\Index(name="consultas_parametros_id_consulta", columns={"id_consulta"})})
 * @ORM\Entity
 */
class ConsultasParametros
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_parametro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParametro;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="variable", type="string", length=50, nullable=false)
     */
    private $variable;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoentrada", type="string", length=50, nullable=false)
     */
    private $tipoentrada;

    /**
     * @var bool
     *
     * @ORM\Column(name="orden", type="boolean", nullable=false)
     */
    private $orden = '0';

    /**
     * @var \Consultas
     *
     * @ORM\ManyToOne(targetEntity="Consultas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_consulta", referencedColumnName="id_consulta")
     * })
     */
    private $idConsulta;

    public function getIdParametro(): ?int
    {
        return $this->idParametro;
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

    public function getVariable(): ?string
    {
        return $this->variable;
    }

    public function setVariable(string $variable): self
    {
        $this->variable = $variable;

        return $this;
    }

    public function getTipoentrada(): ?string
    {
        return $this->tipoentrada;
    }

    public function setTipoentrada(string $tipoentrada): self
    {
        $this->tipoentrada = $tipoentrada;

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

    public function getIdConsulta(): ?Consultas
    {
        return $this->idConsulta;
    }

    public function setIdConsulta(?Consultas $idConsulta): self
    {
        $this->idConsulta = $idConsulta;

        return $this;
    }


}
