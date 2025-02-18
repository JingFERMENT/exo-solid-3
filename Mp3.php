<?php

require_once (__DIR__.'/MusicType.php');
require_once (__DIR__.'/InvalidExtensionException.php');

class Mp3 extends MusicType
{
    public function listen(): string
    {
        $extension = pathinfo($this->filename, PATHINFO_EXTENSION);
        if ($extension !== 'mp3') {
            throw new InvalidExtensionException('Mp3', $extension);
        }

        return 'Lecture du fichier Mp3 ' . $this->filename;
    }

    public function getFilename(): string {
        return $this->filename;
    }
}
