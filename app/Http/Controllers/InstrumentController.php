<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;
use App\Models\Instrument;
use View;
use Illuminate\Http\Request;

class InstrumentController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /instrument
	 *
	 * @return Response
	 */
	public function index()
	{
		
		return Response::json(Instrument::with('category')->get());

	}

    public function getInstruCat()
    {
        
        echo Response::json(Instrument::with('category')->get());

    }



	    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $idUpdate=$request->input('id');

            if(!isset($idUpdate)){


                Instrument::create(
                [
                    "name" => $request->input('name'),
                    "description" => $request->input('description'),
                    "category_id" => $request->input('category_id')
                ]);

                return Response::json(array('success' => true));
           }
           else
           {

                $instrument=Instrument::find($idUpdate);
                $instrument->name=$request->input('name');
                $instrument->description=$request->input('description');
                $instrument->category_id=$request->input('category_id');
                $instrument->save();
                return Response::json(array('success' => true));

           }
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Instrument::destroy($id);
    
        return Response::json(array('success' => true));
    }
	
}