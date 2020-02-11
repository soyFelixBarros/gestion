<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosImagenes
 *
 * @ORM\Table(name="articulos_imagenes")
 * @ORM\Entity
 */
class ArticulosImagenes
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="blob", length=0, nullable=true)
     */
    private $imagen;

    /**
     * @var \Articulos
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Articulos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_articulo", referencedColumnName="id_articulo")
     * })
     */
    private $idArticulo;

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

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
