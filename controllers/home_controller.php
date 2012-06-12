<?php

class HomeController extends AppController {
	var $helpers = array('Html');
	var $components = array('Feed');
	var $uses = array();

        function testcss() {}

	function index(){
          $mode = 0; /* Production = 1 ; Development = 0; */

          /* news */
          $url = "http://blog.monkey-project.com/?feed=rss";

          if ($mode) {
            $items = $this->Feed->feed($url);
            $this->set('blog_feeds', $items);
          }
          else {
            $this->set('blog_feeds', array());
          }


          /* dev branch */
          //$url = "http://git.monkey-project.com/?p=monkey;a=rss;h=refs/heads/v0.12.0-dev";
          $url = "http://git.monkey-project.com/?p=monkey;a=rss";
          if ($mode) {
            $items = $this->Feed->feed($url);
            $this->set('git_feeds', $items);
          }
          else {
            $this->set('git_feeds', array());
          }


          /* mailing list */
          $url = "http://monkey-project.com/~edsiper/monkey.xml";
          if ($mode) {
            $ml_items = $this->Feed->feed($url);
            $this->set('ml_feeds', $ml_items);
          }
          else {
            $this->set('ml_feeds', array());
          }

	}

	function about(){
	}

	function downloads(){

	}

	function community(){
	}

	function documentation(){
	}

	function developers(){
	}

	function maintainance(){
	}

	function donate(){
	}

        function embedded(){
        }

        function encuentrolinux() {
        }
}

?>
