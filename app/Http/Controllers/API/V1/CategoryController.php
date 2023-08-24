<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      
        try{
            $data= Category::query()->orderByDesc('id')->get();
            return response()->json($data);

        }catch(\Exception $exception){
            \Log::error('Exception',[$exception]);
            return response()->json([],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            $model = new Category();

            $model->fill($request->all());

            $model->save();

            return response()->json($model);
        } catch (\Exception $exception) {
            Log::error('Exception', [$exception]);

            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($category)
    {
        //
        $categorys = Category::find($category);
        return response()->json(Category::find($category));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $Category=new Category();
        $Category=Category::find($id);
        $Category->fill($request->all());
            // var_dump($Category);
       $Category->save();
            // alert('123');
        
        return response()->json($Category);



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        //
        $model=Category::find($category);
        $model->delete();
        return response()->json($model);


    }
}
