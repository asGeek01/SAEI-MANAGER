<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox Validation</title>
</head>
<body>
    <form id="myForm">
        <label><input type="checkbox" name="option" value="1"> Option 1</label><br>
        <label><input type="checkbox" name="option" value="2"> Option 2</label><br>
        <label><input type="checkbox" name="option" value="3"> Option 3</label><br>
        <label><input type="checkbox" name="option" value="4"> Option 4</label><br>
        <button type="submit">Continuer</button>
    </form>

    <script>
        const formulaire = document.getElementById('myForm');
        formulaire.addEventListener('submit', function(event) {
            const checkboxes = document.querySelectorAll('input[name="option"]');
            let checkedOne = false;

            for (const checkbox of checkboxes) {
                if (checkbox.checked) {
                    checkedOne = true;
                    break;
                }
            }

            if (!checkedOne) {
                event.preventDefault();
                alert('Vous devez sélectionner au moins une option.');
            }
        });

    </script>
</body>
</html>
