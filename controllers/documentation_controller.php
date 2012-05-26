<?php

class DocumentationController extends AppController {
	var $name = 'Documentation';
	var $helpers = array('Html');
	var $uses = array();

	function index(){
	}

        function installation() {
        }

        function ipv6() {
        }

        function basic_authentication() {
        }

        function cheetah_shell() {
        }

        function debian_ubuntu() {
        }

        function beforeFilter() {
          parent::beforeFilter();

          if ($this->action != "index") {
            $this->layout = "documentation";
          }
	}
}

?>
