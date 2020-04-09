<?php

function readfile_cacheControl($filename, $contentType) {
	// https://stackoverflow.com/questions/2395609/cache-headers-for-dynamic-css-generated-via-php

	header('Content-type: ' . $contentType);
	// Last Modified
	$lastModified = filemtime($filename);
	$etagFile = md5_file($filename);

	// Get the HTTP_IF_MODIFIED_SINCE header if set
	$ifModifiedSince = (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? $_SERVER['HTTP_IF_MODIFIED_SINCE'] : false);
	// Get the HTTP_IF_NONE_MATCH header if set (etag: unique file hash)
	$etagHeader = (isset($_SERVER['HTTP_IF_NONE_MATCH']) ? trim($_SERVER['HTTP_IF_NONE_MATCH']) : false);
	// Set last-modified header
	header("Last-Modified: ".gmdate("D, d M Y H:i:s", $lastModified)." GMT");

	// Set etag-header
	header("Etag: $etagFile");
	// Make sure caching is turned on
	header('Cache-Control: public');
	// Check if page has changed. If not, send 304 and exit
	if(@strtotime($ifModifiedSince) == $lastModified || $etagHeader == $etagFile){
	   header("HTTP/1.1 304 Not Modified");
	   exit;
	}
	readfile($filename);
}

if (isset($_GET['js'])) {
	$file = __DIR__ . '/../../dist/' . $_GET['js'];
	if (file_exists($file)) {
		readfile_cacheControl($file, 'application/javascript');
	}
}
if (isset($_GET['css'])) {
	$file = __DIR__ . '/../../dist/' . $_GET['css'];
	if (file_exists($file)) {
		readfile_cacheControl($file, 'text/css');
	}
}