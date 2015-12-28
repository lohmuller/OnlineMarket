<?php

namespace Market\Form;


trait DeleteFormTrait {

    private $deleteForm;

    /**
     * @param mixed $deleteForm
     */
    public function setDeleteForm($deleteForm)
    {
        $this->deleteForm = $deleteForm;
    }
} 