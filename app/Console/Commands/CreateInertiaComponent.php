<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;


class CreateInertiaComponent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:inertia-component {filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Inertia COmponent';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = $this->argument('filename');

        $path = base_path('resources/js/Components/' . $filename . '.vue');

        if (!File::exists(base_path('resources/js/Components/'))) {
            File::makeDirectory(base_path('resources/js/Components/'), 0755, true);
        }

        File::put($path, '');

        $this->info("Component '{$filename}' has been created");
    }
}
