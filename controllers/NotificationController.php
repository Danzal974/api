<?php
class NotificationController extends ApiController {
  

	protected function beforeAction($action) {
	    parent::initPage();
	    return parent::beforeAction($action);
	}

	public function actions()
	{
	    return array(
	        'getnotifications'    		=> 'citizenToolKit.controllers.notification.GetAction',
	        'marknotificationasread'    => 'citizenToolKit.controllers.notification.RemoveAction',
	        'markallnotificationasread' => 'citizenToolKit.controllers.notification.RemoveAllAction'
	    );
	}
}