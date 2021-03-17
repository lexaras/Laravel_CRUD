<?php

namespace App\Http\Controllers;

use App\Models\Camping;
use Illuminate\Http\Request;
use DataTables;

class CampingController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Camping::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="edit btn btn-primary btn-sm editCamping">Edit</a>';

                    $btn = $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteCamping">Delete</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin');
    }


    public function indexPaging()
    {
        $campings = Camping::orderBy('created_at', 'DESC')->paginate(6);
        return view('campings/index-paging',)->with('campings', $campings);
    }



    public function store(Request $request)
    {
        $this->validate($request, [
            'country' => 'required',
            'city' => 'required',
            'camping_name' => 'required',
            'rating' => 'required',
            'number_of_reviews' => 'required',
            'website' => 'required',
            'list' => 'required'
        ]);
        Camping::updateOrCreate(
            ['id' => $request->camping_id],
            [
                'country' => $request->country, 'city' => $request->city, 'camping_name' => $request->camping_name,
                'rating' => $request->rating, 'number_of_reviews' => $request->number_of_reviews, 'website' => $request->website, 'list' => $request->list
            ]
        );

        return response()->json(['success' => 'Camping saved successfully.']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Camping  $camping
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $camping = Camping::find($id);
        return response()->json($camping);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Camping  $camping
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Camping::find($id)->delete();

        return response()->json(['success' => 'Camping deleted successfully.']);
    }
}
