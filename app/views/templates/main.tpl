<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Dziennik Elektroniczny</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/styleNavbar.css">
	<link rel="stylesheet" href="{$conf->app_url}/css/styleRequest.css">
</head>

{if !isset($user)}
<header>
	<div id="navbar" class="sidenav">
		<img src="{$conf->app_url}/images/myLogo.png" alt="alternatetext" class="logo_pic">
	<div class="sidenav_profile">
		<a href="#" class="profile_welcome">
			Welcome
			$userName
		</a>
	</div>
	<div class="sidenav_actions">
		<a href="#">Classes</a>
		<a href="{$conf->action_root}RequestView">Requests</a>
		<a href="{$conf->action_root}logout">Log Out</a>
	</div>
  </div>
</header>
{else}
<header>
	<div class="sidenav" style="display: flex; justify-content: center; background-color: transparent;">
		<img src="{$conf->app_url}/images/myLogo.png" alt="alternatetext" class="logo_pic">
	</div>
</header>
{/if}
<body>
	<div class="request_wrapper">
        <div class="request_title-wrapper">
			<div class="request_title">
				$requestTitle
			</div>
		</div>
		<div class="request_main">
        	<div class="requester_name">
				$requesterName
			</div>
			<div class="request_text">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.
				Soluta, voluptas? Temporibus vitae culpa voluptates dolorem quod eveniet autem odio distinctio,
				eum aut laborum aliquid ipsa placeat dolore nesciunt error repellat.
			</div>
		</div>
		<div class="request_buttons">
			<input type="submit" value="accept" class="pure-button pure-button-primary"/>
			<input type="submit" value="decline" class="pure-button pure-button-primary"/>
		</div>
    </div>


{block name=loginForm}{/block}


{block name=footerA}{/block}

	<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
	<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
	<script src="{$conf->app_url}/assets/js/util.js"></script>
	<script src="{$conf->app_url}/assets/js/main.js"></script>

</body>


</html>