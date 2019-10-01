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
       <div class="photos">
         <div class="container">
           <h1 class="f900 text-white" style="padding-top:10%; font-size:60px;">PHOTOS.</h1>
           <h1 class="f600 text-white">Relive your memories.</h1>
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
                      <label for="Year">Year</label>
                      <input type="text" class="form-control" id="Year" placeholder="Eg: 2018, 2019">
                    </div>
                    <div class="form-group">
                      <label for="Name">Name</label>
                      <input type="text" class="form-control" id="Name" placeholder="Eg: Farewell 2018">
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
                     <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='200px' width='auto'>
                       <button class="btn btn-success" style="position:absolute" onclick="location.href='./photoview.php'">View</button>
                   </div>
                 </div>
               </div>
               <div class="col-md-5">
                 <div class='card-container'>
                   <div class="card ml-auto mr-auto " style="width:100%;">
                     <img class="card-img-top" src="../images/events.png" alt="Card image cap" height='200px' width='auto'>
                     <button class="btn btn-success" style="position:absolute" onclick="location.href='./photoview.php'">View</button>
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
