<?php
	/**
	 * Make another user an superadmin.
	 */

	// block non-admin users
	admin_gatekeeper();
	action_gatekeeper();
	
	// Get the user 
	$guid = get_input('guid');
	$obj = get_entity($guid);
	
	if(($obj instanceof ElggUser) && ($obj->canEdit())){
		$obj->superadmin = 'yes';
		system_message(elgg_echo('superadmin:actions:makesuperadmin:success'));
	} else {
		register_error(elgg_echo('superadmin:actions:makesuperadmin:error'));
	}
	
	forward($_SERVER['HTTP_REFERER']);

?>