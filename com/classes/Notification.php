<?php
namespace sgpb;

class Notification
{
	public $id;
	public $type;// notification, warning etc.
	public $priority;
	public $message;

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setType($type)
	{
		$this->type = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	public function setPriority($priority)
	{
		$this->priority = $priority;
	}

	public function getPriority()
	{
		return $this->priority;
	}

	public function setMessage($message)
	{
		$this->message = $message;
	}

	public function getMessage()
	{
		return $this->message;
	}

	public function render()
	{
		$id = $this->getId();
		$type = $this->getType();
		$priority = $this->getPriority();
		$message = $this->getMessage();
		$btnHtml = $this->getCloseBtnById($id);
		$content = '<div class="sgpb-single-notification-wrapper">
						<div class="sgpb-single-notification">'.$message.'</div>
						<div class="sgpb-single-notification-close-btn">
							'.$btnHtml.'
						</div>
					</div>';

		return $content;
	}

	public function getCloseBtnById($id)
	{
		$dismissedNotification = SGPBNotificationCenter::getAllDismissedNotifications();
		return '<button data-id="'.$id.'" class="button dismiss sgpb-dismiss-notification-js"><span class="dashicons dashicons-no-alt"></span></button>';
	}
}
