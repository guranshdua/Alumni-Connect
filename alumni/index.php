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
       <br /><br /><br /><br />
       <div class="news">

         <div class="row">
           <div class="col-md-4 ">
             <div class="affix">
               <div style="padding-left:10%;">
                 <div class="card" style="width:100%;">
                  <div class="card-body">
                    <a href="./index.php"><h6 class="card-title f600"><i class="far fa-newspaper"></i> News Feed</h6></a>
                    <a href="./events.php"><h6 class="card-title f600"><i class="fas fa-users"></i> Events</h6></a>
                    <a href="./photo.php"><h6 class="card-title f600"><i class="fas fa-camera"></i> Photo Gallery</h6></a>
                    <a href="./jobs.php"><h6 class="card-title f600"><i class="fas fa-chart-line"></i> Careers</h6></a>
                    <div class="dropdown-divider"></div>
                    <a href="./donation.php"><h6 class="card-title f600"><i class="fas fa-rupee-sign"></i> Support Projects</h6></a>
                    <a href="./profile.php"><h6 class="card-title f600"><i class="fas fa-user"></i> Profile</h6></a>
                  </div>
                </div>
               </div>
             </div>
           </div>
           <div class="col-md-7 news" style="padding-left:30px;">
             <div class="card-container">
               <div class="card post-news" style="width: 100%;">
                <div class="card-header">
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Say Something..</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" >Post</button>&nbsp&nbsp&nbsp&nbsp
                      <i class="fas fa-paperclip fa-lg"></i>Attach
                  </form>
                </div>
              </div>
             </div>
            <div class="card-container">
              <div class="card" style="width: 100%;">
               <div class="card-body">
                 <div class="row">
                    <div class="col-md-1">
                        <img src="../images/home_laptop_1.png"  style="height:40px; border-radius:50px;"/>
                    </div>
                    <div class="col">
                      <h6 class="f700" style="margin-bottom:0px;">Guransh Dua</h6><h6 class="f400 text-light-dark">12 Hours Ago..</h6>
                    </div>
                 </div>

                 <p class="f600" style="padding-top:10px;">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 </p>
                 <div class="dropdown-divider"></div>
                 <a href="#"><i class="far fa-thumbs-up fa-lg"></i>&nbspLike</a> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="far fa-comments fa-lg "></i>&nbspComment
                 <form>
                   <br />
                   <div class="row">
                     <div class="col-md-3">
                        Guransh Dua
                     </div>
                     <div class="col-md-7">
                       <div class="form-group">
                         <input type="text" class="form-control" id="exampleFormControlTextarea1" ></input>
                       </div>
                     </div>
                     <div class="col">
                       <button type="submit" class="btn btn-primary" >Post</button>&nbsp&nbsp&nbsp&nbsp
                     </div>
                   </div>
                 </form>
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
