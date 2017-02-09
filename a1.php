<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Caitlin Rouille - Assignment 1</title>
<link rel="stylesheet" href="css/styles.css">
</head>

<body>
<section>
  <h1 class="text-center pd-btm-10">Caitlin Rouille</h1>
  <img class="mg-btm-15" src="images/caitlinrouille.jpg" width="300" height="300" alt="caitlin rouille" align="center"/>
</section>
<section>
  <h2>About Me</h2>
  <p>Hello! My name is Caitlin Rouille and I am a fulltime Junior Frontend Developer. The company I work provides and supports applications for Financial Advisors. </p>
  <p>I am currently a shared resource on two scrum teams as my company works in an Agile methodology. I want to learn more about applications so I can fully understand the architecture of MVC frameworks, utilizing git/grunt/gulp etc. Our applications are currently build on .net MVC frameworks but are rebuilding within the Angular framework. This course will definitely help me tie up the serverside knowledge I need to grow within my field. </p>
</section>
<section>
  <blockquote>
    <?
    $quote = Rand (1,3);
    /* Swap out the quote using the switch PHP function and Rand */
    switch ($quote)
    {
    case 1:
    echo "Do what you love, love what you do - Life is Good";
    break;
    case 2:
    echo "Strive not to be a success, but rather to be of value - Albert Einstein";
    break;
    case 3:
    echo "Every child is an artist. The problem is how to remain an artist once he grows up - Pablo Picasso";
    break;
    }
    ?>
  </blockquote>
</section>
</body>

</html>
