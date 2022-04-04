<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return DB::table('creator')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        DB::table('creator')->insert(['name' => $request->name,'created_at'=>Carbon::now(), 'updated_at'=>Carbon::now()]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return object|null
     */
    public function show(int $id): object|null
    {
        return DB::table('creator')->where('id',$id)->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return object|null
     */
    public function update(Request $request, int $id): object|null
    {
        DB::table('creator')->where('id',$id)->update(['name'=>$request->name]);
        return DB::table('creator')->where('id',$id)->first();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy(int $id)
    {
        DB::table('creator')->where('id',$id)->delete();
    }
}
