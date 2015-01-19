<?php
/**
 * Date: 16.01.15
 * Time: 17:37
 */
class CIE_Field_Attachment extends CIE_Field_Abstract
{
	public function get_available_fields( array $search = array() )
	{
		return array(
			'attachment_attachments' => __( 'Attachments', 'cie' ),
		);
	}

	public function get_field_values( array $fields, CIE_Element $element )
	{
		if ( ! in_array( 'attachment_attachments', $fields ) ) {
			return array();
		}

		foreach ( get_attached_media( $element->get_element(), 'image' ) as $attachment ) {
			$url = wp_get_attachment_url( $attachment );
			if ( $url ) {
				$urls[] = $url;
			}
		}

		return array(
			$urls
		);
	}

	public function set_field_values( array $fields, CIE_Element $element )
	{
		// @todo Implement
		return array();
	}
}