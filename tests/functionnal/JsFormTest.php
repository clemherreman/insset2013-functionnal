<?php

use Clem\TestCase\OurTestCase;
use WebDriver\By;

class JsFormTest extends OurTestCase {

    private $url = 'http://testing-vm.dev/js-form.php';

    public function test_I_get_autocompletion_when_chosing_animals()
    {
        $this->browser->open($this->url);

        $animal = $this->browser->element(By::name('animals'));
        $animal->type('C');

        $this->waitForElementToShow('.typeahead', 10);

        $suggestions = $this->browser->element(By::className('typeahead'));

        $this->assertContains('Cats', $suggestions->getText());
        $this->assertContains('Unicorn', $suggestions->getText());
    }

    private function waitForElementToShow($selector, $timeout = 3)
    {
        for ($i = 0; $i < $timeout; $i++)
        {
            try {
                if ($this->browser->execute("return $('".$selector."').is(':visible')")) {
                    return true;
                }
            } catch (\Exception $e) {
                // do nothing
            }

            sleep(1);
        }

        throw new \WebDriver\Exception\ElementNotVisibleException('Element ".typeahead" not visible on the page');
    }
}
