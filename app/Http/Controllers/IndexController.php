<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistryForm;


class IndexController extends Controller
{
    public function index()
    {
        $records = RegistryForm::all();
        return view('registry.index', compact('records'));
    }

    public function register()
    {
        return view('registry.register');
    }

    public function destroy($id)
    {
        $record = RegistryForm::findOrFail($id);
        $record->delete();

        return redirect()->route('registry.index')->with('message', 'Record deleted successfully')->with('msg_type', 'success');
    }


}
