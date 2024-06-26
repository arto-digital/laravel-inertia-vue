<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;


class CreateInertiaCrud extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:inertia-crud {foldername}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Inertia CRUD Folder';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $foldername = $this->argument('foldername');

        $path = base_path('resources/js/Pages/' . $foldername);

        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        File::put($path . '/Index.vue', '');
        File::put($path . '/Create.vue', '');
        File::put($path . '/Edit.vue', '');

        $this->info("CRUD Folder '{$foldername}' has been created");
    }
}
