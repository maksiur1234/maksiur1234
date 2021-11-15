<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="POST">
        Wprowadź imię: <input type="text" name="userName"/><br />
        Wprowadź Nazwisko: <input type="text" name="userSurname"/><br />
        Płeć:<br />
        Męzczyzna: <input type="radio" id="mezczyzna" name="gender" value="male"/><br />
        Kobieta: <input type="radio" id="kobieta" name="gender" value="female"/><br />
        Wprowadź date urodzin: <input type="date" name="birthDay" value="bDay"/><br />  
        <input type="submit" value="Dodaj uzytkownika" name="addUser"/><br />
        <input type="submit" value="Usun uzytkownika" name="removeUser"/><br />
        <hr>
    </form>


    <?php 

    //wyswietlanie tablicy


        $data = file_get_contents('users.json');
        $data_array = json_decode($data, true)['users'];
        $users = $data_array;
        $encoded = json_encode($data);
        // echo json_encode($data_array);

        foreach ($users as $index => $user){
            $user[$index]['id'] = uniqid();
            
        }
        
       


        echo '<table style= solid border 1px>
        
            <tr>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Płeć</th>
                <th>Data urodzenia</th>
            </tr>
            ';

        foreach ($users as $row){
            echo '
                <tr>
                    <td>'.$row['name'].'</td>
                    <td>'.$row['surname'].'</td>
                    <td>'.$row['gender'].'</td>
                    <td>'.$row['bday'].'</td>
                    <td>tu przycisk</td>
                </tr>
            ';
        };
        echo '</table>';

    

    //usuwanie userow z json


    

    ?>
</body>
</html>