<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticulosCodigos
 *
 * @ORM\Table(name="articulos_codigos", indexes={@ORM\Index(name="articulos_codigos_id_proveedor", columns={"id_proveedor"})})
 * @ORM\Entity
 */
class ArticulosCodigos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_codigo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCodigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
     */
    private $nombre;

    /**
     * @var \Personas
     *
     * @ORM\ManyToOne(targetEntity="Personas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proveedor", referencedColumnName="id_persona")
     * })
     */
    private $idProveedor;


}
