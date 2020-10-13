<?php

namespace Comur\ImageBundle\Naming;


class RandomNamer implements NamerInterface
{
    public function name ( string $inputName )
    : string
    {
        return sha1( uniqid( mt_rand(), true ) );
    }
}
