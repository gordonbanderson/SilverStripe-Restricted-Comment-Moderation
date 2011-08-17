<?php
//Ensure that the comment only appears if the Page in question is editable by the logged in user
Object::add_extension('PageComment', 'RestrictedModerationPageComment');
Object::useCustomClass('CommentTableField_Item', 'RestrictedCommentTableField_Item');

?>
