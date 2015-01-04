<div class="row edit_user">
    <div class="col-md-7">
        <div class="form-group">
            <label for="exampleInputEmail1">Enter user ID: </label><br/><small>(All available IDs: {$allIds})</small>
            <input type="text" value="{if isset($userinfo[0])}{$userinfo[0].id}{/if}" class="form-control" id="userId" placeholder="user ID here (int)">
        </div>
    </div>
</div>
<div class="row">   
    <div class="col-md-5">
         <button type="button" class="btn btn-info" id="refreshUser">refresh user info</button>
    </div>
</div>            
<div class="row edit_user">
    <label for="InputName">EDIT USER</label>
    <div class="col-lg-12">
        <form role="form" id="contact-form" data-toggle="validator">
            <input type="hidden" id="userIdd" value="{if isset($userinfo[0])}{$userinfo[0].id}{/if}"/>
            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" value="{if isset($userinfo[0])}{$userinfo[0].name}{/if}" class="form-control" name="InputName" id="name" placeholder="Name" required data-error="* Vnesite ime in priimek v polje zgoraj">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" value="{if isset($userinfo[0])}{$userinfo[0].surname}{/if}" class="form-control" name="InputName" id="surname" placeholder="Surname" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" value="{if isset($userinfo[0])}{$userinfo[0].email}{/if}" class="form-control" name="InputName" id="mail1" placeholder="Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" class="form-control" value="{if isset($userinfo[0])}{$userinfo[0].email}{/if}" name="InputName" id="mail2" placeholder="Email again" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <select class="selectpicker">
                        {foreach from=$countries  item=country }
                            <option value="{$country.code}" {if isset($userinfo[0]) and $userinfo[0].country eq $country.code}selected{/if}>{$country.country_name}</option>
                        {/foreach}  
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <button  type="submit" class="btn btn-success" id="updateUser"><span class="glyphicon glyphicon-plus"></span> Update userinfo!</button>
                
                {*<button type="submit" class="btn btn-primary">Submit</button>*}
            </div>
        </form>
    </div>
</div>