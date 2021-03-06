<?php namespace Thenoun\Utils;

use Thenoun\Models\Icon;

/**
 * Utility responsible for handling
 * files operations and interacting
 * with Mediawiki API
 */
class FileManager {
	/**
	 * Uploading file by leveraging
	 * the Mediawiki helper
	 *
	 * @param mixed $files
	 * @param mixed $metadata
	 * @return void
	 */
	public static function upload( $files, $metadata ) {
		try {
			// Create temporary directory if inexistent
			$tmp_dir = ROOT . '/tmp';
			if ( !file_exists( $tmp_dir ) ) {
				mkdir( $tmp_dir, 0777, true );
			}

			// Move files in it
			$filesProcessed = [];
			$data = json_decode( $metadata["icon"] );
			foreach ( $files as $file ) {

				// move file to temporary directory
				$path = $tmp_dir . "/" . $file['name'];
				move_uploaded_file( $file['tmp_name'], $path );

				// prepare submission to Mediawiki API
				$icon = new Icon( $data->title, $data->author, $data->wikicode, $path );
				$wiki = new MediaWiki;
				$result = $wiki->uploadFile( $icon );

				// if there are still no errors, remove the file from folder
				unlink( $path );
				return $result;
			}
		}catch ( Exception $e ) {
			return false;
		}
	}
}
