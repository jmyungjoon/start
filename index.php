<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>ITTC Server Start Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="style.css?id=1234" rel="stylesheet">
    <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
<!-- <body class="text-center"> -->
  <div class="cover-container d-flex w-100w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          
          <h4 class="masthead-brand" data-aos="fade-down"><a href="http://ittcserver.com">ITTC</a></h4>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="http://ittcserver.net" data-aos="fade-down">Home</a>
            <a class="nav-link" href="#" data-aos="fade-down">Features</a>
            <a class="nav-link" href="#" data-aos="fade-down">Contact</a>
                <div class="login-btn-wrapper" >
                    <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn navbar-btn btn-sign-in login-btn-in navbar-right" style="background-color : darkred;padding-top: 4px;padding-bottom: 4px;margin-bottom: 5px;margin-top: 1px;padding-right: 10px;padding-left: 10px;border-right-width: 10px;" data-aos="fade-down">Sign Up</button>
                </div>
          </nav>
        </div>
      </header>
      <div class="container text-center" >
    
        <main role="main" class="inner cover">
            <div data-aos="fade-down">
                <h2 class="cover-heading" >Web Developer David</h2>
            </div>
            <div class="text-center">
                    <img src="david.jpg" class="img-fluid wow tada z-depth-1 animated rounded"  data-wow-delay="0.2s" style="visibility: visible; animation-name: tada; animation-iteration-count: 1; animation-delay: 2s; width: 300px;" >
                    <p class="lead" data-aos="fade-up">Welcome to my developer site! <br> You will meet some interesting works of web application or home pages that I am making as studying projects. <br>Please bear with me. Many parts are still under development.</p>
                      <a href="http://ittcserver.net/webapplication" class="btn btn-lg btn-primary" data-aos="fade-up" data-aos-delay="1000">Web Application</a>
            </div>
            <!-- <p class="lead"> -->
                
            <!-- </p> -->
        </main>
      </div>
      
    <footer class="mastfoot mt-auto">
      <div class="inner">
        <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      </div>
    </footer>
  </div>
  <!-- Vendor JS Files -->
  <!-- <script src="assets/vendor/jquery/jquery.min.js"></script> -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>    

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  </body>
</html>

<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog" style="color:black">
        <div class="text-left modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Create New Member</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="post" id="insert_form">
                <label>Enter Name</label>
                <input type="text" name="name" id="name" onBlur="checkAvailability()" class="form-control" /><span id="user-availability-status" style="color:red"></span> 
                <br />
                <p><img src="LoaderIcon.gif" id="loaderIcon" style="display:none" /></p>
                <label>Enter Email Address</label>
                <input type="text" name="email" id="email" class="form-control"/>
                <br />
                <label>Enter Profile</label>
                <input type="text" name="profile" id="profile" class="form-control" />
                <br />  
                <label>Enter Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="******" />
                <br />
                <label>Enter Confirm Password</label>
                <input type="password" name="password" id="password2" class="form-control" placeholder="******"/>
                <br />
                <input type="submit" name="insert" id="insert" value="Submit" class="btn btn-success" />
              </form>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </div>
    </div>
</div>
<script>
      function checkAvailability() {
            $("#loaderIcon").show();
            $.ajax({
            url: "check_availability.php",
            data:'username='+$("#name").val(),
            type: "POST",
            success:function(data){
                setTimeout(function() {$("#user-availability-status").html(data);
                $("#loaderIcon").hide();}, 1000);
                // $("#user-availability-status").hide();}, 10000);
                // $("#user-availability-status").html(data);
                // $("#loaderIcon").hide();
            },
            error:function (){}
            });
      }

      $(document).ready(function(){
        $('#insert_form').on("submit", function(event){  
        event.preventDefault();  
        if($('#name').val() == ""){  
            alert("Name is required");  
        }  
        else if($('#email').val() == ''){  
            alert("email is required");  
        }  
        else if($('#profile').val() == ''){  
            alert("Profile is required"); 
        }
        else if($('#password').val() != $('#password2').val()){
            alert("Password are not matched!");
        }
        else {  
            confirm("Are you sure?")
            $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:$('#insert_form').serialize(),  
                beforeSend:function(){  
                    $('#insert').val("Inserting");  
                },  
                success:function(data){  
                    $('#insert_form')[0].reset();  
                    $('#add_data_Modal').modal('hide');  
                }  
            });  
        }  
        });
    });
</script>
