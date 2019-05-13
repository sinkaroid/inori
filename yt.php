<?php
@ini_set('display_errors', 0);
$myApiKey="AIzaSyBdzm8PDwRaO_Ns-ttB5HowmP_v6nGCWck"; 
$myChannelID="UCR1zT1s524Hbc85bdvno_8w"; 
$maxResults="10"; 
$myQuery = "https://www.googleapis.com/youtube/v3/search?key=$myApiKey&channelId=$myChannelID&part=snippet,id&order=date&maxResults=20";
$videoList = file_get_contents($myQuery);
$decoded = json_decode($videoList, true);
 
foreach ($decoded['items'] as $items)
{
$id = $items['id']['videoId'];
$title= $items['snippet']['title'];
$description = $items['snippet']['description'];
$thumbnail = $items['snippet']['thumbnails']['default']['url'];

echo "
<p style='display:inline-block;width:100px;margin:10px;text-align:center;vertical-align:top'>";
echo "<img src='$thumbnail'><br>
";
echo '<a href="https://www.youtube.com/watch?v='.$id.'">'.$title.'</a><br>',$id,'<br>',$title;
}
