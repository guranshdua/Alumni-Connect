<!doctype HTML>
<html>
  <head>
    <?php
    include("./partials/meta.php");
     ?>
  </head>
  <body>
    <div>
      <?php
      include("./partials/nav1.php");
       ?>
       <div class="profile-home">
         <br />
            <img src="../images/vitlogo.png" style="height:100px; width:auto; display:block; margin-left:auto; margin-right:auto;" />
       </div>
       <div class="row" style="padding-top:10px;">
         <div class="col-md-2" style="padding-left:50px;">
            <img src="../images/home_laptop_1.png" style="margin-left:auto;display:block; width:80%; height:auto; border-radius:200px;margin-top:-40%" data-toggle="tooltip" data-placement="top" title="Click to Edit"/>
         </div>
         <div class="col-md-4">
           <h3 class="f700">Guransh Dua</h3>
         </div>
       </div>
       <div class="row">
         <div class="col-md-3" >
           <div>
             <div style="padding-left:10%;">
               <div class="card" style="width:100%; border-width: 0px 5px 0px 0px;" >
                <div class="card-body" style="text-align:right;background-color:#fff;">
                  <a href="./profile.php"><h6 class="card-title f600">Profile</h6></a>
                  <a href="./exp.php"><h6 class="card-title f600">Experience</h6></a>
                  <a href="./account.php"><h6 class="card-title f600">Account</h6></a>
                </div>
              </div>
             </div>
           </div>
         </div>
         <div class="col-md-7">
           <div class="row exp">
             <div class="col-12">
               <div class="card" style="width:100%">
                <h4 class="f700">WORK EXPERIENCE</h4>
                <div class="card" style="padding-left:30px; padding-top:10px; ">
                  <div class="row" style="padding-bottom:20px;">
                    <div class="col-md-2">
                      <img src="../images/home_laptop.png" height='auto' width='100%' style="display:block" />
                    </div>
                    <div class="col">
                      <h5 class="f700">Company Name</h5>
                      <h6 class="f600">Position</h6>
                      <h6 class="f600">Duration</h6>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <img src="../images/home_laptop.png" height='auto' width='100%' style="display:block" />
                    </div>
                    <div class="col">
                      <h5 class="f700">Company Name</h5>
                      <h6 class="f600">Position</h6>
                      <h6 class="f600">Duration</h6>
                    </div>
                  </div>
                </div>
               </div>
               <div class="card" style="width:100%; padding-top:20px; padding-bottom:30px;">
                <h4 class="f700">EDUCATION</h4>
                <div class="card" style="padding-left:30px; padding-top:10px; ">
                  <div class="row" style="padding-bottom:20px;">
                    <div class="col-md-2">
                      <img src="../images/home_laptop.png" height='auto' width='100%' style="display:block" />
                    </div>
                    <div class="col">
                      <h5 class="f700">Company Name</h5>
                      <h6 class="f600">Position</h6>
                      <h6 class="f600">Duration</h6>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <img src="../images/home_laptop.png" height='auto' width='100%' style="display:block" />
                    </div>
                    <div class="col">
                      <h5 class="f700">Company Name</h5>
                      <h6 class="f600">Position</h6>
                      <h6 class="f600">Duration</h6>
                    </div>
                  </div>
                </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <?php
       include("./partials/footer1.php");
        ?>
        <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
        </script>

     </div>
   </body>
   </html>
