&lt;?php  
$from = $_POST['Caller'];  
$url = $_POST['RecordingUrl'];

mail(  
     '{yourEmailAddress}',  
     'New call from ' . $from,  
     'You have a new call from ' . $from . '.' .  
     "\n\n" .  
     'A voice mail is available at ' . $url  
    );
