<?php 
    if($this->session->flashdata('msg')!=null&& $this->session->flashdata('msg')=="1"){
    ?>
       <script type='text/javascript'>customAlert('success','Success',"Account Created Successfully");</script>
    <?php } ?>
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100" style="margin:100px;">
			<!-- <form class="login100-form validate-form" method="POST" action="<?=site_url("Login/signin");?>"> -->
				<span class="login100-form-title p-b-26">
					LOGIN   
				</span>
				<span class="login100-form-title p-b-48">
					<img src="<?=base_url();?>/img/logo.png" alt="" width="80px">
				</span>
				<div class="wrap-input100 validate-input" data-validate = "Invalid Email">
					<input class="input100" type="text" name="email">
					<span class="focus-input100" data-placeholder="Email"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Invalid password">
					<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
					</span>
					<input class="input100" type="password" name="pass">
					<span class="focus-input100" data-placeholder="Password"></span>
				</div>
				<div class="container-login100-form-btn">
					<div class  ="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn" onclick="signin()">
						    Login
						</button>
					</div>
				</div>
				<div class="text-center p-t-115">
					<span class="txt1">
						Don’t have an account?
					</span>
					<a class="txt2" href="<?=site_url("Register/index");?>">
						Sign Up
					</a>
				</div>
			<!-- </form> -->
		</div>
	</div>
</div>
<div id="dropDownSelect1">

</div>
</body>

<script type='text/javascript'>

$(document).ready(function(){   
    console.log("bobas");
});

$('#btn-login').on('click', function(){
    checkLogin();
    console.log("ayam");
});

function checkLogin(){
    $.ajax({
        url: '<?= base_url()?>/Login/login_check',
        data: $('#login_form').serialize(),
        type: 'POST',
        success: function(data){
            if(data){
                customAlert('success','Success','Wellcome!');
                window.location.href = "<?= base_url()?>/Home";
            }else{
                customAlert('error','Oops...','Wrong Email or Password!!');
            }
        }
    });
}


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

function signin()
{
    $.ajax({
	    type : "POST",
        url : "<?=base_url();?>Login/signin",
        dataType : "json",
        data : {
            email   : $("[name=email]").val(),
            pass    : $("[name=pass]").val()
        },
        success : function(response){
            if(response==1)
            {
                customAlert('error','Oops...','Email Or Password Incorrect');
                return false;
            }
        }
	});
}
</script>