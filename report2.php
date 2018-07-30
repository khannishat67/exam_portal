<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
    <script src="qwerty.js"></script>
    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

    
<body  ng-app="myApp" ng-controller="reportController">


<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="margin-top: 0;">
<ul class="nav navbar-nav centered-navbar">
  <li><img src="college.png" height="75px"></li>
  <ul style="list-style: none;" >
    <br>
    <li style="color: white; font-size: 20px;">ST.THOMAS' COLLEGE OF ENGINNERING AND TECHNOLOGY</li>
    <li style="color: white; text-align: left;">4 D.H ROAD, KOLKATA-700023</li>
  </ul>
</ul>

<ul style="list-style: none" class="navbar-nav ml-auto">
    <li style="color: white;">REPORT GENERATION</li>
</ul>
</nav>
    <main role="main" class="container" style="padding-top: 50px;">

      <div style="margin-left: 20px; margin-right: 20px;" class="bg-light text-dark">
         
         <div>
            
             <div class="form-group">
                      <label for="sel1">Reports By Department:</label>
                      <select class="form-control" id="sel1"  ng-model="dept">
                       <option value="all">All Department</option>
                        <option value ="cse">Computer Science and Engineering</option>
                        <option value="ece">Electronics and Communication Engineering</option>
                        <option value="ee">Electrical Engineering</option>
                        <option value="it">Information Technology</option>
                      </select>
            </div>
         </div>
         
         
         <div class="container">
          <div>
            <h2 style="text-align:center;" >1st YEAR INDUCTION REPORT</h2> 
          </div>   
          <div>
            
            <a href="writexl.php" class="btn btn-success btn-lg" target="_blank" style="float:right;">Generate Excel </a>
            <a href="printToPdf.php" class="btn btn-lg btn-danger">Print PDF</a>
            <br>
            <br>
          </div>        
          
          <table class="table table-hover" style="margin-top: 20px;">
                  <thead>
                  <tr>
                    
                    <th>Reg_no</th>
                    <th>Name</th>
                    <th>Department </th>
                    <th>Physics</th>
                    <th>Chemistry</th>
                    <th>Maths</th>
                    <th>English</th>
                    <th>Total</th>
                  </tr></thead><tbody>
                  <tr ng-repeat="x in results | filter:filterExpression ">
                    <td>{{ x.reg_no }}</td>
                    <td>{{ x.name }}</td>
                    <td>{{ x.dept_name}}</td>
                    <td>{{ x.physics}}</td>
                    <td>{{x.chemistry}}</td>
                    <td>{{x.maths}}</td>
                    <td>{{x.english}}</td>
                    <td>{{x.total}}</td>
                  </tr></tbody>
                </table>
        </div>
          
      </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>