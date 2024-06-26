<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateInertiaPage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:inertia-page {filename}';

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

        $path = base_path('resources/js/Pages/' . $filename . '.vue');

        if (!File::exists(base_path('resources/js/Pages/'))) {
            File::makeDirectory(base_path('resources/js/Pages/'), 0755, true);
        }

        File::put($path, '');

        $this->info("Page '{$filename}' has been created");
    }
}
