<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return array
     */
    public function index(): array
    {
        $raw = 'select * from series';
        return DB::select($raw);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        if(!isset($request->creator)){
            $raw = "insert into series(name,date) values('" . $request->name . "',STR_TO_DATE('" . $request->date . "','%d/%m/%Y'))";
        }else {
            $raw = "insert into series(name,creator,date) values('" . $request->name . "'," . $request->creator . ",STR_TO_DATE('" . $request->date . "','%d/%m/%Y'))";
        }

        DB::insert($raw);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return array
     */
    public function show(int $id): array
    {
        $raw = 'SELECT * FROM series WHERE id='.$id;
        return DB::select($raw);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return array
     */
    public function update(Request $request, int $id): array
    {
        if(!isset($request->creator)){
            $raw = "UPDATE series SET name = '".$request->name."',date=STR_TO_DATE('".$request->date."','%d/%m/%Y') WHERE id=".$id;
        }else{
            $raw = "UPDATE series SET name = '".$request->name."',creator='".$request->creator."',date=STR_TO_DATE('".$request->date."','%d/%m/%Y') WHERE id=".$id;
        }
        DB::update($raw);
        return $this->show($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return void
     */
    public function destroy(int $id)
    {
        DB::delete('DELETE FROM series WHERE id ='.$id);
    }
}
