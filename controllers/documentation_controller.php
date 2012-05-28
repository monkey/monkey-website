<?php

class DocumentationController extends AppController {
	var $name = 'Documentation';
	var $helpers = array('Html');
	var $uses = array();

	function index(){
	}

        function installation() {
          $this->pageTitle = 'Installation';
        }

        function ipv6() {
          $this->pageTitle = 'IPv6';
        }

        function basic_authentication() {
          $this->pageTitle = 'Basic Authentication';
        }

        function cheetah_shell() {
          $this->pageTitle = 'Cheetah! Shell';
        }

        function debian_ubuntu() {
          $this->pageTitle = 'Debian & Ubuntu packages';
        }

        function mandril() {
          $this->pageTitle = 'Mandril Security';
        }

        function beforeFilter() {
          parent::beforeFilter();

          if ($this->action != "index") {
            $this->layout = "documentation";
          }
	}

        function beforeRender() {
          $this->set('title_for_layout', $this->pageTitle);
        }
}

?>
