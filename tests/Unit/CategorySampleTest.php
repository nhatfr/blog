<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Constant\HTTPStatues;

class CategorySampleTest extends TestCase
{
    /**
     * Category
     * - id: int (auto increment)
     * - name: string (maxLength = 100, required)
     * - description: text, required
     * - video: text, optional
     */

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testGetCategoryListSuccess()
    {
        $this->get(config('api/urls.CategoryListURL'))
            ->assertStatus(HTTPStatuses::OK);
    }

    public function testGetCategoryListNotAuthenticated()
    {
        $this->get(config('api/urls.CategoryListURL'))
        ->assertStatus(HTTPStatues::NOT_AUTHENTICATED);
    }

    public function testGetCategoryDetailSuccess()
    {
        $this->get(config('api/urls.CategoryDetailURL'))
            ->assertStatus(HTTPStatuses::OK);
    }

    public function testGetCategoryDetailNotFound()
    {
        $this->get(config('api/urls.CategoryDetailURL'))
        ->assertStatus(HTTPStatues::NOT_FOUND);
    }

    public function testGetCategoryDetailNotAuthenticated()
    {
        $this->get(config('api/urls.CategoryDetailURL'))
        ->assertStatus(HTTPStatues::NOT_AUTHENTICATED);
    }

    public function testUpdateCategoryDetailSuccess()
    {
        $data = [];
        $this->put(config('api/urls.CategoryDetailURL'), $data)
        ->assertStatus(HTTPStatues::OK);
    }

    public function testUpdateCategoryDetailNotFound()
    {
        $data = [];
        $this->put(config('api/urls.CategoryDetailURL'), $data)
        ->assertStatus(HTTPStatues::NOT_FOUND);
    }

    public function testUpdateCategoryDetailNotAuthenticated()
    {
        $data = [];
        $this->put(config('api/urls.CategoryDetailURL'))
        ->assertStatus(HTTPStatues::NOT_AUTHENTICATED);
    }

    public function testUpdateCategoryDetailWithLenghtNameLargerThan200CharacterResponseBadRequest()
    {
        $data = [];
        $this->put(config('api/urls.CategoryDetailURL'), $data)
        ->assertStatus(HTTPStatues::BAD_REQUEST);
    }

    public function testUpdateCategoryDetailWithNameIsEmptyStringResponseBadRequest()
    {
        $data = [];
        $this->put(config('api/urls.CategoryDetailURL'), $data)
        ->assertStatus(HTTPStatues::BAD_REQUEST);
    }

    public function testUpdateCategoryDetailWithDescriptionIsEmptyStringResponseBadRequest()
    {
        $data = [];
        $this->put(config('api/urls.CategoryDetailURL'), $data)
        ->assertStatus(HTTPStatues::BAD_REQUEST);
    }

    public function testUpdateCategoryDetailWithNameAndDescriptionAreEmptyResponseBadRequest()
    {
        $data = [];
        $this->put(config('api/urls.CategoryDetailURL'), $data)
        ->assertStatus(HTTPStatues::BAD_REQUEST);
    }

    public function testCreateNewCategoryResponseSuccessResponseCreated()
    {
        $data = [];
        $this->post(config('api/urls.CategoryListURL'), $data)
        ->assertStatus(HTTPStatues::CREATED);
    }

    public function testCreateNewCategoryNotAuthenticated()
    {
        $data = [];
        $this->post(config('api/urls.CategoryListURL'), $data)
        ->assertStatus(HTTPStatues::NOT_AUTHENTICATED);
    }

    public function testCreateNewCategoryWithNameIsEmptyStringResponseBadRequest()
    {
        $data = [];
        $this->post(config('api/urls.CategoryListURL'), $data)
        ->assertStatus(HTTPStatues::BAD_REQUEST);
    }

    public function testCreateNewCategoryWithDescriptionIsEmptyStringResponseBadRequest()
    {
        $data = [];
        $this->post(config('api/urls.CategoryListURL'), $data)
        ->assertStatus(HTTPStatues::BAD_REQUEST);
    }

    public function testCreateNewCategoryWithNameAndDescriptionAreEmptyStringResponseBadREquest()
    {
        $data = [];
        $this->post(config('api/urls.CategoryListURL'), $data)
        ->assertStatus(HTTPStatues::BAD_REQUEST);
    }

    public function testCreateNewCategoryWithNameHasLengthLargerThan200CharacterResponseBadRequest()
    {
        $data = [];
        $this->post(config('api/urls.CategoryListURL'), $data)
        ->assertStatus(HTTPStatues::BAD_REQUEST);
    }
}
