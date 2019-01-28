<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\ModelsProperties\Property;
use App\Http\Controllers\PropertyController;

class PropertyModuleTest extends TestCase
{
    /** @test **/
    function load_properties()
    {
        //insert to property
        $property = PropertiesController::getAllPropertiesApi();

        $this->assertTrue(true);
    }
    /** @test **/
    function create_a_property()
    {
        //insert to property
        $property = factory(Property::class)->create();
        $this->markTestIncomplete('This test has not been implemented yet.');
        $this->assertTrue(true);
    }

    /** @test **/
    function update_a_property()
    {
        //update to property

        $this->markTestIncomplete('This test has not been implemented yet.');
        $this->assertTrue(true);
    }
    /** @test **/
    function set_features_of_a_property()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
        $this->assertTrue(true);
    }
    /** @test **/
    function get_features_of_a_property()
    {
        $this->markTestIncomplete('This test has not been implemented yet.');
        $this->assertTrue(true);
    }
}
