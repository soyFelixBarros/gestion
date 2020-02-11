<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosSituaciones
 *
 * @ORM\Table(name="articulos_situaciones")
 * @ORM\Entity
 */
class ArticulosSituaciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_situacion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSituacion;

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
     * @var bool
     *
     * @ORM\Column(name="cuenta_stock", type="boolean", nullable=false)
     */
    private $cuentaStock = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="deposito", type="smallint", nullable=false)
     */
    private $deposito = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="facturable", type="boolean", nullable=false)
     */
    private $facturable = '0';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Articulos", mappedBy="idSituacion")
     */
    private $idArticulo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idArticulo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdSituacion(): ?int
    {
        return $this->idSituacion;
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

    public function getCuentaStock(): ?bool
    {
        return $this->cuentaStock;
    }

    public function setCuentaStock(bool $cuentaStock): self
    {
        $this->cuentaStock = $cuentaStock;

        return $this;
    }

    public function getDeposito(): ?int
    {
        return $this->deposito;
    }

    public function setDeposito(int $deposito): self
    {
        $this->deposito = $deposito;

        return $this;
    }

    public function getFacturable(): ?bool
    {
        return $this->facturable;
    }

    public function setFacturable(bool $facturable): self
    {
        $this->facturable = $facturable;

        return $this;
    }

    /**
     * @return Collection|Articulos[]
     */
    public function getIdArticulo(): Collection
    {
        return $this->idArticulo;
    }

    public function addIdArticulo(Articulos $idArticulo): self
    {
        if (!$this->idArticulo->contains($idArticulo)) {
            $this->idArticulo[] = $idArticulo;
            $idArticulo->addIdSituacion($this);
        }

        return $this;
    }

    public function removeIdArticulo(Articulos $idArticulo): self
    {
        if ($this->idArticulo->contains($idArticulo)) {
            $this->idArticulo->removeElement($idArticulo);
            $idArticulo->removeIdSituacion($this);
        }

        return $this;
    }

}
