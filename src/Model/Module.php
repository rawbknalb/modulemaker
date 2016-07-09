<?php

namespace Osa\ModuleMaker\Model;

use Pagekit\Database\ORM\ModelTrait;

// targetEntity: The target model class
// keyFrom: foreign key in this table pointing to the related model
// keyTo: primary key in the related model

/**
 * @Entity(tableClass="@osa_modules")
 */
class Module
{

    use ModelTrait;

    /** @Column(type="integer") @Id */
    public $id;

    /** @Column(type="string") */
    public $title;

    /** @Column(type="integer") */
    public $roles;

    /** @Column(type="datetime") */
    public $createt_at;

    /** @Column(type="datetime") */
    public $modified_at;


}
