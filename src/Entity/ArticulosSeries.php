<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosSeries
 *
 * @ORM\Table(name="articulos_series", indexes={@ORM\Index(name="articulos_series_id_articulo", columns={"id_articulo"}), @ORM\Index(name="articulos_series_id_situacion", columns={"id_situacion"})})
 * @ORM\Entity
 */
class ArticulosSeries
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_serie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="serie", type="string", length=200, nullable=false)
     */
    private $serie;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $cantidad = '0.0000';

    /**
     * @var \Articulos
     *
     * @ORM\ManyToOne(targetEntity="Articulos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_articulo", referencedColumnName="id_articulo")
     * })
     */
    private $idArticulo;

    /**
     * @var \ArticulosSituaciones
     *
     * @ORM\ManyToOne(targetEntity="ArticulosSituaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_situacion", referencedColumnName="id_situacion")
     * })
     */
    private $idSituacion;

    public function getIdSerie(): ?int
    {
        return $this->idSerie;
    }

    public function getSerie(): ?string
    {
        return $this->serie;
    }

    public function setSerie(string $serie): self
    {
        $this->serie = $serie;

        return $this;
    }

    public function getCantidad(): ?string
    {
        return $this->cantidad;
    }

    public function setCantidad(string $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getIdArticulo(): ?Articulos
    {
        return $this->idArticulo;
    }

    public function setIdArticulo(?Articulos $idArticulo): self
    {
        $this->idArticulo = $idArticulo;

        return $this;
    }

    public function getIdSituacion(): ?ArticulosSituaciones
    {
        return $this->idSituacion;
    }

    public function setIdSituacion(?ArticulosSituaciones $idSituacion): self
    {
        $this->idSituacion = $idSituacion;

        return $this;
    }


}
