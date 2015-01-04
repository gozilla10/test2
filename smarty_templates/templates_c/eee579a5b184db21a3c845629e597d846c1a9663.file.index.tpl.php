<?php /* Smarty version Smarty-3.1.18, created on 2014-09-01 12:19:11
         compiled from "C:\site\racunovodstvo\smarty_templates\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:599753f4f71d7458e6-71957255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eee579a5b184db21a3c845629e597d846c1a9663' => 
    array (
      0 => 'C:\\site\\racunovodstvo\\smarty_templates\\templates\\index.tpl',
      1 => 1409566298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '599753f4f71d7458e6-71957255',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f4f71d79f679_19784093',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f4f71d79f679_19784093')) {function content_53f4f71d79f679_19784093($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body >

<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
    <div class="row">
        <div class="progress" id="progress1">
            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">                
            </div>
            <span class="progress-type">Overall Progress</span>
            <span class="progress-completed">20%</span>
        </div>      
    </div>
    <div class="row">
        <div class="row step">
            <div id="div1" class="col-md-2" onclick="javascript: resetActive(event, 0);">
                <span class="fa fa-cloud-download"></span>
                <p>Dodaj nov racun</p>
            </div>
            <div class="col-md-2 activestep" onclick="javascript: resetActive(event, 20);">
                <span class="fa fa-pencil"></span>
                <p>Izdaj fakturo</p>
            </div>
            <div class="col-md-2" onclick="javascript: resetActive(event, 40);">
                <span class="fa fa-refresh"></span>
                <p>Pregled poslovanja</p>
            </div>
            <div class="col-md-2" onclick="javascript: resetActive(event, 60);">
                <span class="fa fa-dollar"></span>
                <p>Ostalo 1</p>
            </div>
            <div class="col-md-2" onclick="javascript: resetActive(event, 80);">
                <span class="fa fa-cloud-upload"></span>
                <p>Ostalo 2</p>
            </div>
            <div id="last" class="col-md-2" onclick="javascript: resetActive(event, 100);">
                <span class="fa fa-star"></span>
                <p>Ostalo 3</p>
            </div>
        </div>
    </div>
</div>



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



<?php echo $_smarty_tpl->getSubTemplate ("foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
