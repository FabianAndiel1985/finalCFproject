<?php include 'components/head.php';?>

<body>

  <?php include 'components/header.php';?>




    <!--   <section class="mb-4">
 -->
          <div class="row">

              <!--Grid column-->
              <div class="col-12 mb-md-0 mb-5">

                  <form id="createNewCourseForm"> <!-- FORM START -->

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="id" name="id" class="form-control">
                                  <label for="id" class="">id</label>
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" name="name" class="form-control">
                                  <label for="name" class="">Course name</label>
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="course_category" name="course_category" class="form-control">
                                  <label for="course_category" class="">Course category (either Fitness, Martial Art or Chill Out)</label>
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="course_hours" name="course_hours" class="form-control">
                                  <label for="course_hours" class="">course hours</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="description" name="description" class="form-control">
                                  <label for="description" class="">description</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->


                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="image_path" name="image_path" class="form-control">
                                  <label for="image_path" class="">image path</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

                        <!-- Sign in button -->
                    <button class="btn btn-info btn-block" type="submit" name="login_button">Add new course</button>

                  </form> <!-- FORM END -->

              </div>
              <!--Grid column-->

          </div>

   <!--    </section> -->

      <!--Section: Contact v.2-->




      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


       <script type="text/javascript">

        $("#createNewCourseForm").submit(function(event){


          var $form= $("#createNewCourseForm");

          var $inputs = $form.find("input");

          var serializedInputs = $form.serialize();

          console.log(serializedInputs);

          request = $.ajax({
           url: "server_side_new_course.php",
           type: "post",
           data: serializedInputs
          });

           request.done(function (response, textStatus, jqXHR){
             
              
              if (response == "OK") {
               alter("geht net");
              }

              else {
                window.location.href="main.php";
              }
              
              });

           request.fail(function (jqXHR, textStatus, errorThrown){
       
              console.error(
           "The following error occurred: "+
           textStatus, errorThrown
       );
   });



        });

       </script>









  <?php include 'components/footer.php';?>

  <?php include 'components/scripts.php';?>
   

</body>
</html>