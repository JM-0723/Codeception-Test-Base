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
        


        //_getConfig function is use to get the data from the data file under _envs folder
        $home = $helper->_getConfig('home');
        $home_element = $helper->_getConfig('home_element');

        //these are  the automated commands to be executed by the web driver
        $I->amOnPage($home);
        $uri = $I->grabFromCurrentUrl();
        $I->seeElement($home_element);


    }
}
