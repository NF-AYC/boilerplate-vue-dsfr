<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Task; // Si vous avez aussi une TaskPolicy
use App\Policies\CategoryPolicy;
use App\Policies\TaskPolicy; // Si vous avez aussi une TaskPolicy
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Category::class => CategoryPolicy::class,
        Task::class => TaskPolicy::class, // Ajoutez TaskPolicy si elle existe
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Gate::define('edit-settings', function (User $user) {
        //     return $user->isAdmin();
        // });
    }
}
