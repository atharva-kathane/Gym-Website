<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymWebsite</title>
    <link rel="shortcut icon" type="image" href="/GymWebsite/Images/Re_logo.jpg" style="height: 200px; width: 200px;">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/GymWebsite/styles.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="manifest" href="./manifest.json" />

</head>


<body>
    <div style="display: flex; justify-content: space-between; width: 100%;">
        <div>
            <h2><strong>GymWebsite.</strong></h2>
        </div>
        
        <div style="margin-right: 500px;">
            <a href="/GymWebsite/about_us.html"  class="btn about_us">ABOUT US</a>
            <a href="/GymWebsite/WorkoutPlan.html" class="btn about_us">WORKOUT PLANS</a>
            <a href="/GymWebsite/DietPlan.html" class="btn about_us">DIET PLANS</a>
            <a href="/GymWebsite/Store_Index.html" class="btn shop">SHOP</a>          
        </div>
    </div>
    
    
    <!--SLOGAN-->
    <br>
    <br>
    <p id="slogan">CONCEIVE. BELIEVE. ACHIEVE.</p>
    <br>
    <br>
    <br>

    <!-- S1 -->
    <p class="c1">The quality of your health determines the quality of your life<br>and nothing is more important than that.</p>

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin: 100px;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/GymWebsite/Images/Deadlift1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/GymWebsite/Images/Front_Squat.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/GymWebsite/Images/Leg_Press.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <p class="c1" style="text-decoration-line: underline; text-decoration-style: solid; text-decoration-color: red;">WORKOUT PLANS</p>
    <br>
    <br>

    <!-- WORKOUT PLANS CARDS -->
    <div style="display: flex; justify-content: space-between; width: 100%; margin-left: 50px;">
      <div class="card" style="width: 18rem;">
        <img src="/GymWebsite/Images/Yoga_card.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Different types of Yoga</h5>
          <p class="card-text">The health benefits of a regular yoga practice are widely known. Yoga can improve strength and flexibility, benefit heart health....</p>
          <a href="#" class="btn btn-primary" style="float: left;">Learn More</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="/GymWebsite/Images/PendlayRows_card.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">7 to Strong Challenge</h5>
          <p class="card-text">What could you do in seven minutes? We know what you’re thinking: Not a lot. Except you’re wrong, because seven minutes is ...</p>
          <a href="#" class="btn btn-primary" style="float: left; margin-top: 26px;">Learn More</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="/GymWebsite/Images/Balance_card.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">13 Exercises for Balance</h5>
          <p class="card-text">Finding balance in all areas of your life is the way forward. This includes developing balance in your body. Improving balance...</p>
          <a href="#" class="btn btn-primary" style="float: left;">Learn More</a>
        </div>
      </div>
      <div class="card" style="width: 18rem; margin-right: 100px;">
        <img src="/GymWebsite/Images/Dips_card.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">How to Do Dips</h5>
          <p class="card-text">Dips are a compound, body-weight exercise. You do Dips by first raising yourself on two dip bars with straight arms. </p>
          <a href="#" class="btn btn-primary" style="float: left; margin-top: 30px;">Learn More</a>
        </div>
      </div>
    </div>

    <br>
    <a class="c2" style="float: right; margin-right: 50px; text-decoration: none;" href="/GymWebsite/WorkoutPlan.html">Read More ...</a>
    <br>
    <br>

    <!-- DIET PLANS CARDS-->
    <p class="c1" style="text-decoration-line: underline; text-decoration-style: solid; text-decoration-color: red;">DIET PLANS</p>

    <div style="display: flex; justify-content: space-between; width: 100%; margin-left: 50px;">
      <div class="card" style="width: 18rem;">
        <img src="/GymWebsite/Images/Bananas_card.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Is banana good for weight loss?</h5>
          <p class="card-text">Bananas are a healthful addition to a balanced diet for weight loss, as they provide a range of vital nutrients and are a good source of fiber. Bananas make an....</p>
          <a href="#" class="btn btn-primary" style="float: left;">Learn More</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="/GymWebsite/Images/Veg_card.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">6 Types of Vegetarian Diets</h5> 
          <br>
          <p class="card-text">Vegetarian diets have grown in popularity, especially over the last several years. People often consider this way of eating — emphasizing plant foods over animal products.....</p>
          <a href="#" class="btn btn-primary" style="float: left;">Learn More</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="/GymWebsite/Images/VitaminD_card.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Can Vitamin D Lower Your Risk of COVID-19?</h5>
          <p class="card-text">Vitamin D is necessary for the proper functioning of your immune system — which is your body’s first line of defense against infection and disease....</p>
          <a href="#" class="btn btn-primary" style="float: left;">Learn More</a>
        </div>
      </div>
      <div class="card" style="width: 18rem; margin-right: 100px;">
        <img src="/GymWebsite/Images/Pizza_card.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">8 Foods and Beverages to Avoid with Arthritis</h5>
          <p class="card-text">Arthritis is a common health condition involving chronic inflammation in your joints. It causes pain and damage to joints, bones, and other body parts.... </p>
          <a href="#" class="btn btn-primary" style="float: left;">Learn More</a>
        </div>
      </div>
    </div>

    <br>
    <a class="c2" style="float: right; margin-right: 50px; text-decoration: none;" href="/GymWebsite/DietPlan.html">Read More ...</a>
    <br>
    <br>
    
    <!-- MEMBERSHIP FORM -->
    <p class="c1" style="text-decoration-line: underline; text-decoration-style: solid; text-decoration-color: red;">MEMBERSHIP FORM</p>
    <br>
    <br>
    <br>

    <div class="container">
      <form  class="form" id="form" action="/RESHAPE/connection1.php" method="post">
        <div class="form-control" style="margin-top: 10px;">
          <label>Name</label>
          <input type="text" name="user_name" style="width: 200px" required>
        </div>

        <div class="form-control" style="margin-top: 5px;">
          <label>Age <i style="color:red;font-size:smaller">must be between 14-75(both included)</i></label>
          <input id="txtage" type="number" name="age" style="width: 200px" required>
        </div>

        <div class="form-control" style="margin-top: 5px;">
          <label>Gender</label>
          <br>
          <select name="gender" style="width: 200px" required>
            <option selected hidden value="">Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="na">Prefer not to mention</option>
          </select>
        </div>

        <div class="form-control" style="margin-top: 5px;">
          <label>Phone Number <i style="color:red;font-size:smaller">max digits=10</i></label>
          <input id="txtphone"  type="number" name="phone_number" style="width: 200px" required>
        </div>
      
        <div class="form-control" style="margin-top: 5px;">
          <label>Email</label>
          <input type="email"  style="width: 200px" name="email" required>
        </div>
      
        <div class="form-control" style="margin-top: 5px;">
          <label>Workout Program</label>
          <br>
          <select name="workout_program" style="width: 200px" required>
            <option selected hidden value="">Select Workout Program</option>
            <option value="Yoga">Yoga</option>
            <option value="Cardio">Cardio</option>
            <option value="Pilates">Pilates</option>
            <option value="Weight Training">Weight Training</option>
            <option value="CrossFit">CrossFit</option>
          </select>
        </div>
      
        <div class="form-control" style="margin-top: 5px;">
          <label>Time Slot</label>
          <br>
          <select name="time_slot" style="width: 200px" required>
            <option selected hidden value="">Select time slot</option>
            <option value="Morning 1">5:30am - 7:00am</option>
            <option value="Morning 2">7:30am - 9:00am</option>
            <option value="Morning 3">9:30am - 11:00am</option>
            <option value="Afternoon">2:00pm - 3:30pm</option>
            <option value="Evening 1">4:30pm - 6:00pm</option>
            <option value="Evening 2">6:30pm - 8:00pm</option>
      
          </select>
        </div>
      
        <div class="form-control" style="margin-top: 5px; margin-bottom: 10px;">
          <label>Membership</label>
          <br>
          <select name="membership_period" style="width: 200px" required>
            <option selected hidden value="">Select Membership</option>
            <option value="One month">One Month (Rs.1000)</option>
            <option value="Three months">Three Months (Rs.2700)</option>
            <option value="Six months">Six Months (Rs.5000)</option>
            <option value="One year">One Year (Rs.9000)</option>
          </select>
        </div>
      
        <button value="submit">SUBMIT BUTTON</button>
        </form>
      
    </div>
    <br>

    <!-- FOOTER -->
    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div>
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i> GymWebsite.
              </h6>
              <p>
                We at GymWebsite. help you to find the best workout plan at the most affordable rates and flexible timings.
                We have made available the best workouts in each segment for our viewers absolutely free!
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Products
              </h6>
              <p>
                <a href="Store_Index.html" class="text-reset" style="text-decoration: none;">Equipments</a>
              </p>
              <p>
                <a href="Store_Index.html" class="text-reset" style="text-decoration: none;" >Supplements</a>
              </p>
              <p>
                <a href="#!" class="text-reset" style="text-decoration: none;">Vue</a>
              </p>
              <p>
                <a href="#!" class="text-reset" style="text-decoration: none;">Laravel</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p>
                <a href="Store_Index.html" class="text-reset" style="text-decoration: none;"">Shop</a>
              </p>
              <p>
                <a href="DietPlan.html" class="text-reset" style="text-decoration: none;">Diet Plans</a>
              </p>
              <p>
                <a href="WorkoutPlan.html" class="text-reset" style="text-decoration: none;">Workout Plans</a>
              </p>
              <p>
                <a href="about_us.html" class="text-reset" style="text-decoration: none;">About Us</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Contact
              </h6>
              <p><i class="fas fa-home me-3"></i> Chembur, Mumbai - 400071</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@GymWebsite.com
              </p>
              <p><i class="fas fa-phone me-3"></i> +91 9765784715</p>
              <p><i class="fas fa-print me-3"></i> +91 8828819100</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright: GymWebsite.
      </div>
      <!-- Copyright -->
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="./app.js"> </script>
</body>
</html>



