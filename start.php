<?php 

	// block access to pg/admin/*
	// add admin option on user pulldown to make superadmin 

	// init
	function superadmin_init(){
		
		if(!issuperadminloggedin()){
			register_page_handler('admin','superadmin_page_handler');
		}
	}
	
	function superadmin_page_handler(){
		register_error(elgg_echo('superadmin:onlyforsuperadmins'));
		forward($_SERVER['HTTP_REFERER']);
	}
	
	function issuperadminloggedin(){
		$result = false;
		
		if(isadminloggedin()){
			$user = get_loggedin_user();
			if($user->superadmin == "yes"){
				$result = true;
			} elseif($user->admin == 1) {
				$result = true;
			}
		}
		return $result;
	}

	// Default event handlers for plugin functionality
	register_elgg_event_handler('init', 'system', 'superadmin_init');
	
	// admin only actions
	register_action("superadmin/makesuperadmin", false, $CONFIG->pluginspath . "superadmin/actions/makesuperadmin.php", true);
	register_action("superadmin/removesuperadmin", false, $CONFIG->pluginspath . "superadmin/actions/removesuperadmin.php", true);
?>