<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestBookRequest;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
class GuestBookController extends Controller
{

public function getGuestbook() {
    $content = Storage::get('messages.inc');
    $entries = [];

    if ($content) {
        $lines = explode(PHP_EOL, $content);
        foreach ($lines as $line) {
            $line = trim($line);
            if (!empty($line)) {
                $data = explode(';', $line);
                // Проверка, что в строке достаточно данных, чтобы избежать ошибок
                if (count($data) === 5) {
                    [$surname, $name, $fathername, $message, $createdAt] = $data;
                    $entries[] = compact('surname', 'name', 'fathername', 'message', 'createdAt');
                }
            }
        }
    }

    $maxPages = 10;

    // --- Логика пагинации ---
    $currentPage = LengthAwarePaginator::resolveCurrentPage(); // Получаем номер текущей страницы
    $entriesCollection = collect($entries); // Превращаем в коллекцию для удобства
    $perPage = ceil($entriesCollection->count()/$maxPages); // Количество записей на страницу
    
    // Вырезаем нужную часть массива для текущей страницы
    $currentItems = $entriesCollection->slice(($currentPage - 1) * $perPage, $perPage)->all();

    // Создаем объект пагинатора
    $paginatedEntries = new LengthAwarePaginator(
        $currentItems, 
        $entriesCollection->count(), 
        $perPage, 
        $currentPage, 
        ['path' => request()->url(), 'query' => request()->query()]
    );

    return view("static.GuestBook", ['entries' => $paginatedEntries]);
}


    public function submit(GuestBookRequest $request) {
        $data = [
            'surname'    => $request->surname,
            'name'       => $request->name,
            'fathername' => $request->fathername,
            'message'    => $request->message,
            'created_at' => now()->toDateTimeString(),
        ];

        $line = implode(';', $data); // если используете разделитель ;
        Storage::disk('local')->append('messages.inc', $line);

        return redirect()->route('guestbook');
    }
}
