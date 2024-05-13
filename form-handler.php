<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roma Schools</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
<section class="sub-header">
    <nav>
        <a href="index.html"><img src="images/logo.png" ></a>
        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="course.html">COURSE</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Contact us</h1>
</section>
<!---contact us-->
<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31911.738679484635!2d36.904061735324035!3d-1.1833953165115427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f3f09067bad99%3A0xf16d95cc142da70a!2sKenyatta%20University%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1710831036544!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fas fa-home"></i>
                <span>
                    <h5>Building Address</h5>
                    <p>Second line of address that has place, country</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>0711691237</h5>
                    <p>8AM TO 8PM</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <div>
                <i class="fas fa-envelope"></i>
                <span>
                    <h5>asaphwise@gmail.com</h5>
                    <p>Email us your query</p>
                </span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="contact-col">
            <form id="contactForm" action="form-handler.php" method="post">
                <input type="text" name="name" placeholder="Enter your name" required>
                <input type="email" name="email" placeholder="Enter your email address" required>
                <input type="text" name="subject" placeholder="Enter your subject" required>
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn red-btn">Send message</button>
            </form>  
        </div>
    </div>
</section>

<!--Footer-->
<section class="footer">
    <h4>About us</h4>
    <p>More info about the school</p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
    </div>
</section>

<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }

    document.getElementById("contactForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get form data
        var formData = new FormData(this);

        // Create a new XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Configure the request
        xhr.open("POST", "form-handler.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");

        // Define what happens on successful data submission
        xhr.onload = function() {
            if (xhr.status === 200) {
                // Parse response JSON
                var response = JSON.parse(xhr.responseText);
                // Display response message
                alert(response.message);
            } else {
                // Display error message
                alert('Request failed. Please try again later.');
            }
        };

        // Handle network errors
        xhr.onerror = function() {
            alert('Network Error. Please try again later.');
        };

        // Convert form data to JSON
        var jsonData = {};
        formData.forEach(function(value, key){
            jsonData[key] = value;
        });
        var json = JSON.stringify(jsonData);

        // Send form data as JSON
        xhr.send(json);
    });
</script>

</body>
</html>
