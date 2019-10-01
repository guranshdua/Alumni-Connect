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
       <div class="row" style="padding: 30px 30px 30px 30px;">
         <div class="col-6">
           <img src="../images/Canva.png" style="display:block; width:100%; height:auto; border: 10px solid #EEE; border-radius:10px" />
         </div>
         <div class="col" >
           <h2 class="f700" align="center">PROJECT NAME</h2>
           <br />
           <i class="fas fa-map-marker-alt fa-lg"></i>&nbsp&nbspDelhi, India
           <br />
           <i class="fas fa-user-friends fa-lg"></i>&nbsp&nbsp314 Contributing
           <br />
           <i class="fas fa-user fa-lg"></i>&nbsp&nbspCompany Name
           <br /><br />
           <div class="row">
              <div class="col-sm-4">
                <button class="btn btn-primary" id='donatebutton'><i class="fas fa-rupee fa-lg"></i>&nbsp&nbsp&nbspDonate Now!</button>
              </div>
              <div class="col-4 d-none" id="amountip">
                <input type="text" class="form-control" placeholder="Enter Amount"/>
              </div>
              <div class="col-4 d-none" id="amountconf">
                <button class="btn btn-success" id='donatebutton'><i class="fas fa-check fa-lg"></i>&nbsp&nbsp&nbspConfirm!</button>
              </div>
           </div>

           &nbsp&nbsp

           <br /><br />
           <p>
             JOB DESCRIPTION PARAGRAPH.
             <br />
             Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
           </p>
         </div>
       </div>
       <?php
       include("./partials/footer.php");
        ?>
        <script>
    		$(document).ready(function(){
    			$("#donatebutton").click(function(){
    				if($("#amountip").hasClass("d-none")){
    					$("#amountip").removeClass("d-none");
              $("#amountconf").removeClass("d-none");
    				}
    				else{
    					$("#amountip").addClass("d-none");
              $("#amountconf").addClass("d-none");
    				}

    			});
    		});
    		</script>
     </div>
   </body>
</html>
