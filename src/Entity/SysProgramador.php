<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysProgramador
 *
 * @ORM\Table(name="sys_programador", indexes={@ORM\Index(name="sys_programador_estado_estacion_componente", columns={"estado", "estacion", "componente"})})
 * @ORM\Entity
 */
class SysProgramador
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
     * @var string
     *
     * @ORM\Column(name="crea_estacion", type="string", length=200, nullable=false)
     */
    private $creaEstacion;

    /**
     * @var string
     *
     * @ORM\Column(name="crea_usuario", type="string", length=200, nullable=false)
     */
    private $creaUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="estacion", type="string", length=200, nullable=false)
     */
    private $estacion;

    /**
     * @var string
     *
     * @ORM\Column(name="comando", type="string", length=200, nullable=false)
     */
    private $comando;

    /**
     * @var bool
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaejecutar", type="datetime", nullable=true)
     */
    private $fechaejecutar;

    /**
     * @var string|null
     *
     * @ORM\Column(name="componente", type="string", length=50, nullable=true)
     */
    private $componente;

    public function getIdEvento(): ?int
    {
        return $this->idEvento;
    }

    public function getCreaEstacion(): ?string
    {
        return $this->creaEstacion;
    }

    public function setCreaEstacion(string $creaEstacion): self
    {
        $this->creaEstacion = $creaEstacion;

        return $this;
    }

    public function getCreaUsuario(): ?string
    {
        return $this->creaUsuario;
    }

    public function setCreaUsuario(string $creaUsuario): self
    {
        $this->creaUsuario = $creaUsuario;

        return $this;
    }

    public function getEstacion(): ?string
    {
        return $this->estacion;
    }

    public function setEstacion(string $estacion): self
    {
        $this->estacion = $estacion;

        return $this;
    }

    public function getComando(): ?string
    {
        return $this->comando;
    }

    public function setComando(string $comando): self
    {
        $this->comando = $comando;

        return $this;
    }

    public function getEstado(): ?bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): self
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

    public function getFechaejecutar(): ?\DateTimeInterface
    {
        return $this->fechaejecutar;
    }

    public function setFechaejecutar(?\DateTimeInterface $fechaejecutar): self
    {
        $this->fechaejecutar = $fechaejecutar;

        return $this;
    }

    public function getComponente(): ?string
    {
        return $this->componente;
    }

    public function setComponente(?string $componente): self
    {
        $this->componente = $componente;

        return $this;
    }


}
