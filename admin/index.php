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
                 <div class="card" style="width:100%; height:100vh; z-index:1;">
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
               <div class="col-md-6">
                 <br /><br /><br /><br />
                 <div class="card-container">
                   <div class="card" style="width: 100%;">
                     <div class="card-header" style="text-align:center;">
                       <h5 class="f700">Year-wise Count</h5>
                     </div>
                    <div class="card-body">
                      <div class="chart-container" style="position: relative; height:100%; width:auto">
                        <canvas id="Year-wise" ></canvas>
                      </div>
                    </div>
                  </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <br /><br /><br /><br />
                <div class="card-container">
                  <div class="card" >
                    <div class="card-header" style="text-align:center;">
                      <h5 class="f700">Department-Wise Count</h5>
                    </div>
                    <div class="chart-container" style="position: relative; height:100%; width:auto">
                      <canvas id="dept-wise" ></canvas>
                    </div>
                 </div>
                </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-6">
                 <div class="card-container">
                   <div class="card" style="width: 100%;">
                     <div class="card-header" style="text-align:center;">
                       <h5 class="f700">Designation-wise Count</h5>
                     </div>
                    <div class="card-body">
                      <div class="chart-container" style="position: relative; height:100%; width:auto">
                        <canvas id="designation-wise" ></canvas>
                      </div>
                    </div>
                  </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="card-container">
                   <div class="card" style="width: 100%;">
                     <div class="card-header" style="text-align:center;">
                       <h5 class="f700">Company-wise Count</h5>
                     </div>
                    <div class="card-body">
                      <div class="chart-container" style="position: relative; height:100%; width:auto">
                        <canvas id="company-wise" ></canvas>
                      </div>
                    </div>
                  </div>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-6">
                 <div class="card-container">
                   <div class="card" style="width: 100%;">
                     <div class="card-header" style="text-align:center;">
                       <h5 class="f700">Industry-wise Count</h5>
                     </div>
                    <div class="card-body">
                      <div class="chart-container" style="position: relative; height:100%; width:auto">
                        <canvas id="industry-wise" ></canvas>
                      </div>
                    </div>
                  </div>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="card-container">
                   <div class="card" style="width: 100%;">
                     <div class="card-header" style="text-align:center;">
                       <h5 class="f700">City-wise Count</h5>
                     </div>
                    <div class="card-body">
                      <div class="chart-container" style="position: relative; height:100%; width:auto">
                        <canvas id="city-wise" ></canvas>
                      </div>
                    </div>
                  </div>
                 </div>
               </div>
             </div>
             <div class="row map">
               <div class="col-md-12">
                 <div class="card-container">
                   <div class="card" style="width: 100%;">
                     <div class="card-header" style="text-align:center;">
                       <h5 class="f700">MAP</h5>
                     </div>
                    <div class="card-body">

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
     include('./partials/footer.php');
      ?>
      <script>
      var ctx = document.getElementById('Year-wise').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'line',
          data: {
              labels: ['Gurugram', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
              datasets: [{
                data: [86,114,106,106,107,478],
                label: "Alumni",
                borderColor: "#3e95cd",
                fill: true,
              }]
          },
          options: {
            animation: {
                duration: 1000 // general animation time
            },
            hover: {
                animationDuration: 500 // duration of animations when hovering an item
            },
            responsiveAnimationDuration:1000 // animation duration after a resize
          },

      });

      var ctx = document.getElementById('dept-wise').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
              data: [2478,5267,734,784,433]
            }]
          },
          options: {
            animation: {
                duration: 1000 // general animation time
            },
            hover: {
                animationDuration: 500 // duration of animations when hovering an item
            },
            responsiveAnimationDuration:1000 // animation duration after a resize
          },

      });
      var ctx = document.getElementById('company-wise').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
              data: [2478,5267,734,784,433]
            }]
          },
          options: {
            animation: {
                duration: 1000 // general animation time
            },
            hover: {
                animationDuration: 500 // duration of animations when hovering an item
            },
            responsiveAnimationDuration:1000 // animation duration after a resize
          },

      });
      var ctx = document.getElementById('designation-wise').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
              data: [2478,5267,734,784,433]
            }]
          },
          options: {
            animation: {
                duration: 1000 // general animation time
            },
            hover: {
                animationDuration: 500 // duration of animations when hovering an item
            },
            responsiveAnimationDuration:1000 // animation duration after a resize
          },

      });
      var ctx = document.getElementById('industry-wise').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
              data: [2478,5267,734,784,433]
            }]
          },
          options: {
            animation: {
                duration: 1000 // general animation time
            },
            hover: {
                animationDuration: 500 // duration of animations when hovering an item
            },
            responsiveAnimationDuration:1000 // animation duration after a resize
          },

      });
      var ctx = document.getElementById('city-wise').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
              label: "Population (millions)",
              backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
              data: [2478,5267,734,784,433]
            }]
          },
          options: {
            animation: {
                duration: 1000 // general animation time
            },
            hover: {
                animationDuration: 500 // duration of animations when hovering an item
            },
            responsiveAnimationDuration:1000 // animation duration after a resize
          },

      });
</script>
   </body>
   </html>
