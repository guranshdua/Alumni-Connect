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
      include("./partials/nav.php");
       ?>
       <div class="news">
         <div class="row">
           <div class="col-md-3" >
             <div class="affix">
                 <div class="card" style="width:100%; height:100%; z-index:1;">
                  <div class="card-body">
                    <br /><br /><br />
                    <div class="row">
                      <div class="col-sm-12 f700" >
                        <img src="../images/home_laptop_1.png"  style="height:50px; border-radius:50px;"/>&nbsp&nbsp&nbspGURANSH DUA
                      </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="./index.php"><h6 class="card-title f600"><i class="fas fa-home"></i> Dashboard</h6></a>
                    <a href="./news.php"><h6 class="card-title f600"><i class="far fa-newspaper"></i> News Feed</h6></a>
                    <a href="./events.php"><h6 class="card-title f600"><i class="fas fa-users"></i> Events</h6></a>
                    <a href="./photo.php"><h6 class="card-title f600"><i class="fas fa-camera"></i> Photo Gallery</h6></a>
                    <a href="./jobs.php"><h6 class="card-title f600"><i class="fas fa-chart-line"></i> Careers</h6></a>
                    <a href="./donation.php"><h6 class="card-title f600"><i class="fas fa-rupee-sign"></i> Donations</h6></a>
                  </div>
                </div>
             </div>
           </div>
           <div class="col" style="padding-right:30px">
             <div class="row">
               <div class="col-md-12">
                 <br /><br /><br /><br />
                 <button class="btn btn-info" style="width:100%; text-align:left;" id="toggle-button">Create a new album</button>
                 <div class='card-container d-none' id="form-container">
                   <br />
                   <div class="card ml-auto mr-auto " style="width:100%;">
                     <div class="card-body">
                       <form>
                         <div class="form-group row">
                          <label for="AName" class="col-sm-3 col-form-label">Album Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="AName" placeholder="">
                          </div>
                         </div>
                         <div class="form-group row">
                           <label for="Year" class="col-sm-3 col-form-label">Year</label>
                           <div class="col-sm-9">
                           <input type="text" class="form-control" id="Year" placeholder="">
                         </div>
                       </div>

                       <div class="form-group row">
                        <label for="Location" class="col-sm-3 col-form-label">Location</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="Location" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="  " class="col-sm-3 col-form-label">Select Files</label>
                        <div class="col-sm-9">
                          <input name="upload[]" type="file" multiple="multiple"/>
                        </div>
                      </div>
                    <div class="form-group row">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Publish</button>
                      </div>
                    </div>
                       </form>
                     </div>
                   </div>
                 </div>
                 <br />
                 <br />
                 <div class="row">
                   <div class="col-md-4">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='200px' width='auto'>
                           <button class="btn btn-success" style="position:absolute">View</button>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-4">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='200px' width='auto'>
                           <button class="btn btn-success" style="position:absolute">View</button>
                       </div>
                     </div>
                   </div><div class="col-md-4">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='200px' width='auto'>
                           <button class="btn btn-success" style="position:absolute">View</button>
                       </div>
                     </div>
                   </div><div class="col-md-4">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='200px' width='auto'>
                           <button class="btn btn-success" style="position:absolute">View</button>
                       </div>
                     </div>
                   </div>
                 </div>
            </div>
           </div>
         </div>
       </div>
     </div>

     <?php
     include("./partials/footer.php"); ?>
     <script>
     $(document).ready(function()
     {
      $("#toggle-button").click(function(){
        if($("#form-container").hasClass("d-none")){
          $("#form-container").removeClass("d-none");
        }
        else {
          $("#form-container").addClass("d-none");
        }
      })
     });
     </script>
   </body>
   </html>
