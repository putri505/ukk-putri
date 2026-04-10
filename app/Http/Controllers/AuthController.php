use Illuminate\Support\Facades\Auth; // ✅ tambahkan ini

public function daftar(Request $request)
{
    $request->validate([
        'username' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
    ]);

    $user = User::create([
        'name' => $request->username,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    // ✅ LOGIN OTOMATIS
    Auth::login($user);

    // ✅ REDIRECT KE DASHBOARD
    return redirect('/dashboard');
}