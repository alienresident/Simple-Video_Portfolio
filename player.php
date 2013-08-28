<?php
/**
 * the custom variables you should set
 */

/**
 * movie dimensions
 */
$w = 768;
$h = 432;

/**
 * server config
 */
$dir = 'video';
$playerurl = 'player.php';
$root_dir = ''; 
 
/**
 * page elements
 */
$websitename = 'Simple Video Portfolio';
$stylesheet = $root_dir . 'css/global.css';
$responsive = true;
$mediaelementplayer = true;
$dropdown = true;
$prev_next = false;
$prev_text = "<span class=\"hidden\">Previous</span>";
$next_text = "<span class=\"hidden\">Next</span>";
$playlist = true;
$playlist_descriptions = true;

/**
 * Video Parameters
 */
$html5_video = true;
$poster_image = true;
$flash_fallback = true;
$video_tag_attributes = "controls=\"controls\" autoplay";

/**
 * content
 */
$header = true;
$h1 = false;
$h2 = true;
$heading2 = '<a href="player.php" title="Home" rel="home">Simple Video Portfolio</a>';  
$footer = true;
$footer_text = '<a href="http://www.alienresident.net">Mark Reilly</a>';

/**
 * Prettify file and directories, and add playlist descriptions
 */
$names_file = 'names.txt';
$playlist_descriptions_file = 'descriptions.txt';

/**
 * Advanced Player configurable variables
 */
 
$offline = false; // for development only: use a local copy of jQuery rather than the Google CDN
   
/**
 * filename variables: ignore 'n' characters from filenames
 */
$dir_offset_start = 3; // remove the first 'n' characters i.e. 3 = '01_' from O1_Reel 
$file_offset_start = 0; // remove the first 'n' characters
$file_offset_end = -3; // remove the last 'n' characters before file extension i.e. -3 = '-sd' from filename-sd.mp4

/**
 * CSS body classes
 */
$body_classes = "player";

/**
 * Video sources, codecs, and media queries.
 *
 * What codecs and mediaquries are to be used with certain filenames: i.e '-sd' = (Standard Definition), 'avc1.64001E, mp4a.40.2' h264 high profile, aac audio, 'all and (max-width: 854px). Media Queries should only be used if $responsive = true;
 */
$video_sources = array();
$video_sources[] = array('filename_stem' => '-sd', 'codec' =>'avc1.64001E, mp4a.40.2', 'media' =>'');
$video_sources[] = array('filename_stem' => '-sm', 'codec' =>'avc1.42E01E, mp4a.40.2', 'media' =>'all and (max-width: 512px)'); 
$video_sources[] = array('filename_stem' => '-wb', 'codec' =>'vp8, vorbis', 'media' =>'');

/**
 * Which h264 file to use a flash fallback
 */
$flash_fallback_source = '-sd';

/**
 * rest of the php part, do not edit
 */
include_once('php/videoplayer.php');
?>