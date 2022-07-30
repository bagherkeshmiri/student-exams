<?php

namespace App\Providers;

use App\Repositories\Admin\AdminRepositoryInterface;
use App\Repositories\Admin\EloquentAdminRepository;
use App\Repositories\Answer\AnswerRepositoryInterface;
use App\Repositories\Answer\EloquentAnswerRepository;
use App\Repositories\Permission\EloquentPermissionRepository;
use App\Repositories\Permission\PermissionRepositoryInterface;
use App\Repositories\Question\EloquentQuestionRepository;
use App\Repositories\Question\QuestionRepositoryInterface;
use App\Repositories\Role\EloquentRoleRepository;
use App\Repositories\Role\RoleRepositoryInterface;
use App\Repositories\User\EloquentUserRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
        $this->app->bind(AdminRepositoryInterface::class, EloquentAdminRepository::class);
        $this->app->bind(RoleRepositoryInterface::class, EloquentRoleRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class, EloquentQuestionRepository::class);
        $this->app->bind(PermissionRepositoryInterface::class, EloquentPermissionRepository::class);
        $this->app->bind(AnswerRepositoryInterface::class, EloquentAnswerRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
