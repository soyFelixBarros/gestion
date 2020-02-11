<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentosTipos
 *
 * @ORM\Table(name="documentos_tipos", uniqueConstraints={@ORM\UniqueConstraint(name="documentos_tipos_letra", columns={"letra"})}, indexes={@ORM\Index(name="fk_documentos_tipos_situaciondestino", columns={"situaciondestino"}), @ORM\Index(name="fk_documentos_tipos_situacionorigen", columns={"situacionorigen"})})
 * @ORM\Entity
 */
class DocumentosTipos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipo;

    /**
     * @var string
     *
     * @ORM\Column(name="letra", type="string", length=50, nullable=false)
     */
    private $letra;

    /**
     * @var string
     *
     * @ORM\Column(name="letrasola", type="string", length=50, nullable=false)
     */
    private $letrasola;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrelargo", type="string", length=200, nullable=false)
     */
    private $nombrelargo;

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
     * @var string|null
     *
     * @ORM\Column(name="tabla", type="string", length=200, nullable=true)
     */
    private $tabla;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=200, nullable=true)
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipobase", type="string", length=200, nullable=true)
     */
    private $tipobase;

    /**
     * @var bool
     *
     * @ORM\Column(name="venta", type="boolean", nullable=false, options={"default"="1"})
     */
    private $venta = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="compra", type="boolean", nullable=false)
     */
    private $compra = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="permitedisciva", type="boolean", nullable=false)
     */
    private $permitedisciva = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="siempredisciva", type="boolean", nullable=false)
     */
    private $siempredisciva = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="cargapapel", type="boolean", nullable=false)
     */
    private $cargapapel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="direc_ctacte", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $direcCtacte;

    /**
     * @var string
     *
     * @ORM\Column(name="mueve_stock", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $mueveStock;

    /**
     * @var bool
     *
     * @ORM\Column(name="numerar_guardar", type="boolean", nullable=false)
     */
    private $numerarGuardar = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="imprimir_guardar", type="boolean", nullable=false)
     */
    private $imprimirGuardar = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="numerar_imprimir", type="boolean", nullable=false)
     */
    private $numerarImprimir = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="imprimir_repetir", type="boolean", nullable=false)
     */
    private $imprimirRepetir = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="imprimir_modificar", type="boolean", nullable=false)
     */
    private $imprimirModificar = '0';

    /**
     * @var \ArticulosSituaciones
     *
     * @ORM\ManyToOne(targetEntity="ArticulosSituaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situaciondestino", referencedColumnName="id_situacion")
     * })
     */
    private $situaciondestino;

    /**
     * @var \ArticulosSituaciones
     *
     * @ORM\ManyToOne(targetEntity="ArticulosSituaciones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situacionorigen", referencedColumnName="id_situacion")
     * })
     */
    private $situacionorigen;

    public function getIdTipo(): ?int
    {
        return $this->idTipo;
    }

    public function getLetra(): ?string
    {
        return $this->letra;
    }

    public function setLetra(string $letra): self
    {
        $this->letra = $letra;

        return $this;
    }

    public function getLetrasola(): ?string
    {
        return $this->letrasola;
    }

    public function setLetrasola(string $letrasola): self
    {
        $this->letrasola = $letrasola;

        return $this;
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

    public function getNombrelargo(): ?string
    {
        return $this->nombrelargo;
    }

    public function setNombrelargo(string $nombrelargo): self
    {
        $this->nombrelargo = $nombrelargo;

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

    public function getTabla(): ?string
    {
        return $this->tabla;
    }

    public function setTabla(?string $tabla): self
    {
        $this->tabla = $tabla;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getTipobase(): ?string
    {
        return $this->tipobase;
    }

    public function setTipobase(?string $tipobase): self
    {
        $this->tipobase = $tipobase;

        return $this;
    }

    public function getVenta(): ?bool
    {
        return $this->venta;
    }

    public function setVenta(bool $venta): self
    {
        $this->venta = $venta;

        return $this;
    }

    public function getCompra(): ?bool
    {
        return $this->compra;
    }

    public function setCompra(bool $compra): self
    {
        $this->compra = $compra;

        return $this;
    }

    public function getPermitedisciva(): ?bool
    {
        return $this->permitedisciva;
    }

    public function setPermitedisciva(bool $permitedisciva): self
    {
        $this->permitedisciva = $permitedisciva;

        return $this;
    }

    public function getSiempredisciva(): ?bool
    {
        return $this->siempredisciva;
    }

    public function setSiempredisciva(bool $siempredisciva): self
    {
        $this->siempredisciva = $siempredisciva;

        return $this;
    }

    public function getCargapapel(): ?bool
    {
        return $this->cargapapel;
    }

    public function setCargapapel(bool $cargapapel): self
    {
        $this->cargapapel = $cargapapel;

        return $this;
    }

    public function getDirecCtacte(): ?string
    {
        return $this->direcCtacte;
    }

    public function setDirecCtacte(string $direcCtacte): self
    {
        $this->direcCtacte = $direcCtacte;

        return $this;
    }

    public function getMueveStock(): ?string
    {
        return $this->mueveStock;
    }

    public function setMueveStock(string $mueveStock): self
    {
        $this->mueveStock = $mueveStock;

        return $this;
    }

    public function getNumerarGuardar(): ?bool
    {
        return $this->numerarGuardar;
    }

    public function setNumerarGuardar(bool $numerarGuardar): self
    {
        $this->numerarGuardar = $numerarGuardar;

        return $this;
    }

    public function getImprimirGuardar(): ?bool
    {
        return $this->imprimirGuardar;
    }

    public function setImprimirGuardar(bool $imprimirGuardar): self
    {
        $this->imprimirGuardar = $imprimirGuardar;

        return $this;
    }

    public function getNumerarImprimir(): ?bool
    {
        return $this->numerarImprimir;
    }

    public function setNumerarImprimir(bool $numerarImprimir): self
    {
        $this->numerarImprimir = $numerarImprimir;

        return $this;
    }

    public function getImprimirRepetir(): ?bool
    {
        return $this->imprimirRepetir;
    }

    public function setImprimirRepetir(bool $imprimirRepetir): self
    {
        $this->imprimirRepetir = $imprimirRepetir;

        return $this;
    }

    public function getImprimirModificar(): ?bool
    {
        return $this->imprimirModificar;
    }

    public function setImprimirModificar(bool $imprimirModificar): self
    {
        $this->imprimirModificar = $imprimirModificar;

        return $this;
    }

    public function getSituaciondestino(): ?ArticulosSituaciones
    {
        return $this->situaciondestino;
    }

    public function setSituaciondestino(?ArticulosSituaciones $situaciondestino): self
    {
        $this->situaciondestino = $situaciondestino;

        return $this;
    }

    public function getSituacionorigen(): ?ArticulosSituaciones
    {
        return $this->situacionorigen;
    }

    public function setSituacionorigen(?ArticulosSituaciones $situacionorigen): self
    {
        $this->situacionorigen = $situacionorigen;

        return $this;
    }


}
