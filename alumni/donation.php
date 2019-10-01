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
       <div class="donations">
         <div class="container">
           <h1 class="f900 text-white" style="padding-top:10%; font-size:60px;">DONATIONS.</h1>
           <h1 class="f600 text-white">Support Innovators.</h1>
         </div>
       </div>
         <div class="container eventpage" style="padding-top:0px;">
           <div class="row">
             <div class="col-md-3">
               <div>
                 <div class="card" style="width:100%;">
                   <div class="card-header f600 text-light-dark" style="text-align:center;">
                     Search
                   </div>
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="ptype">Project Type</label>
                        <input type="text" class="form-control" id="ptype" placeholder="Eg: Construction">
                      </div>
                      <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" id="duration" placeholder="Eg: Farewell 2018">
                      </div>
                      <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                   </div>
                </div>
               </div>
             </div>
             <div class="col albumlist">
               <div class="row">
                 <div class="offset-1 col-md-5">
                   <div class='card-container'>
                     <div class="card ml-auto mr-auto " style="width:100%;">
                       <div class="card-body">
                         <h6 class="f600"><a href="eventpage.php">Project Title</a></h6>
                         <p>Company<br />
                         Location: Cyber Hub Gurugram</p>
                         <div class="row">
                           <div class="col-md-6 col-sm-10 col-12">
                             <p>
                               Posted On:<br />29 May'19
                             </p>
                           </div>
                           <div style="text-align:right" class="col">
                             <br />
                             <button class="btn btn-primary" onclick="location.href='./donationview.php'">View</button>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-5">
                   <div class='card-container'>
                     <div class="card ml-auto mr-auto " style="width:100%;">
                       <div class="card-body">
                         <h6 class="f600"><a href="eventpage.php">Project Title</a></h6>
                         <p>Company<br />
                         Location: Cyber Hub Gurugram</p>
                         <div class="row">
                           <div class="col-md-6 col-sm-10 col-12">
                             <p>
                               Posted On:<br />29 May'19
                             </p>
                           </div>
                           <div style="text-align:right" class="col">
                             <br />
                             <button class="btn btn-primary" onclick="location.href='./donationview.php'">View</button>
                           </div>
                         </div>
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
       include("./partials/footer.php");
        ?>
       </div>
     </body>
   </html>
