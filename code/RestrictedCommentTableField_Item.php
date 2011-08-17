<?php
class RestrictedCommentTableField_Item extends CommentTableField_Item {

	function HasSpamButton() {
		return $this->parent()->HasSpamButton() && $this->item->canEdit(null);
	}
	
	function HasApproveButton() {
		return $this->parent()->HasApproveButton() && $this->item->canEdit(null);
	}
	
	function HasHamButton() {
		return $this->parent()->HasHamButton() && $this->item->canEdit(null);;
	}
}

?>
