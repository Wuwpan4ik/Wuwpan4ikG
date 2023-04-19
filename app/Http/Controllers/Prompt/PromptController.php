<?php

namespace App\Http\Controllers\Prompt;

use App\Http\Controllers\Controller;
use App\Models\Prompt;
use App\Models\PromptFolder;
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
        $main_prompts = PromptFolder::where('is_main', 1)->get();
        $prompts_folder = PromptFolder::where('user_id', Auth::id())->get();
        $prompts = Prompt::where('user_id', Auth::id())->where('folder_id', (int)$PromptFolder)->get();
        $prompts_id = (int)$PromptFolder;
        return view('Prompts.library', compact('main_prompts',  'prompts', 'prompts_folder', 'prompts_id'));
    }

    public function showMain($PromptFolder)
    {
        $folder_id = $PromptFolder;
        $prompts = Prompt::where('folder_id', $folder_id)->get();
        $prompts_id = (int)$PromptFolder;
        return view('components.library_prompts.main', compact('folder_id', 'prompts_id', 'prompts'));
    }

    public function store(Request $request)
    {
        Prompt::create([
            'user_id' => Auth::id(),
            'folder_id' => $request->folder_id,
            'description' => $request->description
        ]);
    }

    public function storeFolder()
    {
        PromptFolder::create([
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('prompts.index');
    }

    public function destroyFolder(PromptFolder $promptFolder)
    {
        $promptFolder->delete();

        return redirect()->route('prompts.index');
    }
}
