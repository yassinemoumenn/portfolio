<?php
    // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
    session_start ();

    // On récupère nos variables de session
    if (isset($_SESSION['name']) && isset($_SESSION['pwd'])) {
  
       
        ?>
        <!DOCTYPE html>
<html lang="en">
<?php include'include/navbar.php'; ?>


<?php include'include/sidebar.php'; ?>
    <div id="content-wrapper">

      <div class="container-fluid">



<!-- hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh -->

<?php include'addprojet.php'; ?>
<!-- 
      <-- Sticky Footer --> 
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © YASSINEMOUMEN 2020</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  



 



</body>

</html>
<?php
    }
    else {
        echo 'Les variables ne sont pas déclarées.';
    }
    ?>

