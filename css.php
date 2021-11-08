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
    <title>CSS Page</title>
  </head>
  <body>
    <div class="header">
      <div class="container container--narrow">
        <i class="fab fa-css3-alt fa-5x"></i>
        <h1>My Personal guide to HTML, CSS and Python</h1>
        <br />
        <br />
        <br />
        <h2>
          <span>Page 2 - Beginning CSS</span>
        </h2>
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
            <h3>The Basics of CSS - Text Styling</h3>
            <p>
              Using the <span>h1</span> will select all <span>h1</span> tags in
              your HTML script.<br /><br />
              <span>width</span> and <span>weight</span> will tell the object
              how far to display horizontally and vertically using units such as
              px, %, rem. Click
              <a href="https://www.w3schools.com/cssref/css_units.asp"
                ><span><b>w3schools</b></span></a
              >
              to learn more about units<br /><br />
              <span>color</span> allows you change the colour of the text and
              <span>background-color</span> allows you change the colour of the
              background of an object using rgb, rgba, hex codes or choose from
              some in built colour e.g white.<br /><br />
              <span>font-size</span> allow you to change the size of font using
              units such as px, em and rem.<br /><br />
              <span>Text-align</span> allows you to change the position of text
              such as <span>center</span>.
            </p>
          </div>
          <pre>
h1 {
  width: 100px;
  height : 100px;
  color: #FFF;
  background-color: white;
  font-size: 2em;
  text-align: center;
} 
            </pre
          >
        </div>
      </div>
    </section>
    <section class="section2">
      <div class="container">
        <div class="split">
          <div>
            <h3>The CSS Box Model</h3>
            <p>
              <span>Padding</span> will increase the space between the border
              and your content, you can choose which part
              <span>(left, right, top, bottom)</span> of the padding to increase
              using dadding-<span>position</span> such as
              <span>margin-left: 5%</span>.<br /><br />
              <span>Margin</span> will increase the space outside of the border,
              allowing for spacing between different elements, like paddings you
              can spcify which part of the margin you would like to increase
              <span>(left, right, top, bottom)</span> of the padding to increase
              using margin-<span>position</span> such as
              <span>margin-left: 5%</span>.<br /><br />
              <span>Border</span> allows you to add a custom border. first you
              write <span>border:</span> the add width of the border
              <span>5px</span> next you define a style of line
              <span>solid</span> last you specify the colour of the line
              <span>black</span>.<br /><br />
              To read more about The Box Model click
              <a href="https://www.w3schools.com/css/css_boxmodel.asp"
                ><span><b>w3schools</b></span></a
              >
            </p>
          </div>
          <div class="container2">
            <pre class="annoyingPre">
.item {
  width: 100px;
  height : 100px;
  margin-left: 5%;
  padding: 2%;
  border: 5px solid white;
} 
          </pre
            >
            <img src="Box-model.svg" alt="Box model diagram" />
          </div>
        </div>
      </div>
    </section>
    <section class="section3">
      <div class="container">
        <div class="split">
          <div>
            <h3>The Basics of Flexbox</h3>
            <p>
              <span>diplay: flex</span> declares the current item as a
              <span>flexbox</span> and anything inside it will
              <span>flex items</span>.<br /><br />
              <span>flex-directions</span> describes which direction items are
              displayed in a flex-box, the default is <span>column</span> but
              can be changed to <span>row</span>. This is very useful for things
              <span>lists</span> when they need to displayed horizontially
              instead of vertically.<br /><br />
              <span>justify-content</span> allows to change the position of the
              flex items based on the current <span>flex-direction</span> e.g.
              <span>center, space-evenly, space-between.</span>
              <br /><br />
              <span>align-items</span> allows to change the position of the flex
              items on the axis opposite to the <span>flex-direction</span> e.g.
              <span>center, flex-start, , flex-end</span>
              <span>flex-wrap</span> allows flex items to wrap if necessary.
            </p>
          </div>
          <pre>
.flex-container {
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-items: center;
  flex-wrap: wrap;
} 
          </pre>
        </div>
      </div>
    </section>
  </body>
</html>
