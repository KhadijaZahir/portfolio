<?php

//variables
if(isset($_POST['submit'])){
  // $name = htmlspecialchars(strtolower(trim($_POST['name'])));
  // $email = htmlspecialchars(strtolower(trim($_POST['email'])));
  // $subject = htmlspecialchars(strtolower(trim($_POST['subject'])));
  // $message = htmlspecialchars(strtolower(trim($_POST['message'])));
  // Assign variacbles =====>   $name = $_POST['name'];
  $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);//Get name Value
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $subject = filter_var($_POST['subject'],FILTER_SANITIZE_STRING);
  $message = filter_var($_POST['message'],FILTER_SANITIZE_STRING);


//create array for errors

if(!preg_match("/^[A-Za-z .'-]+$/", $name)){
    $name_error = 'Invalid full name';
  }
  if(!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)){
    $email_error = 'Invalid email';
  }
  if(!preg_match("/^[A-Za-z .'-]+$/", $subject)){
    $subject_error = 'Invalid subjcet';
  }
  if(strlen($message)<=10){
    $message_error= 'message can`\'t be less than 10 characters';
  }
//other error
  if(strlen($name)<3){
    $name_error = 'name must be larger than 3 characters';
  }


  if(!isset($name_error) && !isset($subject_error) && !isset($email_error) && !isset($message_error)){
      // Message if mail has been sent
      // echo $send ='votre message à été envoyé, je vous répondrais dans meilleur délais, merci.';
      echo"<script>alert('votre message à été envoyé, je vous répondrais dans meilleur délais, merci.')</script>";
      //header("location: ./admin/php/contact.php");
      //end();
      /////////////////////////////////
      $query="INSERT INTO contact(cname,cemail,csubject,cmessage) ";
      $query.="VALUES('$name','$email','$subject','$message')";
      mysqli_query($db,$query);
      // $run = mysqli_query($db,$query);
    // if($run){
    //     echo 'Your message has been sent. Thank you!';
    // }
      //$error[]= 'votre message à été envoyé';

  }

  else{
      // Message if mail has been not sent
     //echo $notsent='votre message n\'a pas été envoyé veuillez réessayer!';
    echo"<script>alert('votre message n\'a pas été envoyé veuillez réessayer!')</script>";
      //$error[]= "votre message n\'a pas été envoyé veuillez réessayer!";
  }



///////////////

}

?>

<section id="contact" class="contact">
            <div class="container">

                      <div class="section-title">
                          <h2>Contact</h2>
                      </div>

                      <div class="row">
                        <!--bloc one of contact-->
                          <div class="col-lg-5 d-flex">
                              <div class="info">
                                  <div class="address">
                                      <i class="icofont-google-map"></i>
                                      <h4>Location:</h4>
                                      <p>Morocco - Fez</p>
                                  </div>

                                  <div class="email">
                                      <i class="icofont-envelope"></i>
                                      <h4>Email:</h4>
                                      <p><a href="mailto:zahir.khadija.yc@gmail">zahir.khadija.yc@gmail</a></p>
                                  </div>

                                  <div class="phone">
                                      <i class="icofont-phone"></i>
                                      <h4>Call:</h4>
                                      <p>0623211001</p>
                                  </div>
                              </div>

                          </div>

                    <!--bloc two of contact-->
                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex">
                        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required/>
                                    <p class="alertmsg"><?php if(isset($name_error)) echo $name_error; ?></p>

                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email" required/>
                                    <p class="alertmsg"><?php if(isset($email_error)) echo $email_error; ?></p>

                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="subject" required/>
                                    <p class="alertmsg"><?php if(isset($subject_error)) echo $subject_error; ?></p>

                                </div>
                                <div class="form-group">
                                    <textarea type="text" name="message" class="form-control" rows="10" placeholder="message" required></textarea>
                                    <p class="alertmsg"><?php if(isset($message_error)) echo $message_error; ?></p>

                                </div>

                            <div class="text-center"><button name="submit" type="submit" class="btn btn-primary">Send Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
