<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('auth.Staffs.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.Staffs.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        $request->session()->flash('alert-success', 'Staff Created');
        return to_route('staffs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = user::find($id);
        return view('auth.Staffs.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $user = User::find($id);

            // Periksa apakah kata sandi terakhir yang diberikan cocok dengan kata sandi terenkripsi yang disimpan
            if (Hash::check($request->lapassword, $user->password)) {
                // Perbarui detail pengguna dengan kata sandi baru
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

                DB::commit();
                $request->session()->flash('alert-update', 'User Data Updated');
                return redirect()->route('staffs.index');
            } else {
                // Kata sandi terakhir tidak cocok, tampilkan pesan kesalahan atau tangani sesuai kebutuhan
                return redirect()->back()->with('password_mismatch', 'Kata sandi terakhir yang diberikan salah.');
            }
        } catch (\Exception $ex) {
            DB::rollBack();
            // Tangani pengecualian (misalnya, catat kesalahan)
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui pengguna.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $user = user::find($id);
        if ($user->seed == 1) {
            $request->session()->flash('alert-danger', 'Staff can not remove');
            return to_route('staffs.index');
        } else {
            $user->delete();
            $request->session()->flash('alert-success', 'Staff Removed');
            return to_route('staffs.index');
        }
    }
}
