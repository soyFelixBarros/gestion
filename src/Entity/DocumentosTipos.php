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


}
