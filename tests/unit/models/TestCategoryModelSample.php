<?php

namespace Tests\unit;

use Tests\TestCase;
use App\models\Category;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestCategoryModelSample extends TestCase
{
    use DatabaseTransactions;

    protected $category;

    public function setUp()
    {
        $this->category = new Category('Sample title', 'Sample description', '');
    }

    public function testACategoryHasName()
    {
        $this->assertTrue(true);
    }

    public function testACategoryHasDescription()
    {
        $this->assertTrue(true);
    }
}
