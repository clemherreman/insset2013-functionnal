<?php

use Clem\TestCase\OurTestCase;
use WebDriver\By;
use WebDriver\Element;

class MoreComplexTest extends OurTestCase {

    private $url = 'http://testing-vm.dev/more-complex.php';

    public function test_unicorns_are_cool_and_spider_are_not()
    {
        $this->browser->open($this->url);

        $animalList = $this->browser->element(By::className('cool-animals'));

        $this->assertContains('Unicorn', $animalList->getText());
        $this->assertNotContains('Spider', $animalList->getText());
    }

    public function test_all_cool_animals_have_a_reason_why()
    {
        $this->browser->open($this->url);

        $coolAnimals = $this->browser->elements(By::css('.cool-animals li'));

//        $reasons = $this->browser->elements(By::css('.reasons tr'));        //IT'S A TRAP
//        $reasons = $this->browser->elements(By::css('.reasons tbody tr'));  // Better
//        $reasons = $this->browser->elements(By::css('.reasons-list tr'));   // Even better
        $reasons = $this->browser->elements(By::css('.reason'));            // Even even better

        $this->assertEquals(count($coolAnimals), count($reasons));
    }

    public function test_pony_coolness_is_explained_with_a_proper_image()
    {
        $this->browser->open($this->url);

        $reasons = $this->browser->elements(By::css('.reason'));
        $ponyReason = $this->findAnimalReason($reasons, 'Pony');
        $ponyReasonList = $this->getReasonList($ponyReason);

        $this->assertCount(1, $ponyReasonList->elements(By::tag('img')));
    }

    /**
     * @param Element $reason
     * @return Element
     */
    private function getReasonList(Element $reason)
    {
        return $reason->elements(By::tag('td'))[2];
    }

    /**
     * @param \Webdriver\Element[] $allReasons
     * @param string               $animalName
     * @return Element
     */
    private function findAnimalReason($allReasons, $animalName)
    {
        foreach($allReasons as $reason) {
            /** @var Element $animal */
            $animal = $reason->elements(By::tag('td'))[1];

            if ($animal->getText() === $animalName) {
                return $reason;
            }
        }

        throw new \Exception('No reason why ponies are cool was find. So sad…');
    }
}
