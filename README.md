# blog
blog - laravel

# Database:
```
Category: 
    - id: int, pk
    - name : string(256)
    - slug : unique, string (256)
    - description: text
    - img: text
    - created_at: datetime
    - updated_at: datetime

Article:
    - id: int, pk
    - category_id: int, fk
    - title: string (256)
    - friendly-title: unique, string(256)
    - content: text
    - created_at: datetime
    - updated_at: datetime
```
We say: "A category has many articles"

# OutPut Api

## GET /categories

### Description
- We say: Any people can get categories


### Request

#### Example request
```
http://localhost:8000/categories/?limit=5&offset=0
```

| params | Type | Default value |
| :---: | :---: | :---: |
|limit| int|5|
|offset| int|0|

### Response
#### Example response
```
{
    current: http://localhost:8000/categories/?limit=5&offset=0,
    pre: null,
    next: http://localhost:8000/categories/?limit=5&offset=5,
    results: [
        {
            "id": "1",
            "name": "category example 1",
            "slug": "category-example-1",
            "description": "this is example category",
            "created_at": "2018-01-01 22:22:22",
            "updated_at": ""2018-01-01 22:22:22"
        },
        {
            "id": "2",
            "name": "category example 2",
            "slug": "category-example-2",
            "description": "this is example category",
            "created_at": "2018-01-01 22:22:22",
            "updated_at": ""2018-01-01 22:22:22"
        },
        {
            "id": "3",
            "name": "category example 3",
            "slug": "category-example-3",
            "description": "this is example category"
            "created_at": "2018-01-01 22:22:22",
            "updated_at": ""2018-01-01 22:22:22"
        },
        {
            "id": "4",
            "name": "category example 4",
            "slug": "category-example-4",
            "description": "this is example category",
            "created_at": "2018-01-01 22:22:22",
            "updated_at": ""2018-01-01 22:22:22"
        },
        {
            "id": "5",
            "name": "category example 5",
            "slug": "category-example-5",
            "description": "this is example category",
            "created_at": "2018-01-01 22:22:22",
            "updated_at": ""2018-01-01 22:22:22"
        }
    ]
}
```
#### Response
| Element | Type | Example Value|Detail |
| :---: | :---: | :---: |:---: |
|prev| string| null|Previous link (break page) if the results have|
|current| string|http://localhost:8000/categories/?limit=5&offset=0| Current URL|
|next| string|http://localhost:8000/categories/?limit=5&offset=5| Next URL (break page if results have)
|results| array| [] | include category infomations.

#### Http statuses
|HTTP| Detail|
| :---: | :---: |
|200|OK|
|404| Not Found|
|500| Sever Error|

## POST /categories
### Description
- We say: Any people can create a category

### Request
#### Request example
```
URL: POST http://localhost:8000/categories
body: 
{
    "name": "test example category",
    "description": "this is example description",
    "img": "example-img"
}
```
#### Request Body Params:
|Name|Type |Required|Example value| Detail|
| :---: | :---: |:---: | :---: | :---: |
|name| string| True| test example category| Name of Category|
|description|string| True|"this is example description"| Description of Category|
|img| String| False| example-img| Link to image of category|

#### Note
When create a category, slug = lowercase(name) + (-) and its slug created automatic

Example
|Name|Slug |
| :---: | :---: |
|test category| test-category|
### Response
#### Example Response:
```
{
    "id": 6,
    "name": "test example category",
    "slug": "test-example-category"
    "description": "this is example description",
    "img": "example-img",
    "created_at": "2018-10-10 22:22:22",
    "updated_at": "2018-10-10 22:22:22"
}
```
#### Http statuses
|HTTP Status| Detail|
| :---: | :---: |
|201|Created|
|400|Bad Request|
|500| Sever Error|

// TODO: Write Api With Article Model
- Get list article by category (GET http://localhost:8000/articles/{category-slug}/?limit=10&offset=5)
- Create Article (POST http://localhost:8000/articles/)
- Update Article (PUT http://localhost:8000/articles/{articleId}/)
- Delete Article (DELETE http://localhost:8000/articles/{aritcleId}/)
