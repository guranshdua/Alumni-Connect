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
        <h3 class="f700 text-light-dark" style="text-align:center;">Admin Login</h3>
        <br />
            <form style="width:70%;padding-left:35%;">
              <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Password" required>
              </div>
              <button type="submit" class="btn btn-primary" onclick="location.href='./admin'">Submit</button>
              <br /><br />
            </form>
        </div>
     <br /><br />
     <?php
     include("footer.php");
      ?>


  </body>
</html>
