<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientRequest;
use App\Models\upazilas;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ClientController extends Controller
{
    public function showClients()
    {
        $clients = DB::table('clients')->orderBy('id')->cursorPaginate(10);

        return view('allclients', ['data' => $clients]);
    }

    public function showClient($id)
    {
        $client = DB::table('clients')->find($id);

        return view('viewclient', ['data' => $client]);
    }

    public function client()
    {
        return view('addclient');
    }

    public function addClient(StoreClientRequest $request)
    {
        $client = DB::table('clients')
            ->insert([
                'name' => $request->username,
                'email' => $request->email,
                'city' => $request->city,
                'age' => $request->age,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);

        if ($client)
            return redirect()->back();
        else
            echo "<h1>something wrong !!</h1>";
    }

    public function editClient($id)
    {
        $client = DB::table('clients')->find($id);

        return view('edit_client', ['data' => $client]);
    }

    public function updateClient(Request $request)
    {
        $client = DB::table('clients')
            ->where('id', $request->id)
            ->update(
                [
                    'name' => $request->username,
                    'age' => $request->age,
                    'city' => $request->city,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );


        if ($client)
            echo "<h1>successfully update</h1>";
        else
            echo "<h1>something wrong update</h1>";
    }

    public function deleteClient(string $id)
    {
        $client = DB::table('clients')
            ->where('id', $id)
            ->delete();

        if ($client)
            echo "successfully delete";
        else
            echo "something wrong";
    }

    public function showAllClients() {
        // $data = DB::table('clients')
        //         ->join('upazilas', 'clients.upazila_id', '=', 'upazilas.id')
        //         ->select(DB::raw('count(*) as student_count'), 'bn_name')
        //         ->groupBy('bn_name')
        //         ->havingBetween('student_count', [3,4])
        //         ->get();

        $data = DB::table('clients')
            ->leftJoin('upazilas', function(JoinClause $join){
                $join->on('clients.upazila_id', '=', 'upazilas.id')
                        ->where('clients.name', 'like', 'a%');
            })
            ->select('clients.*', 'upazilas.bn_name')
            ->get();

        return $data;
    }


    public function clientUnion()
    {
        $districts = DB::table('employees')
                    ->select('name', 'email', 'bn_name')
                    ->join('upazilas', 'employees.upazila_id', '=', 'upazilas.id')
                    ->where('upazilas.id', '=', 1);

        $client = DB::table('clients')
                ->union($districts)
                ->select('name', 'email', 'bn_name')
                ->join('upazilas', 'clients.upazila_id', '=', 'upazilas.id')
                ->where('upazilas.id', '=', 1)
                ->get();

        return $client;
    }

    public function whenData()
    {
        $test = true;
        $clients = DB::table('clients')
                        ->when($test, function ($query){
                            $query->where('age', '>', 18 );
                        }, function ($query){
                            $query->where('age', '<', 18 );
                        })
                        ->get();
        return $clients;
    }

    public function chankData()
    {
        $clients = DB::table('clients')
            ->orderBy('id')
            ->chunk(3, function ($clients){
                echo "<div style='border: 1px solid red; margin-bottom: 5px'>";
                foreach ($clients as $client) {
                    echo $client->name . "<br>";
                }
                echo "</div>";
            });
    }

    public function rawData()
    {
        $clients = DB::select("select name, age from clients where age = ?", [18]);

        return $clients;
    }
}
