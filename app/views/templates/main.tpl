<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="utf-8"/>
	<title>Dziennik Elektroniczny</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
		integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<link rel="stylesheet" href="{$conf->app_url}/css/style.css">
</head>



<body>
	<div id="wrapper">
		<nav id="menu">
			<h2>Menu</h2>
			<ul>
				{if !isset($user)}
				<li><a href="{$conf->action_root}login">Log In</a></li>
				{else}
				<li><a href="{$conf->action_root}logout">Log Out</a></li>
				{/if}
			</ul>
		</nav>
		</div>
				{block name=top} {/block}


					{block name=messages}

						{if $msgs->isMessage()}
						<div class="messages bottom-margin">
							<ul>
							{foreach $msgs->getMessages() as $msg}
							{strip}
								<li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if}">{$msg->text}</li>
							{/strip}
							{/foreach}
							</ul>
						</div>
						{/if}

						{/block}
    {block name=footer} {/block}




	<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
	<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
	<script src="{$conf->app_url}/assets/js/util.js"></script>
	<script src="{$conf->app_url}/assets/js/main.js"></script>

</body>

</html>