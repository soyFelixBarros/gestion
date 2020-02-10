<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConsultasParametros
 *
 * @ORM\Table(name="consultas_parametros", indexes={@ORM\Index(name="consultas_parametros_id_consulta", columns={"id_consulta"})})
 * @ORM\Entity
 */
class ConsultasParametros
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_parametro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParametro;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=200, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="variable", type="string", length=50, nullable=false)
     */
    private $variable;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoentrada", type="string", length=50, nullable=false)
     */
    private $tipoentrada;

    /**
     * @var bool
     *
     * @ORM\Column(name="orden", type="boolean", nullable=false)
     */
    private $orden = '0';

    /**
     * @var \Consultas
     *
     * @ORM\ManyToOne(targetEntity="Consultas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_consulta", referencedColumnName="id_consulta")
     * })
     */
    private $idConsulta;


}
