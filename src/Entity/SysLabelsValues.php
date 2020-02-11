<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysLabelsValues
 *
 * @ORM\Table(name="sys_labels_values", indexes={@ORM\Index(name="IDX_44DA25E4E02211D8", columns={"id_label"})})
 * @ORM\Entity
 */
class SysLabelsValues
{
    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemId;

    /**
     * @var \SysLabels
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="SysLabels")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_label", referencedColumnName="id_label")
     * })
     */
    private $idLabel;

    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    public function getIdLabel(): ?SysLabels
    {
        return $this->idLabel;
    }

    public function setIdLabel(?SysLabels $idLabel): self
    {
        $this->idLabel = $idLabel;

        return $this;
    }


}
