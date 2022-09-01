<?php


namespace App\Http\Filters\Admin\User;


use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{
    public const EMAIL = 'email';
    public const NAME = 'name';

    protected function getCallbacks(): array
    {
        return [
            self::EMAIL => [$this, 'email'],
            self::NAME => [$this, 'name'],
        ];
    }

    public function email(Builder $builder, $value)
    {
        $builder->where('email', 'like', "%{$value}%");
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }
}
