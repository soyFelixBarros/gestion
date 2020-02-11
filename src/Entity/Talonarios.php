<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Talonarios
 *
 * @ORM\Table(name="talonarios")
 * @ORM\Entity
 */
class Talonarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_talonario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTalonario;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_comprob", type="string", length=50, nullable=false)
     */
    private $tipoComprob;

    /**
     * @var bool
     *
     * @ORM\Column(name="pv", type="boolean", nullable=false)
     */
    private $pv;

    /**
     * @var int
     *
     * @ORM\Column(name="desde", type="integer", nullable=false)
     */
    private $desde;

    /**
     * @var int
     *
     * @ORM\Column(name="hasta", type="integer", nullable=false)
     */
    private $hasta;

    /**
     * @var int
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    public function getIdTalonario(): ?int
    {
        return $this->idTalonario;
    }

    public function getTipoComprob(): ?string
    {
        return $this->tipoComprob;
    }

    public function setTipoComprob(string $tipoComprob): self
    {
        $this->tipoComprob = $tipoComprob;

        return $this;
    }

    public function getPv(): ?bool
    {
        return $this->pv;
    }

    public function setPv(bool $pv): self
    {
        $this->pv = $pv;

        return $this;
    }

    public function getDesde(): ?int
    {
        return $this->desde;
    }

    public function setDesde(int $desde): self
    {
        $this->desde = $desde;

        return $this;
    }

    public function getHasta(): ?int
    {
        return $this->hasta;
    }

    public function setHasta(int $hasta): self
    {
        $this->hasta = $hasta;

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


}
