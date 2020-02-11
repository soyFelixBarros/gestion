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

    public function getIdPersona(): ?int
    {
        return $this->idPersona;
    }

    public function getNombreVisible(): ?string
    {
        return $this->nombreVisible;
    }

    public function setNombreVisible(string $nombreVisible): self
    {
        $this->nombreVisible = $nombreVisible;

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

    public function getTipo(): ?int
    {
        return $this->tipo;
    }

    public function setTipo(int $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getIdSubgrupo(): ?int
    {
        return $this->idSubgrupo;
    }

    public function setIdSubgrupo(?int $idSubgrupo): self
    {
        $this->idSubgrupo = $idSubgrupo;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(?string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getNombreFantasia(): ?string
    {
        return $this->nombreFantasia;
    }

    public function setNombreFantasia(?string $nombreFantasia): self
    {
        $this->nombreFantasia = $nombreFantasia;

        return $this;
    }

    public function getRazonSocial(): ?string
    {
        return $this->razonSocial;
    }

    public function setRazonSocial(?string $razonSocial): self
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    public function getNombreusuario(): ?string
    {
        return $this->nombreusuario;
    }

    public function setNombreusuario(?string $nombreusuario): self
    {
        $this->nombreusuario = $nombreusuario;

        return $this;
    }

    public function getContrasena(): ?string
    {
        return $this->contrasena;
    }

    public function setContrasena(?string $contrasena): self
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    public function getContrasenaSal(): ?string
    {
        return $this->contrasenaSal;
    }

    public function setContrasenaSal(?string $contrasenaSal): self
    {
        $this->contrasenaSal = $contrasenaSal;

        return $this;
    }

    public function getContrasenaFecha(): ?\DateTimeInterface
    {
        return $this->contrasenaFecha;
    }

    public function setContrasenaFecha(?\DateTimeInterface $contrasenaFecha): self
    {
        $this->contrasenaFecha = $contrasenaFecha;

        return $this;
    }

    public function getGenero(): ?int
    {
        return $this->genero;
    }

    public function setGenero(?int $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

    public function getNumDoc(): ?string
    {
        return $this->numDoc;
    }

    public function setNumDoc(?string $numDoc): self
    {
        $this->numDoc = $numDoc;

        return $this;
    }

    public function getIdTipoCuit(): ?int
    {
        return $this->idTipoCuit;
    }

    public function setIdTipoCuit(?int $idTipoCuit): self
    {
        $this->idTipoCuit = $idTipoCuit;

        return $this;
    }

    public function getCuit(): ?string
    {
        return $this->cuit;
    }

    public function setCuit(?string $cuit): self
    {
        $this->cuit = $cuit;

        return $this;
    }

    public function getDomicilio(): ?string
    {
        return $this->domicilio;
    }

    public function setDomicilio(?string $domicilio): self
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    public function getDomiciliotrabajo(): ?string
    {
        return $this->domiciliotrabajo;
    }

    public function setDomiciliotrabajo(?string $domiciliotrabajo): self
    {
        $this->domiciliotrabajo = $domiciliotrabajo;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getTipoFac(): ?string
    {
        return $this->tipoFac;
    }

    public function setTipoFac(?string $tipoFac): self
    {
        $this->tipoFac = $tipoFac;

        return $this;
    }

    public function getFechanac(): ?\DateTimeInterface
    {
        return $this->fechanac;
    }

    public function setFechanac(?\DateTimeInterface $fechanac): self
    {
        $this->fechanac = $fechanac;

        return $this;
    }

    public function getFechaalta(): ?\DateTimeInterface
    {
        return $this->fechaalta;
    }

    public function setFechaalta(?\DateTimeInterface $fechaalta): self
    {
        $this->fechaalta = $fechaalta;

        return $this;
    }

    public function getFechabaja(): ?\DateTimeInterface
    {
        return $this->fechabaja;
    }

    public function setFechabaja(?\DateTimeInterface $fechabaja): self
    {
        $this->fechabaja = $fechabaja;

        return $this;
    }

    public function getLimitecredito(): ?string
    {
        return $this->limitecredito;
    }

    public function setLimitecredito(string $limitecredito): self
    {
        $this->limitecredito = $limitecredito;

        return $this;
    }

    public function getLimitecreditofecha(): ?\DateTimeInterface
    {
        return $this->limitecreditofecha;
    }

    public function setLimitecreditofecha(?\DateTimeInterface $limitecreditofecha): self
    {
        $this->limitecreditofecha = $limitecreditofecha;

        return $this;
    }

    public function getSaldoCtacte(): ?string
    {
        return $this->saldoCtacte;
    }

    public function setSaldoCtacte(string $saldoCtacte): self
    {
        $this->saldoCtacte = $saldoCtacte;

        return $this;
    }

    public function getEstadocredito(): ?int
    {
        return $this->estadocredito;
    }

    public function setEstadocredito(int $estadocredito): self
    {
        $this->estadocredito = $estadocredito;

        return $this;
    }

    public function getTipocuenta(): ?int
    {
        return $this->tipocuenta;
    }

    public function setTipocuenta(int $tipocuenta): self
    {
        $this->tipocuenta = $tipocuenta;

        return $this;
    }

    public function getNumerocuenta(): ?string
    {
        return $this->numerocuenta;
    }

    public function setNumerocuenta(?string $numerocuenta): self
    {
        $this->numerocuenta = $numerocuenta;

        return $this;
    }

    public function getCbu(): ?string
    {
        return $this->cbu;
    }

    public function setCbu(?string $cbu): self
    {
        $this->cbu = $cbu;

        return $this;
    }

    public function getExtra1(): ?string
    {
        return $this->extra1;
    }

    public function setExtra1(?string $extra1): self
    {
        $this->extra1 = $extra1;

        return $this;
    }

    public function getIdCiudad(): ?Ciudades
    {
        return $this->idCiudad;
    }

    public function setIdCiudad(?Ciudades $idCiudad): self
    {
        $this->idCiudad = $idCiudad;

        return $this;
    }

    public function getIdGrupo(): ?PersonasGrupos
    {
        return $this->idGrupo;
    }

    public function setIdGrupo(?PersonasGrupos $idGrupo): self
    {
        $this->idGrupo = $idGrupo;

        return $this;
    }

    public function getIdSituacion(): ?Situaciones
    {
        return $this->idSituacion;
    }

    public function setIdSituacion(?Situaciones $idSituacion): self
    {
        $this->idSituacion = $idSituacion;

        return $this;
    }

    public function getIdTipoDoc(): ?TipoDoc
    {
        return $this->idTipoDoc;
    }

    public function setIdTipoDoc(?TipoDoc $idTipoDoc): self
    {
        $this->idTipoDoc = $idTipoDoc;

        return $this;
    }

    public function getIdVendedor(): ?self
    {
        return $this->idVendedor;
    }

    public function setIdVendedor(?self $idVendedor): self
    {
        $this->idVendedor = $idVendedor;

        return $this;
    }


}
