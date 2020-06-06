<?php

namespace Tests\Unit;

use App\User;
use Facades\Tests\Setup\ProjectFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_has_projects()
    {
        $user = factory('App\User')->create();

        $this->assertInstanceOf(Collection::class, $user->projects);
    }

    /** @test */
    public function a_user_has_accessible_projects()
    {
        $vento = $this->signIn();
        ProjectFactory::ownedBy($vento)->create();

        $this->assertCount(1, $vento->accessibleProjects());

        $artika = factory(User::class)->create();
        $deco = factory(User::class)->create();

        $artikaProject = tap(ProjectFactory::ownedBy($artika)->create())->invite($deco);
        

        $this->assertCount(1, $vento->accessibleProjects());

        $artikaProject->invite($vento);

        $this->assertCount(2, $vento->accessibleProjects());
    }
}
