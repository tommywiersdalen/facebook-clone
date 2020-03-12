<?php

namespace App\scopes;

use Illuminate\Database\Eloquent\Scope;

class Reverse implements Scope {

    public function apply(Builder $builder, Model $model){
        $builder ->orderBy('id', 'desc');
    }
}
