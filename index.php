<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Classverse HeatMap</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <script type="text/javascript" src="heatmap.js"></script>
    <script type="text/javascript">
        $(function() {
            $(document).saveClicks(); 
            $('.displayClicks').click(function() {
                $.displayClicks();                
                $('#heatmap-overlay').click(function() {
                     $('#heatmap-overlay').remove(); 
                     $('#heatmap-container').remove();
                     $(document).saveClicks();
                });
                $(document).stopSaveClicks();
                return false;
            });
        });
    </script>
</head>
    <body>
        <img src="images/classverse.png"/>
        <p class="displayClicks"><a href="#">Display Heat Map</a></p>
    </body>
</html>