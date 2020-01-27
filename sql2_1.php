<html>
  <head>
    <style type="text/css">
      table, th, td {
        border: 1px solid black;
      }
      #container { overflow: hidden; }
      #floatLeft{
        float:left;
        width:33%;
      }
      #floatRight{
        float:right;
      }
    </style>
  </head>
  <body>
    <h2>Click on the table in which you want to insert the data:</h2>
    <button id="codeinsert">insert into emp_code_table</button>
    <button id="salaryinsert">insert into emp_sal_table</button>
    <button id="detailsinsert">insert into emp_details_table</button>
    <br>
    <h2>Click on the table which you want to see:</h2>
    <button id="codeshow">show emp_code_table</button>
    <button id="salaryshow">show emp_sal_table</button>
    <button id="detailsshow">show emp_details_table</button>
    <br><br>
    <div id="container">
      <div id="floatLeft">
        <i id="codeshowing"></i>
      </div>
      <div id="floatLeft">
        <i id="salaryshowing"></i>
      </div>
      <div id="floatLeft">
        <i id="detailsshowing"></i>
      </div>
    </div>
    <br><br>
    1. To list all employee first name with salary greater than 50k.<br>
    <button id="q1">Get Answer</button><br>
    <i id="a1"></i>
    <br>
    2. To list all employee last name with graduation percentile greater than 70%.<br>
    <button id="q2">Get Answer</button><br>
    <i id="a2"></i>
    <br>
    3. To list all employee code name with graduation percentile less than 70%.<br>
    <button id="q3">Get Answer</button><br>
    <i id="a3"></i>
    <br>
    4. To list all employee’s full name that are not of domain Java.<br>
    <button id="q4">Get Answer</button><br>
    <i id="a4"></i>
    <br>
    5. To list all employee_domain with sum of it's salary.<br>
    <button id="q5">Get Answer</button><br>
    <i id="a5"></i>
    <br>
    6. The above query again but dont include salaries which is less than 30k.<br>
    <button id="q6">Get Answer</button><br>
    <i id="a6"></i>
    <br>
    7. To list all employee id which has not been assigned employee code.<br>
    <button id="q7">Get Answer</button><br>
    <i id="a7"></i>
    <br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
     $(document).ready(function(){
       $("#q1").click(function(){
         $("#a1").html('<?php include("sql2_q1.php");?>')
       })
       $("#q2").click(function(){
        $("#a2").html('<?php include("sql2_q2.php");?>')
       })
       $("#q3").click(function(){
        $("#a3").html('<?php include("sql2_q3.php");?>')
       })
       $("#q4").click(function(){
        $("#a4").html('<?php include("sql2_q4.php");?>')
       })
       $("#q5").click(function(){
        $("#a5").html('<?php include("sql2_q5.php");?>')
       })
       $("#q6").click(function(){
        $("#a6").html('<?php include("sql2_q6.php");?>')
       })
       $("#q7").click(function(){
        $("#a7").html('<?php include("sql2_q7.php");?>')
       })
       $("#codeshow").click(function(){
        $("#codeshowing").html('<?php include("sql2_codeshow.php");?>')
       })
       $("#salaryshow").click(function(){
        $("#salaryshowing").html('<?php include("sql2_salaryshow.php");?>')
       })
       $("#detailsshow").click(function(){
        $("#detailsshowing").html('<?php include("sql2_detailsshow.php");?>')
       })
       $("#codeinsert").click(function(){
         location.href="sql2_codeinsert.php";
       })
       $("#salaryinsert").click(function(){
         location.href="sql2_salaryinsert.php";
       })
       $("#detailsinsert").click(function(){
         location.href="sql2_detailsinsert.php";
       })
     })
    </script>
  </body>
</html>
