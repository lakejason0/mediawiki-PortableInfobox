<?php

class NodeDataSanitizer extends NodeSanitizer implements NodeTypeSanitizerInterface {
	/**
	 * @desc remove all HTML tags but links from data labels.
	 * If label after sanitization became empty because contained only image
	 * do not sanitize it.
	 *
	 * @param $data
	 * @return mixed
	 */
	public function sanitize( $data ) {
		$sanitizedLabel = $this->sanitizeElementData( $data[ 'label' ], '<a>' );

		if ( !empty( $sanitizedLabel) ) {
			$data[ 'label' ] = $sanitizedLabel;
		}

		return $data;
	}
}
