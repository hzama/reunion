<?php
class ErrorHandler{
	public function __construct(){	
		$connector = PhpConsole\Connector::getInstance();
		//$connector->setPassword('sp4rt4n0', true);
        $handler = PhpConsole\Handler::getInstance();
        $handler->start(); // initialize handlers
	}
}