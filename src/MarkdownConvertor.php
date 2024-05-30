<?php

namespace MarkdownConvertor;

use Parsedown;

class MarkdownConvertor {
    protected $parsedown;

    public function __construct() {
        $this->parsedown = new Parsedown();
    }

    public function convert($markdownText) {
        return $this->parsedown->text($markdownText);
    }
}
