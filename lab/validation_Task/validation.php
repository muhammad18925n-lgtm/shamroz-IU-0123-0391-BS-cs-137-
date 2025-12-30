<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<fprm, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="">FirstName</label>
        <input type="text" id="first_name" required>
        <br>
        <span  id="first_name_error"></span>
        <br>
        <br>
        <input type="button" value="submit" onclick="SubmitForm()">
</form>
<script>
    function SubmitForm(){
        var firstName=document.getElementById('first_name').value;
        if(firstName !='')
        {
            firstNameRegex = /^[a-ZA-Z]{1,100}$/
            var testFirstName= firstNameRegex.test(firstName)
            alert(testFirstName);

        }
        else
        {
            document.getElementById('first_name_error').innerHTML= 'please insert the value'
        }

    }
    </script>
</body>
</html>