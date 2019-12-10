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
    <h1 class="display-3" style="background:#f8f9fa !important;padding: 20px;border-radius: 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}"><b>LET'S CHECK YOUR BODY NOW !</b></h1>
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
      <iframe width="100%" height="200" src="assets/video/vid.mp4">
      </iframe>
    </div>
    <div class='result-content'style="background:#f8f9fa !important;padding: 20px;border-radius: 20px;">
      <div class="card" style="width: 30.5rem;">
          <div class="card-body">
            <p class="card-text">
              sYour body is an amazing thing and will work well for you depending on how you treat it,<br>
              your body requires effort and focus on your part to maintain optimum health so that you can perform to your absolute best as much as possible.<br>
              Very often injuries and illnesses manifest themselves through a lack of care for your body; here are 7 steps to focus on to help you keep your body healthy and working to the very best for you!
            </p>
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
      $(".card-text").html(response);  
    }
	});
}

function checkWeight(elem,evt)
{
  if(evt.which==13||evt==13)
  {
    if(elem.val()=="")
    {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Weight is Empty'
      })
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
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Height is Empty'
      })
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
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Gender is Empty'
    })
    return false;
  }
  else
  {
    return true;
  }
  
}
</script>
             
                                               