<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personas
 *
 * @ORM\Table(name="personas", indexes={@ORM\Index(name="personas_num_doc", columns={"num_doc"}), @ORM\Index(name="personas_id_grupo", columns={"id_grupo"}), @ORM\Index(name="personas_cuit", columns={"cuit"}), @ORM\Index(name="personas_id_situacion", columns={"id_situacion"}), @ORM\Index(name="personas_id_tipo_doc", columns={"id_tipo_doc"}), @ORM\Index(name="personas_id_vendedor", columns={"id_vendedor"}), @ORM\Index(name="personas_id_ciudad", columns={"id_ciudad"})})
 * @ORM\Entity
 */
class Personas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_persona", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_visible", type="string", length=200, nullable=false)
     */
    private $nombreVisible;

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
     * @var int
     *
     * @ORM\Column(name="tipo", type="smallint", nullable=false)
     */
    private $tipo = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_subgrupo", type="integer", nullable=true)
     */
    private $idSubgrupo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="apellido", type="string", length=50, nullable=true)
     */
    private $apellido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_fantasia", type="string", length=200, nullable=true)
     */
    private $nombreFantasia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="razon_social", type="string", length=200, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombreusuario", type="string", length=50, nullable=true)
     */
    private $nombreusuario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contrasena", type="string", length=200, nullable=true)
     */
    private $contrasena;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contrasena_sal", type="string", length=200, nullable=true)
     */
    private $contrasenaSal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="contrasena_fecha", type="datetime", nullable=true)
     */
    private $contrasenaFecha;

    /**
     * @var int|null
     *
     * @ORM\Column(name="genero", type="integer", nullable=true)
     */
    private $genero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_doc", type="string", length=50, nullable=true)
     */
    private $numDoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tipo_cuit", type="integer", nullable=true)
     */
    private $idTipoCuit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cuit", type="string", length=16, nullable=true)
     */
    private $cuit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domicilio", type="string", length=200, nullable=true)
     */
    private $domicilio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domiciliotrabajo", type="string", length=200, nullable=true)
     */
    private $domiciliotrabajo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefono", type="string", length=200, nullable=true)
     */
    private $telefono;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=200, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_fac", type="string", length=1, nullable=true)
     */
    private $tipoFac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechanac", type="datetime", nullable=true)
     */
    private $fechanac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaalta", type="datetime", nullable=true)
     */
    private $fechaalta;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechabaja", type="datetime", nullable=true)
     */
    private $fechabaja;

    /**
     * @var string
     *
     * @ORM\Column(name="limitecredito", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $limitecredito = '0.0000';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="limitecreditofecha", type="datetime", nullable=true)
     */
    private $limitecreditofecha;

    /**
     * @var string
     *
     * @ORM\Column(name="saldo_ctacte", type="decimal", precision=15, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $saldoCtacte = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="estadocredito", type="smallint", nullable=false)
     */
    private $estadocredito = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tipocuenta", type="smallint", nullable=false)
     */
    private $tipocuenta = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="numerocuenta", type="string", length=200, nullable=true)
     */
    private $numerocuenta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cbu", type="string", length=200, nullable=true)
     */
    private $cbu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra1", type="text", length=65535, nullable=true)
     */
    private $extra1;

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
     * @var \PersonasGrupos
     *
     * @ORM\ManyToOne(targetEntity="PersonasGrupos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_grupo", referencedColumnName="id_grupo")
     * })
     */
    private $idGrupo;

    /**
     * @var \Situaciones
     *
     * @ORM\ManyToOne(targetEntity="Situaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_situacion", referencedColumnName="id_situacion")
     * })
     */
    private $idSituacion;

    /**
     * @var \TipoDoc
     *
     * @ORM\ManyToOne(targetEntity="TipoDoc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_doc", referencedColumnName="id_tipo_doc")
     * })
     */
    private $idTipoDoc;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vendedor", referencedColumnName="id_persona")
     * })
     */
    private $idVendedor;


}
