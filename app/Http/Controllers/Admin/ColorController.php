<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;


class ColorController extends Controller
{
    public function __construct()
    {
        $this->setModel(Color::class);
        $this->resourceName = 'colors';
        $this->modelName = 'Color';
        $this->views = [
            'index' => 'admin.color.index',
            'create'=> 'admin.color.create',
        ];
        $this->validateRule = [
            'color_name'=>"required|string|bail",
        ];
    }
    public function edit($id){
        $color = Color::FindOrFail($id);
        return view('admin.color.edit',['color'=>$color]);
    }
    public function update(Request $request,$id){
       
        $validator = $request->validate($this->validateRule);
        if($validator){
            $color = Color::FindOrFail($id);
            $color->update(
                [
                    'color_name'=>$request->color_name,
                ]
            );
            return redirect()->route('color.index')->withToastSuccess('Color Updated Successfully!');
        }
        
    }
}
