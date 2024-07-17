<?php

class UnknownExtensionException extends InvalidFileException
{

    public function __construct()
    {
        $message = 'Les fichiers sans extension ne sont pas acceptés.';

        parent::__construct($message);
    }
}