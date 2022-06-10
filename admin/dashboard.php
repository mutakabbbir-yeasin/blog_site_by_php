<?php include"header.php" ;  ?>

    <section class="main_inner">
      
    <div class="row">

      <div class="col-lg-3 py-3 sidebar">
        
        <div class="container">
          
         <h3>Admin Pannel</h3>

         <hr>

        </div>

        <div class="container">

          <div class="nav_icon mb-4 active">

            <a href="dashboard.html"> <i class="me-3 fa-solid fa-arrow-pointer"></i> Dashboard </a>
          
          </div>

          <div class="nav_icon mb-4">

            <a href="#"> <i class="fa-solid fa-check-to-slot me-3"></i> Post Request </a>
          
          </div>

          <div class="nav_icon mb-4">

            <a href="#"> <i class="fa-solid fa-upload me-3"></i> Add Publisher </a>
          
          </div>

          <div class="nav_icon mb-4">

            <a href="table.html"> <i class="fas fa-table me-3"></i> Data Table </a>
          
          </div>

          <div class="nav_icon mb-4">

            <a href="editor.html"> <i class="fas fa-home me-3"></i> Editor </a>
          
          </div>

          <div class="nav_icon mb-4">

            <a href="#"> <i class="fas fa-home me-3"></i> Home </a>
          
          </div>


        </div>

      </div>


        <!-- main content -->

        <div class="col-lg-9 py-3">
          
          <div class="container">


            
            <div class="row">
              
              <div class="col-lg-3">
                
               <div class="box">
                 
                 <i class="fa-solid fa-users"></i>

                 <h3>30</h3>

               </div>

              </div>


               <div class="col-lg-3">
                
               <div class="box">
                 
                 <i class="fa-solid fa-users"></i>

                 <h3>50</h3>

               </div>

              </div>


               <div class="col-lg-3">
                
               <div class="box">
                 
                 <i class="fa-solid fa-users"></i>

                 <h3>50</h3>

               </div>

              </div>

               <div class="col-lg-3">
                
               <div class="box">
                 
                 <i class="fa-solid fa-users"></i>

                 <h3>50</h3>

               </div>

              </div>

            </div>

          </div>

        </div>


      
    </div>

    </section>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- data table js -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <!-- editor js -->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>

    <script type="text/javascript">
   

      $(document).ready( function () {
          $('#table_id').DataTable();
      } )

    </script>

    <script>

    ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .then( editor => {
              console.log( editor );
      } )
      .catch( error => {
              console.error( error );
      } );
      
      </script>
  
  </body>
</html>