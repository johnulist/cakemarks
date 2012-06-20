<?php
// Copyright © 2011-2012 Martin Ueding <dev@martin-ueding.de>

App::import('Lib', 'CakemarksWebTestCase');

class BookmarkVisitTestCase extends CakemarksWebTestCase {
	function test_init_zero_visits() {
		$this->bookmark_add(false);

		$this->assertPattern('$Visits</dt>[\s\n]*<dd>0\D+$');
		$this->assertNoPattern('$Visits</dt>[\s\n]*<dd>[1-9]\d*$');
	}

	function test_init_one_visit_after_visit() {
		$this->load_bookmark_add_page();

		$input_title = String::uuid();
		$input_url = "http://127.0.0.1/";
		$this->assertTrue($this->setField('data[Bookmark][title]',
			$input_title));
		$this->assertTrue($this->setField('data[Bookmark][url]', $input_url));
		$this->click("Submit");

		$this->verify_page_load();

		$this->assertPattern("#$input_title#");
		$this->assertPattern("#$input_url#");
		$current_url = $this->getUrl();

		$this->click($input_url);

		$this->get($current_url);
		$this->verify_page_load();

		$this->assertPattern('$Visits</dt>[\s\n]*<dd>1\D+$');
		$this->assertNoPattern('$Visits</dt>[\s\n]*<dd>[02-9]\d*$');
	}
}
?>
