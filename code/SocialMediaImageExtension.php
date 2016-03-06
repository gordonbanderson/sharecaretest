<?php

class SocialMediaImageExtension extends DataExtension {
	private static $has_one = array(
		'SocialMediaImage' => 'Image'
	);

	function getOGImage() {
        return $this->SocialMediaImage();
    }
}
