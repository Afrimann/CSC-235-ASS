<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <nav>
  <ul>
    <?php
      $navItems = array(
        "Home" => "index.php",
        "About" => "about.php",
        "Contact" => "contact.php"
      );

      foreach ($navItems as $key => $value) {
        echo "<li><a href='$value'>$key</a></li>";
      }
    ?>
  </ul>
</nav>
    <main>
		<section id="intro">
			<h2>Story of my Life.</h2>
			<p>Welcome to my homepage! My name is Omotosho Peter, and I'm a 20-year-old passionate and motivated individual who enjoys exploring new things and learning from different experiences. I believe in the power of hard work and determination, and I'm committed to achieving my goals and making a positive impact in the world. On this page, you'll find more information about me, my interests, and my journey so far. Thanks for stopping by!</p>
		</section>
		<section id="early-life">
			<h2>Early Life</h2>
			<p>When I was a child, I was always full of energy and curious about the world around me. I loved playing with toys, exploring the outdoors, and spending time with my family and friends. Some of my favorite memories from my childhood include going on family vacations, playing soccer with my friends, and building elaborate forts out of blankets and pillows in my living room. Looking back, I realize how these experiences shaped who I am today and instilled in me a sense of wonder and a thirst for knowledge.</p>
		</section>
		<section id="education">
			<h2>Education</h2>
			<p>I have always been passionate about learning, and I have pursued my education with great enthusiasm. I completed my primary and secondary education at [insert school name], where I developed a strong foundation in a variety of subjects. After graduating, I went on to pursue higher education at [insert college or university name], where I majored in [insert your major or field of study]. During my time at college, I had the opportunity to work on several projects and research studies, which helped me to develop my critical thinking and problem-solving skills. I am proud to have achieved [insert any notable academic achievements, awards or honors] throughout my academic journey.</p>
		</section>
		<section id="career">
			<h2>Career</h2>
			<p>I am excited to embark on a fulfilling career journey that allows me to use my skills and talents to make a positive impact in the world. I am passionate about [insert your area of interest or expertise], and I am dedicated to continuously learning and growing in my field. In my previous experiences, I have gained valuable skills in [insert relevant skills], and I am eager to apply these skills to my future endeavors. I am confident that my passion, dedication, and work ethic will enable me to achieve great things in my career and make a meaningful contribution to society.</p>
		</section>
		<section id="hobbies">
			<h2>Hobbies and Interests</h2>
			<p>Beyond my professional aspirations, I am also passionate about exploring new hobbies and interests in my free time. One of my favorite hobbies is [insert hobby], which I find to be a great way to unwind and express my creativity. I also enjoy [insert other hobbies or interests], which help me to stay active and engaged in the world around me. When I'm not working or pursuing my hobbies, I enjoy spending time with my friends and family, exploring new places, and trying new things. I believe that having a diverse range of interests and experiences is essential for personal growth and fulfillment.</p>
		</section>
	</main>
	<footer>
		<p>&copy; <?php echo date("Y"); ?> My Life Story</p>
	</footer>


    

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
      <style>
        *{
  padding: 0;
  margin: 0;
  text-decoration: none;
  list-style: none;
}

nav {
    background-color: #333;
    padding: 10px;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
  }

  li {
    float: left;
  }

  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }

  li a:hover {
    background-color: #111;
  }

#intro h2{
  font-size: 25px;
  font-family: fill;
}

#early-life{
  
}
      </style>
    
  </body>
</html>