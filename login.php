<!doctype HTML>
<html>
  <head>
    <?php
    include("./meta.php");
     ?>
  </head>
  <body>
    <?php
    include("./nav1.php");
     ?>
     <div class="login">
        <h2 class="f900" style="text-align:center;">ALUMNI CONNECT</h2>
        <h3 class="f700 text-light-dark" style="text-align:center;">Alumni Login</h3>
        <br />
        <div class="row">
          <div class="col-md-6 login-left order-last order-md-first" style="text-align:center;">
            <br />
            <button class="btn btn-primary btn-lg" onclick="location.href='./alumni'"><i class="fab fa-facebook-f fa-lg"></i> &nbsp&nbspLogin with Facebook</button>
            <br /><br />
            <button class="btn btn-danger btn-lg" onclick="location.href='./alumni'"><i class="fab fa-google fa-lg"></i> &nbsp&nbspLogin with Google</button>
            <br /><br />
            <button class="btn btn-success btn-lg" onclick="location.href='./alumni'"><i class="fab fa-linkedin fa-lg"></i> &nbsp&nbspLogin with LinkedIn</button>
            <br /><br />
            <p>
              <a href="./adminlogin.php">Click here</a> to login to admin dashboard.
            </p>
            <br />
          </div>
          <div class="col-md-6">
            <form style="width:80%;padding-left:15%;">
              <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-primary" onclick="location.href='./alumni'">Submit</button>
              <br /><br />
            </form>
          </div>
        </div>
     </div>
     <br /><br />
     <?php
     include("footer.php");
      ?>


  </body>
</html>
