<?php

namespace Cliente\Controller;

abstract class RenderFile {
    public function render(string $file, string $titulo, array $data) {
        require __DIR__ . "/../View/$file.php";
    }
}