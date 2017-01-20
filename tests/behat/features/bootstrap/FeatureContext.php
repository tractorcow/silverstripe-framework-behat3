<?php

namespace SilverStripe\Framework\Test\Behaviour;

use SilverStripe\BehatExtension\Context\SilverStripeContext;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Dev\BehatFixtureFactory;
use SilverStripe\Dev\FixtureFactory;

/**
 * Features context
 *
 * Context automatically loaded by Behat.
 * Uses subcontexts to extend functionality.
 */
class FeatureContext extends SilverStripeContext
{
    /**
     * @var FixtureFactory
     */
    protected $fixtureFactory;

    /**
     * @return FixtureFactory
     */
    public function getFixtureFactory()
    {
        if (!$this->fixtureFactory) {
            $this->fixtureFactory = Injector::inst()->create(BehatFixtureFactory::class);
        }
        return $this->fixtureFactory;
    }

    public function setFixtureFactory(FixtureFactory $factory)
    {
        $this->fixtureFactory = $factory;
    }
}
