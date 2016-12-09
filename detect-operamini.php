<?php

/*

Project: Detect Opera Mini
Description: Ask Opera Mini users to upgrade their browser.
Author: masterpreshy

*/

class Detect_OP {

	public $useragent;

	public function __construct()
	{
		$this->useragent = $_SERVER['HTTP_USER_AGENT'];
	}

	public function check_agent()
	{
		if ( preg_match_all('/Opera Mini/', $this->useragent) ) {

			?>
<style>
    a {
    	text-decoration: none;
    }
    ._unsupported-wrap {
    	padding: 7px;
    	position: fixed;
    	width: 100%;
    	color: #fff;
    	background-color: black;
    	z-index: 99999999;
    	text-align: center;
    	margin: -10px;
    }
    ._unsupported-wrap .img-op {
    	width: 25px;
    	height: 100%;
    	border-radius: 100%;
    }
    </style>


	<div class='_unsupported-wrap'>You are using an unsupported Browser, please upgrade to either: 
	<a href='http://mozilla.org'>
	<img class="img-op" src='http://masterpreshy.com/wp-content/plugins/detect-opera-mini/img/ff.png'/>
	</a>
	<a href='http://google.com/chrome'>
	<img class="img-op" src='http://masterpreshy.com/wp-content/plugins/detect-opera-mini/img/chrome.png'/>
	</a>

	<a href='http://opera.com/mobile'>

	<img class="img-op" src='http://masterpreshy.com/wp-content/plugins/detect-opera-mini/img/operamini.png'/>

	</a>    </div>

<?php

}

}

}

?>