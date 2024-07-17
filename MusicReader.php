<?php

require_once(__DIR__.'/UnknownExtensionException.php');

class MusicReader
{
    private $musicType;

    public function __construct(MusicType $musicType)
    {
        $this->musicType = $musicType;

        $extension = pathinfo($this->musicType->getFilename(), PATHINFO_EXTENSION);
        
        if (empty($extension)) {
            throw new UnknownExtensionException();
        }
    }

    public function listen()
    {
        return $this->musicType->listen();
    }
}