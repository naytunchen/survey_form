<?php
/*
 * Template Class
 * Creates a templage/view object
 */
class Template {
    // Path to template
    protected $template;

    // Variables passed in
    protected $vars = array();

    /*
     * Class Constructor
     */
    public function __construct($template) {
        $this->template = $template;
    }

    /*
     * Get template variables
     */
    public function __get($key) {
        return $this->vars[$keys];
    }

    /*
     * Set template variables
     */
    public function __set($key, $value) {
        $this->vars[$key] = $value;
    }

    /*
     * Convert Object to String
     */
    public function __toString() {
        extract($this->vars); // get our template variable
        chdir(dirname($this->template)); //
        ob_start(); // turn into output buffering

        include basename($this->template); // this will include the template into our file for us
        return ob_get_clean();
    }
}
