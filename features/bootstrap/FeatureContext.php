<?php

use Behat\Behat\Context\Step\Then;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;


//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//
use Behat\MinkExtension\Context\MinkContext;

/**
* Features context.
*/
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

    /**
     * @Given /^wait for a response$/
     */
    public function waitForAResponse()
    {
        print 'Press [enter] to continue...';
        readline();
    }
    
    /**
     * @Given /^I am at portfolio$/
     */
    public function iAmAtPortfolio()
    {
        $steps = array();
        $steps[] = new Then('I follow "Projects"');
        $steps[] = new Then('I follow "Bullfrog Drupal Sub-Theme"');
        $steps[] = new Then('I follow "Bullfrog Drupal Sub-Theme Project"');
        $steps[] = new Then('I should be on "http://www.hsallisonlaw.com/drupalbullfrog/"');
        $steps[] = new Then('wait for a response');
        return $steps;
    }

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//
}
