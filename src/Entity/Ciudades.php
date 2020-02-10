<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudades
 *
 * @ORM\Table(name="ciudades", indexes={@ORM\Index(name="ciudades_cp", columns={"cp"}), @ORM\Index(name="ciudades_id_pais", columns={"id_pais"})})
 * @ORM\Entity
 */
class Ciudades
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ciudad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCiudad;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=50, nullable=false)
     */
    private $cp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent", type="integer", nullable=true)
     */
    private $parent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_provincia", type="integer", nullable=true)
     */
    private $idProvincia;

    /**
     * @var bool
     *
     * @ORM\Column(name="nivel", type="boolean", nullable=false)
     */
    private $nivel = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="iva", type="boolean", nullable=false)
     */
    private $iva = '0';

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
     * @var \Paises
     *
     * @ORM\ManyToOne(targetEntity="Paises")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id_pais")
     * })
     */
    private $idPais;


}
