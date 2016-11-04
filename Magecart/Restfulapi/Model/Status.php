<?php

namespace Magecart\Restfulapi\Model;
use Magecart\Restfulapi\Api\StatusInterface;

class Status implements StatusInterface
{

	/**
	 * @param $statusId
	 * @return mixed|string of the param Value.
	 */
	public function statuslist($statusId)
	{
		$objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$orderStatusCollection = $objectManager->create('Magento\Sales\Model\Order\Status')->getCollection();

		$orderStatus = array();
		foreach($orderStatusCollection as $status){
			$orderStatus[] = $status->getData();
		}
		return $orderStatus;
	}
}