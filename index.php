<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index.php" id="adres-Form">
        <label form="name">
        Name:
            <input type="text" name="name" id="name"><br><br>
        </label>

        <label form="dateofbirth">
        Date of Birth:
            <input type="date" name="dateofbirth" id="dateofbirth"><br><br>
        </label>

        <label form="email">
        Email:
            <input type="email" name="email" id="email"><br><br>
        </label>

        <label form="phoneNumber">
        PhoneNumber:
            <input type="text" name="phoneNumber" id="phoneNumber"><br><br>
        </label>

        <label form="postalCode">
        PostalCode:
            <input type="text" name="postalCode" id="postalCode"><br><br>
        </label>

        <label form="streetName">
        StreetName:
            <input type="text" name="streetName" id="streetName"><br><br>
        </label>

        <label form="streetNumber">
        StreetNumber:
            <input type="text" name="streetNumber" id="streetNumber"><br><br>
        </label>

        <label form="country">
        Country:
            <input type="text" name="country" id="country"><br><br>
        </label>
        
        <label form="city">
        City:
            <input type="text" name="city" id="city"><br><br>
        </label>
        
        <input type="submit" value="Registreer" name="submit">
    </form>

    <form method="post" action="index.php" id="Partner-Form">

    <label>
        Company Name:
        <input type="text" name="companyName">
    </label><br>

    <label>
        Adres:
        <input type="text" name="adres">
    </label><br>
    
    <label>
        E-mail:
        <input type="email" name="email">
    </label><br>
    
    <label>
        Website:
        <input type="text" name="website">
    </label><br>
        
    <label>
        Description:
        <input type="text" name="description">
    </label><br>
    
    <label>
        VAT:
        <input type="text" name="vatNumber">
    </label><br>
    
    <label>
        COC:
        <input type="text" name="cocNumber">
    </label><br>
    
    <label>
        Phone Number:
        <input type="text" name="phoneNumber">
    </label><br>

    <input type="submit" name="Submit" value="Submit Form">

    </form>
    
</body>
</html>

<?php
include "Models/Person.php";
include "Models/Adres.php";
include "Models/Partner.php";

if (
    empty($_POST['name']) ||
    empty($_POST['phoneNumber']) ||
    empty($_POST['email']) ||
    empty($_POST['dateofbirth'])

) {
    echo 'Please fill in all fields.';
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $dateofbirth = $_POST['dateofbirth'];


    $person = new Person($name, $phoneNumber, $dateofbirth, $email, $adres);

    echo $Person;
}

$adres = new Adres($_POST['postalCode'], $_POST['streetName'], $_POST['streetNumber'], $_POST['country'], $_POST['city']);

echo $adres;






$partner = new Partner($companyName, $adres, $email, $website, $description, $vatNumber, $cocNumber, $phoneNumber);

echo $Partner;


if (isset($_POST['submit'])) {
    if (
        empty($_POST["companyName"]) ||
        empty($_POST["adres"]) ||
        empty($_POST["email"]) ||
        empty($_POST["website"]) ||
        empty($_POST["description"]) ||
        empty($_POST["vatNumber"]) ||
        empty($_POST["cocNumber"]) ||
        empty($_POST["phoneNumber"])
    ) {
        echo "Please fill in all fields!";
    }

}




?>