{include file="head.tpl"}
<body >

<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row">
        <div class="row step">
            <a href="?i=add" target="_self">
                <div id="div1" class="col-md-2 {if $step eq 'add'}activestep{/if}" >
                    <span class="fa fa-cloud-download"></span>
                    <p>Add user</p>
                </div>
            </a>
            <a href="?i=edit" target="_self">
                <div class="col-md-2 {if $step eq 'edit'}activestep{/if}" >
                    <span class="fa fa-pencil"></span>
                    <p>Edit user</p>
                </div>
            </a>
            <a href="/" target="_self">
                <div class="col-md-2 {if $step eq 'index'}activestep{/if}" >
                    <span class="fa fa-refresh"></span>
                    <p>List all users</p>
                </div>
            </a>
            <a href="?i=view" target="_self">
                <div class="col-md-2 {if $step eq 'view'}activestep{/if}" >
                    <span class="fa fa-dollar"></span>
                    <p>View user</p>
                </div>
            </a>
            <div class="col-md-2" >
                <span class="fa fa-cloud-upload"></span>
                <p>Othr 2</p>
            </div>
            <div id="last" class="col-md-2" >
                <span class="fa fa-star"></span>
                <p>Othr 3</p>
            </div>
        </div>
    </div>
    {if $step eq 'index'}
        <div class="row list-users">
            {include file="users.tpl"}
        </div>
    {else if $step eq 'add'}
        {include file="add.tpl"}
    {else if $step eq 'edit'}
        {include file="edit.tpl"}
    {else if $step eq 'view'}
        {include file="view.tpl"}
    {/if} 
</div>


{*
<div class="container">
	<form role="form">
	    <div class="row">
	    	<label for="InputName">Racun</label>
			 <div class="col-lg-12">
			 
			 	<div class="col-lg-2">
			 		<div class="form-group">
	                    <div class="input-group">
	                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Ime racuna" required>
	                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
	                    </div>
	                </div>
			 	</div>
			 	
			 	<div class="col-lg-2">
			 		<div class="form-group">
	                    <div class="input-group">
	                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Datums" required>
	                    </div>
	                </div>
			 	</div>
			 	<div class="col-lg-2">
			 		<button type="button" class="btn btn-success" id="add"><span class="glyphicon glyphicon-plus"></span> Dodaj novo postavko</button>
			 	</div>
			 </div>
		</div>
		
		
		 	
		<div class="row postavka">
			<label for="InputName">Postavke: </label>
			<div class="col-lg-12">
				<div class="col-lg-2">
					<div class="form-group">
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Ime postavke" required>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="znesek" required>
							<span class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></span>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<select id="basic" class="selectpicker show-tick form-control" data-live-search="false">
							<option>20% DDV</option>
							<option>22% DDV</option>
							<option>25% DDV</option>
						</select>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<div class="input-group">
							<input disabled type="text" class="form-control">
							<span class="input-group-addon"><span class="glyphicon glyphicon-euro"></span> DDV</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		 
		<input type="hidden" id="st_postavk" value="1" />
		<div class="row postavka">
			<div class="col-lg-12">
				<div class="col-lg-2">
					<div class="form-group">
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Ime postavke" required>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<div class="input-group">
							<input type="text" class="form-control" name="InputName" id="InputName" placeholder="znesek" required>
							<span class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></span>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<select id="basic" class="selectpicker show-tick form-control" data-live-search="false">
							<option>20% DDV</option>
							<option>22% DDV</option>
							<option>25% DDV</option>
						</select>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<div class="input-group">
							<input disabled type="text" class="form-control">
							<span class="input-group-addon"><span class="glyphicon glyphicon-euro"></span> DDV</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<button type="button" class="btn btn-success" >TEST</button>
		</div>
			 
			 
		
		
		<div class="row">
			<div class="col-lg-12">
				<div class="col-lg-4 col-md-4 ">
						<label for="InputMessage">Opombe: </label>
						<textarea  class="form-control" rows="5" ></textarea>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="row"><div class="col-lg-12">
					<label for="InputMessage">Skupni znesek </label>
					<div class="form-group">
					<div class="input-group">
						<input disabled type="text" class="form-control">
						<span class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></span>
					</div></div>
					</div></div>
					
			</div>
		</div>
		
		
	</form>
</div>

<br/><br/>

<div class="container">
    <div class="row">
        <form role="form">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Confirm Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputMessage">Enter Message</label>
                    <div class="input-group">
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        <div class="col-lg-5 col-md-push-1">
            <div class="col-md-12">
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-ok"></span> Success! Message sent.</strong>
                </div>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-remove"></span><strong> Error! Please check all page inputs.</strong>
                </div>
            </div>
        </div>
    </div>
</div>
*}


{include file="foot.tpl"}