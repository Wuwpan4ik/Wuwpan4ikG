<?php

	namespace App\Http\Controllers\Folder;

	use App\Http\Controllers\Controller;
    use App\Http\Requests\Folder\StoreRequest;
    use App\Http\Requests\Folder\UpdateRequest;
    use App\Models\Chat;
    use App\Models\Folder;
    use Barryvdh\Debugbar\Facades\Debugbar;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\App;
    use Illuminate\Support\Facades\Auth;

    class FolderController extends Controller
	{
        public function store(StoreRequest $request)
        {
            $chat_id = count(Folder::where('user_id', Auth::id())->withTrashed()->get()) + 1;
            $title = "Новая папка №";
            if (App::getLocale() == 'en') {
                $title = "New folder №";
            } else if (App::getLocale() == 'ua') {
                $title = "Нова папка №";
            }
            $folder = Folder::create([
                'title' => $title . $chat_id,
                'user_id' => Auth::id()
            ]);
            Debugbar::log($folder);
        }

        public function update(UpdateRequest $request, Folder $folder)
        {
            $data = $request->validated();
            $folder->update([
                "title" => "{$data['title']}"
            ]);
        }

        public function delete(Folder $folder)
        {
            $folder->delete();
        }
	}
