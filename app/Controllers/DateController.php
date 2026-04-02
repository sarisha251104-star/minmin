<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Middleware\Auth;
use App\Models\DateModel;
use App\Core\Session;

class DateController
{
    private DateModel $dates;

    public function __construct()
    {
        $this->dates = new DateModel();
    }

    public function index(): void
    {
        Auth::requireLogin();
        $dates = $this->dates->all();

        require APP_ROOT . '/app/Views/dates/index.php';
    }

    public function choose(array $params): void
    {
        Auth::requireLogin();

        $date = $this->dates->find((int)$params['id']);

        Session::set('tonight_date', $date);

        header('Location: /tonight');
        exit;
    }

    public function tonight(): void
    {
        $date = Session::get('tonight_date');

        require APP_ROOT . '/app/Views/dates/tonight.php';
    }
}
