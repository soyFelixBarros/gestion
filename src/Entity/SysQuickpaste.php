<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysQuickpaste
 *
 * @ORM\Table(name="sys_quickpaste")
 * @ORM\Entity
 */
class SysQuickpaste
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_paste", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaste;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", length=65535, nullable=false)
     */
    private $texto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estacion", type="string", length=200, nullable=true)
     */
    private $estacion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usuario", type="integer", nullable=true)
     */
    private $usuario;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    public function getIdPaste(): ?int
    {
        return $this->idPaste;
    }

    public function getTexto(): ?string
    {
        return $this->texto;
    }

    public function setTexto(string $texto): self
    {
        $this->texto = $texto;

        return $this;
    }

    public function getEstacion(): ?string
    {
        return $this->estacion;
    }

    public function setEstacion(?string $estacion): self
    {
        $this->estacion = $estacion;

        return $this;
    }

    public function getUsuario(): ?int
    {
        return $this->usuario;
    }

    public function setUsuario(?int $usuario): self
    {
        $this->usuario = $usuario;

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
