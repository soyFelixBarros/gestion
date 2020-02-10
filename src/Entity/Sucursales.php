<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sucursales
 *
 * @ORM\Table(name="sucursales", indexes={@ORM\Index(name="sucursales_id_caja_diaria", columns={"id_caja_diaria"}), @ORM\Index(name="sucursales_id_ciudad", columns={"id_ciudad"}), @ORM\Index(name="sucursales_id_caja_cheques", columns={"id_caja_cheques"}), @ORM\Index(name="sucursales_situacionorigen", columns={"situacionorigen"})})
 * @ORM\Entity
 */
class Sucursales
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_sucursal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSucursal;

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
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=200, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=200, nullable=false)
     */
    private $telefono;

    /**
     * @var \Cajas
     *
     * @ORM\ManyToOne(targetEntity="Cajas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_caja_cheques", referencedColumnName="id_caja")
     * })
     */
    private $idCajaCheques;

    /**
     * @var \Cajas
     *
     * @ORM\ManyToOne(targetEntity="Cajas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_caja_diaria", referencedColumnName="id_caja")
     * })
     */
    private $idCajaDiaria;

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ciudad", referencedColumnName="id_ciudad")
     * })
     */
    private $idCiudad;

    /**
     * @var \Situaciones
     *
     * @ORM\ManyToOne(targetEntity="Situaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situacionorigen", referencedColumnName="id_situacion")
     * })
     */
    private $situacionorigen;


}
