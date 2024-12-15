<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Ads;
use Illuminate\Support\Facades\Log;  // Importer Log ici

class AdsPolicy
{
    /**
     * Détermine si l'utilisateur peut modifier l'annonce.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ads   $ad
     * @return bool
     */
    public function update(User $user, Ads $ad)
    {
        // Logique de débogage (facultatif)
        Log::info('User ID: ' . $user->id);
        Log::info('Ad User ID: ' . $ad->users_id);

        return $user->id === $ad->users_id;
    }

    /**
     * Détermine si l'utilisateur peut supprimer l'annonce.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Ads   $ad
     * @return bool
     */
    public function delete(User $user, Ads $ad)
    {

        return $user->id === $ad->users_id;
    }
}
