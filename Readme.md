
# API Generator DKS

> October CMS plugin to build RESTful APIs.

## Features

  - Auto generate routes
  - Auto Generate Controller (CRUD)
  - Support relationship restful API

## Install

1) Install plugin AhmadFatoni.ApiGenerator
2) Enter in folder plugin AhmadFatoni
3) Clone a repository https://github.com/crasherbootnet/api-generator-octobercms.git
4) Replace a directory {helpers,template} of api-generator-octobercms in apigenerator 
5) Delete api-generator-octobercms

## Usage

### Form
- API Name : Name of your API module
- Base Endpoint : Base endpoint of your API, ex : api/v1/modulename
- Short Description : Describe your API
- Model : select model that will be created API
- Custom Condition : Build customer response using JSON modeling

### Custom Condition Example
```
{
    'fillable': 'id,title,content',
    'relation': [{
        'name': 'user',
        'fillable': 'id,first_name'
    }, {
        'name': 'categories',
        'fillable': 'id,name
    }]
}
```
* please replace single quote with quote
