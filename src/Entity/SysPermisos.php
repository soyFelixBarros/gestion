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


}
