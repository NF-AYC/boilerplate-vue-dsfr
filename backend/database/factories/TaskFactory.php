<?php

namespace Database\Factories;


use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence, // Génère une phrase aléatoire pour le titre
            'description' => $this->faker->paragraph, // Génère un paragraphe aléatoire pour la description
            'status' => $this->faker->randomElement(TaskStatus::cases()), // Sélectionne un statut aléatoire
            'due_date' => $this->faker->dateTimeBetween('now', '+1 year'), // Génère une date aléatoire dans l'année à venir
        ];
    }
}
