<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','gabinet');
    $_SESSION['offset'] = 0;
    $pacjentId = $_SESSION['userid'];
    $nick = $_SESSION['username'];
    $lekarzId = $_SESSION['lekarz'];
    $data = date('Y-m-d H:i:s');
    $tresc = $_POST['coment_message'];
    mysqli_query($conn,"INSERT INTO	komentarze_lekarze (id_pacjenta,nick,id_lekarza,data,tresc) VALUES ('$pacjentId','$nick','$lekarzId','$data','$tresc')");
    mysqli_close($conn);
    switch($lekarzId){
        case 1:
            header('Location: ../team/dentist.html#commentSection');
            break;
        case 2:
            header('Location: ../team/dentist2.html#commentSection');
            break;
        case 3:
            header('Location: ../team/dentist3.html#commentSection');
            break;
        case 4:
            header('Location: ../team/dentist4.html#commentSection');
            break;
        case 5:
            header('Location: ../team/dentist5.html#commentSection');
            break;
        case 6:
            header('Location: ../team/dentist6.html#commentSection');
            break;        
        default:
            break;
    }
?>