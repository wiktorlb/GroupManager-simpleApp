{extends file="main.tpl"}

{block name=glowna}

    <div id="main">
        <div class="inner">
            <header>
                <h1>Dane użytkownika<br /></h1>

            </header>
            <div style="width:90%; margin: 2em auto;">
                <table id="User_tab" class="pure-table pure-table-bordered">

                    <tbody>
                        {foreach $dane as $d}
                            {strip}
                                <tr><th>imię</th><td>{$d["name"]}</td></tr>
                                <tr><th>Nazwisko</th>  <td>{$d["last_name"]}</td>  </tr>
                                <tr><th>Email</th> <td>{$d["email"]}</td>    </tr>

                                <tr>  <th>Hasło</th>   <td>{$d["password"] }</td>  </tr>
                            {/strip}
                        {/foreach}
                    </tbody>
                </table>


            </div>
        </div>
    </div>
{/block}