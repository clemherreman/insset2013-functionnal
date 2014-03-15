<?php

use Clem\TestCase\OurTestCase;
use WebDriver\By;

class SimpleFormTest extends OurTestCase {

    private $url = 'http://testing-vm.dev/simple-form.php';

    public function test_I_can_login()
    {
        $this->browser->open($this->url);

        $username = $this->browser->element(By::name('username'));
        $password = $this->browser->element(By::name('password'));
        $loginButton = $this->browser->element(By::css('input[type=submit]'));

        $username->type('Clement');
        $password->type('S3cr3t');
        $loginButton->click();

        $this->assertContains('Welcome Clement!', $this->browser->getText());
    }

    public function test_I_can_login_improved_version()
    {
        $this->browser->open($this->url);
        $when = $then = $this;

        $when->fillIn('username', 'Clement')
             ->fillIn('password', 'UltraSecret')
             ->login();

        $then->shouldSee('Welcome Clement!');
    }

    public function test_I_get_yelled_at_when_password_is_incorrect()
    {
        $this->browser->open($this->url);

        $this->fillIn('username', 'Clement')
            ->fillIn('password', 'wrong')
            ->login();

        $this->shouldSee('not allowed');
        $this->assertContains('spider', $this->browser->element(By::tag('img'))->getAttribute('alt'));
    }
    
    public function test_I_can_be_remembered_next_time()
    {
        $this->browser->open($this->url);

        $this->fillIn('username', 'Clement')
            ->fillIn('password', 'wrong')
            ->login();

        $this->shouldSee('not allowed');
    }


    private function fillIn($field, $value)
    {
        $this->browser->element(By::name($field))->type($value);

        return $this;
    }

    private function login()
    {
        $this->browser->element(By::css('input[type=submit]'))->click();

        return $this;
    }

    private function shouldSee($what)
    {
        $this->assertContains($what, $this->browser->getText());
    }
}
