# SilverStripe Restricted Comment Moderation

By default, comments are not correctly restricted from an editing perspective, allowing editors with restricted edit permissions (e.g. just their own blog) to be able to moderate comments for another page or blog.  This module remedies that by checking for the canEdit permission prior to adding the buttons in the table listing in the Comment Admin section.

## Installation

    git clone git://github.com/gordonbanderson/SilverStripe-Restricted-Comment-Moderation.git silverstripe-restricted-comment-moderation

Change the name of the directory checked out into to whatever you want, there are no dependencies.

#TODO
Restrict the listing so that only comments you can edit are shown.  Currently all will be shown, but you can only edit those you have rights to edit.