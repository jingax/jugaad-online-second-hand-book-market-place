
		<!-- Header -->
<header id="header">
<?php 

$d=$this->session->get_userdata();

	?>
				<div class="inner">
					<a href="#" class="logo"><?php if(isset($d['id'])) echo 'Hi '.$d['name']; else echo "Jugaad";?> </a>
					<nav id="nav">
						<?php if(!isset($d['id'])) echo anchor("users/register","Register")?>
						<?php if(!isset($d['id'])) echo anchor("users/register","Register")?>
						<?php if(isset($d['id']))echo anchor("users/my_add/".$d['id'],"My Advs")?>
						<?php echo anchor("users/about","About us")?>
						<?php echo anchor("users/contact","Contact")?>
						<?php echo anchor("users/feedback","Feedback")?>
						<?php if(isset($d['id'])) echo anchor("users/logout","Logout")?>
						
						
					</nav>
					<a href="#navPanel" class="navPanelToggle"><form><select>
					<option><span class="fa fa-bars"></span></option>
					<option><?php if(!isset($d['id'])) echo anchor("users/register","Register")?></option>
					<option><?php if(!isset($d['id'])) echo anchor("users/register","Register")?></option>
					<option><?php if(isset($d['id']))echo anchor("users/my_add/".$d['id'],"My Advs")?></option>
					<option><?php echo anchor("users/about","About us")?></option>
					<option><?php echo anchor("users/contact","Contact")?></option>
					<option><?php echo anchor("users/feedback","Feedback")?></option>
					<option><?php if(isset($d['id'])) echo anchor("users/logout","Logout")?></option></select></form>
					</a>
				</div>
			</header> 