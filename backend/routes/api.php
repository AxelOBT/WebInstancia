use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;

Route::get('/autores', [AutorController::class, 'index']);
Route::post('/autores', [AutorController::class, 'store']);

Route::get('/libros', [LibroController::class, 'index']);
Route::post('/libros', [LibroController::class, 'store']);