
	
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100" style="margin:100px;">
			<form class="login100-form validate-form" method="POST" action="<?=site_url("Guest/index");?>">
				<span class="login100-form-title p-b-26">
					REGISTER
				</span>
				<span class="login100-form-title p-b-48">
					<i class="zmdi zmdi-font"></i>
				</span>
				<div class="wrap-input100 validate-input" data-validate = "Invalid Username">
					<input class="input100" type="text" name="username">
					<span class="focus-input100" data-placeholder="USERNAME"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Invalid Email">
					<input class="input100" type="text" name="email">
					<span class="focus-input100" data-placeholder="EMAIL"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Invalid password">
					<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
					</span>
					<input class="input100" type="password" name="password">
					<span class="focus-input100" data-placeholder="PASSWORD"></span>
				</div>
				<div class="validate-input" data-validate="Invalid password">
					<div class="input-group-prepend" style="display:inline-block;margin-bottom:37px;"><!--
					--><label class="input-group-text" for="gender"><b>Gender</b></label>
					</div><!--
				--><select class="custom-select" name='gender' id="gender" style='width:50%;'>
						<option value="">Choose...</option>
						<option value="1">Male</option>
						<option value="2">Female</option>
					</select>
				</div>
				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							Registers
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<div id="dropDownSelect1">

</div>
</body>

<script type='text/javascript'>

$(document).ready(function(){   
    console.log("boba enaks");
});

/*==================================================================
[ Template ]*/
$('.input100').each(function(){
    $(this).on('blur', function(){
        if($(this).val().trim() != "") {
            $(this).addClass('has-val');
        }
        else {
            $(this).removeClass('has-val');
        }
    })    
})
var input = $('.validate-input .input100');
$('.validate-form').on('submit',function(){
    var check = true;
    for(var i=0; i<input.length; i++) {
        if(validate(input[i]) == false){
            showValidate(input[i]);
            check=false;
        }
	}
	if($("#gender").val()=="")
	{
		customAlert('error','Oops...','Gender is Empty');
		check=false;
	}
    return check;
});
$('.validate-form .input100').each(function(){
    $(this).focus(function(){
       hideValidate(this);
    });
});
function validate (input) {
    if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
        if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            return false;
        }
    }
    else {
        if($(input).val().trim() == ''){
            return false;
        }
    }
}
function showValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).addClass('alert-validate');
}
function hideValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).removeClass('alert-validate');
}
var showPass = 0;
$('.btn-show-pass').on('click', function(){
    if(showPass == 0) {
        $(this).next('input').attr('type','text');
        $(this).find('i').removeClass('zmdi-eye');
        $(this).find('i').addClass('zmdi-eye-off');
        showPass = 1;
    }
    else {
        $(this).next('input').attr('type','password');
        $(this).find('i').addClass('zmdi-eye');
        $(this).find('i').removeClass('zmdi-eye-off');
        showPass = 0;
    }
});
/*==================================================================*/

</script>