<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Wisata;
use Illuminate\Auth\Access\Response;

class WisataPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Logika izin untuk melihat banyak model (Wisata)
        // Misalnya, hanya admin yang dapat melihat semua wisata

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Wisata $wisata): bool
    {
        // Logika izin untuk melihat satu model (Wisata)
        // Misalnya, hanya admin atau pemilik wisata yang dapat melihat

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Logika izin untuk membuat model (Wisata)
        // Misalnya, hanya user yang dapat membuat wisata

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Wisata $wisata): bool
    {
        // Logika izin untuk memperbarui model (Wisata)
        // Misalnya, hanya admin atau pemilik wisata yang dapat memperbarui


    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Wisata $wisata): bool
    {
        // Logika izin untuk menghapus model (Wisata)
        // Misalnya, hanya admin atau pemilik wisata yang dapat menghapus

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Wisata $wisata): bool
    {
        // Logika izin untuk mengembalikan model (Wisata) yang dihapus
        // Misalnya, hanya admin yang dapat mengembalikan

    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Wisata $wisata): bool
    {
        // Logika izin untuk menghapus permanen model (Wisata)
        // Misalnya, hanya admin yang dapat menghapus permanen
        
    }
}
