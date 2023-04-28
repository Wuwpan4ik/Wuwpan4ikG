<?php

namespace App\Http\Controllers\Prompt;

use App\Http\Controllers\Controller;
use App\Http\Requests\Prompt\StoreRequest;
use App\Http\Requests\Prompt\UpdateRequest;
use App\Models\Prompt;
use App\Models\PromptFolder;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PromptController extends Controller
{
    public function index()
    {
        if ($prompt = PromptFolder::first()) return redirect()->route('prompts.show', $prompt->id);
        $prompt = PromptFolder::create([
            'user_id' => Auth::id()
        ]);

        return redirect()->route('prompts.show', $prompt->id);
    }

    public function show($PromptFolder)
    {
        $folder = PromptFolder::where('id', $PromptFolder)->first();
        $main_prompts = PromptFolder::where('is_main', 1)->get();
        $prompts_folder = PromptFolder::where('user_id', Auth::id())->get();
        $prompts = Prompt::where('folder_id', (int)$PromptFolder)->get();
        $prompts_id = (int)$PromptFolder;
        return view('Prompts.library', compact('main_prompts', 'folder',  'prompts', 'prompts_folder', 'prompts_id'));
    }

    public function showMain($PromptFolder)
    {
        $folder = PromptFolder::where('id', $PromptFolder)->first();
        $folder_id = $PromptFolder;
        $prompts = Prompt::where('folder_id', $folder_id)->get();
        $prompts_id = (int)$PromptFolder;
        return view('components.library_prompts.main', compact('folder_id', 'folder', 'prompts_id', 'prompts'));
    }

    public function showAddForm($prompts_id)
    {
        return view('components.add_formPrompt', compact('prompts_id'));
    }

    public function store(StoreRequest $request)
    {
//        $data = $request->validated();
        Prompt::create([
            'user_id' => Auth::id(),
            'folder_id' => $request->folder_id
        ]);



    }

    public function update(UpdateRequest $request, PromptFolder $promptFolder)
    {

    }

    public function storeFolder()
    {
        $folder = PromptFolder::create([
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('prompts.show', $folder->id);
    }

    public function destroyFolder(PromptFolder $promptFolder)
    {
        $promptFolder->delete();

        return redirect()->route('prompts.index');
    }
}
