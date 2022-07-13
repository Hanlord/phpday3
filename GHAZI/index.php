<!-- ex1 -->
<?php
$num=0;
while($num<50):
    echo "Ghazi ALanzi ";
    $num++;
endwhile;
echo "<hr>";

// ex2
$number=[1,100,20,50,4,10,11,30,1,104];
foreach($number as $nu):
    echo $nu;
endforeach;
echo"<hr>";

// ex3
// $y=1;
// $rin=[rand()]];
// while($y<10):
//     echo $rin;
//     $y++;
// endwhile;
// echo"<hr>";



// EX4
$x=0;
$front="Front-End";
$back="Back-End";
$full="Full-Stack";
while($x<100){
    $x++; 
if($x%15==0 ){
    echo $full;
    

}
else if($x%3==0){
    echo $back;
   
}
else if($x%5==0){
    echo $front;
 
}
else{
    echo $x;
}

}
echo "<hr>";
// challenge



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require_once("bootstrap.php");
    
    ?>
    

</head>
<body>


<?php
         $host="localhost";
         $user="root";
         $pass="";
         $dbname="restaurant";
         $conn= mysqli_connect($host,$user,$pass,$dbname);
         $sql = "SELECT * FROM dishes";
         $result = mysqli_query($conn, $sql);
        
         if($_POST['add']){
         global $d;
         $d=$_POST['id'];
         }
        
             
         
          
echo "<div class='container'>
  <div class='row'>
    
  <form class='row g-3' method='POST' >

  <div class='col-auto'>
    <label for='inputPassword2' class='visually-hidden'>id</label>
    <input type='text' class='form-control' name='id' placeholder='id'>
  </div>
  <div class='col-auto'>
    <label for='inputPassword2' class='visually-hidden'>img</label>
    <input type='text' class='form-control' id='inputPassword2' placeholder='imgURL'>
  </div>
  <div class='col-auto'>
    <label for='inputPassword2' class='visually-hidden'>name</label>
    <input type='text' class='form-control' id='inputPassword2' placeholder='name'>
  </div>
  <div class='col-auto'>
    <label for='inputPassword2' class='visually-hidden'>Password</label>
    <input type='text' class='form-control' id='inputPassword2' placeholder='price'>
  </div>
  <div class='col-auto'>
    <label for='inputPassword2' class='visually-hidden'>Password</label>
    <input type='text' class='form-control' id='inputPassword2' placeholder='des'>
  </div>
  <div class='col-auto'>
      <button type='submit' class='btn btn-primary mb-3' name='add'>Add</button>
    </div>
    <div class='col-auto'>
      <button type='submit' class='btn btn-danger mb-3' name='del'>Del</button>
    </div>
  
    <div class='col-12'>
          <table class='table table-image'>
            <thead>
              <tr>
                <th scope='col'>
          </th>
                <th scope='col'>Image</th>
                <th scope='col'>Name</th>
                <th scope='col'>Price</th>
                <th scope='col'>meal_description	</th>
              
              </tr>
            </thead><tbody><tr> <th scope='row'></th> <td class='w-25'><img src='hhhhhh' ></td>
		      <td></td>
		      <td></td>
		      <td></td>
		     
		    </tr>
		   
		  </tbody>
		</table>   
    </div>
  </div>
</div>

</form>"


?> 
  

    
    
    
   

     
</body>
</html>
