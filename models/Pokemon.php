<?php

class Pokemon {
    public function __construct(
        private string $name,
        private string $sprite,
        private array $abilities
    )
    {
        
    }

    public function get_data() {
        return get_object_vars($this);
    }

    public static function fetch_and_create_pokemon(string $URI): Pokemon {
        
        $response = file_get_contents($URI);
        $data = json_decode($response, true);

        $name = $data["species"]["name"];
        $sprite = $data["sprites"]["front_default"];
        $abilities = $data["abilities"];

        return new self($name, $sprite, $abilities);
    }
}