<?php

namespace App\Http\Controllers;

use App\Http\Traits\CrudTrait;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    use CrudTrait;
    public $model;
    public $modelName;


    public function __construct(Employee $model)
    {
        $this->model = $model;
        $this->modelName = strtolower(class_basename($model));
    }

    public function store(Request $request)
    {
        $this->validation();
        
        $fileName = time() . "_employee.jpeg";

        $this->uplodadImage($request->image,$fileName,'employees');

        $this->model::create(array_merge(
            $this->attReq(),
            ['image' => $fileName]
        ));
        return redirect()->back()->with('success', "تمت العملية بنجاح");
    }


    public function update(Request $request,$id)
    {
        $this->validation();
        $obj = $this->model::find($id);

        $fileName = time() . "_employee.jpeg";

        $this->uplodadImage($request->image,$fileName,'employees',$obj->image);

        $obj->update(array_merge(
            $this->attReq(),
            ['image' => $fileName]
        ));
        return redirect()->back()->with('success', "تمت العملية بنجاح");
    }

    public function destroy($id)
    {
        $obj = $this->model::find($id);
        unlink(public_path('images/employees/' . $obj->image));
        $obj->delete();
        return redirect()->back()->with('success', "تمت العملية بنجاح");
    }

    private function validation()
    {
        request()->validate([
            'full_name' => 'required|string',
            'birth_day' => 'required|date',
        ]);
    }

    public function attReq()
    {
        return [
            'full_name' => request('full_name'),
            'birth_day' => request('birth_day'),
        ];
    }
}
