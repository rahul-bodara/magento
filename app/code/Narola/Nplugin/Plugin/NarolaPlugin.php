<?php

namespace Narola\Nplugin\Plugin;

class NarolaPlugin
{

	public function beforeSetTitle(\Narola\Nplugin\Controller\Index\Exampleplugin $subject, $title)
	{
		$title = $title . " to ";
		echo __METHOD__ . "</br>";

		return [$title];
	}
	public function afterGetTitle(\Narola\Nplugin\Controller\Index\Example $subject, $result)
	{

		echo __METHOD__ . "</br>";

		return '<h1>'. $result .'</h1>';

	}
	public function aroundGetTitle(\Narola\Nplugin\Controller\Index\Example $subject, callable $proceed)
	{

		echo __METHOD__ . " - Before proceed() </br>";
		 $result = $proceed();
		echo __METHOD__ . " - After proceed() </br>";


		return $result;
	}

}