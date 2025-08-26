<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <head>

<title>première exemple</title>

 <méta charset= "utf 8">

 <link rel= "stylesheet" href="styl.css" />
 
</head>

     <body>
         <script>
            var scope = "global"; // Declarer une variable globale

 

function checkscope() {

    var scope = "local"; // Declarer une variable locale avec le même nom

    return scope; // c'est la variable locale est retournée et non la globale

}

checkscope() // => "local"
         </script>

           <div><h1>Penda store </h1></div>


             <h2>bnjr</h2>

             <p>Bienvenue à l’<span class="universite">UVS</span>!</p>

             <div class="info-box">
    <h2>Boîte d'Information</h2>
    <p>Ceci est une boîte d'information stylisée en utilisant la balise <code>&lt;div&gt;</code>.</p>
  </div>
  <p>Visitez notre <a href="https://example.com" class="link">site web</a> pour plus d'informations.</p>
  <p>Contactez-nous à <a href="mailto:info@example.com" class="link">info@example.com</a>.</p>
<a href="#" onclick="alert('Bonjour');">lien</a>

   </body>
</html>
