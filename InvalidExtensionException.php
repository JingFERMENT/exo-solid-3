<?php

require_once(__DIR__.'/InvalidFileException.php');

class InvalidExtensionException extends InvalidFileException
{
    public function __construct($expected, $received)
    {
        // replace the reserved place by string characters
        $message = sprintf('Le fichier %s est attendu, 
        merci de corriger ce fichier avec l\'extension %s.', $expected, $received);

        parent::__construct($message);
    }
}