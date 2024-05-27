{extends file="main.tpl"}

{block name=loginForm}
<form action="{$conf->action_root}login" method="post" class="pure-form pure-form-aligned bottom-margin loginForm">
	<fieldset>
        <div class="pure-control-group">
			<label for="id_user">login: </label>
			<input id="id_user" type="text" name="id_user" value="{$form->login}"/>
		</div>
        <div class="pure-control-group">
			<label for="id_pass">password: </label>
			<input id="id_pass" type="password" name="password" /><br />
		</div>
		<div class="pure-controls">
			<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
		</div>
	</fieldset>
</form>
{/block}
