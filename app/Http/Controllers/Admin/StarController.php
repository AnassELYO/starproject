<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StarController extends Controller
{
    protected $star;
    public function __construct(Star $star)
    {
        $this->star = $star;
    }

    public function index()
    {
        $stars = $this->star::all();
        return view('admin_area', compact('stars'));
    }

    public function create()
    {
        return view('create_star');
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->star::$validateFields); /* Verification des champs */
        try {
            $image = $request->file('image')->store('public');
            $url = Storage::url($image);
            $request->data = $request->all();
            $request->data['image'] = $url;
            $this->star::create($request->data);
            
            return redirect()->action([StarController::class, 'index']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $star = $this->star::find($id);
        return view('edit_star', compact('star'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, $this->star::$validateFields);
        try {
            $image = $request->file('image')->store('public');
            $url = Storage::url($image);
            $request->data = $request->all();
            $request->data['image'] = $url;
            $this->star::find($id)->update($request->data);
            return redirect()->action([StarController::class, 'index']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $this->star::destroy($id);
        return redirect()->action([StarController::class, 'index']);
    }
}
