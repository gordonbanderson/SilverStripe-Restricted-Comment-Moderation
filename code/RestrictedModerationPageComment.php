<?php

class RestrictedModerationPageComment extends DataObjectDecorator {

	// check that the user has access to the comment admin, and that he can edit the Page that the
	// comments are a child of
	public function canEdit($member) {
		if(!$this->owner->canView($member)) return false;
		if(!$member) $member = Member::currentUser();
		$canEditParent = $this->owner->Parent()->canEdit($member);
		$result = (bool)Permission::checkMember($member, 'CMS_ACCESS_CommentAdmin') && $canEditParent;		
		return $result;
	}

}

?>