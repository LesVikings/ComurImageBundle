<?php

namespace Comur\ImageBundle\Naming;

class SluggerNamer implements NamerInterface, ConfigurableInterface
{
    /**
     * @var \Symfony\Component\String\Slugger\SluggerInterface
     */
    private $slugger;

    /**
     * @var string
     */
    private $separator = '-';

    /**
     * @var string|null
     */
    private $locale = null;

    public function __construct ( \Symfony\Component\String\Slugger\SluggerInterface $slugger )
    {
        $this->slugger = $slugger;
    }

    public function name ( string $inputName )
    : string
    {
        return $this->slugger->slug( $inputName, $this->separator, $this->locale );
    }

    public function configure ( array $options )
    {
        $this->separator = $options['separator'] ?? $this->separator;
        $this->locale    = $options['locale'] ?? $this->locale;
    }
}
