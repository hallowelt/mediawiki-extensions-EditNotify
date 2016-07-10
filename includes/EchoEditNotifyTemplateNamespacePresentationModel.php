<?php


class EchoEditNotifyTemplateNamespacePresentationModel extends EchoEventPresentationModel {
	public function getIconType() {
		return 'placeholder';
	}
	public function getPrimaryLink() {
		return array(
		    'url' => $this->event->getExtraParam( 'title' ),
		    'label' => $this->msg( 'editnotify-page-edit-view' )->text(),
		);
	}

	public function getHeaderMessage() {
		$msg = parent::getHeaderMessage();
		$msg->params( $this->event->getExtraParam( 'field-name' ) );
		$msg->params( $this->event->getExtraParam( 'existing-field-value' ) );
		$msg->params( $this->event->getExtraParam( 'new-field-value' ) );
		$msg->params( $this->event->getExtraParam( 'template' ) );
		$msg->params( $this->event->getExtraParam( 'title' ) );
		$msg->params( $this->event->getExtraParam( 'change' ) );
		return $msg;
	}

}

