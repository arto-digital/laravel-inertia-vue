<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateInertiaFile extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:inertia-file {filename} {foldername}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new Vue Inertia page';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = $this->argument('filename');
        $foldername = $this->argument('foldername');

        $path = base_path('resources/js/' . $foldername . '/' . $filename . '.vue');

        if (!File::exists(base_path('resources/js/' . $foldername . '/'))) {
            File::makeDirectory(base_path('resources/js/' . $foldername . '/'), 0755, true);
        }

        File::put($path, '');

        $this->info("File '{$foldername}'/'{$filename}' has been created");
    }
}
