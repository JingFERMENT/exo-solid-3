<?php 

interface MusicTypeInterface {

    public function getFilename() : string;
    
    /**
     * @throws InvalidFileExeption
     */
    public function listen(): string;
}