<?php


namespace App\Presenters;


use App\Models\Role;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserPresenter implements PresenterInterface
{
    /**
     * @param Model $model
     * @return array
     */
    public static function present(Model $model)
    {
        /** @var Role $role */
        $role = $model->role;

        /** @var User $user */
        $user = $model;

        return [
            'id' => $user->id,
            'login' => $user->login,
            'role' => [
                'id' => $role->id,
                'name' => $role->title,
                'description' => $role->description
            ]
        ];
    }
}
