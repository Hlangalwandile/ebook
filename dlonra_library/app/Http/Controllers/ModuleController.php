<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Module;


class ModuleController extends Controller
{
    public function addModule($bookID)
    {
        $module = new Module();
        $getSortOrder = Module::select('order')->max('order');
        $module -> bookID = $bookID;
        $module -> order = $getSortOrder + 1;
        $module -> title = request('title');
        $module -> save();
        $message = 'Module added succesfully';
        return redirect(route('ebook.editBook',$bookID))->with('success',$message);
    }
}
