<?php 

function query_data($data)
{

    $result = array();
    while ($row = mysqli_fetch_array($data)) {
        array_push(
            $result,
            array(
                'id_user' => $row['id_user'],
            )
        );
    }

    return $result;
}

function query_data_login($data)
{

    $result = array();
    while ($row = mysqli_fetch_array($data)) {
        array_push(
            $result,
            array(
                'id_user' => $row['id_user'],
                'email' => $row['email'],
                'password' => $row['password'],
            )
        );
    }

    return $result;
}


?>
