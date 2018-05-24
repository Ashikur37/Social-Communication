<div style="font-size: 150%;">
<?php
		echo "<ul>";
		foreach($frnd  as $f)
	{		echo "<li>";
			echo "<a href='".base_url()."Home_controler"."/profile_view?id=".$f['id']."'>".$f['user_name']."</a>";
			echo "</li>";
			
	}
	echo "</ul>";
?>
</div>