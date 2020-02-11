<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosRubros
 *
 * @ORM\Table(name="articulos_rubros", indexes={@ORM\Index(name="articulos_rubros_id_alicuota", columns={"id_alicuota"})})
 * @ORM\Entity
 */
class ArticulosRubros
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rubro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRubro;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \Alicuotas
     *
     * @ORM\ManyToOne(targetEntity="Alicuotas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_alicuota", referencedColumnName="id_alicuota")
     * })
     */
    private $idAlicuota;

    public function getIdRubro(): ?int
    {
        return $this->idRubro;
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

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getIdAlicuota(): ?Alicuotas
    {
        return $this->idAlicuota;
    }

    public function setIdAlicuota(?Alicuotas $idAlicuota): self
    {
        $this->idAlicuota = $idAlicuota;

        return $this;
    }


}
