<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysPlantillas
 *
 * @ORM\Table(name="sys_plantillas", uniqueConstraints={@ORM\UniqueConstraint(name="sys_plantillas_codigo", columns={"codigo"})})
 * @ORM\Entity
 */
class SysPlantillas
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_plantilla", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlantilla;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var bool
     *
     * @ORM\Column(name="tipo", type="boolean", nullable=false)
     */
    private $tipo = '0';

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
     * @ORM\Column(name="codigo", type="string", length=50, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="tamanopapel", type="string", length=50, nullable=false)
     */
    private $tamanopapel;

    /**
     * @var bool
     *
     * @ORM\Column(name="landscape", type="boolean", nullable=false)
     */
    private $landscape = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="copias", type="boolean", nullable=false, options={"default"="1"})
     */
    private $copias = '1';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="bandeja", type="boolean", nullable=true)
     */
    private $bandeja = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="margen_izquierda", type="integer", nullable=false, options={"default"="-1"})
     */
    private $margenIzquierda = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="margen_derecha", type="integer", nullable=false, options={"default"="-1"})
     */
    private $margenDerecha = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="margen_arriba", type="integer", nullable=false, options={"default"="-1"})
     */
    private $margenArriba = '-1';

    /**
     * @var int
     *
     * @ORM\Column(name="margen_abajo", type="integer", nullable=false, options={"default"="-1"})
     */
    private $margenAbajo = '-1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="def", type="blob", length=0, nullable=true)
     */
    private $def;

    /**
     * @var string|null
     *
     * @ORM\Column(name="defxml", type="text", length=65535, nullable=true)
     */
    private $defxml;

    public function getIdPlantilla(): ?int
    {
        return $this->idPlantilla;
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

    public function getTipo(): ?bool
    {
        return $this->tipo;
    }

    public function setTipo(bool $tipo): self
    {
        $this->tipo = $tipo;

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

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getTamanopapel(): ?string
    {
        return $this->tamanopapel;
    }

    public function setTamanopapel(string $tamanopapel): self
    {
        $this->tamanopapel = $tamanopapel;

        return $this;
    }

    public function getLandscape(): ?bool
    {
        return $this->landscape;
    }

    public function setLandscape(bool $landscape): self
    {
        $this->landscape = $landscape;

        return $this;
    }

    public function getCopias(): ?bool
    {
        return $this->copias;
    }

    public function setCopias(bool $copias): self
    {
        $this->copias = $copias;

        return $this;
    }

    public function getBandeja(): ?bool
    {
        return $this->bandeja;
    }

    public function setBandeja(?bool $bandeja): self
    {
        $this->bandeja = $bandeja;

        return $this;
    }

    public function getMargenIzquierda(): ?int
    {
        return $this->margenIzquierda;
    }

    public function setMargenIzquierda(int $margenIzquierda): self
    {
        $this->margenIzquierda = $margenIzquierda;

        return $this;
    }

    public function getMargenDerecha(): ?int
    {
        return $this->margenDerecha;
    }

    public function setMargenDerecha(int $margenDerecha): self
    {
        $this->margenDerecha = $margenDerecha;

        return $this;
    }

    public function getMargenArriba(): ?int
    {
        return $this->margenArriba;
    }

    public function setMargenArriba(int $margenArriba): self
    {
        $this->margenArriba = $margenArriba;

        return $this;
    }

    public function getMargenAbajo(): ?int
    {
        return $this->margenAbajo;
    }

    public function setMargenAbajo(int $margenAbajo): self
    {
        $this->margenAbajo = $margenAbajo;

        return $this;
    }

    public function getDef()
    {
        return $this->def;
    }

    public function setDef($def): self
    {
        $this->def = $def;

        return $this;
    }

    public function getDefxml(): ?string
    {
        return $this->defxml;
    }

    public function setDefxml(?string $defxml): self
    {
        $this->defxml = $defxml;

        return $this;
    }


}
