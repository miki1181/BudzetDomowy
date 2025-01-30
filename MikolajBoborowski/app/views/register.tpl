{extends file="main.tpl"}


{block name="title"}Rejestracja{/block}

{block name="content"}
    <h1>Rejestracja</h1>

    {foreach $msgs->getMessages() as $msg}
        <div class="alert 
                    {if $msg->isInfo()}alert-success{/if}
                    {if $msg->isWarning()}alert-warning{/if}
                    {if $msg->isError()}alert-danger{/if}" role="alert">
            {$msg->text}
        </div>
    {/foreach}

    <form method="POST">
        <label>Email: <input type="email" name="email" value="{$email|escape}" required></label><br>
        <label>Hasło: <input type="password" name="password" required></label><br>
        <label>Powtórz hasło: <input type="password" name="confirm_password" required></label><br>
        <button type="submit">Zarejestruj się</button>
    </form>
{/block}