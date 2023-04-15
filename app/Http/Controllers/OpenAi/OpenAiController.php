<?php

namespace App\Http\Controllers\OpenAi;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class OpenAiController extends Controller
{

    public function send__message(Request $request)
    {
        dd($request);
        $chat_id = $request->input('chat_id');
        $msg = $request->input('msg');
        $message = Message::create(['chat_id' => $chat_id, 'message' => $msg]);

        $data = [
            "id" => $message->id
        ];

        return json_encode($data);
    }

    public function event__stream()
    {
        $ROLE = "role";
        $CONTENT = "content";
        $USER = "user";
        $SYS = "system";
        $ASSISTANT = "assistant";

        $open_ai_key = "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";
        $open_ai = new OpenAi($open_ai_key);

        $chat_history_id = $_GET['chat_history_id'];
        $id = $_GET['id'];

// Retrieve the data in ascending order by the id column
        $results = Message::where('chat_id', $chat_history_id)->order_by('id', 'desc')->get();
        $history[] = [$ROLE => $SYS, "content" => "You are a helpful assistant."];
        foreach ($results as $result) {
            if ($result->is_bot) {
                $history[] = [$ROLE => $USER, "content" => $result->message];
            } else {
                $history[] = [$ROLE => $ASSISTANT, "content" => $result->message];
            }
        }
// Prepare a SELECT statement to retrieve the 'human' field of the row with ID 6
        $msg = Message::where('chat_id', $id)->get()->message;

        $history[] = [$ROLE => $USER, "content" => $msg];

        $opts = [
            'model' => 'gpt-3.5-turbo',
            'messages' => $history,
            'temperature' => 1.0,
            'max_tokens' => 100,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
            'stream' => true
        ];

        header('Content-type: text/event-stream');
        header('Cache-Control: no-cache');
        $txt = "";
        Message::Create(['message' => $txt, 'chat_id' => $chat_history_id, 'is_bot' => true]);
        $complete = $open_ai->chat($opts, function ($curl_info, $data) use (&$txt) {
            if ($obj = json_decode($data) and $obj->error->message != "") {
                error_log(json_encode($obj->error->message));
            } else {
                return $data;
                $clean = str_replace("data: ", "", $data);
                $arr = json_decode($clean, true);
                if ($data != "data: [DONE]\n\n" and isset($arr["choices"][0]["delta"]["content"])) {
                    $txt .= $arr["choices"][0]["delta"]["content"];
                }
            }
            ob_flush();
            flush();
            return PHP_EOL;
        });

    }
}
