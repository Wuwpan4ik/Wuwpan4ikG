<?php

	namespace App\Http\Controllers\Folder;

	use App\Http\Controllers\Controller;
    use App\Http\Requests\Folder\StoreRequest;
    use App\Models\Folder;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class FolderController extends Controller
	{
        public function store(StoreRequest $request)
        {
            Folder::create([
                'user_id' => Auth::id()
            ]);

            return redirect('/');
        }
	}
