&lt;?php  
$from = $_POST['Caller'];  
$url = $_POST['RecordingUrl'];

mail(  
     '{hi@kiararobles.com}',  
     'New call from ' . $from,  
     'You have a new call from ' . $from . '.' .  
     "\n\n" .  
     'A voice mail is available at ' . $url  
    );
