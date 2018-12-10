# CSC174-lab13-SanFran
Jayda as IA, Famous as Designer and Daniel as coder.
http://csc174.org/assignment13/sanfrancisco
https://github.com/dcancelmo/CSC174-lab13-SanFran

## Ontology

### Admins
-Admins have accounts they register for
-Admins have access to the database/ survey results 

### Cupcakes
-Cupcakes have an about page, recipes, and a survey
-About cupcakes has history
-About cupcakes has basics for making cupcakes
-About cupcakes has cupcake variants
-Recipes have feautured cupcakes (the cupcake variants); Mug Cupcake, Butterfly Cake, Cappuccino Gourmet Cupcake
-Survey has users name, favorite cupcake, favorite frosting, sprinkle preference
-Survey has user's cupcake recipe to be featured on Recipes
-Survey pushes results to database
-Survey has a thank you message for users

##Taxonomy
-Header holds website topic and nav
-h1 tags: Page Titles
-h2 tags: Titles of sections of the page ("Cupcake History", "Making Cupcakes", "Cupcake Variants", etc)
-h3 tags: Specific parts of sections (For Recipes, "Ingredients", "Directions")
-Ingredients are unordered lists, directions are ordered lists of paragraphs
-Main tags hold all of the content unique to the page
-Section tags: Divide each page into parts, holds each title tag and related content
-Figure tags: Hold photos in their sections
-Footers hold terminal action (The survey link)
-Survey has form tags for smaller information and fieldset tags for recipes

##Choreography

### Non-Admin user
In the order of the path users should take

#### Index
In a Z pattern, listed from left ro right,
- Users first see the topic of the website, then the Nav in the strong follow (these two are the same for all pages)
- Hero image is some cupcakes
- Then, bottom left, weak follow is general definition of cupcakes, and the admin login under
- Terminal area is the link to survey since thats the main purpose (same for all pages except survey page)

#### About
In an F pattern
- The left side F points are the titles
- Right side F points are pictres relating to topics of the section
- Cupcake variants are listed in order of easiest to hardest to make 

#### Recipes
In an F pattern
- Left side F points are the titles of the recipes
- Right side F points are pictures of what the recipes make
- The recipes are in the same order as the cupcake variants, how easy to hard are they to make

#### Survey 
- Mandatory fields are starred
- Submitting of recipe, relating to the last page, is largest field
- Page ends with submitting the recipe on the bottom right, terminal area

### Admin users
In the order of the path admins should take

#### Index
-Log-in is on the index, but in a weak follow area as to be in a non-conspicuous

#### Log-in
IF YOU'RE ALREADY LOGGED IN
-Takes you straight to survey-results
If you're not logged in
-Information to login is displayed first
-Register button is below it

#### Register
- Lets you register then takes you back to log-in

#### Survey Results
- Displays main purpose, the table of results
- On the table rows, can edit and delete
- Asks if you're sure before you delete 
- Allows to make new records
- Link back to the website
- Logout, which takes you back to login