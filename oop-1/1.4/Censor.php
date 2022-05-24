<?php

namespace WPTT\Oop\Censor;

class Censor
{
	public function censor($message)
	{
		return $message . ' - процензурировано';
	}
}