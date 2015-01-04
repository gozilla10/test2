{*Add user fields*}

 <div class="row add_user">
    <label for="InputName">Add new user</label>
    <div class="col-lg-12">
        <form role="form" id="contact-form" data-toggle="validator">
            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="name" placeholder="Name" required data-error="* Vnesite ime in priimek v polje zgoraj">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="surname" placeholder="Surname" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" class="form-control" name="InputName" id="mail1" placeholder="Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <div class="input-group">
                        <input type="email" class="form-control" name="InputName" id="mail2" placeholder="Email again" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                <div class="form-group">
                    <select class="selectpicker">
                        {foreach from=$countries  item=country }
                            <option value="{$country.code}">{$country.country_name}</option>
                        {/foreach}  
                    </select>
                </div>
            </div>
            <div class="col-lg-2">
                <button  type="submit" class="btn btn-success" id="addUser"><span class="glyphicon glyphicon-plus"></span> Add user</button>
                
                {*<button type="submit" class="btn btn-primary">Submit</button>*}
            </div>
        </form>
    </div>
</div>

                        
<div class="row list-users" id="displayData">
    {include file="users.tpl"}
</div>                       
