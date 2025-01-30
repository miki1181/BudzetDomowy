{extends file="main.tpl"}

{block name="title"}Zarządzanie kategoriami{/block}

{block name="content"}
    <h1>Zarządzanie kategoriami</h1>

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
                <th>Nazwa</th>
                <th>Użytkownik</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            {foreach $categories as $category}
                <tr>
                    <td>{$category.nazwa|escape}</td>
                    <td>{$category.uzytkownik_id|escape}</td>
                    <td>
                        <form method="POST" action="{routerUrl controller='deleteCategory'}" class="d-inline">
                            <input type="hidden" name="category_id" value="{$category.id}">
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/block}
