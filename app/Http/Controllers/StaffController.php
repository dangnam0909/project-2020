<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Symfony\Component\Console\Input\Input;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::all();
//        dd($staff);
        return view('staff.list_staff', compact('staff')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create_staff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullName'=>'required|unique:posts|max:255',
            'birthday'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        Staff::create($request->all()); // in ra 1 mang chua tat ca cac du lieu trong
        $staff = Staff::all();
        // tra ra view,
        return view('staff.list_staff', compact('staff'))->with('success', 'staff added successflly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('staff.list_staff', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // cap nhat lai staff
    public function edit(Request $request, $id)
    {
        $staff = Staff::find($id); // object
        return view('staff.edit_staff', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // in ra du lieu staff, sau do cap nhat lai du lieu
        $id = $request->id;

        $request->validate([
            'fullName'=>'required',
            'birthday'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $staff = array(
            'fullName' => $request->fullName,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password,
        );
        Staff::where('id', $id)->update($staff); // in ra 1 mang chua tat ca cac du lieu trong
        $staff = Staff::all();
        return view('staff.list_staff', compact('staff'))->with('update', 'staff updated successflly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Staff::where('id', $id)->delete();
        $staff = Staff::all();
        return view('staff.list_staff', compact('staff'))->with('delete', 'staff deleted successflly');
    }
}
