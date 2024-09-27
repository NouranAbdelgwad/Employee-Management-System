<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Exception;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view("dashboard.index")->with("employees", Employee::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.index");
    }

    public function store(Request $request)
    {
        Employee::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "position"=>$request->position,
            "salary"=>$request->salary
        ]);
        return redirect("/index")->with("success", "Employee has been added Successfully");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("dashboard.edit")->with("employee", Employee::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Employee::findOrFail($id)->update([
            "name"=>$request->name,
            "email"=>$request->email,
            "position"=>$request->position,
            "salary"=>$request->salary
        ]);
        return redirect("/index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $name= Employee::findOrFail($id)->name;
            Employee::findOrFail($id)->delete();
            return redirect("/index")->with("deleted", $name . "Has been soft deleted");
        }
        catch(Exception $e){
            return "Failed";
        }
    }
    public function archive(){
        return view("dashboard.archive")->with("trashed", Employee::onlyTrashed()->get());
    }
    public function restore($id){
        Employee::onlyTrashed()->findOrFail($id)->restore();
        return redirect("archive");
    }
    public function forceDelete($id){
        try{
            $name = Employee::onlyTrashed()->findOrFail($id)->name;
        Employee::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect("/archive")->with("deleted", $name . "Has been deleted permenantly");
        } catch(Exception $e){
            return "failed";
        }
    }
}
