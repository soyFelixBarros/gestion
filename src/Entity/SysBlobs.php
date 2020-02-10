<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysBlobs
 *
 * @ORM\Table(name="sys_blobs")
 * @ORM\Entity
 */
class SysBlobs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_blob", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBlob;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="blob", length=0, nullable=true)
     */
    private $imagen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;


}
