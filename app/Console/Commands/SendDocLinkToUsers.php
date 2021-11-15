<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\SendDocLinkNotification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendDocLinkToUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:send_doc_link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send doc link to user 1 day after registration.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // User::whereNotNull('email_verified_at')
        //     ->whereDate('created_at', now()->subDays(1))
        //     ->get()->each(function ($user) {
        //         $user->notify(new SendDocLinkNotification());
        //     });
        Log::info('Hi this is notification message...');
        new SendDocLinkNotification();
    }
}
