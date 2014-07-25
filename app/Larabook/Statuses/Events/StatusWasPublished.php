<?php namespace Larabook\Statuses\Events;

class StatusWasPublished
{
	public $body;

	function __construct($body)
	{
		$this->body = $body;
	}
}
