<?php
namespace  App\Http\Traits;

use Illuminate\Support\Facades\Schema;

trait CrudTrait
{
    public function index()
    {
        $all = $this->model::get();
        $columns = Schema::getColumnListing($this->model->getTable());
        $model = $this->modelName;
        return view("pages.{$this->modelName}.index",compact('all','columns','model'));
    }

    public function create()
    {
        $model = $this->modelName;
        return view("pages.{$this->modelName}.create",compact('model'));
    }

    public function show()
    {
        //
    }

    public function store()
    {
        $this->validation();
        $this->model::create($this->attReq());
        return redirect()->back()->with('success','تمت العملية بنجاح');
    }

    public function edit($id)
    {
        $model = $this->modelName;
        $obj = $this->model::find($id);
        return view("pages.{$this->modelName}.edit",compact('obj','model'));
    }


   
    public function update($id)
    {
        $this->validation();
        $obj = $this->model::find($id);
        $obj->update($this->attReq());
        return redirect()->back()->with('success','تمت العملية بنجاح');
    }

    
    
    public function destroy($id)
    {
        $obj = $this->model::find($id);
        $obj->delete();
        return redirect()->back()->with('success','تمت العملية بنجاح');
    }

    private function uplodadImage($file,$fileName,$path,$old = null)
    {
        $file->move(public_path('images/'. $path),$fileName);

        if(!is_null($old))
        {
            unlink(public_path('images/'. $path . "/" .$old));
        }
    }
}