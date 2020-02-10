<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paises
 *
 * @ORM\Table(name="paises", indexes={@ORM\Index(name="paises_clavejur", columns={"clavejur"}), @ORM\Index(name="paises_id_moneda", columns={"id_moneda"}), @ORM\Index(name="paises_claveban", columns={"claveban"}), @ORM\Index(name="paises_clavefis", columns={"clavefis"})})
 * @ORM\Entity
 */
class Paises
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_pais", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPais;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="iso", type="string", length=50, nullable=false)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="iva1", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $iva1 = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="iva2", type="decimal", precision=14, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $iva2 = '0.0000';

    /**
     * @var \TipoDoc
     *
     * @ORM\ManyToOne(targetEntity="TipoDoc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="claveban", referencedColumnName="id_tipo_doc")
     * })
     */
    private $claveban;

    /**
     * @var \TipoDoc
     *
     * @ORM\ManyToOne(targetEntity="TipoDoc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clavefis", referencedColumnName="id_tipo_doc")
     * })
     */
    private $clavefis;

    /**
     * @var \TipoDoc
     *
     * @ORM\ManyToOne(targetEntity="TipoDoc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clavejur", referencedColumnName="id_tipo_doc")
     * })
     */
    private $clavejur;

    /**
     * @var \Monedas
     *
     * @ORM\ManyToOne(targetEntity="Monedas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_moneda", referencedColumnName="id_moneda")
     * })
     */
    private $idMoneda;


}
