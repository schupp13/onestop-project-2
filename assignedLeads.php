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
<link rel="stylesheet" href="css/assignedLeads.css">
    <title>Assigned Leads</title>
  </head>
  <body>
    <div class="jumbotron vertical-align-center">
      <h1>Assigned Leads</h1>
      <p>Manage your leads</p>
    </div>

    <nav>
      <ul class="container nav-menu">
        <a href="admin.php" ><li >Admin Page</li></a>
        <a href="realtors.php"><li>One Stop Realtors</li></a>
        <a href="newLeads.php"><li>New Leads</li></a>
        <a href="assignedLeads.php"><li id="li-active">Assigned Leads</li></a>
        <a href="bucketLeads.php"><li>Bucket Leads</li></a>
        <a href="index.php"><li>Logout</li></a>
      </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card" style="width:70%">
            <img class="card-img-top" src="images/img_avatar1.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <h3>Your Leads</h3>
          <button type="button" class="btn btn-info btn-block">Unqulified</button>
          <div class="container unassigned-table-div">
            <table>
              <tr>
                <th>Customer Id</th>
                <th>Customer Name</th>
                <th>Property</th>
                <th>Customer Status</th>
              </tr>
              <tr>
                <td>5</td>
                <td>Mike Tyson</td>
                <td>114 main lane </td>
                <td>unass</td>
              </tr>
            </table>
         </div>
         <button type="button" class="btn btn-info btn-block">Made First Contact</button>
         <div class="container unassigned-table-div">
           <table>
             <tr>
               <th>Customer Id</th>
               <th>Customer Name</th>
               <th>Property</th>
               <th>Customer Status</th>
             </tr>
             <tr>
               <td>5</td>
               <td>Mike Tyson</td>
               <td>114 main lane </td>
               <td>unass</td>
             </tr>
           </table>
        </div>
        <button type="button" class="btn btn-info btn-block">Showed Property</button>
        <div class="container unassigned-table-div">
          <table>
            <tr>
              <th>Customer Id</th>
              <th>Customer Name</th>
              <th>Property</th>
              <th>Customer Status</th>
            </tr>
            <tr>
              <td>5</td>
              <td>Mike Tyson</td>
              <td>114 main lane </td>
              <td>unass</td>
            </tr>
          </table>
       </div>
       <button type="button" class="btn btn-info btn-block">In Contract</button>
       <div class="container unassigned-table-div">
         <table>
           <tr>
             <th>Customer Id</th>
             <th>Customer Name</th>
             <th>Property</th>
             <th>Customer Status</th>
           </tr>
           <tr>
             <td>5</td>
             <td>Mike Tyson</td>
             <td>114 main lane </td>
             <td>unass</td>
           </tr>
         </table>
      </div>
      <button type="button" class="btn btn-info btn-block">Sold</button>
      <div class="container unassigned-table-div">
        <table>
          <tr>
            <th>Customer Id</th>
            <th>Customer Name</th>
            <th>Property</th>
            <th>Customer Status</th>
          </tr>
          <tr>
            <td>5</td>
            <td>Mike Tyson</td>
            <td>114 main lane </td>
            <td>unass</td>
          </tr>
        </table>
     </div>
        </div>
      </div>
    </div>


  </body>
</html>
