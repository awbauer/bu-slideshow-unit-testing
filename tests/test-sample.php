<?php

class SampleTest extends WP_UnitTestCase {

	function testSample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function test_plugin_activated() {
		$this->assertTrue( class_exists( 'BU_Slideshow' ) );
	}
}

