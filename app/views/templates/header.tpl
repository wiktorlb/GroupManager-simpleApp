{extends file="main.tpl"}

{block name="headerA"}
<header>
	<div id="navbar" class="sidenav">
		<div class="sidenav_profile">
			<img src="{$conf->app_url}/images/myLogo.png" alt="alternatetext" class="logo_pic">
			<a href="#" class="profile_welcome">
				Welcome
				$userName
			</a>
		</div>
		<div class="sidenav_actions">
			<a href="#">Profile</a>
			<a href="#">Classes</a>
			<a href="{$conf->action_root}logout">Log Out</a>
		</div>
	  </div>
</header>
{/block}