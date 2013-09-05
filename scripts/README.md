# Using the CLI script to encode videos

##ffmpeg settings 
You can use use the `encode_video.sh` shell script to encode your videos. It comes with presets for h264: "-hd", "-sd", and "-sm"; and a preset for webm: "-wm" video. The "-hd" and "-sd" use the h264 high profile (for desktop and newer smartphones). The "-sm" version uses the h264 baseline profile for older phones and iPods. The webm currently uses the HD size.

### Installing ffmpeg using Homebrew on Mac OS X

First install __Homebrew__ on you machine — detailed [Homebrew installation instructions](http://brew.sh/).

Use this command to install __ffmpeg__ using Homebrew with the full webm and ogg  video support.
 
```brew install ffmpeg --with-fdk-aac --with-libvpx --with-libvorbis --with-theora```  

### Using the encode_video script
from the scripts folder you can encode a video using this command  
```. encode_videos.sh VIDEO_FILE.MOV```
  
or a bunch of videos in the same folder using:  
```for FILE in *.m* ; do . encode_videos.sh "$FILE"; done``` 

### Current Resolutions

Here's a list of the current resolutions. They are targeted for a 16:9 HD source.
I can make this script a little smarter if there's a need-open an issue or send me an email. 

	 _Current Resolutions_____________________
	| name | size     | video | audio | ratio |
	| sm   | 512x288  | 550k  | 64k   | 16:9  |
	| sd   | 768x432  | 1250k | 96k   | 16:9  |
	| hd   | 1280x720 | 2500k | 128k  | 16:9  |
	| wb   | 1280x720 | 2500k | 128k  | 16:9  |
	 -----------------------------------------


  