<h2>Edit About Section</h2>
        <?php
  if(isset($_GET['msg'])){

         if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
        Successfully Updated !
      </div>
      <?php
      }
 }
?>
<!--Manage about me section -->

<form method="post" action="php/uabout.php">
      <div class="form-row">
              <div class="form-group col-md-12">
                  <label for="ptitle">Professional Heading</label>
                  <input type="text" name="ptitle" value="<?=$data['heading']?>" class="form-control" id="ptitle" placeholder="Professional Heading">
              </div>
              <div class="form-group col-md-12">
                  <label for="psubtitle">Subheading</label>
                  <input type="text" name="psubtitle" value="<?=$data['subheading']?>" class="form-control" id="psubtitle" placeholder="Subheading">
             </div>
              <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1">Short Description About You</label>
                  <textarea class="form-control" name="shortdesc" id="exampleFormControlTextarea1" rows="3" placeholder="Short Description About You"><?=$data['shortdesc'];?></textarea>
              </div>
            <div class="form-group col-md-12">
              <label for="exampleFormControlTextarea1">Long Description About You</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="longdesc" placeholder="long Description About You"><?=$data['longdesc'];?>
              </textarea>
            </div>

            <div class="form-group col-md-6">
              <label for="bd">Date of Birth</label>
              <input type="text" name="dob" value="<?=$data['dob']?>" class="form-control" id="dob" placeholder="Date of Birth">
            </div>

            <div class="form-group col-md-6">
              <label for="website">Website</label>
              <input type="text" name="website" value="<?=$data['website']?>" class="form-control" id="website" placeholder="Website">
            </div>
    </div>

   <input type="submit" name="save" class="btn btn-primary" value="Save Changes">
</form>


  <hr>
 <!--Manage Skills section -->

<h4 id="skillsection">Manage Skills</h4>

  <table class="table table-hover table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Skill</th>
              <th>Skill Expertise</th>
              <th>Action</th>
            </tr>
          </thead>


          <tbody>
         <?php
      $query2="SELECT * FROM skills";
      $queryrun2=mysqli_query($db,$query2);
      $count=1;
      while($data2=mysqli_fetch_array($queryrun2)){
          ?>

<tr>

<div class="modal fade" id="modal<?=$data2['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLabel">Edit Skill</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" id="skilleditbox">
       <form method="post" action="php/uskills.php">
                 <input type="hidden" name="id" value="<?=$data2['id']?>">
                  <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="website">Skill</label>
                          <input type="text" name="skill" value="<?=$data2['skill']?>" class="form-control" id="website" placeholder="Skill">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="website">Expertise</label>
                          <input type="text" name="score" value="<?=$data2['score']?>" class="form-control" id="website" placeholder="value">
                        </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-primary" name="uskills" value="Update">
                </div>

          </form>
        </div>
    </div>
  </div>
</div>
          <td>#<?=$count?></td>
          <td><?=$data2['skill']?></td>
          <td><?=$data2['score']?>%</td>
          <td>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?=$data2['id']?>">
         Edit</button>
           <a href="php/uskills.php?del=<?=$data2['id']?>"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
        Delete</button>
           </a>
          </td>
            </tr>
         <?php
          $count++;
          }
          ?>
     </tbody>
</table>


 <form action="php/uskills.php" method="post">
      <div class="form-row">
            <div class="form-group col-md-5">
              <label for="sn">Skill Name</label>
              <input type="text" name="skill" class="form-control" id="website" placeholder="skill" required>
            </div>
            <div class="form-group col-md-5">
              <label for="website">Expertise Level (Out of 100)</label>
              <input type="text" name="score" class="form-control" id="website" placeholder="value" required>
           </div>
           <div class="form-group col-md-2">
             <label class="text-white">submit</label>
              <input type="submit" name="addskill" class="btn btn-primary form-control" value="Add Skill">
           </div>
   </div>
</form>