<?php

namespace Application\Helper;

use Zend\View\Helper\AbstractHelper;

class LeftLinks extends AbstractHelper
{
    public function __invoke($values, $urlPrefix)
    {
        $output = '<ul class="list-unstyled">';
        foreach($values as $value) {
            $output .= "<li><a href='{$urlPrefix}/{$value}'>" . \ucfirst($value) . "</a></li>";
        }

        return $output . '</ul>' . PHP_EOL;
    }

} 