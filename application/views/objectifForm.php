<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objectif</title>
</head>
<style>
    form {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    max-width: 800px;
    margin: auto;
}

label {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 5px;
    display: block;
    flex-basis: 100%;
    margin-right: 684px;
}

input[type="text"], input[type="email"], input[type="date"], input[type="number"], input[type="file"], input[type="password"], input[type="datetime-local"], select {
    font-size: 16px;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    flex-basis: 48%;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    margin-top: 20px;
}

    input[type="submit"]:hover {
        background-color: #0062cc;
    }
</style>
<body>
    <form action="<?php echo site_url('Objectif/insertNewObjectif') ?>" method="post">
        <label for="id">Votre Objectif</label>
        <select name="id" id="id">
            <?php for ($i=0; $i <count($objectif) ; $i++) { ?>
                <option value="<?php echo $objectif[$i]['idObjectif']; ?>"><?php echo $objectif[$i]['NomObjectif']; ?></option>
            <?php } ?>    
        </select>
        <label for="poid">Le Poid a gagné ou perdre</label>
        <input type="number" name="poid" id="poid">
        <input type="submit" value="Valider">
    </form>
</body>
</html>