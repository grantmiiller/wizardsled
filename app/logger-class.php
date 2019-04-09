<?php
// Thanks to https://www.netsparker.com/blog/web-security/untrusted-data-unserialize-php/
// for the logger class 
class Logger {
  public $filename, $last_log;

  public function __construct() {
    $this->filename = "../logs/log-" . date('m-d-y') . ".log";
    $this->last_log = "";
    $this->create_log($this->filename);
    $this->add_action("Begin Logging");
  }

  public function add_action($action) {
    $this->last_log = $action;
    file_put_contents($this->filename, $action . "\n", FILE_APPEND);
  }

  private function create_log($filename) {
    if(!file_exists($filename)) {
      touch($filename);
    }
  }

  public function __wakeup() {
    $this->create_log($this->filename);
    $this->add_action("Resume logging, last log was: " . $this->last_log);
  }
}

?>
