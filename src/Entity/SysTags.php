<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysTags
 *
 * @ORM\Table(name="sys_tags")
 * @ORM\Entity
 */
class SysTags
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_tag", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTag;

    /**
     * @var string
     *
     * @ORM\Column(name="tablename", type="string", length=200, nullable=false)
     */
    private $tablename;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldname", type="string", length=200, nullable=false)
     */
    private $fieldname;

    /**
     * @var string
     *
     * @ORM\Column(name="fieldtype", type="string", length=50, nullable=false, options={"default"="varchar"})
     */
    private $fieldtype = 'varchar';

    /**
     * @var string|null
     *
     * @ORM\Column(name="inputtype", type="string", length=50, nullable=true)
     */
    private $inputtype;

    /**
     * @var bool
     *
     * @ORM\Column(name="fieldnullable", type="boolean", nullable=false)
     */
    private $fieldnullable;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fielddefault", type="text", length=65535, nullable=true)
     */
    private $fielddefault;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=200, nullable=false)
     */
    private $label;

    /**
     * @var bool
     *
     * @ORM\Column(name="internal", type="boolean", nullable=false)
     */
    private $internal;

    /**
     * @var int
     *
     * @ORM\Column(name="access", type="integer", nullable=false)
     */
    private $access;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extra", type="text", length=65535, nullable=true)
     */
    private $extra;

    public function getIdTag(): ?int
    {
        return $this->idTag;
    }

    public function getTablename(): ?string
    {
        return $this->tablename;
    }

    public function setTablename(string $tablename): self
    {
        $this->tablename = $tablename;

        return $this;
    }

    public function getFieldname(): ?string
    {
        return $this->fieldname;
    }

    public function setFieldname(string $fieldname): self
    {
        $this->fieldname = $fieldname;

        return $this;
    }

    public function getFieldtype(): ?string
    {
        return $this->fieldtype;
    }

    public function setFieldtype(string $fieldtype): self
    {
        $this->fieldtype = $fieldtype;

        return $this;
    }

    public function getInputtype(): ?string
    {
        return $this->inputtype;
    }

    public function setInputtype(?string $inputtype): self
    {
        $this->inputtype = $inputtype;

        return $this;
    }

    public function getFieldnullable(): ?bool
    {
        return $this->fieldnullable;
    }

    public function setFieldnullable(bool $fieldnullable): self
    {
        $this->fieldnullable = $fieldnullable;

        return $this;
    }

    public function getFielddefault(): ?string
    {
        return $this->fielddefault;
    }

    public function setFielddefault(?string $fielddefault): self
    {
        $this->fielddefault = $fielddefault;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getInternal(): ?bool
    {
        return $this->internal;
    }

    public function setInternal(bool $internal): self
    {
        $this->internal = $internal;

        return $this;
    }

    public function getAccess(): ?int
    {
        return $this->access;
    }

    public function setAccess(int $access): self
    {
        $this->access = $access;

        return $this;
    }

    public function getExtra(): ?string
    {
        return $this->extra;
    }

    public function setExtra(?string $extra): self
    {
        $this->extra = $extra;

        return $this;
    }


}
