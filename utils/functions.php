<?php
    declare(strict_types=1);

    function get_data(string $url) {
        $response = file_get_contents($url);
        return json_decode($response, true);
    }

    function message(int $age): string {
        return match(true) {
            $age < 18 => "You are a minor",
            $age >= 18 && $age < 65 => "You are an adult",
            $age >= 65 => "You are a senior",
            default => "I don't know what you are"
        };
    }

    function render_template(string $template, $data): void {
        extract($data);
        require "$template";
    }
?>