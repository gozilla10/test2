{*List all provided users from database*}


{*<div class="row list-users">*}
    <table class="table  table-hover table-striped">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Surname</td>
                <td>E-mail</td>
                <td>Country</td>
                <td>options</td>
            </tr>
        </thead>
        <tbody>
            {foreach from=$users  item=user }
                <tr>
                    <td>{$user.id}</td>
                    <td>{$user.name}</td>
                    <td>{$user.surname}</td>
                    <td>{$user.email}</td>
                    <td>{$user.country_name}</td>
                    <td>
                        <a href="?i=edit&id={$user.id}">
                            <i class="glyphicon glyphicon-pencil" title="edit user" alt="edit user"></i>
                        </a> 
                       
                        {if isset($viewOnly) and $viewOnly eq 1}
                            
                        {else}
                            <a href="#delete">
                                <i class="glyphicon glyphicon-remove-circle delUser" alt="delete user" title="delete user" ref="{$user.id}"></i>
                            </a>
                        {/if}
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{*</div>*}