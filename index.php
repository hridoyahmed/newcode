<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
    $beautiful = 'Madhuri';
    $beautiful2 = 'Kajaal';
    
    $actor = array('Kariana','Katrina','karishma','dipika');
    
    ?>
    <?php if($beautiful == 'Madhuri') :?>
    <h1>Most beautiful actor is Madhuri</h1>
    <?php else : ?>
    <h1>I don't Know</h1>
    <?php endif; ?>
    
    <?php if($beautiful ==$beautiful2){
    echo'<h1>Most beautiful actor is '.$beautiful.'</h1>';
    }else {
    echo'<h1>We don\'t know</h1>';
    }
    echo'<h1>Second Beautiful actor is '.$actor[1].' </h1>';
    
    if ($actor[3] == 'Madhuri'){
        
    }else{
        echo'<h1>the 3rd beautiful actor is Dipika </h1>';
    }
    
    ?>
</body>
</html>