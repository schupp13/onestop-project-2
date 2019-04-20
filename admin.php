<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/admin.css">
    <title>Admin Page</title>
  </head>
  <body>
    <div class="jumbotron vertical-align-center">
      <h1>Admin Page</h1>
      <p>Manager</p>
    </div>

    <nav>
      <ul class="container nav-menu">
        <a href="#" ><li id="li-active">Admin Page</li></a>
        <a href="realtors.php"><li>One Stop Realtors</li></a>
        <a href="newLeads.php"><li>New Leads</li></a>
        <a href="assignedLeads.php"><li>Assigned Leads</li></a>
        <a href="bucketLeads.php"><li>Bucket Leads</li></a>
        <a href="index.php"><li>Logout</li></a>
      </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 pageHeader">
          <h3>Manage the team</h3>
        </div>
      </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">

        <div class="container d-flex-column  form-container">
          <button data-toggle="collapse" data-target="#newLead" class="btn btn-info btn-block ">Add New Lead</button>
          <div id="newLead" class="collapse" >
          <div class="adminForm">
            <div class="d-flex justify-content-center">
              <h3>New Lead</h3>
            </div>
            <form class="" action="admin.php" method="post">
              <div class="form-group">
                <label for="leadFirstName">First Name: </label>
                <input type="text" name="leadFirstName" id="leadFirstName" class="form-control">
              </div>
              <div class="form-group">
                <label for="leadLastName">Last Name: </label>
                <input type="text" name="leadLastName" id="leadLastName" class="form-control">
              </div>
              <div class="form-group">
                <label for="leadEmail">Email: </label>
                <input type="email" name="leadEmail" id="leadEmail" class="form-control">
              </div>
              <div class="form-group">
                <label for="leadPhone">Phone: </label>
                <input type="text" name="leadPhone" id="leadPhone" class="form-control">
              </div>
              <div class="form-group">
                <label for="leadLanguage">Language: </label>
                <select name="leadLanguage" class="form-control">
                  <option value="english">English</option>
                  <option value="spanish">Spanish</option>
                </select>
              </div>
              <div class="form-group">
                <label for="leadAddress">Property Address: </label>
                <input type="text" name="leadAddress" id="leadAddress" class="form-control">
              </div>

              <div class="form-group">
                <label for="leadPrice">Property Price: </label>
                <input type="number" name="leadPrice" id="leadleadPrice" class="form-control">
              </div>
              <div class="form-group">
                <label for="leadcommission">Commission: </label>
                <input type="number" name="leadcommission" id="leadcommission" class="form-control">
              </div>
              <div class="form-group submit-button d-flex justify-content-center">
                <button name="submit" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
        </div>
        <div class="col-lg-6">
          <button data-toggle="collapse" data-target="#newRealtor" class="btn btn-info btn-block ">Add New Realtor</button>
          <div id="newRealtor" class="collapse" >
          <div class="container d-flex-column  form-container adminForm">

            <div class="d-flex justify-content-center">
              <h3>New Realtor</h3>
            </div>
            <form class="" action="admin.php" method="post">
              <div class="form-group">
                <label for="realtorFirstName">First Name: </label>
                <input type="text" name="realtorFirstName" id="realtorFirstName" class="form-control">
              </div>
              <div class="form-group">
                <label for="realtorLastName">Last Name: </label>
                <input type="text" name="realtorLastName" id="realtorLastName" class="form-control">
              </div>
              <div class="form-group">
                <label for="realtorEmail">Email: </label>
                <input type="email" name="realtorEmail" id="realtorEmail" class="form-control">
              </div>
              <div class="form-group">
                <label for="realtorLanguage">Language: </label>
                <select name="realtorLanguage" class="form-control">
                  <option value="english">English</option>
                  <option value="spanish">Spanish</option>
                </select>
              </div>
              <div class="form-group submit-button d-flex justify-content-center">
                <button name="submit" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>

  </body>

</html>
