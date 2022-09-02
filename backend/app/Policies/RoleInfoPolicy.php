<?php

namespace App\Policies;

use App\Models\User;
use App\Models\RoleInfo;
use Illuminate\Auth\Access\HandlesAuthorization;

class RoleInfoPolicy
{
    use HandlesAuthorization;

    /**
     * Perform pre-authorization checks.
     *
     * @param  \App\Models\User  $user
     * @param  string  $ability
     * @return void|bool
     */
    public function before(User $user, $ability)
    {   
        //
    }
    
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RoleInfo  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, RoleInfo $model)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RoleInfo  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, RoleInfo $model)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RoleInfo  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, RoleInfo $model)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RoleInfo  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, RoleInfo $model)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\RoleInfo  $model
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, RoleInfo $model)
    {
        //
    }
}
