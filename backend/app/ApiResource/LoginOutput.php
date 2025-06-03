<?php

namespace App\ApiResource;

// Pas besoin d'attribut ApiResource si c'est juste un DTO de sortie pour une autre ressource.
// Cependant, si vous voulez qu'il soit découvrable comme un schéma, vous pouvez l'ajouter.
class LoginOutput
{
    public string $status;
    public ?string $message = null;

    public function __construct(string $status, ?string $message = null)
    {
        $this->status = $status;
        $this->message = $message;
    }
}
