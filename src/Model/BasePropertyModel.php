<?php

namespace Harcourt\CodeGenerator\Model;

use Harcourt\CodeGenerator\RenderableModel;

/**
 * Class BaseProperty
 * @package Harcourt\CodeGenerator\Model
 */
abstract class BasePropertyModel extends RenderableModel
{
    /**
     * @var string
     */
    protected $name;

    protected $comment;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }
}
