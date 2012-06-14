<?php

class BenchmarksController extends AppController {
	var $name = 'Benchmarks';
	var $helpers = array('Html');
	var $uses = array();

	function index(){
	}

        function installation() {
          $this->pageTitle = 'Installation';
        }

        function raspberry_pi_monkey_nginx() {
          $this->pageTitle = 'Raspberry Pi: Monkey v/s NginX';
        }

        function raspberry_pi_monkey_busybox() {
          $this->pageTitle = 'Raspberry Pi: Monkey v/s BusyBox';
        }

        function beforeRender() {
          $this->set('title_for_layout', $this->pageTitle);
        }
}

?>
