<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosPrecios
 *
 * @ORM\Table(name="articulos_precios", indexes={@ORM\Index(name="articulos_precios_id_persona", columns={"id_persona"}), @ORM\Index(name="articulos_precios_id_articulo", columns={"id_articulo"}), @ORM\Index(name="articulos_precios_id_margen", columns={"id_margen"})})
 * @ORM\Entity
 */
class ArticulosPrecios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_precio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPrecio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="costo", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $costo = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="pvp", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $pvp = '0.0000';

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
     * @var \Margenes
     *
     * @ORM\ManyToOne(targetEntity="Margenes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_margen", referencedColumnName="id_margen")
     * })
     */
    private $idMargen;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_persona", referencedColumnName="id_persona")
     * })
     */
    private $idPersona;

    public function getIdPrecio(): ?int
    {
        return $this->idPrecio;
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

    public function getCosto(): ?string
    {
        return $this->costo;
    }

    public function setCosto(string $costo): self
    {
        $this->costo = $costo;

        return $this;
    }

    public function getPvp(): ?string
    {
        return $this->pvp;
    }

    public function setPvp(string $pvp): self
    {
        $this->pvp = $pvp;

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

    public function getIdMargen(): ?Margenes
    {
        return $this->idMargen;
    }

    public function setIdMargen(?Margenes $idMargen): self
    {
        $this->idMargen = $idMargen;

        return $this;
    }

    public function getIdPersona(): ?Personas
    {
        return $this->idPersona;
    }

    public function setIdPersona(?Personas $idPersona): self
    {
        $this->idPersona = $idPersona;

        return $this;
    }


}
