


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/validator.min.js"></script>

{literal}
<script type="text/javascript">
    
    $('.selectpicker').selectpicker();
   
    //add user via AJAX call
    $('#addUser').click(function(event){
        event.preventDefault();
        if($("#mail1").val()==$("#mail2").val()){
            var argv=new Object();
            argv['i']='addUser';
            argv['name']=$("#name").val();
            argv['surname']=$("#surname").val();
            argv['mail']=$("#mail1").val();
            argv['country_code']=$('.selectpicker').val();
            argv['sid']=Math.random();
            $.post('ajax.php', argv, function(data) {
                    if(data){
                        //$('#offer_packages_list').html(data);
                        if(data=='true'){
                            $('#contact-form').find("input[type=text], textarea").val("");
                            $('#contact-form').find("input[type=email], textarea").val("");
                            $('#contact-form').validator('validate');
                            $('.list-users').undelegate('.delUser','click');
                            refreshUsers();
                            $('.list-users').delegate('.delUser','click', function(){
                                delUser($(this));
                            });
                        }else alert(data);
                    }
            });
        }else
            alert("Emails dont match !");
    });

    //del User via AJAX
    $('.delUser').click(function(){
        delUser($(this));
    });
    
    //for delegation purposes
    function delUser(e){
        var checkstr =  confirm('are you sure you want to delete this user ?');
        if(checkstr == true){
            var argv=new Object();
            argv['i']='delUser';
            argv['id']=e.attr('ref');
            argv['sid']=Math.random();
            $.post('ajax.php', argv, function(data) {
                if(data){
                   $('.list-users').undelegate('.delUser','click');
                   refreshUsers();
                   //location.reload();
                   $('.list-users').delegate('.delUser','click', function(){
                        delUser($(this));
                    });
                }
            });
            
        }else{
            return false;
        }
    }
    
    //get user Info by ID
    $('#getUser').click(function(){
        $('#displayData').html("<img src=\"/images/loader.gif\"/>");
        var argv=new Object();
        argv['i']='getUser';
        argv['id']=$('#userId').val();
        argv['sid']=Math.random();
        $.post('ajax.php', argv, function(data) {
            if(data){
                $('#displayData').html(data);
            }
        });
    });
    
    $('#contact-form').validator('validate');
   
    function refreshUsers(){
        var argv=new Object();
        argv['i']='refreshUsers';
        argv['sid']=Math.random();
        $.post('ajax.php', argv, function(data) {
            $('.list-users').html(data);
        });
    }
    
    $('#refreshUser').click(function(){
        link='/?i=edit&id=';
        id=$('#userId').val();
        if(id!='' && $.isNumeric(id)){
            url=link+id;
            location.href=url;
        }else 
            alert('enter valid ID');
        
    });
    
    $('#updateUser').click(function(event){
        event.preventDefault();
        if($("#mail1").val()==$("#mail2").val()){
            var argv=new Object();
            argv['i']='updateUser';
            argv['id']=$("#userIdd").val();
            argv['name']=$("#name").val();
            argv['surname']=$("#surname").val();
            argv['mail']=$("#mail1").val();
            argv['country_code']=$('.selectpicker').val();
            argv['sid']=Math.random();
            $.post('ajax.php', argv, function(data) {
                    if(data){
                        alert("Successfully updated user with ID: "+$("#userIdd").val());
                       //refresh page with current url
                       //location.reload();
                    }
            });
        }else
            alert("Emails dont match !");
    });
</script>
{/literal}




</body>
</html>
