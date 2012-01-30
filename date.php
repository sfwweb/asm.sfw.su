<?php
//form
if(isset($_POST['submit'])){
    //hadle the form
    $ts=  mktime('0','0','0',$_POST['m'],$_POST['d'],$_POST['y']);
    $ut=date('U',$ts);
    echo "Time in Unix terms: $ut";
    echo '</br>';
    $tius=$_POST['unix'];
    $day=date ('d',$tius);
    $mes=date ('m',$tius);
    $god=date ('Y',$tius);
    echo "$day/$mes/$god";
} else {
    //draw tthe form
    echo '<form method="post">';
    //day
    echo '<select name="d">';
    for ($d=1;$d<=31;$d++){
        echo '<option value="'.$d.'">'.$d.'</option>';
    }
    echo '</select>';
    //month
    echo '<select name="m">';
    for ($m=1;$m<=12;$m++){
        echo '<option value="'.$m.'">'.$m.'</option>';
    }
    echo '</select>';
    //year
     echo '<select name="y">';
    for ($y=2008;$y<=2012;$y++){
        echo '<option value="'.$y.'">'.$y.'</option>';
    }
    echo '</select>';
    echo '</br>';
    echo '<input type="text" name="unix"> ';
    echo '</br>';
    echo '<input type="submit" name="submit">';
    echo '</form>';
}
?>
