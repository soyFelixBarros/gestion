<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysConfig
 *
 * @ORM\Table(name="sys_config")
 * @ORM\Entity
 */
class SysConfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="estacion", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $estacion;

    /**
     * @var int
     *
     * @ORM\Column(name="id_sucursal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSucursal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=200, nullable=false)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="text", length=65535, nullable=false)
     */
    private $valor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    public function getEstacion(): ?string
    {
        return $this->estacion;
    }

    public function getIdSucursal(): ?int
    {
        return $this->idSucursal;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function getGrupo(): ?string
    {
        return $this->grupo;
    }

    public function setGrupo(string $grupo): self
    {
        $this->grupo = $grupo;

        return $this;
    }

    public function getValor(): ?string
    {
        return $this->valor;
    }

    public function setValor(string $valor): self
    {
        $this->valor = $valor;

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
