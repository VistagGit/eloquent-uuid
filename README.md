# Laravel Eloquent UUID Traits
Laravel package with Eloquent models UUID1 and UUID4 traits that will let you generate UUIDs for your Eloquent models automatically.

## Installation

You can install this package via composer using this command:

``` bash
 composer require vistag/eloquent-uuid
```

## Usage


### Models

To set up a model to use UUID, simply use the HasUuid1 or HasUuid4 trait.

#### UUID1 Example
``` php
use Illuminate\Database\Eloquent\Model;
use Vistag\EloquentUuid\HasUuid1;

class Item extends Model
{
  use HasUuid1;
  
  ....
  
}
```

#### UUID4 Example
``` php
use Illuminate\Database\Eloquent\Model;
use Vistag\EloquentUuid\HasUuid4;

class Item extends Model
{
  use HasUuid4;
  
  ....
  
}
```

## Support

If you believe you have found an issue, please report it using the [GitHub issue tracker](https://github.com/VistagGit/eloquent-uuid/issues), or better yet, fork the repository and submit a pull request.

If you're using this package, I'd love to hear your thoughts. Thanks!


## License

The MIT License (MIT). [Vistag.com](https://vistag.com)