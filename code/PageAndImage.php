<?php

class PageAndImage extends Page {
	private static $has_one = array(
		'MainImage' => 'Image'
	);

	function getOGImage() {
        return $this->MainImage();
    }

    public function getCMSFields() {
    	$fields = parent::getCMSFields();
    	$imageField = new UploadField('MainImage', 'Main Image');
    	$fields->addFieldToTab('Root.Image', $imageField);
    	return $fields;
    }
}


class PageAndImage_Controller extends Page_Controller {

}
