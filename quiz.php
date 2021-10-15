<!DOCTYPE html>
<html>
  <head>
    <title>My HTML Quiz</title>
    <style>
      p {
        color: red;
        background-color: blue;
      }
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <h1>Quiz</h1>
    <h2>HTML</h2>
    <p>This document is for the HTML quiz.</p>
    <ol>
      <li>What does HTML stand for? Hyper Text Markup Language</li>
      <li>
        What is the purpose of HTML? To communicate with the browser how the
        document should be structured - Structure NOT presentation.
      </li>
    </ol>
    <a href="http://www.example.com" target="_blank"
      >Here is a link to example.com</a
    >

    <h2>CSS</h2>
    <ol>
      <li>What does CSS stand for? Cascading Style Sheets</li>
      <li>
        What is the purpose of CSS? To provide styling to our web pages -
        presentation ONLY.
      </li>
      <li>
        Describe 2 ways of appling CSS rules to an HTML element. Inline -
        applying 'style="someRule" directly in the HTML element. External -
        providing rules in an external CSS doc that targets the particular
        element (e.g. p {color: red})
      </li>
    </ol>

    <h2>Classes</h2>
    <ol>
      <li>
        Why are classes considered helpful in application development? Classes
        help foster reusability in your code.
      </li>
      <li>
        What two things does a class capture? Data and behaviour / properties
        and methods.
      </li>
      <li>Create a class that represents a car. Please see 'Car.php'</li>
      <li>
        Create a form that captures the fields necessary to create a car.
        <form action="handler.php">
          <div class="mb-3">
            <br />
            <h3>Form to create a Car object.</h3>
            <label class="form-label">Car Colour</label>
            <input type="text" class="form-control" name="colour" />
          </div>
          <label class="form-label">Car Make</label>
            <input type="text" class="form-control" name="make" />
          </div>
          <label class="form-label">Car Model</label>
            <input type="text" class="form-control" name="model" />
          </div>
          <label class="form-label">Car Mileage</label>
            <input type="number" class="form-control" name="mileage" />
          </div>
          
          <br>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </li>
    </ol>

    <h2>Variables / Control Flow</h2>
    <ol>
        <li>Create a loop that builds a 'bag' of all odd numbers between 0 and 100. <br> $bag = []; <br>
        for ($i=0; $i < 101; $i++) <br> { 
        array_push($bag, $i);} (PHP code included in HTML and below)
        </li>
        <?php
          $bag = [];
          for ($i=0; $i < 101; $i++) { 
            array_push($bag, $i);
          } 

          // include_once 'NumberHelper.php';

          // $bagArray = new NumberHelper($bag);
          // echo $bagArray->sumOfNumbers();

        ?>
    </ol>

    <h2>Database Schemas</h2>
    <ol>
      <li>What is a Schema, and what 3 core things does it consist of? A schema is a plan of all the tables that can be found within a DB. It consists of TABLES, COLUMNS and RELATIONSHIPS.</li>
      <li>
        How does a DB Schema map to (a) classes, and (b) instances of that class (objects)? A class in a schmea is represented as the tables. The instances are represented as rows.
      </li>
      <li>
        <br>
        DB Schema <br>
        Tablename: salespeople <br>
        Columns: <br>
        - id <br>
        - name <br>
        <br>
        Tablename: makes <br>
        Columns: <br>
        - id <br>
        - name <br>
        <br>
        Tablename: models <br>
        Columns: <br>
        - id <br>
        - name <br>
        - make_id <br>
        <br>
        Tablename: sales <br>
        Columns: <br>
        - id <br>
        - value <br>
        - salesperson_id <br>
        <br>
        <br>
      </li>
      <li>Who was the 'best' salesman? <br>
      SELECT salesperson.name<br>
      FROM </li>
    </ol>
  </body>
</html>
