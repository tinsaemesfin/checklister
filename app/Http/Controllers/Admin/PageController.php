<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePageRequest;
use App\Models\Page;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function edit(Page $page)
    {
        return view('admin.pages.edit',compact('page'));
    }

    public function update(UpdatePageRequest $request, Page $page)
    {
        $page->update($request->validated());
        return redirect()->route('admin.pages.edit',$page)->with('message',__('Success'));
    }

}
