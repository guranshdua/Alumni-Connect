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
                 <button class="btn btn-info" style="width:100%; text-align:left;" id="toggle-button">Create a new Event</button>
                 <div class='card-container d-none' id="form-container">
                   <br />
                   <div class="card ml-auto mr-auto " style="width:100%;">
                     <div class="card-body">
                       <form>
                         <div class="form-group row">
                          <label for="EventName" class="col-sm-3 col-form-label">Event Name</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" id="EventName" placeholder="Event Name">
                          </div>
                         </div>
                         <div class="form-group row">
                           <label for="Organisation" class="col-sm-3 col-form-label">Conducting Authority</label>
                           <div class="col-sm-9">
                           <input type="text" class="form-control" id="Organisation" placeholder="Chapter/Organisation">
                         </div>
                       </div>
                       <div class="form-group row">
                        <label for="Location" class="col-sm-3 col-form-label">Location</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="Location" placeholder="Location">
                        </div>
                      </div>
                      <div class="form-group row">
                       <label for="DateApply" class="col-sm-3 col-form-label">Last Date </label>
                       <div class="col-sm-9">
                         <input type="text" class="form-control" id="DateApply" placeholder="Last Date to Apply">
                       </div>
                     </div>
                     <div class="form-group row">
                      <label for="EventDate" class="col-sm-3 col-form-label">Date</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="EventDate" placeholder="Event Date">
                      </div>
                    </div>
                    <div class="form-group row">
                     <label for="Desc" class="col-sm-3 col-form-label">Description</label>
                     <div class="col-sm-9">
                       <input type="text" class="form-control" id="Desc" placeholder="Event Description">
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
                 <h2 style="text-align:center;" class="f900">UPCOMING EVENTS</h2>
                 <br />
                 <div class='card-container'>
                   <div class="card ml-auto mr-auto " style="width:100%;">
                     <div class="card-body">
                       <h6 class="f600"><a href="eventpage.php">New Delhi Alumni Meetup</a></h6>
                       <p>VIT Delhi Alumni Association<br />
                       Location: Cyber Hub Gurugram</p>
                       <div class="row">
                         <div class="col-md-3 col-sm-4 col-6">
                           <p>
                             Posted On:<br />29 May'19
                           </p>
                         </div>
                         <div class="col-md-3 col-sm-4 col-6">
                           <p>
                             Register Till:<br />29 June'19
                           </p>
                         </div>
                         <div class="col-md-3 col-sm-4 col-6">
                           <p>
                             Event Date:<br />29 June'19
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
                 <div class='card-container'>
                   <div class="card ml-auto mr-auto " style="width:100%;">
                     <div class="card-body">
                       <h6 class="f600"><a href="eventpage.php">New Delhi Alumni Meetup</a></h6>
                       <p>VIT Delhi Alumni Association<br />
                       Location: Cyber Hub Gurugram</p>
                       <div class="row">
                         <div class="col-md-3 col-sm-4 col-6">
                           <p>
                             Posted On:<br />29 May'19
                           </p>
                         </div>
                         <div class="col-md-3 col-sm-4 col-6">
                           <p>
                             Register Till:<br />29 June'19
                           </p>
                         </div>
                         <div class="col-md-3 col-sm-4 col-6">
                           <p>
                             Event Date:<br />29 June'19
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
                 <div class='card-container'>
                   <div class="card ml-auto mr-auto " style="width:100%;">
                     <div class="card-body">
                       <h6 class="f600"><a href="eventpage.php">New Delhi Alumni Meetup</a></h6>
                       <p>VIT Delhi Alumni Association<br />
                       Location: Cyber Hub Gurugram</p>
                       <div class="row">
                         <div class="col-md-3 col-sm-4 col-6">
                           <p>
                             Posted On:<br />29 May'19
                           </p>
                         </div>
                         <div class="col-md-3 col-sm-4 col-6">
                           <p>
                             Register Till:<br />29 June'19
                           </p>
                         </div>
                         <div class="col-md-3 col-sm-4 col-6">
                           <p>
                             Event Date:<br />29 June'19
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
             <h2 style="text-align:center;" class="f900">PAST EVENTS</h2>
            <div class="row">
              <div class="col-md-6">
                <div class='card-container'>
                  <div class="card ml-auto mr-auto " style="width:100%;">
                    <div class="card-body">
                      <h6 class="f600"><a href="eventpage.php">New Delhi Alumni Meetup</a></h6>
                      <p>VIT Delhi Alumni Association<br />
                      Location: Cyber Hub Gurugram</p>
                      <div class="row">
                        <div class="col-md-5 col-sm-8 col-10">
                          <p>
                            Event Date:<br />29 June'19
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
              <div class="col-md-6">
                <div class='card-container'>
                  <div class="card ml-auto mr-auto " style="width:100%;">
                    <div class="card-body">
                      <h6 class="f600"><a href="eventpage.php">New Delhi Alumni Meetup</a></h6>
                      <p>VIT Delhi Alumni Association<br />
                      Location: Cyber Hub Gurugram</p>
                      <div class="row">
                        <div class="col-md-5 col-sm-8 col-10">
                          <p>
                            Event Date:<br />29 June'19
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
