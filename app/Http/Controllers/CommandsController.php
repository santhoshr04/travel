<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class CommandsController extends Controller
{
    /**
     * Display the list of commands
     */
    public function list_commands()
    {
        $commands_list = config('artisan-commands.commands');

        return view('frontend.command.index', compact('commands_list'));
    }

    /**
     * Execute an Artisan command
     */
    public function execute_command(Request $request)
    {
        try {
            $command_to_run = $request->command;
            $commands_list = config('artisan-commands.commands');

            // Validate if the command exists
            if (!in_array($command_to_run, Arr::flatten($commands_list))) {
                throw new Exception('Invalid command requested');
            }

            // Execute the command
            Artisan::call($command_to_run);
            $output = Artisan::output();

            Log::info("Command executed: $command_to_run");

            return response()->json([
                'code' => 200,
                'message' => 'Command executed successfully',
                'output' => $output,
            ]);
        } catch (\Exception $e) {
            Log::error("Command execution failed: " . $e->getMessage());

            return response()->json([
                'code' => 500,
                'message' => 'Error executing command',
                'error' => $e->getMessage(),
            ]);
        }
    }
}
