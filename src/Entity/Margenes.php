<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Margenes
 *
 * @ORM\Table(name="margenes")
 * @ORM\Entity
 */
class Margenes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_margen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMargen;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="sumar", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $sumar = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $porcentaje = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje2", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $porcentaje2 = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje3", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $porcentaje3 = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="sumar2", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $sumar2 = '0.0000';

    /**
     * @var bool
     *
     * @ORM\Column(name="predet", type="boolean", nullable=false)
     */
    private $predet = '0';

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

    public function getIdMargen(): ?int
    {
        return $this->idMargen;
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

    public function getSumar(): ?string
    {
        return $this->sumar;
    }

    public function setSumar(string $sumar): self
    {
        $this->sumar = $sumar;

        return $this;
    }

    public function getPorcentaje(): ?string
    {
        return $this->porcentaje;
    }

    public function setPorcentaje(string $porcentaje): self
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    public function getPorcentaje2(): ?string
    {
        return $this->porcentaje2;
    }

    public function setPorcentaje2(string $porcentaje2): self
    {
        $this->porcentaje2 = $porcentaje2;

        return $this;
    }

    public function getPorcentaje3(): ?string
    {
        return $this->porcentaje3;
    }

    public function setPorcentaje3(string $porcentaje3): self
    {
        $this->porcentaje3 = $porcentaje3;

        return $this;
    }

    public function getSumar2(): ?string
    {
        return $this->sumar2;
    }

    public function setSumar2(string $sumar2): self
    {
        $this->sumar2 = $sumar2;

        return $this;
    }

    public function getPredet(): ?bool
    {
        return $this->predet;
    }

    public function setPredet(bool $predet): self
    {
        $this->predet = $predet;

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
