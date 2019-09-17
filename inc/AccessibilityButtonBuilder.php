<?php

namespace ScorpioTek\WordPress\Accessibility;

class AccessibilityButtonBuilder {

    public function __construct() {
        return 'ButtonBuilder created!';
    }

    public function display_default_text_button() {
        return '<h1>display_default_text_button</h1>';
    }

    public function display_increase_font_size_button() {
        return '<h1>display_increase_font_size_button</h1>';
    }

    public function display_toggle_dyslexic_font_button() {
        return '<h1>display_toggle_dyslexic_font_button</h1>';
    }

    public function display_toggle_contrast_button() {
        return 'display_toggle_contrast_button invoked!';
    }

}