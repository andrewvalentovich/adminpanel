<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',
            ],
            [
                'name' => 'Manager',
            ],
            [
                'name' => 'Editor',
            ],
            [
                'name' => 'User',
            ],
        ];

        $this->rolesCreate($roles);
        $this->adminCreate($roles);

        Category::factory(10)->create();
        $tags = Tag::factory(20)->create();
        $articles = Article::factory(300)->create();
        $users = User::factory(4)->create();

        $this->articleTagsAttach($articles, $tags);
        $this->userRolesAttach($users);
    }

    public function adminCreate(array $roles)
    {
        $index = 1;

        for ($i = 0; $i < count($roles); $i++) {
            if ($roles[$i] === "Admin") {
                $index += $i;
                return 0;
            }
        }

        $user = User::create([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => bcrypt('rootroot'), // password
        ]);

        $user->roles()->attach($index);

        return 0;
    }

    public function rolesCreate(array $roles)
    {
        foreach ($roles as $role) {
            Role::create($role);
        }
    }

    public function articleTagsAttach(Collection $articles, Collection $tags)
    {
        foreach ($articles as $article) {
            $tagsId = $tags->random(3)->pluck('id');    // получаем колонку "id"
            $article->tags()->attach($tagsId);                  // добавляем "id" рандомных 3х тэгов в промежуточную таблицу
        }
    }

    public function userRolesAttach(Collection $users)
    {
        foreach ($users as $user) {
            $rolesId = Role::all()->random(2)->pluck('id');
            $user->roles()->attach($rolesId);
        }
    }

}
