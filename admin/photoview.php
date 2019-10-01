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
           <div class="col" style="padding-right:60px">
             <div class="row" style="padding-top:100px;">
               <div class="col albumlist">
                 <div class="row" style="padding-left:30px">
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%; height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto' />
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%; height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto'>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%; height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto'>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto'>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="row" style="padding-left:30px;padding-top:10px;">
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%; height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto' />
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%; height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto'>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%; height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto'>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto'>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="row" style="padding-left:30px;padding-top:10px; padding-bottom:20px;">
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%; height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto' />
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%; height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto'>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%; height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto'>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class='card-container'>
                       <div class="card ml-auto mr-auto " style="width:100%;height:auto;">
                         <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='150px' width='auto'>
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
