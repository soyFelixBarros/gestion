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


}
