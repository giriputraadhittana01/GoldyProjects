<style>
.contact-form{ margin-top:15px;}
.contact-form .textarea{ min-height:220px; resize:none;}
.form-control{ box-shadow:none; border-color:#eee; height:49px;}
.form-control:focus{ box-shadow:none; border-color:#00b09c;}
.form-control-feedback{ line-height:50px;}
.main-btn{ background:#00b09c; border-color:#00b09c; color:#fff;}
.main-btn:hover{ background:#00a491;color:#fff;}
.form-control-feedback {
line-height: 50px;
top: 0px;
}
</style>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">First Slide</h2>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Second Slide</h2>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4">Third Slide</h2>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon"  aria-hidden="true"></span>
          <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="display-3"><b>LET'S CHECK YOUR BODY NOW !</b></h1>
    <div id='content' style="background:#f8f9fa !important;padding: 20px;border-radius: 20px;">
      <div id='form-content'>
          <div class="flex" style="display:flex;margin-bottom: 1rem;">
            <div class="flex-content" style="width:100px;margin-right:0px;">
              <label for="exampleInputEmail1"><b>Weight</b></label>
              <input type="text" class="form-control mask-body" name="weight" id="weight"  placeholder="KG" style='width:55%' onkeyup='checkWeight($(this),event)'>
            </div>
            <div class="flex-content" style="width:100px;">
              <label for="exampleInputPassword1"><b>Height</b></label>
              <input type="text" class="form-control mask-body" name="height"id="height" placeholder="CM"style='width:55%' onkeyup='checkHeight($(this),event)'>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="gender3"><b>Gender</b></label>
              </div>
              <select class="custom-select" name='gender' id="gender" style='width:50%' onchange="checkGender($(this))">
                <option value="">Choose...</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" style='display:block;'><b>Body Type</b></label>
            <div class="form-check-inline">
              <label class="form-check-label">
                <input type="radio" name="body_type" value='1' style='margin-right:5px;'>Small
              </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label">  
                <input type="radio" name="body_type" value='2' style='margin-right:5px;'>Medium
              </label>
            </div>
            <div class="form-check-inline disabled">
              <label class="form-check-label">
                <input type="radio" name="body_type" value='3' style='margin-right:5px;'>Large
              </label>
            </div> 
          </div>
          <button type="submit" onclick='getSize()'class="btn btn-primary">Go</button>
      </div>
    </div>
    <div id='result' class='result-content'style="background:#f8f9fa !important;padding: 20px;border-radius: 20px;margin-bottom:10px;">
      <iframe width="100%" height="200" src="assets/video/vid.mp45">
      </iframe>
    </div>
    <div class='result-content'style="background:#f8f9fa !important;padding: 20px;border-radius: 20px;">
      <div class="card"  style="width: 30.5rem;">
          <div class="card-body">
            <p class="card-text">
              <div class="container">
                <div class="row">
                  <div id='display-4' style="width:100%;text-align:center;"><b><i>COMMENT</i></b></div>
                  <div role="form" id="contact-form" class="contact-form">
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                              <input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="Name" onkeyup='checkName($(this),event)'>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <div class="form-group">
                              <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail" onkeyup='checkEmail($(this),event)'>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                              <textarea class="form-control textarea" rows="3" name="message" id="message" placeholder="Message"></textarea>
                        </div>
                      </div>
                      </div>
                      <div class="row">
                      <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right" onclick="sendMessage()">Send a message</button>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </p>
          </div>
      </div>    
    </div>
    <div class='result-content'style="background:#f8f9fa !important;padding: 20px;border-radius: 20px;margin-right: 20px;margin-top: 15px;width:50%;">
      <div class="card" style="width: 32rem;">
        <div class="card text-white">
          <div class="card-header bg-info">
            <h4>Get Your Food Recommendation Now !!!<h4>
          </div>

          <div class="card-body bg-warning">
            You will have a food recommendation
          </div>

          <div class="card-footer bg-info">
          <button type="submit" onclick=''class="btn btn-primary">Start Now</button>
          </div>
        </div>
      </div>    
    </div>
  </div>
</section>
</body>
</html>
<script type='text/javascript'> 
$(".mask-body").mask("000");

$(document).ready(function(){   
  console.log("Gorylla Lam");
});

function getSize()
{
  if(!checkWeight($("#weight"),13)||!checkHeight($("#height"),13)||!checkGender($("#gender")))
  {
    return false;
  }
  else if($("[name=body_type]:checked").val()==null)
  {
    customAlert('error','Oops...','Body Type is Empty');
    return false;
  }
  $.ajax({
	  type : "POST",
    url : "<?=base_url();?>Guest/get",
    dataType : "json",
    data : {
        weight    : $("#weight").val(),
        height    : $("#height").val(),
        gender    : $("#gender").val(),
        body_type : $("[name=body_type]:checked").val()
    },
    success : function(response){
      showType(response);
    }
	});
}
function showType(datacall)
{
  if(datacall==1)
  {
    customModal('THIN','Dont Forget To Eat !!!','http://irigoyendesign.com/images/portfolio/monsters-proj/Monster2-Dancing_v2.gif');
  }
  else if(datacall==2)
  {
    customModal('IDEAL','You Look Cool !!!','https://media.giphy.com/media/3j0XszWA7pQkmsjhgy/giphy.gif');
  }
  else if(datacall==3)
  {
    customModal('OVERWEIGHT','You Mush Have A Diet !!!','https://media0.giphy.com/media/5QTNv6tPC2QnYSU7c6/source.gif');
  }
}
function checkWeight(elem,evt)
{
  if(evt.which==13||evt==13)
  {
    if(elem.val()=="")
    {
      customAlert('error','Oops...','Weight is Empty');
      return false;
    }
    else 
    {
      $("#height").focus();
      return true;
    }
  }
}
function checkHeight(elem,evt)
{
  if(evt.which==13||evt==13)
  {
    if(elem.val()=="")
    {
      customAlert('error','Oops...','Height is Empty');
      return false;
    }
    else 
    {
      $("#gender").focus().select();
      return true;
    }
  }
}
function checkGender(elem)
{
  if(elem.val()=="")
  {
    customAlert('error','Oops...','Gender is Empty');
    return false;
  }
  else
  {
    return true;
  }
}
function checkName(elem,evt)
{
  if(evt.which==13||evt==13)
  {
    if(elem.val()=="")
    {
      customAlert('error','Oops...','Name is Empty');
      return false;
    }
    else 
    {
      $("#email").focus();
      return true;
    }
  }
}
function checkEmail(elem,evt)
{
  if(evt.which==13||evt==13)
  {
    if(elem.val()=="")
    {
      customAlert('error','Oops...','Email is Empty');
      return false;
    }
    else if(!validateEmail($("#email").val()))
    { 
      customAlert('error','Oops...','Email is Invalid');
      return false;
    }
    else 
    {
      $("#message").focus();
      return true;
    }
  }
}
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function sendMessage()
{
  if(!checkName($("#name"),13)||!checkEmail($('#email'),13))
  {
    return false;
  }
  else if($("#message").val()=="")
  {
    customAlert('error','Oops...','Message is Empty');
    return false;
  }
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 1500,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })

  Toast.fire({
    icon: 'success',
    title: 'Signed in successfully'
  })

}
</script>
             
                                               