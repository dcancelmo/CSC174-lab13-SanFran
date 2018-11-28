<!doctype html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Cupcakes Home</title>
  </head>

  <header>
    <section>
      <h1>Cupcakes</h1>
    </section>

    <section>
        <nav>
        </nav>
    </section>
  </header>
      <main>
      <h2>Do you have a recipe that you'd like to submit?</h2>
      <form method="post" action="form-processor.php">
        <label class="fixed" for="username">Your Name: </label>
        <input type="text" name="username" id="username">
        <label class="fixed" for="cupcake">Favorite Cupcake: </label>
        <input type="text" name="cupcake" id="cupcake">
        <label class="fixed" for="frosting">Favorite frosting: </label>
        <input type="text" name="frosting" id="frosting">
        <input type="range" min="1" max="60" value="1" class="slider" id="budget">
        <p>How much do you spend per week on cupcakes?: $<span id="budget"></span></p>
        <script>
          var slider = document.getElementById("budgetSlider");
          var output = document.getElementById("budgetValue");
          output.innerHTML = slider.value;

          slider.oninput = function() {
          output.innerHTML = this.value;
          }
        </script>
        <fieldset>
        <h3><label for="userrecipes">Submit your own recipe below!</label></h3>
        <textarea name="userrecipes" id="userrecipes" cols ="60" rows="30"></textarea>
      </fieldset>
        <input type="submit" value="Here's my survey response!">
      </form>
   	</main>
      </body>
</html>