<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysLog
 *
 * @ORM\Table(name="sys_log", indexes={@ORM\Index(name="sys_log_usuario", columns={"usuario"}), @ORM\Index(name="sys_log_item_id_tabla_comando", columns={"item_id", "tabla", "comando"})})
 * @ORM\Entity
 */
class SysLog
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_log", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLog;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

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
     * @var string|null
     *
     * @ORM\Column(name="tabla", type="string", length=200, nullable=true)
     */
    private $tabla;

    /**
     * @var int|null
     *
     * @ORM\Column(name="item_id", type="integer", nullable=true)
     */
    private $itemId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra1", type="text", length=65535, nullable=true)
     */
    private $extra1;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="id_persona")
     * })
     */
    private $usuario;

    public function getIdLog(): ?int
    {
        return $this->idLog;
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

    public function getTabla(): ?string
    {
        return $this->tabla;
    }

    public function setTabla(?string $tabla): self
    {
        $this->tabla = $tabla;

        return $this;
    }

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;

        return $this;
    }

    public function getExtra1(): ?string
    {
        return $this->extra1;
    }

    public function setExtra1(?string $extra1): self
    {
        $this->extra1 = $extra1;

        return $this;
    }

    public function getUsuario(): ?Personas
    {
        return $this->usuario;
    }

    public function setUsuario(?Personas $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }


}
