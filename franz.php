<?php
class Yellowfranz {
    const VERSION = "0.1.1";
    public $yellow;         // access to API

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $output = null;
        if ($name=="franz" && ($type=="inline")) {
            $output = "&raquo;$text&laquo;";
        }
        return $output;
    }
}