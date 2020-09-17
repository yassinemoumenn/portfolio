
<?php
include "datebase.php";

  
if(isset($_POST['uenter'])){
	$file=$_POST['uimg'];
	$git=$_POST['ugit'];
	$nmr=$_POST['unmr'];
	$name=$_POST['uname'];
	$categor=$_POST['ucategory'];
	echo $nmr;
    $sqll = "UPDATE port SET img = ?, link = ?, nom = ? , category=?  WHERE nmbr = ?"; 
    $q = $db_connect->prepare($sqll);	
    $q->execute(array($file,$git,$name,$categor,$nmr)); 


	
}
 ?>	

        <div>
          <form action="" method="post">
  
<div class="form-group">
    <label for="exampleInputEmail1">Links github</label>
    <input type="text" class="form-control" name="ugit" aria-describedby="emailHelp" placeholder="Links github">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">numero projet</label>
    <input type="text" class="form-control" name="unmr" placeholder="numero projet">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">name projet</label>
    <input type="text" class="form-control" name="uname" placeholder="name github">
  </div> 
<div class="input-group mb-3">
  <select class="custom-select" id="inputGroupSelect02" name="ucategory">
    <option selected>Choose...</option>
    <option value="seo">seo</option>
    <option value="marketing">marketing</option>
    <option value="mercedes">JAVASCRIPT</option>
    <option value="audi">OTHER</option>
    
  </select>
  <div class="input-group-append">
    <label class="input-group-text" for="inputGroupSelect02">filtre</label>
  </div>
</div>
 <div class="input-group">
            <span class="input-group-btn">
            <input type="file" name="uimg" class="form-control">
            </span>
            
</div>

  <div class="col-md-12 text-center">
                           <button type="submit" class="btn btn-primary" name="uenter">update projet</button>
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