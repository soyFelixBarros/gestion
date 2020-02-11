<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosRecetas
 *
 * @ORM\Table(name="articulos_recetas", indexes={@ORM\Index(name="articulos_recetas_id_articulo", columns={"id_articulo"})})
 * @ORM\Entity
 */
class ArticulosRecetas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_receta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReceta;

    /**
     * @var int
     *
     * @ORM\Column(name="id_item", type="integer", nullable=false)
     */
    private $idItem;

    /**
     * @var string
     *
     * @ORM\Column(name="cantidad", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidad;

    /**
     * @var \Articulos
     *
     * @ORM\ManyToOne(targetEntity="Articulos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_articulo", referencedColumnName="id_articulo")
     * })
     */
    private $idArticulo;

    public function getIdReceta(): ?int
    {
        return $this->idReceta;
    }

    public function getIdItem(): ?int
    {
        return $this->idItem;
    }

    public function setIdItem(int $idItem): self
    {
        $this->idItem = $idItem;

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


}
