// Count when a user signs up
function CountUsers() {
  let count = localStorage.getItem("userCount") || 0;   // Get previous count or use 0
  count = parseInt(count) + 1;                          // Add 1
  localStorage.setItem("userCount", count);             // Save new count back to localStorage
}
// This is the function your form will use on submit
function handleSignUp(event) {
  event.preventDefault();           // Stop the form from submitting
  CountUsers();                     // Count the user
  window.location.href = 'mainPage.php';  // Redirect to main page
}  


// Show how many users there are
function ShowUsers() {
  const count = localStorage.getItem("userCount") || 0;
  const userCountElement = document.getElementsByClassName("Users")[0];
  if (userCountElement) {
    userCountElement.innerText = parseInt(count).toLocaleString();//If such an element is found, it puts the number inside it (with commas if needed, like 1,000).
  }
}

//Automatically shows the number of users when the page finishes loading.
window.onload = function () {
  ShowUsers();
};


        
  function Add(button) {
    const courseDiv = button.parentElement;//Finds the container around the clicked button (the course section)
    const input = courseDiv.querySelector("input");
    const reviewsContainer = courseDiv.querySelector(".reviews");
    const review = input.value.trim();

    if (review !== "") {
      const reviewBox = document.createElement("div");
      reviewBox.className = "review-box";
      reviewBox.innerHTML = `<p>${review}</p>`;//adds the review inside a new <div> called reviews
      reviewsContainer.appendChild(reviewBox);
      input.value = "";//Adds it to the page and clears the input field.
    }
  }



