<?php

namespace osa\modulemaker\Model;

use Pagekit\Database\ORM\ModelTrait;

// targetEntity: The target model class
// keyFrom: foreign key in this table pointing to the related model
// keyTo: primary key in the related model

/**
 * @Entity(tableClass="@osa_questions")
 */
class Topic
{

    use ModelTrait;

    /** @Column(type="integer") @Id */
    public $id;

    /** @Column(type="integer") */
    public $module_id;

    /**
     * @BelongsTo(targetEntity="Pagekit\User\Model\User", keyFrom="module_id")
     */
    public $module;

    /** @Column(type="text") */
    public $text = '';

    /** @Column(type="integer") */
    public $order;

    /** @Column(type="json") @Id */
    public $options;

    /** @Column(type="json") @Id */
    public $data;

    /** @Column(type="datetime") */
    public $createt_at;

    /** @Column(type="datetime") */
    public $modified_at;

    /**
     * @BelongsTo(targetEntity="Pagekit\User\Model\User", keyFrom="user_id")
     */
    public $user;

}
