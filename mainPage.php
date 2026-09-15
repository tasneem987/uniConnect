<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uniConnect</title>
    <link rel="stylesheet" href="css-mainPage.css">
    <script src="JS-countUsers.js"></script>
</head>
<body>
    <section>
    <div class="HEADER">
        <div class="logo">
        <span class="ICON"><ion-icon name="school-outline"></ion-icon></span>
        <h3>uniConnect</h3>
        </div>
        <nav>
            <a href="#Home">Home</a>
            <a href="#About">About</a>
            <a href="#Contact">Contact </a>
        </nav>
        <div class="icon" id="icon11">
        <ion-icon name="person-circle-outline"></ion-icon>
        </div>
    </div>
    <div class="PAGE" id="Home">
       <div  class="text-deco"> 
        <h3>Your Campus Community <span>Reimagined</span></h3>
        <h4>Community of <span class="Users">...</span> users</h4>
        <h4>Connect with students and professors, share course experiences, find study tips, and discover campus events—all in one place.</h4>
        
      
       <div class="buttons"> 
        <button class="login-btn" onclick="location.href='LoginPage.html'">LOGIN</button>
        <button class="learn-btn">LEARN MORE</button>
       </div>  </div>
       <img src="bg9.jpg" alt="">  
    </div>

    <div id="About" class="Third">
        <h3>What <span> uniConnect </span> Offers</h3>
        <h4>Everything you need to make the most of your academic experience, all in one platform.</h4>
    </div>
    <div class="Offers">
       <div onclick="location.href='CourseRating.php'">
        <span class="icon"><ion-icon name="book-outline"></ion-icon></span><br>
        <h4>Course Ratings & Reviews</h4>
        <h5>Share and browse honest reviews about courses to make informed decisions.</h5>
       </div>

       <div> 
       <span class="icon"><ion-icon name="calendar-outline"></ion-icon></span>
        <h4>Campus Events</h4>
        <h5>Discover, create, and RSVP to campus events happening around you.</h5>
        </div>
        
        <div>
        <span class="icon"><ion-icon name="chatbox-ellipses-outline"></ion-icon></span>
        <h4>Academic Forums</h4>
        <h5>Ask questions and participate in discussions about academic topics.</h5>
        </div>

       <div>
        <span class="icon"><ion-icon name="star-outline"></ion-icon></span>
        <h4>Professor Insights</h4>
        <h5>Get valuable advice directly from professors in your field of study.</h5>
        </div>
    </div>

    <div class="search">
        
         <span class="icon"><ion-icon name="search-circle-outline"></ion-icon></span>
        <input type="text" placeholder="Search..." />
        <button>Search</button>
    </div>

    <div class="recommended">
        <h5> <ion-icon name="star-outline"></ion-icon>You Might Know:</h5>
        <div class="recommended-cards">
        <div title="veiw profile">
            <img src="bg8.jpg" alt="">
            <h4 >Dr.Haissam El-Aawar</h4>
            <h6 >CSCI/CSIT coordinator, Bekaa campus. School of Arts and Sciences.</h6>
        </div>
        <div title="veiw profile">
            <img src="bg7.jpg" alt="">
            <h4>Dr.Ziad Kassam</h4>
            <h6>Instructor of Computer Science Department, Bekaa campus. School of Arts and Sciences.</h6>
        </div>
        <div title="veiw profile">
            <img src="bg6.jpg" alt="" >
            <h4>Tarek Al-Ahmed</h4>
            <h6>Second year student, Majored in Computer Science. Bekaa campus.</h6>
        </div>
        </div>
       
    </div>

    <div class="ready">
        <h4>Ready to enhance your university experience?</h4>
        <button class="login-btn" onclick="location.href='SignUpPage.html'" >SIGN UP</button>
    </div>

    <div class="last">
        <p>&copy; 2025 uniConnect. All rights reserved.</p>
        <nav><p>LEGAL:</p>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of service</a>
            <a href="#">Cookie Policy</a>
        </nav>
        <nav id="Contact"><p>TELEPHONE:</p>
            <a href="#">(+961)81697013</a>
            <a href="#">(+961)81356511</a>
        </nav>
         <form  class="search" method="post" action="php-users.php" align="left">
              <button type="submit">Show users</button>
          </form>
    </div>

    </section>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>