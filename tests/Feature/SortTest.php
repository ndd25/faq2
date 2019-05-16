<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SortTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function SortTest()
    {
        $this->visit('/home')
            ->click('Sort Questions')
            ->seePageIs('/home');
    }

}
