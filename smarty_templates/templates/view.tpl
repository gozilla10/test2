<div class="row list-users">
    <div class="col-md-7">
        <div class="form-group">
            <label for="exampleInputEmail1">Enter user ID: </label><br/><small>(All available IDs: {$allIds})</small>
            <input type="email" class="form-control" id="userId" placeholder="user ID here (int)">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <button type="button" class="btn btn-info" id="getUser">Get User Info</button>
    </div>

</div>


<div class="row list-users" id="displayData">
    <div class="col-md-12">
        <label for="exampleInputEmail1">User data will be displayed here !</label>
    </div>
</div>