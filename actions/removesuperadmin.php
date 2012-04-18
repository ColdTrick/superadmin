<?php
	/**
	 * UnMake another user an admin.
	 */
	
	// block non-admin users
	admin_gatekeeper();
	action_gatekeeper();
	
	// Get the user 
	$guid = get_input('guid');
	$obj = get_entity($guid);
	
	if(($obj instanceof ElggUser) && ($obj->canEdit())){
		$obj->superadmin = '';
		system_message(elgg_echo('superadmin:actions:removesuperadmin:success'));
	} else {
		register_error(elgg_echo('superadmin:actions:removesuperadmin:error'));
	}
	
	forward($_SERVER['HTTP_REFERER']);

?>