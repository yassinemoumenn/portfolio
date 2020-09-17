
<?php
include "datebase.php";
// $nameError = $descriptionError = $priceError = $categoryError = $imageError = $name = $description = $price = $category = $image = "";
 $nameError = $descriptionError =  $priceError =   $categoryError = "";

  
if(isset($_POST['enter'])){
	$file=$_POST['img'];
	$git=$_POST['git'];
	$nmr=$_POST['nmr'];
	$name=$_POST['name'];
	$categor=$_POST['category'];
	
	$sql = "INSERT INTO `port` VALUES (?,?,?,?,?)";
	$stmt = $db_connect->prepare($sql);
	$stmt->execute(array($file,$git,$nmr,$name,$categor));


	if(empty($file)) 
	{
		$nameError = 'Ce champ ne peut pas être vide';
  
	}
	if(empty($git)) 
	{
		$descriptionError = 'Ce champ ne peut pas être vide';
	 
	} 
	if(empty($nmr)) 
	{
		$priceError = 'Ce champ ne peut pas être vide';
	 
	} 
	if(empty($name)) 
	{
		$categoryError = 'Ce champ ne peut pas être vide';
	}  
	// }else{
	// 	echo"eror";
	// }
	
	// echo $categor;
}
 ?>	

        <div>
          <form action="addproject.php" method="post">
  
<div class="form-group">
    <label for="exampleInputEmail1">Links github</label>
    <input type="text" class="form-control" name="git" aria-describedby="emailHelp" placeholder="Links github">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">numero projet</label>
    <input type="text" class="form-control" name="nmr" placeholder="numero projet">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">name projet</label>
    <input type="text" class="form-control" name="name" placeholder="name github">
  </div> 
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02" name="category">
    <option selected>Choose...</option>
    <option value="webdesign">HTML</option>
    <option value="seo">CSS</option>
    <option value="marketing">JAVASCRIPT</option>
    <option value="other">OTHER</option>
    
  </select>
  <div class="input-group-append">
    <label class="input-group-text" for="inputGroupSelect02">filtre</label>
  </div>
</div>
 <div class="input-group">
            <span class="input-group-btn">
            <input type="file" name="img" class="form-control">
            </span>
            
</div>

  <div class="col-md-12 text-center">
                           <button type="submit" class="btn btn-primary" name="enter">Send message</button>
                        </div>
</form>

        </div>




<!-- hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh-->
<style type="">
  .btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>