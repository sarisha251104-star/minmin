use App\Controllers\DateController;

// Date routes
$router->get('/dates', [DateController::class, 'index']);
$router->post('/dates/{id}/choose', [DateController::class, 'choose']);
$router->get('/tonight', [DateController::class, 'tonight']);
