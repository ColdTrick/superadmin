<?php
	
?>
<p>
	<?php echo elgg_echo('superadmin:admin:deleteuser'); ?>
	<select name="params[deleteuser]">
		<option value="yes" <?php if ($vars['entity']->deleteuser == 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:yes'); ?></option>
		<option value="no" <?php if ($vars['entity']->deleteuser != 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:no'); ?></option>
	</select>
</p>
<p>
	<?php echo elgg_echo('superadmin:admin:makeadmin'); ?>
	<select name="params[makeadmin]">
		<option value="yes" <?php if ($vars['entity']->makeadmin == 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:yes'); ?></option>
		<option value="no" <?php if ($vars['entity']->makeadmin != 'yes') echo " selected=\"yes\" "; ?>><?php echo elgg_echo('option:no'); ?></option>
	</select>
</p>