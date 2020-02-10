<?php

namespace App\Entity;

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

}
