<?php

namespace Magecart\Restfulapi\Api;

interface StatusInterface
{
	/**
	 * @param string $statusId of the param.
	 * @return mixed|string of the param Value.
	 */
	public function statuslist($statusId);
}