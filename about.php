<?php
include 'protect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - RENTAX</title>
  <link rel="stylesheet" href="about.css">
</head>
<body>

<div class="about-section" style="background: url('images/about1.jpg');">
    <nav>
        <div class="logo-nav">
            <h1>Cardez</h1>
            <div class="menu">
                <a href="home.php">Home</a>
                <a href="#">About</a>
            </div>
        </div>
        <div class="icons">
            <img class="notification" src="images/n1.png" alt="Notification Icon">
            <img class="profile" src="images/profile.png" alt="Profile Icon">
        </div>
    </nav>
   
    <h1 style="color: white;">About<span style="color: black;"> Us </span></h1>
</div>


<div class="intro-section">
    <div class="intro-text">
      <h2>Cardez</h2>
      <p>We Are More Than A Car Rental Company</p>
      <p class="p1">At Cardez, we transcend the traditional boundaries of a car rental company. We're not just about providing vehicles; we're about delivering experiences. With a commitment to exceptional service, reliability, and innovation, we strive to redefine the car rental experience.</p>
      <p class="p1"> Whether you're embarking on a thrilling road trip or simply need a reliable vehicle for your daily commute, we're here to exceed your expectations. Our dedication to customer satisfaction and our passion for cars set us apart. Discover the difference with Cardez, where every journey begins with excellence.</p>
      <ul>
        <li>Car repair</li>
        <li>Multiple services</li>
      </ul>
    </div>
    <div class="image-wrapper">
      <img src="images/img2.png" alt="Your Image">
    </div>
  </div>
  

<div class="rent-section">
    <h2>RENT YOUR CAR</h2>
    <p>Interested in Renting? Don't hesitate and send us a message.</p>
    <div class="buttons">
        <a href="#last" class="whatsapp-btn">Contact</a>
        <a href="home.html" class="rent-now-btn">Rent Now</a>
    </div>
  </div>
  

<div class="contact-section">
    <div class="contact-info">
      <div class="contact-details">
        <img src="images/phone-circle.png" alt="Contact Image" class="contact-image">
        <div class="contact-text">
          <h2>Call Us</h2>
          <p class="contact-number">+91 8303456782</p>
        </div>

      </div>
      <div class="contact-details">
        <img src="images/mail_logo.jpg" alt="">
        <div>
            <h2>Write to Us</h2>
            <p class="contact-email">sravani@cartez.com</p>
        </div>
      </div>
      <div class="contact-details">
        <img src="images/address_logo.png" alt="">
        <div>
        <h2>Address</h2>
        <p>Harnathapuram, Nellore  Office 123</p>
        </div>
      </div>
    </div>
    <div class="quick-links">
        <h2>Cardez</h2>
        <p>"Rent a car easily. We provide hassle-free car rental services tailored to your needs. Booking with us is quick and simple. Enjoy comfortable rides with our dependable vehicles."</p>
    </div>
    <div>
      <h2>Quick Links</h2>
      <ul>
        <li><a style="text-decoration: none;" href="about.html">About</a></li>
        <li><a style="text-decoration: none; color: black;" href="home.html">Cars</a></li>
        <li><a style="text-decoration: none;" href="contact.html">Contact</a></li>
      </ul>
    </div>
    <div class="subscribe">
      <h2>Subscribe</h2>
      <p>Want to be notified about our services. Just sign up and we'll send you a notification by email.</p>
      
    </div>
  </div>

  <div id="last">
    <div class="full">
        <h3>Drop a Message</h3>
        <div class="lt">
            <form class="form-horizontal" method="post" action="#" id="contactForm">
                <div class="form-group" id="nameGroup">
                    <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name" value="" required />
                </div>
                <div class="form-group" id="emailGroup" style="display: none;">
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" value="" required />
                </div>
                <div class="form-group" id="messageGroup" style="display: none;">
                    <textarea class="form-control" rows="10" placeholder="Enter your query" name="message" required></textarea>
                </div>
                <button class="btn btn-primary send-button" type="submit" id="submitButton">
                    <span class="send-text">SEND</span>
                </button>
                <div id="successMessage" style="display: none;">Your message has been successfully sent.</div>
            </form>
        </div>
    </div>
</div><br><br><br>

<script>
    document.getElementById("name").addEventListener("input", function () {
        var name = document.getElementById("name").value;

        if (name.trim() !== "") {
            document.getElementById("emailGroup").style.display = "block";
        } else {
            document.getElementById("emailGroup").style.display = "none";
            document.getElementById("messageGroup").style.display = "none";
        }
    });

    document.getElementById("email").addEventListener("input", function () {
        var email = document.getElementById("email").value;

        if (email.trim() !== "") {
            document.getElementById("messageGroup").style.display = "block";
        } else {
            document.getElementById("messageGroup").style.display = "none";
        }
    });

    document.getElementById("contactForm").addEventListener("submit", function (event) {
        event.preventDefault(); 

        var formData = new FormData(this);

        fetch('contact.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                document.getElementById("successMessage").style.display = "block";
                document.getElementById("successMessage").innerText = data.message;
                document.getElementById("contactForm").reset();
                document.getElementById("emailGroup").style.display = "none";
                document.getElementById("messageGroup").style.display = "none";
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('There was an error submitting your message.');
        });
    });
</script>
</body>
</html>
