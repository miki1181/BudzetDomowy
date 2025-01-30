{extends file="main.tpl"}

{block name="title"}Zarządzanie użytkownikami{/block}

{block name="content"}
    <h1>Zarządzanie użytkownikami</h1>

    {foreach $msgs->getMessages() as $msg}
        <div class="alert 
                    {if $msg->isInfo()}alert-success{/if}
                    {if $msg->isWarning()}alert-warning{/if}
                    {if $msg->isError()}alert-danger{/if}" role="alert">
            {$msg->text}
        </div>
    {/foreach}

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Email</th>
                <th>Data utworzenia</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            {foreach $users as $user}
                <tr>
                    <td>{$user.email|escape}</td>
                    <td>{$user.data_utworzenia|date_format:"%Y-%m-%d %H:%M:%S"}</td>
                    <td>
                        <form method="POST" action="{routerUrl controller='deleteUser'}" class="d-inline">
                            <input type="hidden" name="user_id" value="{$user.id}">
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/block}
