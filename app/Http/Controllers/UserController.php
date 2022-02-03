<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request as HttpRequest;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{
    public function list(HttpRequest $request)
    {
        $users = [];
        $faker = Factory::create();
        $count = $faker->numberBetween(3, 15);

        for ($i = 0; $i < $count; $i++) {
            $users[] = [
                'id' => $faker->numberBetween(1, 1000),
                'name' => $faker->firstName
            ];
        }


        return view('user.list', ['users' => $users]);
    }

    public function show(int $userId)
    {
        $faker = Factory::create();
        $user = [
            'id' => $userId,
            'name' => $faker->name,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'city' => $faker->city,
            'age' => $faker->numberBetween(12, 25),
            'html' => '<script>alert("Xss")</script>'
        ];


        return view('user.show', [
            'user' => $user,
            'nick' => 0
        ]);
    }
}



































// http://127.0.0.1:8000/users/test/323







// return response()
//     ->view('user.profile', ['id' => $id], 200);
// $test = $request->url();
// dump($test);
// return response(
//     "<h3>TO jest obiekt response: User $id</h3>",
//     200,
//     ['Content-Type' => 'text/html']
// // );
// return response(
//     "<h3>Response User : $id</h3>",
//     200
// )
//     ->setStatusCode(200)
//     ->header('Content-Type', 'text/html')
//     ->header('my_best_cookie', 'brownie', 10);

// return redirect('users/test');
// return redirect()->route('get.users');
// return redirect()->route('get.users.address', ['id' => $id]);
// return redirect()->action('UserController@list');
// return redirect()->action('User\ShowAddress', ['id' => $id]);
// return redirect()->away('https://wp.pl');
// $uri = $request->path();
// $url = $request->url();
// $fullUrl = $request->fullUrl();
// $httpMethod = $request->method();
// $all = $request->all();
// $name = $request->input('name');
// $game = $request->input('games');
// $allQuery = $request->query();
// $name1 = $request->query('name');
// $input = $request->input();
// $query = $request->query();
// dump($request);
// dump($name);
// dump($name1);
// dump($game);
// dump($allQuery);
// dump($all);
// dump($uri, $url, $fullUrl, $httpMethod);
// dump($input, $query);
// $lastName = $request->input('lastName');
// $game = $request->input('games.1');
// $game = $request->input('games.1.name');
// $name = $request->query('LastName', 'Nowak');
// $expired = $request->boolean('expired');
// $hasName = $request->has('nick');
// $hasParam = $request->has(['nick', 'name']);
// $hasAnyParam = $request->hasAny(['nick1', 'name1']);
// $cookies = $request->cookie();
