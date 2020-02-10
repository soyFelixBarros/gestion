<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RecibosImagenes
 *
 * @ORM\Table(name="recibos_imagenes")
 * @ORM\Entity
 */
class RecibosImagenes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_recibo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRecibo = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="blob", length=0, nullable=true)
     */
    private $imagen;


}
