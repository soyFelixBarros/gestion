<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComprobImagenes
 *
 * @ORM\Table(name="comprob_imagenes")
 * @ORM\Entity
 */
class ComprobImagenes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_comprob", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComprob = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen", type="blob", length=0, nullable=true)
     */
    private $imagen;

    public function getIdComprob(): ?int
    {
        return $this->idComprob;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen): self
    {
        $this->imagen = $imagen;

        return $this;
    }


}
