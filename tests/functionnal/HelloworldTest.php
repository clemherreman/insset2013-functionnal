<?php

use Clem\TestCase\OurTestCase;
use WebDriver\By;

class GitHubTest extends OurTestCase {

    private $url = 'http://testing-vm.dev/helloworld.html';

    public function test__we_can_read_the_page_content()
    {
        $this->browser->open($this->url);
        $this->assertEquals('Hello INSSET!', $this->browser->element(By::css('h1'))->getText());
        $this->assertEquals('This should fail', $this->browser->element(By::css('h1'))->getText());
    }
}
