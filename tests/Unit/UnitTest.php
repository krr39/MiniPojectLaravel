<?php



namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
use App\car;


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
    //unit test 4
    public function testCountNumberOfrecordsInDatabase()
    {
        $user = User::all();
        $recordCount = $user->count();
        $this->assertEquals(51, $recordCount);
    }
    //unitest 5
    public function testInsertCarTable()
    {
        $car= new Car();
        $car->make = 'Toyota';
        $car->model = 'Cambry';
        $car->year = '2008';
        $this->assertTrue($car->save());
    }
    //unit test 6
    public function testUpdateCarYear()
    {
        $car = car::find(1);
        $car->year = '2000';
        $this->assertTrue($car->save());
    }
    //unit test 7
    public function testDeleteCar()
    {
        $car= new car();
        $car->make = 'Toyota';
        $car->model = 'White';
        $car->year = '2005';
        $car->save();
        $this->assertTrue($car->delete());
    }
    //unit test 8
    public function testCountCarRecordsTable()
    {
        $car = car::all();
        $carRecordsCount = $car->count();
        $this->assertEquals(51,$carRecordsCount);
    }
    //unitest 9
    public function testCarYearDataTypes()
    {
        $car = car::inRandomOrder()->first();
        $year = (int)$car->Year;
        $this->assertInternalType("int", $year);
    }

}
