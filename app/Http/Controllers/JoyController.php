<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Joy;

class JoyController extends Controller
{
    /**
     * Show the form to create a new blog post.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'text' => 'required|max:1000'
        ]);


        $item = new Joy;
        $item->text = $request->text;
        $item->save();


        return redirect('/');
        // return view('post.create');
    }

    public function delete(Request $request)
    {
        // $this->validate($request, [
        //     'id' => 'required'
        // ]);

        Joy::findOrFail($request->id)->delete();
        // echo "deleted" . $request->id;
        // die();
        return redirect('/');
    }
}