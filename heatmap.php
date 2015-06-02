<?php 
    
    $db = mysql_connect("localhost", "root", "collegedunia"); 
    mysql_select_db("collegedunia",$db);     
    
    //save the user click ordinates   
    if(isset($_POST['page'])) { 
        $query = "INSERT INTO click SET x_cordinate = ".$_POST['x_cordinate']." ,y_cordinate = ".$_POST['y_cordinate'].", page_url = '".
        $_POST['page']."'";        
        $result = mysql_query($query,$db);
    };

    //when the display heatmap link it clicked
    if(isset($_GET['page'])) { 
        $query = "SELECT x_cordinate, y_cordinate FROM click  
                            WHERE page_url = '".$_GET['page']."' ORDER BY id DESC limit 2000";   
        $results = mysql_query($query,$db);
        //no canvas.Just append an overlay to make the screen transparent.
        $html = '<div id="heatmap-container">'; 
        while ($row = mysql_fetch_array($results)) { 
            $html .= sprintf('<div style="left:%spx;top:%spx"></div>', $row['x_cordinate'] - 10, $row['y_cordinate'] - 10); 
        } 
        $html .= '</div>'; 
        echo $html; 
    };
    mysql_close($db); 
?>