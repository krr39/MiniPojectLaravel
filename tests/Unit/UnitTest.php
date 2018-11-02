<?php



namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class UnitTest extends TestCase
{
    //unit test 1
    public function testInsertUserTable()
    {
        $user= new User();
        $user->name = 'Krutika rasik Ramani';
        $user->email = 'krr39dcnjn@njit.edu';
        $user->password = 'pasjjs1233';
        $this->assertTrue($user->save());
    }
    //unit test 2
    public function testUpdateSteveNameTable()
    {
        $user = User::find(1);
        $user->name = 'Steve Smith';
        $this->assertTrue($user->save());
    }
    //unit test 3
    public function testDeleteUserTable()
    {
        $user= new User();
        $user->name = 'Prof. Estban Lowe';
        $user->email = 'derek95@exaple.org';
        $user->password = '123456';
        $user->save();
        $this->assertTrue($user->delete());
    }

}
