<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Rating & Reviews</title>
    <link rel="stylesheet" href="css-CourseRating.css">
    <script src="JS-countUsers.js"></script>
</head>
<body>
    <header>
        <div class="search">
         <span class="icon"><ion-icon name="search-circle-outline"></ion-icon></span>
        <input type="text" placeholder="Search course...." />
        <button onclick="SearchCourse()">Search</button>
        </div>
 <form method="post" action="php-courses.php" align="center">
              <button type="submit">Show All Availble Courses</button>
          </form>
        <div class="Offers">
            <div class="courses"> 
                 <h4>Web-Programming(CSCI390)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button> 
                     <p>Reviews:</p>
                     <div class="reviews"></div>
            </div>
            <div class="courses"> 
                 <h4>System and Network Administration(CSIT415)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
            <div class="courses"> 
                 <h4>Operating Management(BMIS360)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
            <div class="courses"> 
                 <h4>Communication Skills(ENGL251)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
            <div class="courses"> 
                 <h4>Operating System(CSCI430)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
            <div class="courses"> 
                 <h4>Network Security(CSCI362)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
            <div class="courses"> 
                 <h4>Computer Network(CSCI392)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
            <div class="courses"> 
                 <h4>Microcomputer Support(CSIT381)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
            <div class="courses"> 
                 <h4>Software Engineering(CSCI380)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
            <div class="courses"> 
                 <h4>Internetworking and Routing Protocols(CSIT430)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
             <div class="courses"> 
                 <h4>Web Programming Advanced(CSCI426)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
             <div class="courses"> 
                 <h4>	Mobile Application(CSCI410)</h4>
                     <input type="text" placeholder="Enter Your Review"> <button onclick="Add(this)">submit</button>
                     <p>Reviews:</p>
                     <div class="reviews"></div> 
            </div>
          
        </div>
        
    </header>
    

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>