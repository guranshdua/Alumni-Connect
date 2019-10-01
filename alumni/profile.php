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
         <div class="col-md-7 offset-md-1">
           <div class="row">
             <div class="col-12">
               <form>
                 <div class="form-group row">
                  <label for="Post" class="col-sm-3 col-form-label">Gender</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="Post" placeholder="">
                  </div>
                 </div>
                 <div class="form-group row">
                   <label for="Organisation" class="col-sm-3 col-form-label">Date of Birth</label>
                   <div class="col-sm-9">
                   <input type="text" class="form-control" id="Organisation" placeholder="">
                 </div>
               </div>
               <div class="form-group row">
                <label for="Location" class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="Location" placeholder="">
                </div>
              </div>
              <div class="form-group row">
               <label for="DateApply" class="col-sm-3 col-form-label">Mobile No.</label>
               <div class="col-sm-9">
                 <input type="text" class="form-control" id="DateApply" placeholder="">
               </div>
             </div>
             <div class="form-group row">
              <label for="Perks" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="Perks" placeholder="">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Publish</button>
              </div>
            </div>
               </form>
             </div>

           </div>

         </div>
       </div>
       <?php
       include("./partials/footer.php");
        ?>
        <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
        </script>

     </div>
   </body>
   </html>
