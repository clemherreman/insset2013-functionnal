<?php

use Clem\TestCase\OurTestCase;
use WebDriver\By;

class HelloWorldTest extends OurTestCase {

    private $url = 'http://testing-vm.dev/helloworld.php';

    public function test__we_can_read_the_page_content()
    {
        $this->browser->open($this->url);

        $h1 = $this->browser->element(By::css('h1'));

        $this->assertEquals('Hello INSSET!', $h1->getText());
    }
}
