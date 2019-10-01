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
       <div class="jobs">
         <div class="container">
           <h1 class="f900 text-white" style="padding-top:10%; font-size:60px;">JOBS.</h1>
           <h1 class="f600 text-white">Easiest way to get them.</h1>
         </div>
       </div>
       <div class="container eventpage" style="padding-top:0px;">
         <div class="row">
           <div class="col-md-3">
             <div>
               <div class="card" style="width:100%;">
                 <div class="card-header f600 text-light-dark" style="text-align:center;">
                   Filters
                 </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="Categ">Category</label>
                      <input type="text" class="form-control" id="Categ" placeholder="Eg: Computer Science">
                    </div>
                    <div class="form-group">
                      <label for="Loc">Location</label>
                      <input type="text" class="form-control" id="Loc" placeholder="Eg: New Delhi">
                    </div>
                    <button type="submit" class="btn btn-primary">Apply</button>
                  </form>
                 </div>
              </div>
             </div>
           </div>
           <div class="col eventlist">
             <div class='card-container'>
               <div class="card ml-auto mr-auto " style="width:80%;">
                 <div class="card-body">
                   <h6 class="f600"><a href="eventpage.php">UI/UX Developer</a></h6>
                   <p>Balaji Trading<br />
                   Location: Cyber Hub Gurugram</p>
                   <div class="row">
                     <div class="col-md-3 col-sm-4 col-6">
                       <p>
                         Posted On:<br />29 May'19
                       </p>
                     </div>
                     <div class="col-md-3 col-sm-4 col-6">
                       <p>
                         Apply Till:<br />29 June'19
                       </p>
                     </div>

                     <div style="text-align:right" class="col">
                       <br />
                       <button onclick="location.href='./jobview.php'" class="btn btn-primary">View</button>
                     </div>
                   </div>

                 </div>
               </div>
             </div>
             <div class='card-container'>
               <div class="card ml-auto mr-auto " style="width:80%;">
                 <div class="card-body">
                   <h6 class="f600"><a href="eventpage.php">UI/UX Developer</a></h6>
                   <p>Balaji Trading<br />
                   Location: Cyber Hub Gurugram</p>
                   <div class="row">
                     <div class="col-md-3 col-sm-4 col-6">
                       <p>
                         Posted On:<br />29 May'19
                       </p>
                     </div>
                     <div class="col-md-3 col-sm-4 col-6">
                       <p>
                         Apply Till:<br />29 June'19
                       </p>
                     </div>

                     <div style="text-align:right" class="col">
                       <br />
                       <button class="btn btn-primary">View</button>
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
