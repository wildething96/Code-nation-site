<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@100&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/cefdeeed52.js"
      crossorigin="anonymous"
    ></script>
    <title>Python Page</title>
  </head>
  <body>
    <div class="header">
      <div class="container container--narrow">
        <i class="fab fa-python fa-5x"></i>
        <h1>My Personal guide to HTML, CSS and Python</h1>
        <br />
        <br />
        <br />
        <h2><span>Page 3 - Beginning Python</span></h2>
      </div>
    </div>
    <div class="inner-header">
      <ul>
        <li>
          <a href="index.php"><button>HTML</button></a>
        </li>
        <li>
          <a href="css.php"><button>CSS</button></a>
        </li>
        <li>
          <a href="python.php"><button>Python</button></a>
        </li>
      </ul>
    </div>
    <section class="section1">
      <div class="container">
        <div class="split">
          <div>
            <h3>The Basics of Python</h3>
            <p>
              When saying <span>text = " "</span> we create a variable that
              holds a string<br /><br />
              When saying <span>num1 = 5</span> we create a variable that holds
              an interger<br /><br />
              When saying <span>text = True</span> we create a variable that
              holds a Boolean<br /><br />
              <span>if</span> staments check if a particular condition is
              <span>True</span> and run their contents if it is<br /><br />
              By doing <span>answer = num1 + num2 </span> we add num1 and num2
              together then set <span>answer</span> equal to the result. Check
              out
              <a href="https://www.w3schools.com/python/python_variables.asp"
                ><span><b>w3schools</b></span></a
              >
              for more information<br /><br />
              <span>print( )</span> is a function that will print out the value
              anything that is placed between it's parenthesis to the terminal
            </p>
          </div>
          <pre>
text = "The answer is "

num1 = 5
num2 = 10
answer = 0

test = True

if test == True 
      answer = num1 + num2

print(text + answer)
          </pre>
        </div>
      </div>
    </section>
    <section class="section2">
      <div class="container">
        <div class="split">
          <div>
            <h3>While loops and basic Error Handling</h3>
            <p>
              <span>While</span> loops keep looping the same code while their
              condition is still <span>True</span> in the example shown this is
              just set to <span>True</span> though a varaible could be used to
              change the value of it to <span>False</span> and end the loop<br /><br />
              <span>input( )</span> is a function that allows input to be taken
              in from the user throught the terminal<br /><br />
              <span>try</span> and <span>expect</span> can be used together as a
              way of error handling. In the example shown if the user doesn't
              give an interger it producers an error
              <span>(ValueError)</span> message telling the user to try again
              and then it restarts the loop.<br /><br />
              Check out
              <a
                href="https://www.programiz.com/python-programming/exception-handling"
                ><span><b>programiz</b></span></a
              >
              for more information on <span>Error Handling</span><br /><br />
            </p>
          </div>
          <pre>
while True:
      try:
            num1 = int(input("Enter a number: "))
            break;
      Expect ValueError:
            print("Only numbers please!")
          </pre>
        </div>
      </div>
    </section>
    <section class="section3">
      <div class="container">
        <div class="split">
          <div>
            <h3>Basic Lists and For Loops</h3>
            <p>
              <span>Lists</span> in Python are create by setting a
              <span>variable = [ ]</span> with each item separated by a
              <span><b>,</b></span
              ><br /><br />
              <span>for</span> loops can work in a couple ways the first uses
              <span>range( )</span> where the value inside the brackets is a
              interger for the number of times the loop will run.<br /><br />
              The other type of <span>for</span> looks more like
              <span>for name in list_names</span> where
              <span>list_names</span> is the <span>list</span> or
              <span>tuple</span> and <span>name</span> will be each individual
              <span>value</span> from the list as it is looped through.<br /><br />
              In the example uts shows an example of a
              <span>Nested for loop</span> this is where one
              <span>for loop</span> is placed inside another and mean the nested
              for will be run each
            </p>
          </div>

          <pre>
num1 = 10

list_names = [Ellie, Martin, John, Diane]

for name in list_names:
        for i in range(num1):
              print(i + ". " + name)    
            </pre
          >
        </div>
      </div>
    </section>
  </body>
</html>
