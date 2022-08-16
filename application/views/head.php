
<header id="header">
<?php 

$d=$this->session->get_userdata();

	?>
				<div class="inner">
				<?php if(isset($d['id'])){?><p class="logo"><?php echo 'Hi '.$d['name'].', this is ';?>Jugaad</p><?php }?>
				<?php if(!isset($d['id'])){?><p class="logo">Jugaad</p><?php }?>
				
					<nav id="nav">
						<?php echo anchor("users/index","Home")?>
						<?php echo anchor("users/sell","Sell")?>
						<?php if(!isset($d['id'])) echo anchor("users/register","Register")?>
						<?php if(!isset($d['id']))echo anchor("users/login","Login")?>
						<?php if(isset($d['id']))echo anchor("users/my_add/".$d['id'],"My Advs")?>
						<?php echo anchor("users/about","About us")?>
						
						
						<?php if(isset($d['id'])) echo anchor("users/logout","Logout")?>
						
						
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header> 