<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysComments
 *
 * @ORM\Table(name="sys_comments", indexes={@ORM\Index(name="sys_comments_id_persona", columns={"id_persona"})})
 * @ORM\Entity
 */
class SysComments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comment", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComment;

    /**
     * @var string
     *
     * @ORM\Column(name="tablas", type="string", length=200, nullable=false)
     */
    private $tablas;

    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     */
    private $itemId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="obs", type="text", length=65535, nullable=true)
     */
    private $obs;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_persona", referencedColumnName="id_persona")
     * })
     */
    private $idPersona;

    public function getIdComment(): ?int
    {
        return $this->idComment;
    }

    public function getTablas(): ?string
    {
        return $this->tablas;
    }

    public function setTablas(string $tablas): self
    {
        $this->tablas = $tablas;

        return $this;
    }

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function setItemId(int $itemId): self
    {
        $this->itemId = $itemId;

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

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(?string $obs): self
    {
        $this->obs = $obs;

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
