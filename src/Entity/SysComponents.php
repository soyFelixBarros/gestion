<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysComponents
 *
 * @ORM\Table(name="sys_components")
 * @ORM\Entity
 */
class SysComponents
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_component", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComponent;

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
     * @ORM\Column(name="espacio", type="string", length=200, nullable=false)
     */
    private $espacio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="version", type="datetime", nullable=false)
     */
    private $version;

    /**
     * @var string|null
     *
     * @ORM\Column(name="estructura", type="text", length=65535, nullable=true)
     */
    private $estructura;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cif", type="text", length=65535, nullable=true)
     */
    private $cif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_act", type="string", length=200, nullable=true)
     */
    private $urlAct;

    public function getIdComponent(): ?int
    {
        return $this->idComponent;
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

    public function getEspacio(): ?string
    {
        return $this->espacio;
    }

    public function setEspacio(string $espacio): self
    {
        $this->espacio = $espacio;

        return $this;
    }

    public function getVersion(): ?\DateTimeInterface
    {
        return $this->version;
    }

    public function setVersion(\DateTimeInterface $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getEstructura(): ?string
    {
        return $this->estructura;
    }

    public function setEstructura(?string $estructura): self
    {
        $this->estructura = $estructura;

        return $this;
    }

    public function getCif(): ?string
    {
        return $this->cif;
    }

    public function setCif(?string $cif): self
    {
        $this->cif = $cif;

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

    public function getUrlAct(): ?string
    {
        return $this->urlAct;
    }

    public function setUrlAct(?string $urlAct): self
    {
        $this->urlAct = $urlAct;

        return $this;
    }


}
