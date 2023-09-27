<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class TestCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $scenario = $I->getScenarioObject();
        $modules = $scenario->current('modules');
        $helper = $modules['\Tests\Support\Helper\Acceptance'];

        $I->amOnPage('/');
        $uri = $I->grabFromCurrentUrl();
        echo($uri);
        $I->seeElement("#hplogo");
    }
}
