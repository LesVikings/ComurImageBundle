<?php

namespace Comur\ImageBundle\Naming;

interface NamerInterface
{
    public function name ( string $inputName )
    : string;
}
