use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', function (Request $request) {
    $data = $request->validate([
        'username' => 'required|string',
        'password' => 'required|string'
    ]);


    return response()->json(['message' => 'User Login successful!', 'data' => $data]);
});
