<?php

namespace App\Policies;

use App\Models\Laraple;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LaraplePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laraple  $laraple
     * @return mixed
     */
    public function v_edit(User $user, Laraple $laraple)
    {
        return $user->id == $laraple->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laraple  $laraple
     * @return mixed
     */
    public function update(User $user, Laraple $laraple)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laraple  $laraple
     * @return mixed
     */
    public function del(User $user, Laraple $laraple)
    {
        return $user->id == $laraple->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laraple  $laraple
     * @return mixed
     */
    public function restore(User $user, Laraple $laraple)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Laraple  $laraple
     * @return mixed
     */
    public function forceDelete(User $user, Laraple $laraple)
    {
        //
    }
}
