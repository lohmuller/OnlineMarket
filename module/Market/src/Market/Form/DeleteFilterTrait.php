<?php

namespace Market\Form;


trait DeleteFilterTrait {

    private $deleteFilter;

    /**
     * @param mixed $deleteFilter
     */
    public function setDeleteFilter($deleteFilter)
    {
        $this->deleteFilter = $deleteFilter;
    }
} 