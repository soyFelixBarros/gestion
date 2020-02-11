<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysPermisos
 *
 * @ORM\Table(name="sys_permisos", indexes={@ORM\Index(name="sys_permisos_id_persona", columns={"id_persona"})})
 * @ORM\Entity
 */
class SysPermisos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_permiso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPermiso;

    /**
     * @var int
     *
     * @ORM\Column(name="id_objeto", type="integer", nullable=false)
     */
    private $idObjeto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_persona", type="integer", nullable=false)
     */
    private $idPersona;

    /**
     * @var string|null
     *
     * @ORM\Column(name="items", type="string", length=200, nullable=true)
     */
    private $items;

    /**
     * @var int
     *
     * @ORM\Column(name="ops", type="integer", nullable=false)
     */
    private $ops;

    public function getIdPermiso(): ?int
    {
        return $this->idPermiso;
    }

    public function getIdObjeto(): ?int
    {
        return $this->idObjeto;
    }

    public function setIdObjeto(int $idObjeto): self
    {
        $this->idObjeto = $idObjeto;

        return $this;
    }

    public function getIdPersona(): ?int
    {
        return $this->idPersona;
    }

    public function setIdPersona(int $idPersona): self
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    public function getItems(): ?string
    {
        return $this->items;
    }

    public function setItems(?string $items): self
    {
        $this->items = $items;

        return $this;
    }

    public function getOps(): ?int
    {
        return $this->ops;
    }

    public function setOps(int $ops): self
    {
        $this->ops = $ops;

        return $this;
    }


}
