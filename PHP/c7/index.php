<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="post.php" method="post" enctype ="multipart/form-data">

        <h1><strong>Formular inregistrare</strong></h1>
        <hr>
        <div>
            <label id="nume-label" class="nume" oninvalid="this.setCustomValidity('Acest camp este obligatoriu!')" >
                <strong>Nume</strong>
                <input type="text" value="" name="nume" id="nume" required/>
            </label>
            <br>
            <label id="prenume-label" class="prenume">
                <strong>Prenume</strong>
                <input type="text" value="" name="prenume" id="prenume" required />
            </label>
            <br>

            <label id="date-label" class="nasterii">
                <strong>Data Nast</strong>
                <input type="date" name="dataNasterii" value="" id="dataNasterii" />
               
            </label>
            <br>
            <label id="telefon-label" class="telefon">
                <strong>Telefon</strong>
                <input type="tel" name="telefon" id="telefon" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required />
            </label>
            <br>
            <label id="email-label" class="email">
                <strong>Email</strong>
                <input type="email" value="" name="email" id="email"  required/>
            </label>
            <br>
            <label id="parola-label" class="parola">
                <strong>Parola</strong>
                <input type="password" value="" name="parola" id="parola" required/>
            </label>
            <br>
            <label id="picture-label" class="picture">
                <strong>Poza</strong>
                <input type="file" value="" name="picture" id="picture"  required/>
            </label>
            <br>
            <label id="textarea-label" class="textarea">
                <strong>Mesaj</strong>
                <textarea id="textarea" name="textarea" ></textarea>
            </label>
            <br>
            <input type="checkbox" id="checkbox" checked>  Sunt de acord cu <a href="">termeni si conditii</a></input>
            <br>
        </div>
        <label  class="submit">
            <input type="submit" value="Inregistrare" name="submit"/>
        </label>
        
        <input type="hidden" name="hash" value="cheie_secreta_generata_pe_sesiune"  />
    </form>
</body>
</html>