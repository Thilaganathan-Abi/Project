<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font file link-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    <!--Custom css file link-->
    <link rel="stylesheet" href="style.css">

    <title>CSC3132 Web Application Development Project </title>
</head>
<body>
    <header class="header">
        <!-- logo name  -->
        <a href="#" class="logo">Green Roots.</a>

        <!-- navbar icons-->
        <div class="ri-menu-line"></div>
        <!-- navbar link  -->
        <nav class="navbar">
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Event">Event</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!--Home section-->
    <section id="Home" class="Home">
        <div class="hero_container container">
            <div class="content_left">
               <h1 class="hero_txt">
                Plant Trees <br> To Save<br>The World.</h1>
               <div class="hero_icon">
                  <i class="ri-earth-line"></i>
      
                  <span class="hero_small-txt">To solve a world<br>from pollution</span>
               </div>
            </div>
      
            <div class="content_middle">
               <div class="hero_img"><img src="./img/image1.jpg" alt="plant"></div>
               <button class="cir_btn"><span class="cir_btn-txt">Let's Start<i class="ri-arrow-right-up-line"></i></span></button>

            </div>
      
            <div class="content_right">
               <div class="circle">
                  <div class="small_circle">
                     <i class="ri-service-line"></i>
                  </div>
                  <div class="inner_content">
                     <p>Volunteer</p>
                     <h3>Let's Contribute <br>To A Healthy<br>Environment.</h3>
                  </div>
                  </div>
            </div>
        </div>
    </section>


    <!--about-->
   <section id="About" class="About">
    <!-- about heading  -->
    <h1 class="heading">About Us</h1>
 
    <div class="row">
        <!-- about heading & text  -->
        <div class="content">
          <h2>Welcome to Green Roots!</h2>
            <p>
             At Green Roots, Much of the world is deteriorating through increasing deforestation and environmental degradation, and we give people the opportunity to get involved with grassroots tree-planting projects.
             We are here to bridge the gap between enthusiastic volunteers and the relevant local projects making it possible.<br>
             <br> Our digital platform connects any form of individual, organization, or community that is willing to take part 
             in the reforestation activity. We connect people of all ages, regardless of origin, religion, color, sex, or even physical condition, through effective communication and collaboration on this very important endeavor.
             
             We can plant trees together that will restore habitats and fight climate change. Every tree planted is an 
             inch closer to a healthy world with many more promising generations. Come with us to make the world 
             greener and more sustainable - tree by tree.
             </p>
        </div> 
 
        <!-- about images  -->
        <div class="images"><img src="./img/image3.png" alt=""></div>
    </div>
 </section>

 <!--Event-->

 <section id="Event" class="Event">
    <h1 class="heading">Our Events</h1>
 <div class="row">
      <div class="images">
          <img src="./img/image5.png" alt="">
      </div>
      <div class="content">
       <h2>Plant tree</h2>
       <p>planting trees helps improve air quality, reduce carbon dioxide, conserve water, and support wildlife.
          It contributes positively to the ecosystem and promotes sustainability.</p>
          <button class="nav_btn">
         <span class="nav_btn-txt">Read more</span>
      </button>
   </div>
 </div>
 
 <div class="row">
    <div class="images">
       <img src="./img/image6.png" alt="">
   </div>
   <div class="content">
    <h2>Maintain</h2>
    <p>Maintaining trees involves watering, pruning, and protecting them from pests to ensure healthy growth.</p>
    <button class="nav_btn">
         <span class="nav_btn-txt">Read more</span>
      </button>
 </div>
 </div>
 </section>


 <section id = "Contact" class = "Contact">
   <h1 class="heading">Register</h1>

   <div class = "row">
      <div class="images">
      <img src="./img/image8.png" alt="">
      </div>
      <div class="form-container">
      <form method = "POST" action = "insert.php">
         <label>Name:</label><br>
         <input type="text" name="name" required><br>
         
         <label>Email:</label><br>
         <input type="email" name="email" required><br>

         <label>Age:</label><br>
         <input type="number" name="age" required><br>

         <label>Phone Number:</label><br>
         <input type="text" name="number" required><br><br>

         <button class="nav_btn">
         <span class="nav_btn-txt">Submit</span>
      </button>

         <!--<input type="submit" value="Submit">-->
      </form>



      <h3>User Records</h3>
      <table border="1.5" >
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Phone Number</th>
        <th>Action</th>
    </tr>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "mydb");

    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn,$sql);

    $resultcheck = mysqli_num_rows($result);

    if($resultcheck>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['age']}</td>
                <td>{$row['number']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='delete.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>
            "; 
        }
    
    }
    ?>
</table>
   </div>
   </div>
 </section>


    <!--Jqueery file link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    

    <!--Icons file link-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
    integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="script.js"></script>

</body>
</html>