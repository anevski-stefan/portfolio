<?php

if(isset($_POST['submit'])){
  $name = $_POST['name']; 
  $subject = $_POST['subject']; 
  $email = $_POST['email']; 
  $message = $_POST['message']; 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stefan Anevski</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="default.css" />
    <link id="theme-style" rel="stylesheet" href="">
  </head>
  <body>
    <section class="s1">
      <div class="main-container">
        <div class="greeting-wrapper">
          <h1>Hi, I'm Stefan Anevski</h1>
        </div>

        <div class="intro-wrapper">
          <div class="nav-wrapper">
            <div class="dots-wrapper">
              <div id="dot-1" class="browser-dot"></div>
              <div id="dot-2" class="browser-dot"></div>
              <div id="dot-3" class="browser-dot"></div>
            </div>

            <ul id="navigation">
              <li><a href="#contact_part">Contact</a></li>
            </ul>
          </div>

          <div class="left-column">
            <img
              id="profile_pic"
              src="images/profile_pic.jpg"
              alt="profile picture"
            />
            <h5 style="text-align: center; line-height: 0">
              Personalize Theme
            </h5>

            <div id="theme-option-wrapper">
              <div data-mode="light" id="light-mode" class="theme-dot"></div>
              <div data-mode="blue" id="blue-mode" class="theme-dot"></div>
              <div data-mode="green" id="green-mode" class="theme-dot"></div>
              <div data-mode="purple" id="purple-mode" class="theme-dot"></div>
            </div>

            <p id="settings-note">
              *Theme settings will be saved for<br />
              your next visit
            </p>
          </div>

          <div class="right-column">
            <div id="preview-shadow">
              <div id="preview">
                <div id="corner-tl" class="corner"></div>
                <div id="corner-tr" class="corner"></div>
                <h3>What I Do</h3>
                <p>
                  I was a lead developer in a past life, now I enjoy teaching
                  courses.
                </p>
                <div id="corner-tr" class="corner"></div>
                <div id="corner-bl" class="corner"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="s2">
      <div class="main-container">
        <div class="about-wrapper">
          <div class="about-me">
            <h4>More about me</h4>
            <p>
              I build new projects just to tickle my brain and love teaching
              others how they're made.
            </p>
            <p>
              While I keep busy teaching courses, I still take interviews in
              search of a great team & projects that interest me.
            </p>

            <hr />

            <h4>TOP EXPERTISE</h4>

            <p>
              Fullstack developer with primary focus on Django + React:
              <a target="_blank" href="Resume.pdf">Download Resume</a>
            </p>

            <div id="skills">
              <ul>
                <li>Java</li>
                <li>Nodejs</li>
                <li>Express</li>
                <li>Mysql</li>
                <li>PHP</li>
                <li>OOP</li>
                <li>MongoDB</li>
                <li>Ajax</li>
              </ul>

              <ul>
                <li>Bootstrap</li>
                <li>Git</li>
                <li>Responsive UI Design</li>
                <li>Heroku</li>
                <li>HTML/CSS</li>
                <li>JavaScript</li>
                <li>Jquery</li>
                <li>Wordpress</li>
              </ul>
            </div>
          </div>
          <div class="social-links">
            <img
              id="social_img"
              src="images/following.jpg"
              alt="Follow picture"
            />
            <h3>Find me on Facebook, Linkedin or Skype</h3>
            <span>Facebook: <a target="_blank" href="https://www.facebook.com/anevskis/">Stefan Anevski</a></span>
            <br />
            <span>Linkedin: <a target="_blank" href="https://www.linkedin.com/in/stefan-anevski-ab4712177">Stefan Anevski</a></span>
            <br />
            <span>Skype: <a target="_blank" href="https://join.skype.com/invite/IOB5XpvXO4Fv">stefan.anevski8</a></span>
          </div>
        </div>
      </div>
    </section>

    <section class="s1">
      <div class="main-container">
        <h3 style="text-align: center">Some of my past projects</h3>
        <div class="post-wrapper">
          <div>
            <div class="post">
              <img
                class="thumbnail"
                src="images/project1.png"
                alt="Project 1 Picture"
              />
              <div class="post-preview">
                <h6 class="post-title">Note Taking App</h6>
                <p class="post-intro">
                  Designed build & maintained a the lab management system for
                  FOI Laboratories
                </p>
                <a href="post.html">Link to the app</a>
              </div>
            </div>
          </div>
          <div>
            <div class="post">
              <img
                class="thumbnail"
                src="images/project2.png"
                alt="Project 1 Picture"
              />
              <div class="post-preview">
                <h6 class="post-title">Authentication & Authorization System</h6>
                <p class="post-intro">
                  Online store with paypal payments integration and guest user
                  shopping
                </p>
                <a href="#">Link to the app</a>
              </div>
            </div>
          </div>
          <div>
            <div class="post">
              <img
                class="thumbnail"
                src="images/project3.jpg"
                alt="Project 1 Picture"
              />
              <div class="post-preview">
                <h6 class="post-title">Landing Page</h6>
                <p class="post-intro">
                  Modulized guide for online courses with step by step
                  instructions
                </p>
                <a href="#">Link to the app</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="s2" id="contact_part">
      <div class="main-container">
        <h3 style="text-align: center">Get In Touch</h3>
        <form id="contact-form" method="post">
          <label>Name</label>
          <input type="text" name="name" class="input-field" />

          <label>Subject</label>
          <input type="text" name="subject" class="input-field" />

          <label>Email</label>
          <input type="email" name="email" class="input-field" />

          <label>Message</label>
          <textarea name="message" class="input-field"></textarea>
          <!-- <input id="submit-btn" type="submit" value="Send" name="submit"/> -->
          <div id="submit-btn">
          <a id="submit-btn" name="submit" href="mailto:anevskiistefan@gmail.com?subject=<?php echo $_POST['subject']; ?>" >Send</a>
          </div>          
        </form>
      </div>
      <div id="status"></div>
    </section>
    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
