<?php

namespace App\Http\Controllers;

use App\RegisterUser;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('register');
    }
    public function home()
    {

        return view('homereg');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users= RegisterUser::all();
        // return $users
        return view('UsersTable',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        //1st way to insert data
        /* RegisterUser::create($request->all()); */

        //2nd way to insert data
        /*  RegisterUser::create([
                        'fullname' => $request->input('fullname'),
                        'email'    => $request->input('email'),
                        'mobile'   => $request->input('mobile'),
                        'password' => bcrypt($request->input('password')),
                        ]); */

        //3rd way to insert data
        $user=new RegisterUser;
        $user->fullname     = $request->input('display_name');
        $user->email        = $request->input('email');
        $user->mobile        = $request->input('mobile');
        $user->password      = $request->input('password');
        $user->save();
        return redirect('/readusers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = RegisterUser::findOrFail($id);
        return view('edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $email   =  $request->input('email');
        $name    =  $request->input('display_name');
        $mobile  =  $request->input('mobile');
        $password = $request->input('password');

        $validated = $request->validate([
            'email' => 'required|email',
//           'email' => 'required|email|max:255|regex:/(.*)@myemail\.com/i|unique:users',
            'display_name' => 'required',
//           'password' => 'required|min:8|max:16|
//           regex:/[a-z]/|
//            regex:/[A-Z]/|
//            regex:/[0-9]/|
//            regex:/[@$!%*#?&]/
//           |confirmed',
            'password' => 'required|
            min:8|
            max:16|
            confirmed',
            'mobile' => 'required',
        ]);

        $user = RegisterUser::find($id);

        $user->email = $email;
        $user->fullname = $name;
        $user->mobile = $mobile;
        $user->password = $password;

        $user->save();

        return redirect('/readusers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RegisterUser::destroy($id);
        return redirect('/readusers');

    }

    public function userform(Request $request){

//        $email   =  $request->input('email');
//        $name    =  $request->input('display_name');
//        $mobile  =  $request->input('mobile');
//        $password = $request->input('password');

        $validated = $request->validate([
            'email' => 'required|email',
//           'email' => 'required|email|max:255|regex:/(.*)@myemail\.com/i|unique:users',
            'first_name' => 'required',
            'last_name' => 'required',
            'display_name' => 'required',
//           'password' => 'required|min:8|max:16|
//           regex:/[a-z]/|
//            regex:/[A-Z]/|
//            regex:/[0-9]/|
//            regex:/[@$!%*#?&]/
//           |confirmed',
            'password' => 'required|
            min:8|
            max:16|
            confirmed',
            'mobile' => 'required',
        ]);
        return $this->store($request);

}}
