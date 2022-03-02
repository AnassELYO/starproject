<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Star;
use Illuminate\Http\Request;

class StarController extends Controller
{
    protected  $star;
    public function __construct(Star $star)
    {
        $this->star = $star;
    }


    public function index()
    {
        $stars = Star::all();
        return view('admin_area', compact('stars'));
    }

    public function create()
    {

    }

    public function edit($id)
    {
        $star = Star::find($id);
        return view('edit_star', compact('star'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, $this->star::$validateFields);
        try {
            $this->star::find($id)->update($request->all());
            return redirect()->action([StarController::class, 'index']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        Star::destroy($id);
        return redirect()->action([StarController::class, 'index']);
    }
}
