<?php

namespace GT3\PhotoVideoGalleryPro\Block\Basic;

use GT3\PhotoVideoGalleryPro\Help\Types;

defined('ABSPATH') or exit;

trait Clear_Settings_Trait {
	/**
	 * @return array
	 */
	protected function getDeprecatedSettings(){
		return array(
			'select_source' => 'source',
			'slides'        => 'ids',
		);
	}
	
	// Step 1
	
	/**
	 * @param array $settings
	 *
	 * @return array
	 */
	protected function deprecatedSettings(array $settings){
		$deprecated = $this->getDeprecatedSettings();
		
		foreach($deprecated as $oldKey => $newKey) {
			if(key_exists($oldKey, $settings)) {
				$settings[$newKey] = $settings[$oldKey];
				unset($settings[$oldKey]);
			}
		}
		
		return $settings;
	}
	
	/**
	 * @return array
	 */
	protected function getUnselectedSettings(){
		return array();
	}
	
	// Step 2
	
	/**
	 * @param array $settings
	 *
	 * @return array
	 */
	protected function removeDefaultsSettings(array $settings){
		$group = $this->getUnselectedSettings();
		foreach($settings as $key => $value) {
			if($value === 'default') {
				unset($settings[$key]);
				if(key_exists($key, $group)) {
					if(is_array($group[$key])) {
						foreach($group[$key] as $_key) {
							if(key_exists($_key, $settings)) {
								unset($settings[$_key]);
							}
						}
					} else {
						if(key_exists($group[$key], $settings)) {
							unset($settings[$group[$key]]);
						}
					}
				}
			}
		}
		
		return $settings;
	}
	
	/**
	 * @return array
	 */
	protected function getCheckTypeSettings(){
		return array(
			'source'            => Types::TYPE_STRING,
			'gallery'           => Types::TYPE_INT,
			'rightClick'        => Types::TYPE_BOOL,
			'loadMoreEnable'    => Types::TYPE_BOOL,
			'loadMoreFirst'     => Types::TYPE_INT,
			'loadMoreLimit'     => Types::TYPE_INT,
			'lazyLoad'          => Types::TYPE_BOOL,
			'videoOnThumbnails' => Types::TYPE_BOOL,
			'customOrder'       => Types::TYPE_STRING,
			'random'            => Types::TYPE_STRING
		);
	}
	
	// Step 3
	
	/**
	 * @param array $settings
	 *
	 * @return array
	 */
	protected function checkTypeSettings(array $settings){
		$check = $this->getCheckTypeSettings();
		foreach($check as $key => $type) {
			if(key_exists($key, $settings)) {
				switch($type) {
					case Types::TYPE_BOOL:
						$settings[$key] =
							in_array($settings[$key], array( 'on', 'yes', 'true' ), true) ? true :
								(in_array($settings[$key], array( 'off', 'no', 'false' ), true) ? false :
									(bool) $settings[$key]);
						break;
					case Types::TYPE_INT:
						$settings[$key] = intval($settings[$key]);
						break;
					case  Types::TYPE_STRING:
						$settings[$key] = strval($settings[$key]);
						break;
					case Types::TYPE_FLOAT:
						$settings[$key] = floatval($settings[$key]);
						break;
					case Types::TYPE_ARRAY:
						$settings[$key] =
							is_object($settings[$key]) ? get_object_vars($settings[$key]) :
								(!is_array($settings[$key]) ? array() : $settings[$key]);
						break;
				}
			}
		}
		
		return $settings;
	}
	
}
