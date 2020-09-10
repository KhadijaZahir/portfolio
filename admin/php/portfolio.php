<h2>Edit Portfolio Section</h2>
        <?php
        //$_GET used to collect val from html form using method get
        if(isset($_GET['msg'])){

        if($_GET['msg']=='updated'){
     ?>
     <div class="alert alert-success text-center" role="alert">
     Project Successfully Added !
     </div>
     <?php
    }
     if($_GET['msg']=='error'){
     ?>
     <div class="alert alert-danger text-center" role="alert">
     something wrong with your image please check type or size !
     </div>
     <?php
 }
}
?>
<!--enctype="multipart/form-data specify which content type to use when submitting the form-->
<form method="post" action="php/uportfolio.php" enctype="multipart/form-data">
 <div class="form-row">
         <div class="form-group col-md-6">
             <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
              <div class="custom-file">
               <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
               <label class="custom-file-label" for="projectpic">Choose Pic...</label>
             </div>
        </div>

        <div class="form-group col-md-6 mt-auto">
           <label for="name">Project Name</label>
           <input type="name" name="projectname" class="form-control" id="name" placeholder="Project Name">
         </div>

         <div class="form-group col-md-12">
           <label for="email">Project Link</label>
           <input type="text" name="projectlink" class="form-control" id="email" placeholder="Project Link">
         </div>
         <div class="form-group col-md-2 ml-auto">
             <input type="submit" name="addtoportfolio" class="btn btn-primary" value="Add To Portfolio">
         </div>
   </div>
</form>



<table class="table table-hover table-sm">
         <thead>
           <tr>
             <th>Id</th>
             <th>Project Image</th>
             <th>Project Name</th>
             <th>Action</th>
           </tr>
         </thead>


         <tbody>
        <?php
         $query2="SELECT * FROM portfolio";
         $queryrun2=mysqli_query($db,$query2);
         $count=1;
         while($data2=mysqli_fetch_array($queryrun2)){
        ?>
    <tr>
<!-- edit-->

      <form class ="form-horizontal" id="modal" action="php/uportfolio.php" method ="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$data2['id']?>">
        <fieldset>
          <legend>UPDATE POST</legend>
    <div class="form-row">

          <div class="form-group col-md-12">
              <img src="../front/img/<?=$data2['projectpic']?>" class="sizeImg img-thumbnail">
          </div>
        <div class="form-group col-md-6">
                <label>Project Screenshot/Image (Minimum 600px X 600px, Maxsize 2mb)</label>
                <div class="custom-file">
                  <input type="file" name="projectpic" class="custom-file-input" id="profilepic">
                  <label class="custom-file-label" for="projectpic">Choose Pic...</label>
                </div>
          </div>
          <div class="form-group col-md-6 mt-auto">
             <label for="name">Project Name</label>
             <input type="name" name="projectname" value="<?=$data2['projectname']?>" class="form-control" id="name" placeholder="Project Name">
           </div>



           <div class="form-group col-md-12">
             <label for="email">Project Link</label>
             <input type="text" name="projectlink" value="<?=$data2['projectlink']?>" class="form-control" id="email" placeholder="Project Link">
           </div>
    </div>

          ///////////
          <div class="row">
               <div class="col-md-6">
                   <div class="form-group">
                      <div class="col-lg-10">
                          <input type="submit" name="pupdate" value="Update" class="btn btn-primary">
                        <a href="?editportfolio=true" class="btn btn-primary">Back</a>
                      </div>
                      </div>
               </div>
          </div>


            </fieldset>
      </form>

      <!-- edit-->



                         <!-- row one-->
                         <td>#<?=$count?></td>
                         <!-- row two-->
                         <td><img src="../front/img/<?=$data2['projectpic']?>" class="sizeImg img-thumbnail"></td>
                       <!-- row three-->
                         <td><?=$data2['projectname']?></td>
                        <!-- row four-->
                        <td>
                        <a href="<?=$data2['projectlink']?>"> <button type="button" class="btn btn-success btn-sm">
                 Visit</button></a>

                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
                 Edit</button>

                         <a href="php/uportfolio.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger btn-sm">
                 Delete </button></a>
                       </td>
           </tr>
        <?php
        $count++;
         }
         ?>
         </tbody>

</table>
