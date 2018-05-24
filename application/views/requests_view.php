<div style="font-size: 150%;">
<?php
		echo "<ul>";
		foreach($frnd  as $f)
	{		echo "<li>";
			echo "<a href='".base_url()."Home_controler"."/profile_view?id=".$f['id']."'>".$f['user_name']."</a>";
			echo "<span style='color:green; margin-left:10px;'><a href='".base_url()."Home_controler"."/accept_request?id=".$f['id']."'>Accept</a></span>";
			echo "<span style='color:green; margin-left:10px;'><a href='".base_url()."Home_controler"."/cancel_request?id=".$f['id']."'>Cancel</a></span>";
			//echo "<a href='".base_url()."Home_controler"."/cancelFriend?id=".$f['id']."'>".Cancel."</a>";
			echo "</li>";
	}
	echo "</ul>";
?>
</div>