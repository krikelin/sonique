<?php
class CronController extends AppController {
	public function youtube() {
		$video_ID = 'your-video-ID';
		$JSON = file_get_contents("https://gdata.youtube.com/feeds/api/videos/{$video_ID}?v=2&alt=json");
		$JSON_Data = json_decode($JSON);
		$views = $JSON_Data->{'entry'}->{'yt$statistics'}->{'viewCount'};
		echo $views;
	}
}